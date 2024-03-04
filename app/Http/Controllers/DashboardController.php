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
        $logoRecords = Client::all(); 
        $fileUrls = [];

        foreach ($logoRecords as $record) {
            $filename = $record->company_logo; 
            // dd($filename);
            $fileUrls[] = asset('storage/photos/' . $filename);
        }        

        return view('dashboard', ['fileUrls' => $fileUrls]);

    }
}
