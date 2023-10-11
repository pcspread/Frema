<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'image' => ['nullable', 'image'],
            'name' => ['nullable', 'string', 'max:50'],
            'postcode' => ['nullable', 'regex:/^[0-9]{3}-[0-9]{4}$/'],
            'address' => ['nullable', 'string', 'max:191'],
            'building' => ['nullable', 'string', 'max:191'],
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
            'image.image' => '画像ファイルを指定してください',
            'name.string' => 'ユーザー名は文字列で入力してください',
            'name.max' => 'ユーザー名は50文字以内で入力してください',
            'postcode.regex' => '郵便番号を正しい形式で入力してください',
            'address.string' => '住所は文字列で入力してください',
            'address.max' => '住所は191文字以内で入力してください',
            'building.string' => '建物名は文字列で入力してください',
            'building.max' => '建物名は191文字以内で入力してください',
        ];
    }
}
