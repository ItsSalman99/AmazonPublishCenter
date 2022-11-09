<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\UsersController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('our-privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('terms-and-conditions', [HomeController::class, 'termsConditions'])->name('terms-conditions');

Route::get('/book-writing', [HomeController::class, 'bookWriting'])->name('book-writing');
Route::get('/audio-books', [HomeController::class, 'audioBooks'])->name('audio-books');
Route::get('/book-publishing', [HomeController::class, 'bookPublishing'])->name('book-publishing');
Route::get('/book-marketing', [HomeController::class, 'bookMarketing'])->name('book-marketing');
Route::get('/book-formating', [HomeController::class, 'bookFormating'])->name('book-formating');
Route::get('/video-book-trailers', [HomeController::class, 'videoBookTrailers'])->name('video-book-trailers');
Route::get('/social-media-marketing', [HomeController::class, 'socialMediaMarketing'])->name('social-media-marketing');
Route::get('/interactive-ebooks', [HomeController::class, 'interactiveEbooks'])->name('interactive-ebooks');
Route::get('/creative-writing', [HomeController::class, 'creativeWriting'])->name('creative-writing');
Route::get('/press-release-writing', [HomeController::class, 'pressReleaseWriting'])->name('press-release-writing');
Route::get('/editing-proof-reading', [HomeController::class, 'editingProofReading'])->name('editingProofReading');
Route::get('/book-cover-design', [HomeController::class, 'bookCoverDesign'])->name('bookCoverDesign');
Route::get('/amazon-marketing', [HomeController::class, 'amazonMarketing'])->name('amazon-marketing');
Route::get('/seo-writing', [HomeController::class, 'seoWriting'])->name('seo-writing');

// Ghostwriting
Route::get('/fiction', [HomeController::class, 'Fiction'])->name('fiction');
Route::get('/beauty-ghostwriting', [HomeController::class, 'Beauty'])->name('beauty');
Route::get('/business-ghostwriting', [HomeController::class, 'Business'])->name('business');
Route::get('/fantasy-ghostwriting', [HomeController::class, 'Fantasy'])->name('fantasy');
Route::get('/medical-ghostwriting', [HomeController::class, 'Medical'])->name('medical');
Route::get('/screenplay-ghostwriting', [HomeController::class, 'ScreenPlay'])->name('screenplay');
Route::get('/non-fiction-ghostwriting', [HomeController::class, 'nonFiction'])->name('nonfiction');
Route::get('/blog-ghostwriting', [HomeController::class, 'BlogWriting'])->name('blog-writing');

Route::post('clients/store', [ClientController::class, 'store'])->name('clients.store');

Route::post('get-regions', [RegionController::class, 'getRegionByAjax']);

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');


Route::prefix('admin')->middleware(['web','auth'])->group(function () {

    Route::get('/dashboard', function () {

        $TClients = Client::count();

        return view('backend.index', compact('TClients'));
    })->name('dashboard');

    //clients
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clients/edit/{id}', [ClientController::class, 'show'])->name('clients.edit');
    Route::post('/clients/update/{id}', [ClientController::class, 'update'])->name('clients.update');

    Route::get('clients/destroy/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');
    Route::get('clients/trashed', [ClientController::class, 'trash'])->name('clients.trash');
    Route::get('clients/restore/{id}', [ClientController::class, 'restoreTrash'])->name('clients.restore');
    Route::get('clients/permanent-delete/{id}', [ClientController::class, 'deletePermanent'])->name('clients.permanent-delete');

    Route::post('clients/export/pdf', [ClientController::class, 'exportClientPdf'])->name('clients-pdf');

    // regions
    Route::get('/regions', [RegionController::class, 'index'])->name('regions.index');
    Route::get('regions/create', [RegionController::class, 'create'])->name('regions.create');
    Route::post('regions/store', [RegionController::class, 'store'])->name('regions.store');
    Route::get('regions/destroy/{id}', [RegionController::class, 'destroy'])->name('regions.destroy');

    //Users Admins
    Route::get('/application/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/application/users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/application/users/store', [UsersController::class, 'store'])->name('users.store');

    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs/store', [BlogController::class, 'store'])->name('blogs.store');

});


require __DIR__.'/auth.php';
