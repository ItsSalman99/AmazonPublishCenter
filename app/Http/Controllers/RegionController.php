<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Alert;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::all();

        return view('backend.regions.index', compact('regions'));
    }

    public function create()
    {
        return view('backend.regions.create');
    }

    public function store(Request $request)
    {
        Region::create([
            'name' => $request->name
        ]);

        Alert::success("New Region Added Successfully!", "Region added to your site successfully!");

        return redirect()->back();

    }
    
    public function destroy($id)
    {
        $region = Region::where('id',$id)->first();

        $region->delete();

        Alert::success("Deleted Successfully!", "Region deleted successfully!");

        return redirect()->back();


    }

}
