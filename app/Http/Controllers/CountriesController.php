<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountriesRequest;
use App\Http\Requests\UpdateCountriesRequest;
use App\Models\Country;

class CountriesController extends Controller
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
     * @param  \App\Http\Requests\StoreCountriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $countries
     * @return \Illuminate\Http\Response
     */
    public function show(Country $countries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $countries
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $countries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountriesRequest  $request
     * @param  \App\Models\Country  $countries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountriesRequest $request, Country $countries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $countries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $countries)
    {
        //
    }
}
