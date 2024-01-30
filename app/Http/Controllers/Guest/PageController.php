<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

// class PageController extends Controller
// {
//     public function index(){

//         $trains = Train::all();
//         // dd($trains);
//         return view('welcome', compact('trains'));
//     }
// }


// php artisan make:migration create_trains_table

use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now()->toDateString();
        $trains = Train::whereDate('giorno_partenza', '=', $currentDate)->get();
        
        return view('welcome', compact('trains'));
    }
}