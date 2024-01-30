<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index(){

        $trains = Train::all();
        // dd($trains);
        return view('welcome', compact('trains'));
    }
}


// php artisan make:migration create_trains_table