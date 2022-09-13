<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    
    public function index()
    {

        return view('frontend.index');
    }

    public function about()
    {
        
        return view('frontend.about');
    }

    public function contact()
    {

        return view('frontend.contact');
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

    public function Fiction()
    {
        
        return view('frontend.ghostwriting.fiction');
    }

    public function Beauty()
    {
        
        return view('frontend.ghostwriting.beauty');
    }

    
    public function Business()
    {
        
        return view('frontend.ghostwriting.business');
    }

    public function Fantasy()
    {
        
        return view('frontend.ghostwriting.fantasy');
    }
    
    public function Medical()
    {
        
        return view('frontend.ghostwriting.medical');
    }
    
    public function ScreenPlay()
    {
        
        return view('frontend.ghostwriting.screenplay');
    }

    public function nonFiction()
    {
        
        return view('frontend.ghostwriting.nonfiction');
    }

    public function BlogWriting()
    {
        
        return view('frontend.ghostwriting.blog');
    }

    public function portfolio()
    {
        
        return view('frontend.portfolio');;
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

