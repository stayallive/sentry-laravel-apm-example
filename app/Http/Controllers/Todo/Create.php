<?php

namespace App\Http\Controllers\Todo;

use App\Entities\Todo;
use App\Http\Controllers\Controller;
use App\Http\Requests\Todo\Create as CreateRequest;

class Create extends Controller
{
    public function __invoke(CreateRequest $request)
    {
        $this->user()->todos()->save(
            new Todo($request->validated())
        );

        return redirect()->route('home')->with('message', [
            'type' => 'success',
            'text' => 'Created your TODO item!',
        ]);
    }
}
