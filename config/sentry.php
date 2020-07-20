<?php

return [

    'dsn' => env('SENTRY_LARAVEL_DSN', env('SENTRY_DSN')),

    // capture release as git sha
    // 'release' => trim(exec('git --git-dir ' . base_path('.git') . ' log --pretty="%h" -n1 HEAD')),

    'breadcrumbs' => [
        // Capture Laravel logs in breadcrumbs
        'logs' => true,

        // Capture SQL queries in breadcrumbs
        'sql_queries' => true,

        // Capture bindings on SQL queries logged in breadcrumbs
        'sql_bindings' => true,

        // Capture queue job information in breadcrumbs
        'queue_info' => true,

        // Capture command information in breadcrumbs
        'command_info' => true,
    ],

    // @see: https://docs.sentry.io/error-reporting/configuration/?platform=php#send-default-pii
    'send_default_pii' => true,

    // Setting this to 1.0 means every single request will generate and submit tracing information to Sentry
    // @see: https://docs.sentry.io/performance-monitoring/getting-started/?platform=php
    'traces_sample_rate' => 1.0,
];
