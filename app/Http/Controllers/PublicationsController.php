<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationsController extends Controller
{

    public function index()
    {
        $asides = Publication::inRandomOrder()->limit(3)->get();
        $publications = Publication::inRandomOrder()->limit(7)->get();
        return view('index', compact('publications', 'asides'));
    }

    public function show(Publication $publication)
    {
        $asides = Publication::inRandomOrder()->limit(3)->get();
        return view('show', compact('publication', 'asides'));
    }

    public function notices()
    {
        $notices = Publication::where('type', 'notice')->get();
        $asides = Publication::inRandomOrder()->limit(3)->get();
        return view('notices', compact('notices', 'asides'));
    }
    public function guides()
    {
        $guides = Publication::where('type', 'guide')->get();
        $asides = Publication::inRandomOrder()->limit(3)->get();
        return view('guides', compact('guides', 'asides'));
    }
    public function reviews()
    {
        $reviews = Publication::where('type', 'review')->get();
        $asides = Publication::inRandomOrder()->limit(3)->get();
        return view('reviews', compact('reviews', 'asides'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $asides = Publication::inRandomOrder()->limit(3)->get();
        $results = Publication::where('title', 'LIKE', "%$query%")
            ->orWhere('subtitle', 'LIKE', "%$query%")
            ->get();

        return view('searchs', compact('results', 'asides'));
    }

}
