<?php
namespace App\Http\Requests\admin\restaurant_area;

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
    "restaurant_id"=>'required',
    "delivery_charges"=>'required|numeric',
    "sahalat_charge"=>'required|numeric',
    "min_amount"=>'required|numeric',
    "deliver_time_from"=>'required',
    "deliver_time_to"=>'required',
    "status"=>'required',
    "governorate_id"=>'required',



];
}
}
