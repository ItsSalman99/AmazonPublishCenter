<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $regions = Region::all();

        return view('frontend.index', compact('regions'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        $regions = Region::all();

        return view('frontend.contact', compact('regions'));
    }

    public function bookWriting()
    {
        return view('frontend.services.book_writing');
    }

    public function bookPublishing()
    {
        return view('frontend.services.book-publishing');
    }

    public function bookMarketing()
    {
        return view('frontend.services.book-marketing');
    }

    public function audioBooks()
    {
        return view('frontend.services.audio_books');
    }

}
