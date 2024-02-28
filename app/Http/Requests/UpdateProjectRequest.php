<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title'           => 'required|max:30|min:5',
		    'description'     => 'required',
		    'image'           => 'max:500',
		    'date'            => 'required',
		    'status'          => 'required'
        ];
    }

     public function messages()
    {
        return [
            'title.required' => 'The title is mandatory',
            'title.max' => 'You can enter a maximum of 30 characters',
            'title.min' => 'You can enter a minimum of 5 characters',
            'description.required' => 'The description is mandatory',
            'image.max' => 'You can enter a maximum of 500 characters',
            'date.required' => 'The date is mandatory',
            'languages.required' => 'The language is mandatory',
            'status.required' => 'The status is mandatory',
        ];
    }
}
