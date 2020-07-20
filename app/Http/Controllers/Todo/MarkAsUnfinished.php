<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;

class MarkAsUnfinished extends Controller
{
    public function __invoke(int $id)
    {
        /** @var \App\Entities\Todo $todo */
        $todo = $this->user()->todos()->findOrFail($id);

        $todo->finished_at = null;
        $todo->save();

        return redirect()->back();
    }
}
