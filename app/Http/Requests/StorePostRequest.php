<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title'=>'unique:posts|required',
            // 'descrtiption'=>'required',
            'owner'=>'required',
        ];
    }
    public function messages(){
        return[

            'title.required'=>'il titolo e obbligatorio',
            'title.unique'=>'questo titolo e gia stato utilizzato',
            // 'descrtiption.required'=>'la descrizone e obbligatoria',
            'owner.required'=>'il proprietario e obbligatorio'
        ];
    }
}
