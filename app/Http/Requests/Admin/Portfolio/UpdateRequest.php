<?php

namespace App\Http\Requests\Admin\Portfolio;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'slug' => 'required|min:3|max:255',
            'intro' => 'required|min:3|max:1000',
            'text' => 'required|min:3',
            'portfolio_category_id' => 'required|exists:portfolio_categories,id',
            'image' => '',
            'link' => '',
            'meta_title' => 'max:255',
            'meta_description' => 'max:255',
            'meta_keywords' => 'max:255',
            'tags' => 'max:255',
            'status' => 'integer',
            'publish_at' => 'date_format:Y-m-d\TH:i',
        ];
    }
}
