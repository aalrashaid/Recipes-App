//, User $user, $id
        dd();
    //    // ddd($request->all());
    //      profiles::findOrFail($id);

    //      $attributes['user_id'] = auth()->user()->$id;

    //      $attributes = $request->validate([

    //         'country_id' => ['nullable', Rule::exists('countries', 'id')],
    //         'language_id' => ['nullable', Rule::exists('languages', 'id')],
    //         'gender' => ['nullable', Rule::exists('gender', 'id')],
    //         'fullName' =>['nullable'],
    //         'slug' => ['nullable', Rule::unique('profiles', 'slug')->ignore($profiles)],
    //         'bio' => ['nullable'],
    //         'quotes' => ['nullable'],
    //         'birthday'=> ['nullable'],
    //         'gender' => ['nullable'],
    //         'avatar' => ['nullable'],
    //         'facebook' =>['nullable'],
    //         'linkedIn' =>['nullable'],
    //         'instagram' =>['nullable'],
    //         'youtube' =>['nullable'],
    //         'website' =>['nullable'],
    //      ]);

    //      if( isset($attributes['avatar']) )
    //      {
    //         $name = $request->file('avatar')->getClientOriginalName();
    //         $attributes['avatar'] = $request->file('avatar')->storeAs('public/users/avatars', $name);
    //      }


    //       dd($attributes);

    //      //$profiles->update($attributes);
    //      $profiles->save($attributes);
    //     // $profiles->push($attributes);

          return redirect()->back();

        // $profile = new profiles;

        // $profile->update(

        // );
        // if ($request->File('avatar')) {
        //     $name = $request->file('avatar')->getClientOriginalName();
        //     $path = $request->file('avatar')->storeAs('public/users/avatars', $name);
        // }

        // $attributes = $request[
        //    // 'user_id' = auth()->user()->id,
        //   // 'country_id' = $request->country_id,

        // ];

        // $profile->user_id = auth()->user()->id;

        // $profile->country_id = $request->country_id;
        // $profile->language_id = $request->language_id;

        // $profile->fullName = $request->fullName;
        // $profile->slug = $request->slug;
        // $profile->bio = $request->bio;
        // $profile->quotes = $request->quotes;
        // $profile->birthday = $request->birthday;
        // $profile->gender = $request->gender;
        // $profile->avatar = $request->file('avatar')->getClientOriginalName();
        // //$profile->avatars = $name;
        // $profile->facebook = $request->facebook;
        // $profile->linkedIn = $request->linkedIn;
        // $profile->instagram = $request->instagram;
        // $profile->youtube = $request->youtube;
        // $profile->website = $request->website;

        //$profile = profiles::where('id', $id)->update();
        // $profile->update();
        //return redirect()->route()->back;
        //return redirect()->route('Profile.show')->with('success', 'Profile update successfully.');
