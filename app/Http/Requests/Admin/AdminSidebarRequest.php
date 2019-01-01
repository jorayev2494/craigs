<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

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
            "slug"      =>  "required|alpha|min:4|max:20",
            "active"    =>  "required|integer|min:0|max:1",
        ];
    }
}
