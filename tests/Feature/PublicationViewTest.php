<?php

namespace Tests\Feature;

use App\Models\Publication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PublicationViewTest extends TestCase
{
   
    use RefreshDatabase;
    

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
        $this->seed();
        $response = $this->get('/notices');
        $response->assertStatus(200); 
        $response->assertViewHas('notices');
        $notices = $response->original->getData()['notices'];
        $this->assertCount(17, $notices);
        $this->assertEquals($notices[0]->title, $notices[0]->title);
    }

    public function test_publication_view_guides()
    {
        $this->seed();
        $response = $this->get('/guides');
        $response->assertStatus(200);
        $response->assertViewHas('guides');
        $guides = $response->original->getData()['guides'];
        $this->assertCount(10,$guides);
        $this->assertEquals($guides[0]->title, $guides[0]->title);
    }

    public function test_publication_view_review()
    {
        $this->seed();
        $response = $this->get('/reviews');
        $response->assertStatus(200);
        $response->assertViewHas('reviews');
        $reviews = $response->original->getData()['reviews'];
        $this->assertCount(12,$reviews);
        $this->assertEquals($reviews[0]->title, $reviews[0]->title);
    }

    public function test_publication_view_search()
    {
        $response = $this->get('/search');
        $response->assertStatus(200);
        $response->assertViewHas('results');
    }
}
