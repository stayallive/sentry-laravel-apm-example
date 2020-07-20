<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;

class MarkAsFinished extends Controller
{
    public function __invoke(int $id)
    {
        /** @var \App\Entities\Todo $todo */
        $todo = $this->user()->todos()->findOrFail($id);

        $todo->finished_at = now();
        $todo->save();

        return redirect()->back();
    }
}
