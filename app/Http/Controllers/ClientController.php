<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Region;
use Illuminate\Http\Request;
use Alert;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(10);

        return view('backend.clients.index', compact('clients'));
    }

    public function show($id)
    {
        $client = Client::where('id', $id)->first();
        $regions = Region::all();

        return view('backend.clients.edit', compact('client','regions'));

    }

    public function update(Request $request, $id)
    {
     
        $client = Client::where('id', $id)->first();

        $client->name = $request->name;
        $client->contact = $request->contact;
        $client->email = $request->email;
        $client->region_id = $request->region_id;
        $client->profession = $request->profession;
        $client->message_note = $request->message;

        $client->save();

        Alert::success('Updated Successfully!!', 'Client updated successfully!');
        
        return redirect()->back()->with('success', 'Request submitted successfully!');
        
    }

    public function store(Request $request)
    {
        // dd($request->all());
        
        try {

            $client = new Client;

            $client->name = $request->name;
            $client->contact = $request->contact;
            $client->email = $request->email;
            $client->region_id = $request->region;
            $client->profession = $request->profession;
            $client->message_note = $request->message;
            $client->save();

            Alert::success('Request Sent Successfully!!', 'We have recieved your request, our expert will contact you soon!')->persistent('Dismiss');;

            return redirect()->back();
    
        } catch (\Throwable $th) {
                
            Alert::success('Request Sent Successfully!!', 'We have recieved your request, our expert will contact you soon!')->persistent('Dismiss');;


            return redirect()->back();
        }

    }

    public function destroy($id)
    {
        $client = Client::where('id', $id)->first();

        $client->delete();

        
        Alert::success('Deleted Successfully!!', 'Client deleted successfully, You can restore it from trash in the future!');
        
        return redirect()->back();


    }

    public function trash()
    {
        $clients = Client::onlyTrashed()->paginate(10);

        return view('backend.clients.trash', compact('clients'));

    }

    public function restoreTrash($id)
    {
        $client = Client::where('id', $id)->onlyTrashed()->first();

        $client->restore();

        Alert::success('Restored Successfully!!', 'Client data restored successfully!');
        
        return redirect()->back();

    }

    public function deletePermanent($id)
    {
        $client = Client::where('id', $id)->onlyTrashed()->first();

        $client->forcedelete();

        Alert::success('Permanently Deleted Successfully!!', 'Client data deleted permanently!');
        
        return redirect()->back();
    }

}
