<?php

namespace Tests\Feature;

use App\Models\Publication;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PublicationViewTest extends TestCase
{
    use DatabaseTransactions;

    public function test_publication_view_index()
    {
        $this->seed();
        $response = $this->get('/');
        $response->assertStatus(200); 
        $response->assertViewHas('publications');
        $publications = $response->original->getData()['publications'];
        $this->assertCount(7, $publications);
        $this->assertEquals($publications[0]->title, $publications[0]->title);
    }

    public function test_publication_view_notices()
    {
        $response = $this->get('/notices');
        $response->assertStatus(200); 
        $response->assertViewHas('notices');
        $notices = $response->original->getData()['notices'];
        $this->assertCount(17, $notices);
        $this->assertEquals($notices[0]->title, $notices[0]->title);
    }
}
