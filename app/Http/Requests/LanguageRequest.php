<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'abbr' => 'required|string|max:10',
            //  'active' => 'required|in:1',
            'direction' => 'required|in:rtl,ltr',
        ];
    }


    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'in' => 'القيم المدخلة غير صحيحة ',
            'name.string' => 'اسم اللغة لابد ان يكون احرف',
            'abbr.max' => 'هذا الحقل لابد الا يزيد عن 10 احرف ',
            'abbr.string' => 'هذا الحقل لابد ان يكون احرف ',
            'name.max' => 'اسم اللغة لابد الا يزيد عن 100 احرف ',
        ];
    }
}
