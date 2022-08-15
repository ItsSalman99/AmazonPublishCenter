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
}
