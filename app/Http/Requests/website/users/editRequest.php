<?php
namespace App\Http\Requests\website\users;

use App\Http\Requests\Request;

class editRequest extends Request
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

  
    // "phone"=>'required|numeric',
    // "gender"=>'required',

  "first_name"=>'required',
    "last_name"=>'required',
    "email"=>'required|email|unique:users',
            "password"=>'required|confirmed',
            'password_confirmation'=> 'required',
            'address'=>'required',
            "mobile"=>'required|min:4|numeric',
               "area_id"=>'required',


];
}
}
