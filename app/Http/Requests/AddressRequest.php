<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'postcode' => ['required', 'regex:/[0-9]{3}-[0-9]{4}/'],
            'address' => ['required', 'string'],
            'building' => ['nullable', 'string'],
        ];
    }

    /**
     * バリデーションメッセージの修正
     * @param void
     * @return array
     */
    public function messages()
    {
        return [
            'postcode.required' => '郵便番号を入力してください',
            'postcode.regex' => '郵便番号を正しい形式で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所は文字列で入力してください',
            'building.string' => '建物名は文字列で入力してください',
        ];
    }
}
