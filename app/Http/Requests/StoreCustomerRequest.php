<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'customer_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mobile' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'status' => 'required|integer',
            'created_by' => 'nullable|integer',
            'updated_by' => 'nullable|integer',
        ];
    }
}
