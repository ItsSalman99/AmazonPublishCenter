<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $regions;

    public function __construct() {
        $this->regions = Region::all();
    }
    
    public function index()
    {

        return view('frontend.index')->with([
            'regions' => $this->regions
        ]);
    }

    public function about()
    {
        return view('frontend.about')->with([
            'regions' => $this->regions
        ]);
    }

    public function contact()
    {
        $regions = Region::all();

        return view('frontend.contact')->with([
            'regions' => $this->regions
        ]);
    }

    public function bookWriting()
    {
        return view('frontend.services.book_writing')->with([
            'regions' => $this->regions
        ]);
    }

    public function bookPublishing()
    {
        return view('frontend.services.book-publishing')->with([
            'regions' => $this->regions
        ]);
    }

    public function bookMarketing()
    {
        return view('frontend.services.book-marketing')->with([
            'regions' => $this->regions
        ]);
    }

    public function bookFormating()
    {
        return view('frontend.services.book_formating')->with([
            'regions' => $this->regions
        ]);
    }

    public function videoBookTrailers()
    {
        return view('frontend.services.video_book_trailers')->with([
            'regions' => $this->regions
        ]);
    }

    public function socialMediaMarketing()
    {
        return view('frontend.services.social_media_marketing')->with([
            'regions' => $this->regions
        ]);
    }

    public function interactiveEbooks()
    {
        return view('frontend.services.interactive-ebooks')->with([
            'regions' => $this->regions
        ]);
    }

    public function creativeWriting()
    {
        return view('frontend.services.creative-writing')->with([
            'regions' => $this->regions
        ]);
    }

    public function pressReleaseWriting()
    {
        return view('frontend.services.press-release-writing')->with([
            'regions' => $this->regions
        ]);
    }

    public function editingProofReading()
    {
        return view('frontend.services.editing-proofreading')->with([
            'regions' => $this->regions
        ]);
    }

    public function bookCoverDesign()
    {
        return view('frontend.services.book-cover')->with([
            'regions' => $this->regions
        ]);
    }

    public function amazonMarketing()
    {
        return view('frontend.services.amazon-marketing')->with([
            'regions' => $this->regions
        ]);
    }

    public function seoWriting()
    {
        return view('frontend.services.seo-writing')->with([
            'regions' => $this->regions
        ]);
    }

    public function audioBooks()
    {
        return view('frontend.services.audio_books')->with([
            'regions' => $this->regions
        ]);
    }

    public function Fiction()
    {
        return view('frontend.ghostwriting.fiction')->with([
            'regions' => $this->regions
        ]);
    }

    public function Beauty()
    {
        return view('frontend.ghostwriting.beauty')->with([
            'regions' => $this->regions
        ]);
    }

    
    public function Business()
    {
        return view('frontend.ghostwriting.business')->with([
            'regions' => $this->regions
        ]);
    }

    public function Fantasy()
    {
        return view('frontend.ghostwriting.fantasy')->with([
            'regions' => $this->regions
        ]);
    }
    
    public function Medical()
    {
        return view('frontend.ghostwriting.medical')->with([
            'regions' => $this->regions
        ]);
    }
    
    public function ScreenPlay()
    {
        return view('frontend.ghostwriting.nonfiction')->with([
            'regions' => $this->regions
        ]);
    }

    public function BlogWriting()
    {
        return view('frontend.ghostwriting.blog')->with([
            'regions' => $this->regions
        ]);
    }

    public function portfolio()
    {
        return view('frontend.portfolio')->with([
            'regions' => $this->regions
        ]);;
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy.privacypolicy');
    }

}

