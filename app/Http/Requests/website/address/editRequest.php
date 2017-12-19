<?php
namespace App\Http\Requests\website\address;

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
    "area_id"=>'required',
   // "name"=>'required',
    //"block"=>'required',
   // "street"=>'required',
  //  "avenue"=>'required',
  //  "building"=>'required',
  //  "floor"=>'required',
  //  "apartment_number"=>'required',
"first_name"=>'required',
    "last_name"=>'required',
  //  "paci_number"=>'required',
"phone"=>'required',
"postal_code"=>'required',
"address"=>'required',
];
}
}
