<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Client;

class ClientController extends Controller
{
    public function create ()
    {
        return view('clients.client-form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'address' => 'required',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('telephone');
        $address = $request->input('address');
        $logo = $request->file('company_logo');

        // add to clients table
        $client = new Client();
        $client->name = $name;
        $client->email = $email;
        $client->telephone = $phone;
        $client->address = $address;
        $client->company_logo = $logo;
        // save image
        $filename = $name . time() . '.' . $logo->getClientOriginalExtension();
        $logo->storeAs('photos', $filename); // Fixed this line
        $client->save();

        return redirect('dashboard')->with('onSuccess', 'Client created successfully!');
    }
}
