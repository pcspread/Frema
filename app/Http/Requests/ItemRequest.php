<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'image' => ['required', 'image'],
            'new_brand'=> ['nullable', 'string'],
            'name' => ['required', 'string', 'max:50'],
            'content' => ['required', 'string'],
            'price' => ['required', 'integer'],
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
            'image.required' => '画像ファイルを指定してください',
            'image.image' => '画像ファイルを指定してください',
            'new_brand.string' => '新規ブランド名は文字列で入力してください',
            'image.image' => '画像ファイルを指定してください',
            'name.required' => '商品名を入力してください',
            'name.string' => '商品名は文字列で入力してください',
            'name.max' => '商品名は50文字以内で入力してください',
            'content.required' => '商品の説明を入力してください',
            'content.string' => '商品の説明は文字列で入力してください',
            'price.required' => '販売価格を入力してください',
            'price.integer' => '販売価格は数字で入力してください',
        ];
    }
}
