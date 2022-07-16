<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfilesRequest;
use App\Http\Requests\UpdateProfilesRequest;
use App\Models\Profiles;

use Illuminate\Support\Facades\DB;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;

use App\Models\countries;
use App\Models\languages;
use App\Models\User;
use App\Models\Genders;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //dd();
        $Profiles = DB::table('Profiles')->where('id');

        return view('Profile.index',compact('Profiles') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = countries::all();
        $genders = Genders::all();
        $languages = languages::all();

        return view('Profile.create', compact('countries', 'genders', 'languages') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfilesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfilesRequest $request)
    {
        //
        if ($request->hasFile('avatars')) {
            $name = $request->file('avatars')->getClientOriginalName();
            $path = $request->file('avatars')->storeAs('public/users/avatars', $name);
        }

        $profiles = new Profiles;

        $profiles->user_id = auth()->user()->id;

        $profiles->country_id = $request->country_id;
        $profiles->language_id = $request->language_id;
        $profiles->genders_id = $request->genders_id;

        $profiles->fullName = $request->fullName;

        $profiles->slug = SlugService::createSlug(profiles::class, 'slug', $request->fullName);
        $profiles->bio = $request->bio;
        $profiles->quotes = $request->quotes;
        $profiles->birthday = $request->birthday;
        // $profile->gender = $request->gender;
        // $profile->avatar = $request->file('avatars')->getClientOriginalName();
        $profiles->avatar = $name;
        $profiles->facebook = $request->facebook;
        $profiles->linkedIn = $request->linkedIn;
        $profiles->instagram = $request->instagram;
        $profiles->youtube = $request->youtube;
        $profiles->website = $request->website;

    //     if ($validator->fails()) {
    //         Session::flash('error', $validator->messages()->first());
    //         return redirect()->back()->withInput();
    //    }

    // if ($validator->fails()) {
    //     return redirect('post/create')
    //                 ->withErrors($validator)
    //                 ->withInput();
    // }

        //dd($profile);
        $profiles->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function show(Profiles $profiles,$id)
    {
        //
        $profiles = profiles::findOrFail($id);

        $countries = countries::all();
        //$countries = DB::table('countries')->pluck('name','id');
        //dd($countries);
        $genders = Genders::all();
        $languages = languages::all();

        return view('Profile.show', compact('profiles', 'countries', 'genders', 'languages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function edit(Profiles $profiles,$id)
    {
        //
        $profiles = profiles::findOrFail($id);

        $countries = countries::all();
        $genders = genders::all();
        $languages = languages::all();

        return view('Profile.edit', compact('countries', 'genders', 'languages', 'profiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param  \App\Http\Requests\UpdateProfilesRequest  $request
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfilesRequest $request, Profiles $profiles,$id)
    {
        //
        $profiles = profiles::findOrFail($id);

        $profiles = new Profiles;

        //$name = $request->file('avatar')->getClientOriginalName();
        //$path = $request->file('avatar')->storeAs('public/users/avatars', $name);

        if ($request->hasFile('avatar')) {

            $name = $request->file('avatar')->getClientOriginalName();
            $path = $request->file('avatar')->storeAs('public/users/avatars', $name);

            $destination = $path;

            if (File::exists($destination)) {
                File::delete($destination);
            }

            $name = $request->file('avatar')->getClientOriginalName();
            $path = $request->file('avatar')->storeAs('public/users/avatars', $name);
        }

        $profiles->user_id = auth()->user()->id;

        $profiles->country_id = $request->country_id;
        $profiles->language_id = $request->language_id;
        $profiles->genders_id = $request->genders_id;

        $profiles->fullName = $request->fullName;
        $profiles->slug = SlugService::createSlug(profiles::class, 'slug', $request->fullName);
        $profiles->bio = $request->bio;
        $profiles->quotes = $request->quotes;
        $profiles->birthday = $request->birthday;

        $profiles->avatar = $name; //<----- ErrorException Undefined variable: name

        $profiles->facebook = $request->facebook;
        $profiles->linkedIn = $request->linkedIn;
        $profiles->instagram = $request->instagram;
        $profiles->youtube = $request->youtube;
        $profiles->website = $request->website;

        //$profiles->save();
       // $profiles->push();

       dd($profiles);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  \App\Models\Profiles  $profiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profiles $profiles,$id)
    {
        //
        profiles::findOrFail($id);

        $profiles->delete($id);

        //return view('Profile.destroy');

        return redirect()->route('Profile.show')->with('success', 'Profile destroy successfully.');
        //return view('Profile.destroy');
    }
}
