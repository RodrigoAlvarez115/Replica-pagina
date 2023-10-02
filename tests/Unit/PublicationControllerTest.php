<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\PublicationsController;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicationControllerTest extends TestCase
{
    public function test_index()
    {
        $controller = new PublicationsController;
        $request = Request::create('/');
        $response = $controller->index($request);
        $this->assertInstanceOf(View::class, $response);
        $this->assertEquals('index', $response->name());
        $this->assertTrue($response->getData()['publications']->count() > 0);
    }
}
