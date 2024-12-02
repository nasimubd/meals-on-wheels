<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "address" => ["required","string"],
            "phonenumber" =>["required","string"],
            "age"=>["required","integer"],
            "dietary_restriction" =>["required","string"],
            "disease_suffering"=>["required","string"],
            "disability" =>["nullable","string"]
        ];
    }
}
