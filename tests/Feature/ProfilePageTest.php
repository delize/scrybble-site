<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfilePageTest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_visit_their_profile_page()
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        $response = $this->actingAs($user)
            ->get('/profile');

        // Assert the response is successful
        $response->assertStatus(200);

        // Assert we can see the user's information on the page
//        $response->assertSee($user->name);
//        $response->assertSee($user->email);
    }

    public function test_unauthenticated_user_cannot_access_profile_page()
    {
        $this->get('/profile')->assertRedirect('/login');
    }
}
