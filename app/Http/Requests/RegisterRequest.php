<?php namespace App\Http\User;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {
	public function rules()
	{
		return [
			'email' 		=> 'required|email',
			'password' 		=> 'required',
			'name'  		=> 'required'
		];
	}
	public function authorize()
	{
		return true;
	}
}