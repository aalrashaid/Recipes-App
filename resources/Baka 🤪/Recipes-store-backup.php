<?

use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

<? php
 //
        // $thumbnails = new thumbnails;

        // if ($request->hasFile('thumbnails')) {
        //     $name = $request->file('thumbnails')->getClientOriginalName();
        //     $size = $request->file('thumbnails')->getSize();
        //     $path = $request->file('thumbnails')->storeAs('public/recipes/thumbnails', $name);
        // }

        // $thumbnails->user_id = auth()->user()->id;

        // $thumbnails->thumbnail = $name;
        // $thumbnails->size = $size;
        // $thumbnails->path = $path;

        // $thumbnails->save();

        $recipes = recipes::create([

            'user_ID' => auth()->user()->id,
            //'user_id' => $request->get("user_id"),
            'cuisines_id' => $request->cuisines_id,
            'category_id' => $request->category_id,
            //[ 'thumbnail_id' => $request->thumbnails->id ],
           // 'thumbnail_id' => $thumbnails->id,
            //'thumbnail_id' => $request->thumbnails['id'],
            'title' => $request->title,
            'slug' => SlugService::createSlug(recipes::class, 'slug', $request->title),
            'dsescription' => $request->dsescription,
            'youtubevideo' => $request->youtubevideo,
            'method' => $request->method,
            'difficlty' => $request->difficlty,
            'preptime' => $request->preptime,
            'cooktime' => $request->cooktime,
            'total' => $request->total,
            'servings' => $request->servings,
            'yield' => $request->yield,
            'ingredients' => $request->ingredients,
            'directions' => $request->directions,
            'nutritionFacts' => $request->nutritionFacts,

        ]);

        $recipes->save();

        return redirect()->back();

        //return redirect()->route('recipes.index')->with('success', 'recipes Create Successfully.');
?>
