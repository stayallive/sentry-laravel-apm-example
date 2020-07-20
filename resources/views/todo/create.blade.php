@extends('layouts.default')

@section('content')
    {!! Former::open() !!}
    <div class="card">
        <div class="card-header">Create a new TODO item</div>

        <div class="card-body pb-1">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {!! Former::text('name')->required() !!}
        </div>

        <div class="card-footer text-right">
            {!! Former::primary_submit('Save') !!}
        </div>
    </div>
    {!! Former::close() !!}
@endsection
