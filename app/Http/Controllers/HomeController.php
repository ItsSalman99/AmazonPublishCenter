<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    
    public function index()
    {

        $regions = Region::all();
        
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');

        return view('frontend.index')->with([
            'regions' => $regions
        ]);
    }

    public function about()
    {
        $regions = Region::all();
        
        return view('frontend.about')->with([
            'regions' => $regions
        ]);
    }

    public function contact()
    {
        $regions = Region::all();

        return view('frontend.contact')->with([
            'regions' => $regions
        ]);
    }

    public function bookWriting()
    {
        $regions = Region::all();
        
        return view('frontend.services.book_writing')->with([
            'regions' => $regions
        ]);
    }

    public function bookPublishing()
    {
        $regions = Region::all();
        
        return view('frontend.services.book-publishing')->with([
            'regions' => $regions
        ]);
    }

    public function bookMarketing()
    {
        $regions = Region::all();
        
        return view('frontend.services.book-marketing')->with([
            'regions' => $regions
        ]);
    }

    public function bookFormating()
    {
        $regions = Region::all();
        
        return view('frontend.services.book_formating')->with([
            'regions' => $regions
        ]);
    }

    public function videoBookTrailers()
    {
        $regions = Region::all();
        
        return view('frontend.services.video_book_trailers')->with([
            'regions' => $regions
        ]);
    }

    public function socialMediaMarketing()
    {
        $regions = Region::all();
        
        return view('frontend.services.social_media_marketing')->with([
            'regions' => $regions
        ]);
    }

    public function interactiveEbooks()
    {
        $regions = Region::all();
        
        return view('frontend.services.interactive-ebooks')->with([
            'regions' => $regions
        ]);
    }

    public function creativeWriting()
    {
        $regions = Region::all();
        
        return view('frontend.services.creative-writing')->with([
            'regions' => $regions
        ]);
    }

    public function pressReleaseWriting()
    {
        $regions = Region::all();
        
        return view('frontend.services.press-release-writing')->with([
            'regions' => $regions
        ]);
    }

    public function editingProofReading()
    {
        $regions = Region::all();
        
        return view('frontend.services.editing-proofreading')->with([
            'regions' => $regions
        ]);
    }

    public function bookCoverDesign()
    {
        $regions = Region::all();
        
        return view('frontend.services.book-cover')->with([
            'regions' => $regions
        ]);
    }

    public function amazonMarketing()
    {
        $regions = Region::all();
        
        return view('frontend.services.amazon-marketing')->with([
            'regions' => $regions
        ]);
    }

    public function seoWriting()
    {
        $regions = Region::all();
        
        return view('frontend.services.seo-writing')->with([
            'regions' => $regions
        ]);
    }

    public function audioBooks()
    {
        $regions = Region::all();
        
        return view('frontend.services.audio_books')->with([
            'regions' => $regions
        ]);
    }

    public function Fiction()
    {
        $regions = Region::all();
        
        return view('frontend.ghostwriting.fiction')->with([
            'regions' => $regions
        ]);
    }

    public function Beauty()
    {
        $regions = Region::all();
        
        return view('frontend.ghostwriting.beauty')->with([
            'regions' => $regions
        ]);
    }

    
    public function Business()
    {
        $regions = Region::all();
        
        return view('frontend.ghostwriting.business')->with([
            'regions' => $regions
        ]);
    }

    public function Fantasy()
    {
        $regions = Region::all();
        
        return view('frontend.ghostwriting.fantasy')->with([
            'regions' => $regions
        ]);
    }
    
    public function Medical()
    {
        $regions = Region::all();
        
        return view('frontend.ghostwriting.medical')->with([
            'regions' => $regions
        ]);
    }
    
    public function ScreenPlay()
    {
        $regions = Region::all();
        
        return view('frontend.ghostwriting.screenplay')->with([
            'regions' => $regions
        ]);
    }

    public function nonFiction()
    {
        $regions = Region::all();
        
        return view('frontend.ghostwriting.nonfiction')->with([
            'regions' => $regions
        ]);
    }

    public function BlogWriting()
    {
        $regions = Region::all();
        
        return view('frontend.ghostwriting.blog')->with([
            'regions' => $regions
        ]);
    }

    public function portfolio()
    {
        $regions = Region::all();
        
        return view('frontend.portfolio')->with([
            'regions' => $regions
        ]);;
    }

    public function privacyPolicy()
    {
        
        return view('frontend.privacy-policy.privacypolicy');
    }

    public function termsConditions()
    {
        
        return view('frontend.privacy-policy.termsconditions');
    }

}

