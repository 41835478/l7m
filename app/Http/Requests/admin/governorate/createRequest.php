<?php
namespace App\Http\Requests\admin\governorate;

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
    "name_en"=>'required|unique:governorate',
    "name_ar"=>'required|unique:governorate',



        ];
    }
}
