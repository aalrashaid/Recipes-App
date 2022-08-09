<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewsRequest extends FormRequest
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
    public function rules(): array
    {
        return [

            //'user_id' => ['required', 'integer', 'exists:cuisines,id'],
            //'recipes_id' => ['required', 'integer', 'exists:cuisines,id'],
            'comments' => ['required', 'min:4', 'max:255']

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
            'comments' => 'A comments is required',
            
        ];
    }
}
