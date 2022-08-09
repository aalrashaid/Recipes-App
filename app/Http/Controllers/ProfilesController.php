<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfilesRequest;

use App\Models\Country;
use App\Models\Language;
use App\Models\Gender;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() : View
    {
        $data['user'] = auth()->user();

        return view('profile.index', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return View
     */
    public function editProfile(): View
    {
        $data['user'] = auth()->user();
        $data['countries'] = Country::get();
        $data['genders'] = Gender::get();
        $data['languages'] = Language::get();

        return view('profile.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProfilesRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateProfilesRequest $request, int $id): RedirectResponse
    {
        $model = auth()->user()
            ->profile()
            ->findOrFail($id);

        $model->update($request->except('csrf_token'));

        return redirect()->back()->with([
            'class' => 'success',
            'message' => 'Profile successfully updated'
        ]);
    }
}
