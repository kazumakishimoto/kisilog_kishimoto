<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'body' => 'required|max:500|not_regex:/<\/*script>/u',
            'image' => 'image',
        ];
    }

    public function attributes() {
        return [
            'body' => '本文',
            'image' => '画像',
        ];
    }

    public function messages() {
        return [
            'body.required' => '本文は入力必須です。',
            'body.max' => '最大500文字です。',
            'body.not_regex' => '正規表現を使用して下さい。',
            'image.image' => '画像ファイルのみ投稿可能です。',
        ];
    }
}
