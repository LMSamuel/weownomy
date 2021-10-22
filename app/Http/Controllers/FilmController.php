<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class FilmController extends Controller
{
    //
    public function index(){
        $films = Http::get('https://api.tvmaze.com/show')->json();
        return view('film.index', ['films' => $films]);
    }
}
