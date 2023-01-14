<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CvFormRequest extends FormRequest
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
            'first_name' => ['required', 'max:50'],
            'last_name' => ['nullable', 'max:50'],
            'email'  => ['required', 'email'],
            'head_line' => ['required', 'max:100'],
            'profile' => ['required', 'image'],
            'phone_number' => ['required'],
            'address' => ['required', 'max:50'],
            'post_code' => ['nullable', 'max:10'],
            'city'  => ['required', 'max:100'],
            'degree' => ['required', 'max:100'],
            'school' => ['required', 'max:100'],
            'school_city' =>  ['required', 'max:100'],
            'start_date' =>  ['required', 'date'],
            'end_date' => ['required', 'date'],
            'description' =>  ['required', 'max:1000'],
            'skills.*.name' => ['required', 'max:100'],
            'skills.*.range' => ['required', 'max:100'],
            'languages.*.name' => ['required', 'max:100'],
            'languages.*.level' => ['required', 'max:100'],
        ];
    }
}
