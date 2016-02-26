<?php namespace App\Http\User;
use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest {
	public function rules()
	{
		return [
			'email' 		=> 'required|email',
			'password' 		=> 'required'
		];
	}
	public function authorize()
	{
		return true;
	}
}