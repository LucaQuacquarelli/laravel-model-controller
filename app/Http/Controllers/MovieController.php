<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index() {
        $title = "La lista dei miei film preferiti";
        $movies = Movie::all();

        return view('home', compact('title', 'movies'));
    }
}
