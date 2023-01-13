<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvFormStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'max:10'],
            'last_name' => ['nullable', 'max:10'],
            'email'  => ['required', 'email'],
            'head_line' => ['required', 'max:20'],
            'profile' => ['required', 'image'],
            'phone_number' => ['required'],
            'address' => ['required', 'max:50'],
            'post_code' => ['nullable', 'max:10'],
            'city'  => ['required', 'max:20'],
            'degree' => ['required', 'max:20'],
            'school' => ['required', 'max:20'],
            'school_city' =>  ['required', 'max:20'],
            'start_date' =>  ['required', 'date'],
            'end_date' => ['required', 'date'],
            'description' =>  ['required', 'max:200'],
            'skills.*.name' => ['required', 'max:20'],
            'skills.*.range' => ['required', 'max:20'],
            'languages.*.name' => ['required', 'max:20'],
            'languages.*.level' => ['required', 'max:20'],
        ];
    }
}
