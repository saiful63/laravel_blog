<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostUpdateRequest extends FormRequest
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
            'title'=>['required','min:3','max:255'],
            'slug'=>['required','min:3','max:255',Rule::unique('posts', 'slug')->ignore($this->route('post'))],
            'status'=>['required'],
            'category'=>['required'],
            'sub_category'=>['required'],
            'description'=>['required'],
            'tag'=>['required']
        ];
    }
}
