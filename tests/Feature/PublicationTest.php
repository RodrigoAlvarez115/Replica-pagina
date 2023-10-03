<?php

namespace Tests\Feature;

use App\Models\Publication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicationTest extends TestCase
{
    
    use RefreshDatabase;

    public function test_create_publication()
    {
        $publication = Publication::create([
            'title' => 'Título de prueba',
            'subtitle' => 'Subtítulo de prueba',
            'image' => 'ruta/de/imagen.jpg',
            'content' => 'Contenido de prueba',
            'type' => 'noticia',
        ]);

        $this->assertEquals('Título de prueba', $publication->title);
        $this->assertEquals('Subtítulo de prueba', $publication->subtitle);
        $this->assertEquals('ruta/de/imagen.jpg', $publication->image);
        $this->assertEquals('Contenido de prueba', $publication->content);
        $this->assertEquals('noticia', $publication->type);

        $response = $this->get('/publication/1');
        $response->assertStatus(200);
    }

    public function test_routes_exists()
    {
        $routes = [
            '/',
            '/notices',
            '/guides',
            '/reviews',
            '/search'
        ];
        foreach($routes as $route){
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }
    
}