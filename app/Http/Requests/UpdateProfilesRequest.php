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
            'country_id' => ['required', 'integer', 'exists:countries,id'],
            'language_id' => ['required', 'integer', 'exists:languages,id'],
            'full_name' => ['nullable', 'min:4', 'max: 250'],
            'bio' => ['nullable', 'min:2', 'max:280'],
            'quotes' => ['nullable', 'min:2', 'max:280'],
            'birthday' => ['nullable', 'date', 'before:today'],
            'gender_id' => ['required', 'integer', 'exists:genders,id'],
            'avatar' => ['nullable', 'file', 'max:10240', 'mimes:jpg,jpeg,png,bmp,tiff'],
            'facebook' => ['nullable', 'url'],
            'linkedin' => ['nullable', 'url'],
            'instagram' => ['nullable', 'url'],
            'youtube' => ['nullable', 'url'],
            'website' => ['nullable', 'url']
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
            'country_id.required' => 'A country is required',
            'language_id.required' => 'A language is required',
            'full_name.required' => 'A full Name is required',
            'bio.required' => 'A bio is required',
            'quotes.required' => 'A quotes is required',
            'birthday.required' => 'A birthday is required',
            'gender_id.required' => 'A gender is required',
            'avatar.required' => 'A avatar user is required',
            'facebook.required' => 'A facebook is required',
            'linkedin.required' => 'A linkedIn is required',
            'instagram.required' => 'A instagram is required',
            'youtube.required' => 'A youtube is required',
            'website.required' => 'A website is required'
        ];
    }
}
