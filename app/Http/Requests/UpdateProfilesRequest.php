<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfilesRequest extends FormRequest
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
             //
            // 'user_id' => 'required',
            'country_id' => 'required',
            'language_id' => 'required',
            'fullName' => 'nullable',
            //'slug' => 'required|unique:slug',
            'bio' => 'nullable|min:0|max:280',
            'quotes' => 'nullable|min:0|max:280',
            //'bio' => 'required',
            'birthday' => 'nullable|date|before:today',
            //'gender' => 'nullable',
            'avatar' => 'nullable | mimes:jpeg,jpg,png | max:1000',
            //'avatar' => 'nullable',
            'facebook' => 'nullable|url',
            'linkedIn' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'website' => 'nullable|url',
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
            'country_id.required' => 'A country is required',
            'language_id.required' => 'A language  is required',
            'fullName.required' => 'A full Name is required',
            'slug.required' => 'A slug is required',
            'bio.required' => 'A bio is required',
            'quotes.required' => 'A quotes is required',
            'birthday.required' => 'A birthday is required',
            'gender.required' => 'A gender is required',
            'avatar.required' => 'A avatar user is required',
            'facebook.required' => 'A facebook is required',
            'linkedIn.required' => 'A linkedIn is required',
            'instagram.required' => 'A instagram is required',
            'youtube.required' => 'A youtube is required',
            'website.required' => 'A website is required',
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

            // 'country_id' => 'country address',
            // 'language_id' => 'language address',
            // 'fullName' => 'fullName Name',
            // 'slug' => 'slug ',
            // 'bio' => 'bio text',
            // 'quotes' => 'quotes text',
            // 'birthday' => 'birthday dd/mm/yyyy',
            // 'gender' => 'gender',
            // 'avatar' => '',
            // 'facebook' => '',
            // 'linkedIn' => '',
            // 'instagram' => '',
            // 'youtube' => '',
            // 'website' => '',
        ];
    }

}
