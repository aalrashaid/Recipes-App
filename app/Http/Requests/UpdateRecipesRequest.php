<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRecipesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //'cuisines_id' => 'required',
            //'thumbnails_id' => 'required',
            //'category_id' => 'required',
            'title' => ['required'],
            // d 'slug' => ['required','unique:slug'],
            'dsescription' => ['required'],
            'youtubevideo' => ['required'],
            'method' => ['required'],
            'difficlty' => ['required'],
            'preptime' => ['required'],
            'cooktime' => ['required'],
            'total' => ['required'],
            'servings' => ['required'],
            'yield' => ['required'],
            'ingredients' => ['required'],
            'directions' => ['required'],
            'nutritionFacts' => ['required'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'user_id.required' => 'A user_id is required',
            //'cuisines_id.required' => 'A cuisines is required',
            //'photo_id.required' => 'A photo is required',
            //'category_id.required' => 'A category is required',
            'title.required' => 'A title is required',
            'slug.required' => 'A slug is required',
            'dsescription.required' => 'A dsescription is required',
            'youtubevideo.required' => 'A youtube video is required',
            'method.required' => 'A method is required',
            'difficlty.required' => 'A difficlty user is required',
            'preptime.required' => 'A prep time is required',
            'cooktime.required' => 'A cook time is required',
            'total.required' => 'A total is required',
            'yield.required' => 'A yield is required',
            'ingredients.required' => 'A ingredients is required',
            'directions.required' => 'A directions is required',
            'nutritionFacts.required' => 'A nutritionFacts is required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //'cuisines_id' => '',
            //'photo_id' => '',
            //'category_id' => '',
            'title' => 'Titles ',
            'slug' => 'slug text',
            'dsescription' => 'text',
            'youtubevideo' => '',
            'method' => '',
            'difficlty' => '',
            'cooktime' => '',
            'total' => '',
            'yield' => '',
            'ingredients' => 'texts',
            'directions' => 'text',
            'nutritionFacts' => 'text',
        ];

    }
}
