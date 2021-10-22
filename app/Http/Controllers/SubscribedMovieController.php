<?php

namespace App\Http\Controllers;

use App\Models\SubscribedMovie;
use Illuminate\Http\Request;

class SubscribedMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Display Create view
        return view('subscribed_movies.create');

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
        $request->validate([
            'title'=>'required'
        ]);
          //Use Eloquent ORM to create
        SubscribedMovie::create($request->all);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubscribedMovie  $subscribedMovie
     * @return \Illuminate\Http\Response
     */
    public function show(SubscribedMovie $subscribedMovie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubscribedMovie  $subscribedMovie
     * @return \Illuminate\Http\Response
     */
    public function edit(SubscribedMovie $subscribedMovie)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubscribedMovie  $subscribedMovie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubscribedMovie $subscribedMovie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubscribedMovie  $subscribedMovie
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubscribedMovie $subscribedMovie)
    {
        //
    }
}
