<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
{
    public function user($guard = null): ?User
    {
        return parent::user($guard);
    }

    public function authorize(): bool
    {
        return auth()->check();
    }
}
