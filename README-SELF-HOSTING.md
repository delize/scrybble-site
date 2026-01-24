# Scrybble Self-Hosting Guide

Complete guide for self-hosting Scrybble - the reMarkable to Obsidian sync server.

## Table of Contents

- [Overview](#overview)
- [Architecture](#architecture)
- [Prerequisites](#prerequisites)
- [Quick Start](#quick-start)
- [Detailed Setup](#detailed-setup)
- [Obsidian Plugin Configuration](#obsidian-plugin-configuration)
- [Using rmfakecloud (Optional)](#using-rmfakecloud-optional)
- [File Storage](#file-storage)
- [Troubleshooting](#troubleshooting)
- [Maintenance](#maintenance)

## Overview

Scrybble allows you to sync your reMarkable tablet annotations and notes to Obsidian. When self-hosted, you have full control over your data and don't need a Gumroad license.

### Components

| Service | Description | Purpose |
|---------|-------------|---------|
| **scrybble** | Laravel web application | Main API and web interface |
| **scrybble-horizon** | Laravel Horizon | Background job processing (syncs) |
| **scrybble-db** | MySQL 9.x | Database storage |
| **scrybble-redis** | Redis | Queue and cache |
| **scrybble-remarks** | Remarks processor | Converts reMarkable files to PDF/markdown |

## Architecture

```
                    ┌─────────────────────┐
                    │   Reverse Proxy     │
                    │ (Traefik/nginx/etc) │
                    └──────────┬──────────┘
                               │
                    ┌──────────▼──────────┐
                    │      scrybble       │
                    │   (Laravel App)     │
                    │      Port 80        │
                    └──────────┬──────────┘
                               │
        ┌──────────────────────┼──────────────────────┐
        │                      │                      │
        ▼                      ▼                      ▼
┌───────────────┐    ┌─────────────────┐    ┌─────────────────┐
│  scrybble-db  │    │ scrybble-redis  │    │scrybble-horizon │
│   (MySQL)     │    │    (Redis)      │    │  (Job Worker)   │
└───────────────┘    └─────────────────┘    └────────┬────────┘
                                                     │
                                            ┌────────▼────────┐
                                            │scrybble-remarks │
                                            │ (PDF Generator) │
                                            └─────────────────┘
```

## Prerequisites

- **Docker** and **Docker Compose** v2+
- A domain name (recommended) or localhost access
- Basic understanding of Docker and command line

### System Requirements

| Resource | Minimum | Recommended |
|----------|---------|-------------|
| RAM | 1 GB | 2 GB |
| Storage | 5 GB | 20 GB+ |
| CPU | 1 core | 2 cores |

## Quick Start

```bash
# 1. Download docker-compose file
curl -O https://raw.githubusercontent.com/Scrybbling-together/scrybble-site/master/docker-compose.selfhosted.yml

# 2. Create environment file
cp .env.example .env
# Edit .env with your settings

# 3. Generate APP_KEY
docker run --rm laauurraaa/scrybble-server:latest php artisan key:generate --show
# Add output to .env as APP_KEY=base64:...

# 4. Start services
docker compose -f docker-compose.selfhosted.yml up -d

# 5. Run database migrations (CRITICAL!)
docker compose -f docker-compose.selfhosted.yml exec app php /var/www/html/artisan migrate --force

# 6. Set up OAuth
docker compose -f docker-compose.selfhosted.yml exec app php /var/www/html/artisan passport:install --force
docker compose -f docker-compose.selfhosted.yml exec app php /var/www/html/artisan passport:client --device
# Save the Client ID and Secret!

# 7. Create admin account
docker compose -f docker-compose.selfhosted.yml exec -it app php /var/www/html/artisan app:setup-admin-account
```

## Detailed Setup

### Step 1: Create Directory Structure

```bash
# Set your base path (adjust as needed)
BASE_PATH=/path/to/scrybble

# Create all required directories
sudo mkdir -p ${BASE_PATH}/storage/{app,framework/{cache,sessions,views},logs,efs}
sudo mkdir -p ${BASE_PATH}/bootstrap-cache
sudo mkdir -p ${BASE_PATH}/database
sudo mkdir -p ${BASE_PATH}/redis

# Set correct ownership (www-data = UID 33)
sudo chown -R 33:33 ${BASE_PATH}/storage ${BASE_PATH}/bootstrap-cache

# Redis needs different ownership (redis = UID 999)
sudo chown -R 999:999 ${BASE_PATH}/redis
```

### Step 2: Create Environment File

Create a `.env` file with the following configuration:

```bash
# Application
APP_NAME=Scrybble
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:YOUR_GENERATED_KEY_HERE
APP_URL=https://scrybble.yourdomain.com

# Database
DB_CONNECTION=mysql
DB_HOST=db                    # Use container name from docker-compose
DB_PORT=3306
DB_DATABASE=scrybble
DB_USERNAME=scrybble
DB_PASSWORD=your_secure_password_here

# Redis
REDIS_HOST=redis              # Use container name from docker-compose
REDIS_PASSWORD=null
REDIS_PORT=6379

# Queue & Cache
QUEUE_CONNECTION=redis
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120

# CRITICAL: Enable self-hosted mode
SCRYBBLE_DEPLOYMENT_ENVIRONMENT=self-hosted

# Logging
LOG_CHANNEL=stack
LOG_LEVEL=error

# Disable telemetry (optional)
SENTRY_LARAVEL_DSN=
SENTRY_TRACES_SAMPLE_RATE=0
```

### Step 3: Generate Application Key

```bash
# Generate a new key
docker run --rm laauurraaa/scrybble-server:latest php artisan key:generate --show

# Output will be like: base64:abc123...
# Add this to your .env file as APP_KEY
```

### Step 4: Start Services

```bash
docker compose -f docker-compose.selfhosted.yml up -d
```

Wait for all services to be healthy:
```bash
docker compose -f docker-compose.selfhosted.yml ps
```

### Step 5: Run Database Migrations

**This step is critical and often missed!**

```bash
docker compose -f docker-compose.selfhosted.yml exec app \
  php /var/www/html/artisan migrate --force
```

### Step 6: Set Up OAuth (Passport)

```bash
# Install Passport (creates encryption keys)
docker compose -f docker-compose.selfhosted.yml exec app \
  php /var/www/html/artisan passport:install --force

# Create device client for Obsidian plugin
docker compose -f docker-compose.selfhosted.yml exec app \
  php /var/www/html/artisan passport:client --device
```

**Important:** Save the Client ID and Client Secret output. You'll need these for the Obsidian plugin.

Example output:
```
Device client created successfully.
Client ID: 1
Client Secret: abc123xyz...
```

### Step 7: Create Admin Account

```bash
docker compose -f docker-compose.selfhosted.yml exec -it app \
  php /var/www/html/artisan app:setup-admin-account
```

You'll be prompted for:
- Username
- Password
- Email

These credentials are used for:
- Logging into the Scrybble web dashboard
- Authenticating the Obsidian plugin

## Obsidian Plugin Configuration

1. Install the **Scrybble** plugin from Obsidian Community Plugins
2. Enable the plugin and go to **Settings → Scrybble**
3. Enable the **"Self hosted"** toggle
4. Configure:
   - **Endpoint:** `https://scrybble.yourdomain.com` (or `http://localhost` for local)
   - **Client ID:** From passport:client output
   - **Client Secret:** From passport:client output
5. Click **Login** and authenticate with your admin credentials
6. When prompted for a **one-time code**, get one from https://my.remarkable.com/device/browser/connect

### Getting a One-Time Code

1. Go to https://my.remarkable.com/device/browser/connect
2. Log in with your reMarkable account
3. Click "Connect" to generate a code
4. Enter the code in Obsidian within 5 minutes (codes expire quickly!)

## Using rmfakecloud (Optional)

If you want to use a self-hosted reMarkable cloud instead of the official one:

### 1. Add rmfakecloud to docker-compose

```yaml
rmfakecloud:
  image: ddvk/rmfakecloud:latest
  restart: unless-stopped
  environment:
    - JWT_SECRET_KEY=your_jwt_secret_here
    - STORAGE_URL=https://remarkable.yourdomain.com
    - PORT=3000
  volumes:
    - ./rmfakecloud-data:/data
  networks:
    - scrybble-network
```

### 2. Update Scrybble Configuration

Add to your `.env`:
```bash
RMFAKECLOUD_URL=http://rmfakecloud:3000
```

### 3. Configure reMarkable Tablet

SSH into your tablet and edit `/home/root/.config/remarkable/xochitl.conf`:
```ini
[General]
SERVER=https://remarkable.yourdomain.com
```

Restart the tablet or run:
```bash
systemctl restart xochitl
```

## File Storage

### Directory Structure

```
${BASE_PATH}/
├── storage/
│   ├── app/                  # Application files
│   ├── efs/                  # User sync data
│   │   └── user-{ID}/
│   │       ├── .rmapi-auth   # reMarkable auth token (KEEP SAFE!)
│   │       ├── jobs/         # Sync job history
│   │       ├── processed/    # Generated PDFs/markdown
│   │       ├── input_documents/  # Original reMarkable files
│   │       └── rmapi/
│   │           └── tree.cache    # File tree cache
│   ├── framework/
│   │   ├── cache/
│   │   ├── sessions/
│   │   └── views/
│   └── logs/                 # Laravel logs
├── bootstrap-cache/          # Laravel bootstrap cache
├── database/                 # MySQL data
└── redis/                    # Redis data
```

### Storage Cleanup

To save disk space, you can periodically clean:
```bash
# Remove old job history (keeps last 7 days)
find ${BASE_PATH}/storage/efs/*/jobs -mtime +7 -delete

# Remove old processed files (keeps last 30 days)
find ${BASE_PATH}/storage/efs/*/processed -mtime +30 -delete
```

**Never delete:**
- `.rmapi-auth` - Contains your reMarkable authentication
- `rmapi/tree.cache` - Safe to delete, will regenerate

## Troubleshooting

### "This command can only be run in a self-hosted environment"

Ensure `SCRYBBLE_DEPLOYMENT_ENVIRONMENT=self-hosted` is set in:
- Your `.env` file
- Docker compose environment section

Note: The value must be exactly `self-hosted` (with hyphen).

### Permission Denied Errors

```bash
# Fix storage permissions
sudo chown -R 33:33 ${BASE_PATH}/storage ${BASE_PATH}/bootstrap-cache

# Fix Redis permissions
sudo chown -R 999:999 ${BASE_PATH}/redis
```

### Database Connection Errors

```bash
# Check if MySQL is healthy
docker compose -f docker-compose.selfhosted.yml exec db \
  mysqladmin ping -h localhost -u root -p

# Check logs
docker compose -f docker-compose.selfhosted.yml logs db
```

### reMarkable One-Time Code Rejected (500 Error)

One-time codes expire in approximately 5 minutes. Generate a fresh code and use immediately.

### "RMapi get command failed for an unknown reason"

Usually a DNS or network issue. Verify the horizon container can reach the internet:

```bash
docker compose -f docker-compose.selfhosted.yml exec horizon \
  curl -I https://internal.cloud.remarkable.com
```

If this fails, check that your container has proper DNS resolution and internet access.

### "Could not resolve host: remarks"

The remarks container needs a network alias. Add to docker-compose:

```yaml
remarks:
  networks:
    scrybble-network:
      aliases:
        - remarks
```

### Sync Stuck at "Requesting sync" or "Processing file"

Check the sync logs:
```bash
docker compose -f docker-compose.selfhosted.yml exec db \
  mysql -u scrybble -p scrybble \
  -e "SELECT * FROM sync_logs ORDER BY id DESC LIMIT 10;"
```

Check Horizon logs:
```bash
docker compose -f docker-compose.selfhosted.yml logs horizon
```

### remarks Container Crashes

The remarks container (Nix-based) requires a writable `/tmp`:

```yaml
remarks:
  tmpfs:
    - /tmp:mode=1777,size=200m
```

### Redis MISCONF Errors

```bash
sudo chown -R 999:999 ${BASE_PATH}/redis
```

### Check All Service Health

```bash
docker compose -f docker-compose.selfhosted.yml ps
docker compose -f docker-compose.selfhosted.yml logs scrybble
docker compose -f docker-compose.selfhosted.yml logs horizon
docker compose -f docker-compose.selfhosted.yml logs db
docker compose -f docker-compose.selfhosted.yml logs remarks
```

## Maintenance

### Reset Admin Password

```bash
docker compose -f docker-compose.selfhosted.yml exec app \
  php /var/www/html/artisan tinker \
  --execute="\$u = \App\Models\User::find(1); \$u->password = bcrypt('NEW_PASSWORD'); \$u->save();"
```

### View Client Secret

Visit `https://scrybble.yourdomain.com/self-host-setup` while logged in as admin.

Note: The secret is only shown during initial creation. If lost, create a new device client:
```bash
docker compose -f docker-compose.selfhosted.yml exec app \
  php /var/www/html/artisan passport:client --device
```

### Database Backup

```bash
docker compose -f docker-compose.selfhosted.yml exec db \
  mysqldump -u root -p scrybble > backup.sql
```

### Reset Everything (Nuclear Option)

**Warning: This deletes all data!**

```bash
# Stop and remove containers
docker compose -f docker-compose.selfhosted.yml down

# Remove database
sudo rm -rf ${BASE_PATH}/database

# Restart
docker compose -f docker-compose.selfhosted.yml up -d

# Re-run setup
docker compose -f docker-compose.selfhosted.yml exec app \
  php /var/www/html/artisan migrate --force
docker compose -f docker-compose.selfhosted.yml exec app \
  php /var/www/html/artisan passport:install --force
docker compose -f docker-compose.selfhosted.yml exec app \
  php /var/www/html/artisan passport:client --device
docker compose -f docker-compose.selfhosted.yml exec -it app \
  php /var/www/html/artisan app:setup-admin-account
```

### Updating Scrybble

```bash
# Pull latest images
docker compose -f docker-compose.selfhosted.yml pull

# Restart with new images
docker compose -f docker-compose.selfhosted.yml up -d

# Run any new migrations
docker compose -f docker-compose.selfhosted.yml exec app \
  php /var/www/html/artisan migrate --force

# Clear caches
docker compose -f docker-compose.selfhosted.yml exec app \
  php /var/www/html/artisan optimize:clear
docker compose -f docker-compose.selfhosted.yml exec app \
  php /var/www/html/artisan optimize
```

## URLs

| Page | URL |
|------|-----|
| Dashboard | `https://scrybble.yourdomain.com` |
| Admin Panel | `https://scrybble.yourdomain.com/admin` |
| Self-Host Info | `https://scrybble.yourdomain.com/self-host-setup` |
| Log Viewer | `https://scrybble.yourdomain.com/admin` → Log Viewer |

## Getting Help

- [GitHub Issues](https://github.com/Scrybbling-together/scrybble-site/issues)
- [Scrybble Obsidian Plugin](https://github.com/Scrybbling-together/scrybble)

## Security Notes

- Keep your `.rmapi-auth` files secure - they provide access to your reMarkable account
- Use strong passwords for database and admin account
- Consider using a reverse proxy with SSL (Traefik, nginx, Caddy)
- The admin account (ID=1) has elevated privileges
