<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'price' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'the name can not be null!',
//            'name.unique'=>'this name has been used!',
            'title.max'=>'the name is too long!',
            'price.required'=>'the price can not be null!'
        ];
    }

    //todo ex.
    public function withValidator(Validator $validator)
    {
        if ($validator->fails()){

            return redirect()->back()->withErrors($validator)->withInput();
        }
    }
}
