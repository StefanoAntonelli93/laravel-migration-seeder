<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        // trasformo in array associativo
        $data = [
            'trains' => $trains
        ];
        dd($trains);
        return view('home', $data);
    }
}
