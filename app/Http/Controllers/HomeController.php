<?php

namespace App\Http\Controllers;

use App\Models\TrainingData;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home', [
            "title" => "Home"
        ]); 
    }

    public function tutorial()
    {
        return view('user.tutorial', [
            "title" => "Tutorial"
        ]); 
    }

    public function about()
    {
        return view('user.about', [
            "title" => "About Us"
        ]); 
    }

    public function kerusakan()
    {
        return view('user.kerusakan', [
            "title" => "Jenis Kerusakan"
        ]); 
    }

}
