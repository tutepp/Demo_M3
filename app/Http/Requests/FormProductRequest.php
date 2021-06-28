<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormProductRequest extends FormRequest
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
            'name_product' => 'required|min:2|max:30',
            'total_product' => 'required|numeric|max:100',
            'price'=> 'required|numeric',
        ];
    }
    public function message()
    {
        $messages = [
            'name_product.required' => 'Cần điền đày đủ ten san pham',
            'price.required' => 'Vui long nhap gia san pham',
            'name_product.max' => 'Tên phải từ 2 tới 30 ki tự!',
            'total_product.min' => 'So luong phai tren 0!',
        ];
        return $messages;
    }

}
