<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|max:255',
            'password'=>'unique:user',
        ];
    }
   public function messages()
{
    return [
        'email.required' => 'Email không được để trống',
        'email.email'=>'bạn chưa nhập email đúng',
        'email.max'=>'email khong vượt quá 255 kí tự',
        'password.unique:user'
    ];
}
}
