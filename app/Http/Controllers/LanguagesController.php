<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLanguagesRequest;
use App\Http\Requests\UpdateLanguagesRequest;
use App\Models\Language;

class LanguagesController extends Controller
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
     * @param  \App\Http\Requests\StoreLanguagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLanguagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Language  $languages
     * @return \Illuminate\Http\Response
     */
    public function show(Language $languages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Language  $languages
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $languages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLanguagesRequest  $request
     * @param  \App\Models\Language  $languages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLanguagesRequest $request, Language $languages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Language  $languages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $languages)
    {
        //
    }
}
