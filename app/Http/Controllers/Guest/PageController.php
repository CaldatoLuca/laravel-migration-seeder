<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
// use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $currentDate = now()->format('Y-m-d');

        $trains = Train::all()->where('departure_date', $currentDate);

        return view('welcome', compact('trains'));
    }
}
