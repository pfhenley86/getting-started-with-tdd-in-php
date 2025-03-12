<?php

namespace Tests\Feature;

use App\Enums\PodcastStatus;
use App\Models\Podcast;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PublishPodcastTest extends TestCase
{
    use RefreshDatabase;
    /** Test */
    public function test_published_podcast()
    {
        // Arrange
        $podcast = Podcast::factory()->create();

        // Act
        $this->post(route('podcasts.publish', $podcast));

        // Assert
        $this->assertDatabaseHas(Podcast::class, [
            'id' => $podcast->id, 'status' => PodcastStatus::PUBLISHED
        ]);
    }

}
