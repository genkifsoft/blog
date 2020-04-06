<?php

namespace App\Http\Requests\Customer;

use App\Http\Requests\AbstractApiRequest;

class LoginCustomerRequest extends AbstractApiRequest
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
            'email'       => 'required|max:80|min:8',
            'password'    => 'required|max:64|min:8',
        ];
    }

    public function messages()
    {
        return [
            'email.max'              => 'Email tối đa 80 ký tự',
            'email.min'              => 'Email nhỏ nhất là 8 ký tự',
            'email.required'         => 'Email bắt buộc nhật',
            'password.max'           => 'Mật khẩu không được lớn hơn 64 ký tự',
            'password.min'           => 'Mật khẩu không được nhỏ hơn 8 ký tự',
            'password.required'      => 'Mật khẩu phải bắt buộc nhập',
        ];
    }
}
