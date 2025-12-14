<?php

namespace Tests\Feature;

use App\Models\Sync;
use App\Models\User;
use App\Services\RMapi;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchFilesTest extends TestCase
{
    use RefreshDatabase;

    private User $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }

    public function test_search_requires_authentication()
    {
        $response = $this->postJson('/api/sync/search', [
            'starred' => true,
        ]);

        $response->assertStatus(401);
    }

    public function test_search_requires_at_least_one_filter()
    {
        $this->actingAs($this->user, 'api');

        $response = $this->postJson('/api/sync/search', []);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['filters']);
    }

    public function test_search_with_empty_values_requires_at_least_one_filter()
    {
        $this->actingAs($this->user, 'api');

        $response = $this->postJson('/api/sync/search', [
            'query' => null,
            'starred' => null,
            'tags' => [],
        ]);

        $response->assertStatus(422);
    }

    public function test_search_by_starred_only()
    {
        $this->actingAs($this->user, 'api');

        $mockRmapi = $this->createMock(RMapi::class);
        $mockRmapi->expects($this->once())
            ->method('find')
            ->with(null, true, [])
            ->willReturn(collect([
                [
                    'type' => 'f',
                    'name' => 'Starred Document',
                    'path' => '/Starred Document',
                    'id' => 'doc-123',
                    'version' => 1,
                    'modifiedClient' => '2024-01-15T10:30:00Z',
                    'currentPage' => 0,
                    'tags' => [],
                    'starred' => true,
                ],
            ]));

        $this->app->instance(RMapi::class, $mockRmapi);

        $response = $this->postJson('/api/sync/search', [
            'starred' => true,
        ]);

        $response->assertStatus(200);
        $response->assertJsonCount(1, 'items');
        $response->assertJsonPath('items.0.name', 'Starred Document');
        $response->assertJsonPath('items.0.starred', true);
    }

    public function test_search_by_query_only()
    {
        $this->actingAs($this->user, 'api');

        $mockRmapi = $this->createMock(RMapi::class);
        $mockRmapi->expects($this->once())
            ->method('find')
            ->with('.*report.*', null, [])
            ->willReturn(collect([
                [
                    'type' => 'f',
                    'name' => 'Q3 Report',
                    'path' => '/Work/Q3 Report',
                    'id' => 'doc-456',
                    'version' => 3,
                    'modifiedClient' => '2024-03-20T14:00:00Z',
                    'currentPage' => 5,
                    'tags' => ['Work'],
                    'starred' => false,
                ],
            ]));

        $this->app->instance(RMapi::class, $mockRmapi);

        $response = $this->postJson('/api/sync/search', [
            'query' => '.*report.*',
        ]);

        $response->assertStatus(200);
        $response->assertJsonCount(1, 'items');
        $response->assertJsonPath('items.0.name', 'Q3 Report');
    }

    public function test_search_by_tags_only()
    {
        $this->actingAs($this->user, 'api');

        $mockRmapi = $this->createMock(RMapi::class);
        $mockRmapi->expects($this->once())
            ->method('find')
            ->with(null, null, ['Work', 'Important'])
            ->willReturn(collect([
                [
                    'type' => 'f',
                    'name' => 'Project Plan',
                    'path' => '/Work/Project Plan',
                    'id' => 'doc-789',
                    'version' => 2,
                    'modifiedClient' => '2024-02-10T09:00:00Z',
                    'currentPage' => 0,
                    'tags' => ['Work', 'Important'],
                    'starred' => false,
                ],
            ]));

        $this->app->instance(RMapi::class, $mockRmapi);

        $response = $this->postJson('/api/sync/search', [
            'tags' => ['Work', 'Important'],
        ]);

        $response->assertStatus(200);
        $response->assertJsonCount(1, 'items');
        $response->assertJsonPath('items.0.tags', ['Work', 'Important']);
    }

    public function test_search_with_combined_filters()
    {
        $this->actingAs($this->user, 'api');

        $mockRmapi = $this->createMock(RMapi::class);
        $mockRmapi->expects($this->once())
            ->method('find')
            ->with('.*meeting.*', true, ['Work'])
            ->willReturn(collect([
                [
                    'type' => 'f',
                    'name' => 'Team Meeting Notes',
                    'path' => '/Work/Team Meeting Notes',
                    'id' => 'doc-abc',
                    'version' => 4,
                    'modifiedClient' => '2024-01-20T16:00:00Z',
                    'currentPage' => 2,
                    'tags' => ['Work'],
                    'starred' => true,
                ],
            ]));

        $this->app->instance(RMapi::class, $mockRmapi);

        $response = $this->postJson('/api/sync/search', [
            'query' => '.*meeting.*',
            'starred' => true,
            'tags' => ['Work'],
        ]);

        $response->assertStatus(200);
        $response->assertJsonCount(1, 'items');
    }

    public function test_search_results_include_sync_status()
    {
        $this->actingAs($this->user, 'api');

        $sync = Sync::factory()->completed()->create([
            'user_id' => $this->user->id,
            'filename' => '/Work/Synced Document',
            'sync_id' => 'sync-123',
        ]);

        $mockRmapi = $this->createMock(RMapi::class);
        $mockRmapi->expects($this->once())
            ->method('find')
            ->willReturn(collect([
                [
                    'type' => 'f',
                    'name' => 'Synced Document',
                    'path' => '/Work/Synced Document',
                    'id' => 'doc-synced',
                    'version' => 1,
                    'modifiedClient' => '2024-01-15T10:30:00Z',
                    'currentPage' => 0,
                    'tags' => ['Work'],
                    'starred' => true,
                ],
                [
                    'type' => 'f',
                    'name' => 'Unsynced Document',
                    'path' => '/Work/Unsynced Document',
                    'id' => 'doc-unsynced',
                    'version' => 1,
                    'modifiedClient' => '2024-01-15T10:30:00Z',
                    'currentPage' => 0,
                    'tags' => ['Work'],
                    'starred' => true,
                ],
            ]));

        $this->app->instance(RMapi::class, $mockRmapi);

        $response = $this->postJson('/api/sync/search', [
            'starred' => true,
        ]);

        $response->assertStatus(200);
        $response->assertJsonCount(2, 'items');

        $items = $response->json('items');
        $syncedItem = collect($items)->firstWhere('name', 'Synced Document');
        $unsyncedItem = collect($items)->firstWhere('name', 'Unsynced Document');

        $this->assertNotNull($syncedItem['sync']);
        $this->assertEquals($sync->id, $syncedItem['sync']['id']);
        $this->assertNull($unsyncedItem['sync']);
    }

    public function test_search_returns_empty_array_when_no_matches()
    {
        $this->actingAs($this->user, 'api');

        $mockRmapi = $this->createMock(RMapi::class);
        $mockRmapi->expects($this->once())
            ->method('find')
            ->willReturn(collect([]));

        $this->app->instance(RMapi::class, $mockRmapi);

        $response = $this->postJson('/api/sync/search', [
            'query' => 'nonexistent-file-pattern',
        ]);

        $response->assertStatus(200);
        $response->assertJsonCount(0, 'items');
    }

    public function test_search_validates_tags_are_strings()
    {
        $this->actingAs($this->user, 'api');

        $response = $this->postJson('/api/sync/search', [
            'tags' => [123, true],
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['tags.0', 'tags.1']);
    }

    public function test_search_validates_query_is_string()
    {
        $this->actingAs($this->user, 'api');

        $response = $this->postJson('/api/sync/search', [
            'query' => 123,
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['query']);
    }

    public function test_search_validates_starred_is_boolean()
    {
        $this->actingAs($this->user, 'api');

        $response = $this->postJson('/api/sync/search', [
            'starred' => 'yes',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['starred']);
    }
}
