<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecipesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'cuisine_id' => ['required', 'integer', 'exists:cuisines,id'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'thumbnail_id' => ['required', 'file', 'max:10240', 'mimes:jpg,jpeg,png,bmp,tiff'],
            'title' => ['required', 'min:2', 'max:255'],
            'description' => ['required', 'min:4'],
            'youtube_video' => ['required'],
            'recipe_method' => ['required'],
            'difficulty' => ['required'],
            'prep_time' => ['required'],
            'cook_time' => ['required'],
            'total' => ['required'],
            'servings' => ['required'],
            'yield' => ['required'],
            'ingredients' => ['required'],
            'directions' => ['required'],
            'nutrition_facts' => ['required']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'cuisine_id.required' => 'A cuisine is required',
            'category_id.required' => 'A category is required',
            'title.required' => 'A title is required',
            'description.required' => 'A description is required',
            'youtube_video.required' => 'A youtube video is required',
            'recipe_method.required' => 'A method is required',
            'difficulty.required' => 'A difficulty user is required',
            'prep_time.required' => 'A prep time is required',
            'cook_time.required' => 'A cook time is required',
            'total.required' => 'A total is required',
            'yield.required' => 'A yield is required',
            'ingredients.required' => 'A ingredients is required',
            'directions.required' => 'A directions is required',
            'nutrition_facts.required' => 'A nutritionFacts is required'
        ];
    }
}
