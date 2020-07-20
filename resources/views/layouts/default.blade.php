@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('partial.flash')

                @yield('content')
            </div>
        </div>
    </div>
@endsection
