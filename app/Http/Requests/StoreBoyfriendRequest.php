<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBoyfriendRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "firstname" => "required|string|max:200",
            "lastname" => "required|string",
            "birthday" => "nullable|date", //1992 - 2004
            "available" => "boolean",
            "height" => "required|integer|min:180|max:205", //190 min - 205 max
        ];
    }
}
