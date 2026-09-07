<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class FormRequestProspect extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            "name" => [
                "required",
                "string",
                "max:255"
            ],
            "phone" => [
                "required",
                "string",
                "max:10",
                "unique:prospects,phone"
            ],
        ];
    }

    protected function failedValidation(Validator $validator): void {
        throw new HttpResponseException(
            response() -> json([
                "message" => "Validación fallida",
                "errors" => $validator->errors()
            ], 422)
        );
    }
}
