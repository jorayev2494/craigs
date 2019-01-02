<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Repository\Repository;
use App\Models\Admin\AdminMenu;

class AdminSidebarRequest extends FormRequest
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
            "icon"      =>  "required|string|min:4|max:30",
            "slug"      =>  "required|unique:admin_menus,slug,$this->slug|alpha|min:4|max:20",
            "group"     =>  "string|alpha|min:4|max:20",
            "active"    =>  "required|integer|min:0|max:1",
        ];
    }
}
