<?php

namespace App\Http\Requests\Todo;

use App\Http\Requests\Request;
use Illuminate\Validation\Rules\Unique;

class Create extends Request
{
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                (new Unique('todos'))
                    ->where('user_id', $this->user()->getAuthIdentifier()),
            ],
        ];
    }
}
