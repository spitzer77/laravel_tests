<?php

namespace App\Http\Requests\Test;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'person' => 'required|string',
            'test_date' => 'required|date',
            'location' => 'required|string',
            'score' => 'nullable|integer',
            'criterion' => 'nullable|integer',
            'user_id' => 'required|exists:users,id',
        ];
    }
}
