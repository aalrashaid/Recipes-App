<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreThumbnailsRequest;
use App\Http\Requests\UpdateThumbnailsRequest;
use App\Models\Thumbnail;

class ThumbnailsController extends Controller
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
     * @param  \App\Http\Requests\StoreThumbnailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThumbnailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thumbnail  $thumbnails
     * @return \Illuminate\Http\Response
     */
    public function show(Thumbnail $thumbnails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thumbnail  $thumbnails
     * @return \Illuminate\Http\Response
     */
    public function edit(Thumbnail $thumbnails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThumbnailsRequest  $request
     * @param  \App\Models\Thumbnail  $thumbnails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThumbnailsRequest $request, Thumbnail $thumbnails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thumbnail  $thumbnails
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thumbnail $thumbnails)
    {
        //
    }
}
