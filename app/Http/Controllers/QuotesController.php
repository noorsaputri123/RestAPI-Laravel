<?php

namespace App\Http\Controllers;

use App\Models\quotes;
use App\Http\Requests\StorequotesRequest;
use App\Http\Requests\UpdatequotesRequest;

class QuotesController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorequotesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorequotesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function show(quotes $quotes)
    {
        echo "sukses";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function edit(quotes $quotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatequotesRequest  $request
     * @param  \App\Models\quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatequotesRequest $request, quotes $quotes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\quotes  $quotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(quotes $quotes)
    {
        //
    }
}
