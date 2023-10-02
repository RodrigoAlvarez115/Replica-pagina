<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationsController extends Controller
{

    public function index()
    {
        $publications = Publication::inRandomOrder()->limit(7)->get();
        return view('index', compact('publications'));
    }

    public function show(Publication $publication)
    {
        return view('show', compact('publication'));
    }

    public function notices()
    {
        $notices = Publication::where('type', 'notice')->get();
        return view('notices', compact('notices'));
    }
    public function guides()
    {
        $guides = Publication::where('type', 'guide')->get();
        return view('guides', compact('guides'));
    }
    public function reviews()
    {
        $reviews = Publication::where('type', 'review')->get();
        return view('reviews', compact('reviews'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Publication::where('title', 'LIKE', "%$query%")
            ->orWhere('subtitle', 'LIKE', "%$query%")
            ->get();
        return view('searchs',compact('results'));
    }

}
