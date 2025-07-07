<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * These tests are meant to verify whether the testing framework and and project structure themselves are set up correctly
 * If any of these fail, there's something wrong with your env, database, phpunit.xml, config or similar.
 *
 * If something goes wrong, check:
 * - phpunit.xml
 * - php artisan config:clear
 * - .env
 */
class BasicTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_loads()
    {
        $this->assertTrue(true);
        $this->get('/')->assertStatus(200);
    }
}
