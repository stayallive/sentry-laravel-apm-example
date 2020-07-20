<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;

class Delete extends Controller
{
    public function __invoke(int $id)
    {
        /** @var \App\Entities\Todo $todo */
        $todo = $this->user()->todos()->findOrFail($id);

        $todo->delete();

        return redirect()->back();
    }
}
