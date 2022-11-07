<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'uuid' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'integer', 'max:255'],
            'subcategory_id' => ['required', 'integer', 'max:255'],
            'classification_id' => ['required', 'integer', 'max:255'],
            'status_id' => ['required', 'integer', 'max:255'],
            'priority_id' => ['required', 'integer', 'max:255'],
            'type_id' => ['required', 'integer', 'max:255'],
            'user_id' => ['required', 'integer', 'max:255'],
        ];
    }
}
