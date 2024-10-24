<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoardgameCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //

            'name' =>'required|min:1',
            'type' =>'required|min:3',
            'players' =>'required|min:1|numeric',
            'instructor' =>'required|min:3',
            'box' =>'image'
        ];
    }
}
