<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    protected function getRedirectUrl()
    {
        return route('product.create');
    }
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
            'name' => 'required|string',
            'gallery_id' => 'required|integer',
            'category' => 'required|numeric',
            // 'subcategory' => 'required|numeric',
            'description' => 'required|string',
            'meta_robots' => 'nullable|string',
            'seo_title' => 'nullable|string',
            'h1_text' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'gallery_id.required' => 'Image is required. Please choose an image.',
        ];
    }
}
