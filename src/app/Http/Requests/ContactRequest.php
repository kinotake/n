<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
         'first-name' => ['required', 'string', 'max:10'],
         'second-name' => ['required', 'string', 'max:10'],
         'gender' => ['required', 'boolean'],
         'email' => ['required', 'string', 'max:100','email'],
         'zip11' => ['required'],
         'addr11' => ['required', 'string','max:100'],
         'building_name' => [ 'string', 'max:100'],
         'opinion' => ['required', 'string', 'max:120'],
        ];
    }

    public function messages()
     {
         return
          [  'first-name.required' => '名字を入力してください',
             'first-name.string' => '名字を文字列で入力してください',
             'first-name.max' => '名字を10文字以内でで入力してください',
             'second-name.required' => '名前を入力してください',
             'second-name.string' => '名前を文字列で入力してください',
             'second-name.max' => '名前を10文字以下で入力してください',
             'email.required' => 'メールアドレスを入力してください',
             'email.string' => 'メールアドレスを文字列で入力してください',
             'email.email' => '有効なメールアドレス形式を入力してください',
             'email.max' => 'メールアドレスを100文字以下で入力してください',
             'zip11.required' => '郵便番号を入力してください',
             'addr11.required' => '住所を入力してください',
             'addr11.string' => '住所を文字列で入力してください',
             'addr11.max' => '住所を100文字以内で入力してください',
             'building_name.string' => '建物名を文字列で入力してください',
             'building_name.max' => '建物名を100文字以内入力してください',
             'opinion.max' => 'ご意見を120文字以内で入力してください',
             'opinion.required' => 'ご意見を入力してください',
             'opinion.string' => 'ご意見を文字列で入力してください',
         ];
     }
}
