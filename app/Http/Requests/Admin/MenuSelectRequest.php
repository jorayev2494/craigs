<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MenuSelectRequest extends FormRequest
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
            "slug"              =>  "required|unique:admin_menu_selects,id,$this->slug|alpha|min:4|max:20",
            "menu_id"           =>  "required|integer|exists:admin_menus,id",
            "select_menu_id"    =>  "integer|exists:admin_menu_selects,id",
            "active"            =>  "required|integer|min:0|max:1",
        ];
    }
}
