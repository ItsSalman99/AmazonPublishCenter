<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegionController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/book-writing', [HomeController::class, 'bookWriting'])->name('book-writing');
Route::get('/audio-books', [HomeController::class, 'audioBooks'])->name('audio-books');
Route::get('/book-publishing', [HomeController::class, 'bookPublishing'])->name('book-publishing');
Route::get('/book-marketing', [HomeController::class, 'bookMarketing'])->name('book-marketing');

Route::post('clients/store', [ClientController::class, 'store'])->name('clients.store');


Route::prefix('admin')->middleware(['auth'])->group(function () {

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

    // regions
    Route::get('/regions', [RegionController::class, 'index'])->name('regions.index');
    Route::get('regions/create', [RegionController::class, 'create'])->name('regions.create');
    Route::post('regions/store', [RegionController::class, 'store'])->name('regions.store');
    Route::get('regions/destroy/{id}', [RegionController::class, 'destroy'])->name('regions.destroy');
});


require __DIR__.'/auth.php';
