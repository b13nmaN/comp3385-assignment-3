<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Client;


class DashboardController extends Controller
{
    public function index(): View
    {
        // get all clients from the database 
        $clients = Client::all(); 
        return view('dashboard', ['clients' => $clients]);

    }

    
}
