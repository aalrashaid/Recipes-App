<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipesRequest;
use App\Http\Requests\UpdateRecipesRequest;
use Illuminate\Http\RedirectResponse;

use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Reviews;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $data['recipes'] = auth()->user()
            ->recipes()
            ->with(['cuisine', 'category'])
            ->get();

        return view('Recipes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $data['cuisines'] = Cuisine::get();
        $data['categories'] = Category::get();

        return view('Recipes.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreRecipesRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreRecipesRequest $request): RedirectResponse
    {
        DB::transaction(function () use($request) {
            auth()->user()
                ->recipes()
                ->create($request->except('csrf_token'));
        });

        return redirect()->route('user.Recipes.index')->with([
            'class' => 'success',
            'message' => 'Recipe successfully created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        $data['model'] = auth()->user()
            ->recipes()
            ->findOrFail($id);
        $data['cuisines'] = Cuisine::get();
        $data['categories'] = Category::get();
        $data['Reviews'] = Reviews::get();

        return view('Recipes.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        $data['model'] = auth()->user()
            ->recipes()
            ->findOrFail($id);
        $data['cuisines'] = Cuisine::get();
        $data['categories'] = Category::get();

        return view('Recipes.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRecipesRequest  $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateRecipesRequest $request, int $id): RedirectResponse
    {
        $model = auth()->user()
            ->recipes()
            ->findOrFail($id);

        DB::transaction(function () use ($request, $model) {
            $model->update($request->except('csrf_token'));
        });

        return redirect()->route('user.Recipes.index')->with([
            'class' => 'success',
            'message' => 'Recipe successfully updated'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $model = auth()->user()
            ->recipes()
            ->findOrFail($id);
        $model->delete();

        return redirect()->back()->with([
            'class' => 'success',
            'message' => 'Recipe successfully deleted'
        ]);
    }
}
