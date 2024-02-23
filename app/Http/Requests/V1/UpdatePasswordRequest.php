<?php

namespace App\Http\Requests\V1;

use App\Http\Requests\APIFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends APIFormRequest
{
    public function rules(): array
    {
        return [
            'new_password' => 'required|string|min:6',
        ];
    }
}
