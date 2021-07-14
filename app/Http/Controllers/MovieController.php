<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {
        $title = "Film disponibili";
        $movies = Movie::all();

        return view('welcome', compact('title', 'movies'));
    }
}