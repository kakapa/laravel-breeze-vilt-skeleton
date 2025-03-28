<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullnames' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'initials' => ['required', 'string', 'max:3'],
            'mobile_number' => [
                'required',
                'string',
                'min:10',
                'max:10',
                'regex:/(0)[0-9]{9}/',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            'email' => [
                'nullable',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
        ];
    }
}
