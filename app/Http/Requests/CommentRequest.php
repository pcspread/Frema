<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'name' => ['nullable', 'string', 'max:50'],
            'content' => ['required', 'string'],
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
            'name.string' => '名前は文字列で入力してください',
            'name.max' => '名前は50文字以内で入力してください',
            'content.required' => 'コメントを入力してください',
            'content.string' => 'コメントは文字列で入力してください'
        ];
    }
}
