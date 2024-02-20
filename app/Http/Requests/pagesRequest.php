<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pagesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            'name'=>'required|string|min:5|max:10',
            'path'=>'required|string|min:5|max:10',
            'active'=>'required|boolean',
        ];
    }
    public function message(){
        return [
            'name'.'required'=>'الاسم مطلوب',
            'path.required'=>'المسار للموقع مطلوب',
            'active'.'required'=>'يجب ان تختار مفعل ام لا',
        ];
    }
}
