<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * {@inheritdoc}
     */
    public function report(Throwable $exception)
    {
        if ($this->shouldReport($exception) && app()->bound('sentry')) {
            app('sentry')->captureException($exception);
        }

        parent::report($exception);
    }

    /**
     * {@inheritdoc}
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }
}
