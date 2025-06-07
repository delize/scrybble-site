<!DOCTYPE html>
<html>
<head>
    <title>Self-Host Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .info-block {
            margin: 20px 0;
        }

        .copy-field {
            width: 100%;
            padding: 8px;
            font-family: monospace;
            border: 1px solid #ccc;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>Scrybble Self-Host Information</h1>

<p>Copy and paste the following two fields into Obsidian -> settings -> Scrybble -> self hosted</p>

<div class="info-block">
    <label for="client-id">Client ID:</label>
    <input type="text" id="client-id" class="copy-field" value="{{ $id }}" readonly onclick="this.select()">
</div>

<div class="info-block">
    <label for="client-secret">Client Secret:</label>
    <p id="client-secret">The client secret is inaccessible after setup. Did you save it when you ran <code>php artisan
            passport:client --device</code>?</p>

    <p>If not, you need to set-up the client again. Refer to the "set-up" section of <a href="https://github.com/scrybbling-together/scrybble-site.git">the readme</a> for instructions.</p>
</div>
</body>
</html>
