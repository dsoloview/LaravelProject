<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            'company' => 'required|max:100',
            'title' => 'required|max:100',
            'start_date' => 'date',
            'end_date' => 'date',
            'description' => 'required|max:255',
            'link' => 'required|max:255',
            'city' => 'required|max:100',
            'image' => ($this->isMethod('post')) ? 'required|image|max:2048' : 'image|max:2048',
        ];
    }
}
