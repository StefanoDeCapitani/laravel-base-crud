<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateComic extends FormRequest
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
            "title"=>"required|alpha_dash", 
            "description"=>"required|alpha_dash", 
            "thumb"=>"required|URL", 
            "price"=>"required|regex:\d+.\d\d", 
            "series"=>"required|alpha_dash", 
            "sale_date"=>"required|date_format:Y-m-d", 
            "type"=>"required|alpha"
        ];
    }
}
