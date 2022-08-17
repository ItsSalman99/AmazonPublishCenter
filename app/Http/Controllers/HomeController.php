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

    public function bookFormating()
    {
        return view('frontend.services.book_formating');
    }

    public function videoBookTrailers()
    {
        return view('frontend.services.video_book_trailers');
    }

    public function socialMediaMarketing()
    {
        return view('frontend.services.social_media_marketing');
    }

    public function interactiveEbooks()
    {
        return view('frontend.services.interactive-ebooks');
    }

    public function creativeWriting()
    {
        return view('frontend.services.creative-writing');
    }

    public function pressReleaseWriting()
    {
        return view('frontend.services.press-release-writing');
    }

    public function editingProofReading()
    {
        return view('frontend.services.editing-proofreading');
    }

    public function bookCoverDesign()
    {
        return view('frontend.services.book-cover');
    }

    public function amazonMarketing()
    {
        return view('frontend.services.amazon-marketing');
    }

    public function seoWriting()
    {
        return view('frontend.services.seo-writing');
    }

    public function audioBooks()
    {
        return view('frontend.services.audio_books');
    }

}

