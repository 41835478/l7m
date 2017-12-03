<?php
namespace App\Http\Requests\admin\restaurant;

use App\Http\Requests\Request;

class createRequest extends Request
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

                 $this->merge(['name_en'=>strtolower(trim($this->name_en)),'name_ar'=>trim($this->name_ar)]);


        return [
    "name_en"=>'required|unique:restaurant',
    "name_ar"=>'required|unique:restaurant',
    "Owner_first_name"=>'required',
    "Owner_last_name"=>'required',
    "email"=>'required',
    "telephone"=>'required',
    "status"=>'required',
    "min_amount"=>'required|numeric',
    "working_hour_from"=>'required',
    "working_hour_to"=>'required',
    "deliver_time_from"=>'required',
    "deliver_time_to"=>'required',
    "deliver_charge"=>'required|numeric',
    "rating"=>'required',
    //"show_menu"=>'required',
    "order_accept_days"=>'required',
    "offline_order"=>'required',
    "url"=>'required',
    "img"=>'required',
    "commission_type"=>'required',
    "discount_type"=>'required',
    "area_id"=>'required',
    "follow_us"=>'required',
    "notification"=>'required',
    'discount'=>'numeric',



        ];
    }
}
