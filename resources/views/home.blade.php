@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            My TODO items

            <a href="{{ route('todo.create') }}" class="btn btn-xs btn-outline-success float-right">
                <i class="fa fa-fw fa-plus"></i> Create
            </a>
        </div>

        <div class="card-body">
            <ul class="list-group">
                @forelse(auth()->user()->todos as $todo)
                    <li class="list-group-item">
                        {{ $todo->name }}

                        <hr>

                        @if($todo->finished)
                            <a href="{{ route('todo.mark-as-unfinished', [$todo->id]) }}" data-submit class="btn btn-sm btn-secondary">
                                <i class="fa fa-fw fa-times"></i> Mark unfinished
                            </a>
                        @else
                            <a href="{{ route('todo.mark-as-finished', [$todo->id]) }}" data-submit class="btn btn-sm btn-success">
                                <i class="fa fa-fw fa-check"></i> Mark finished
                            </a>
                        @endif

                        <a href="{{ route('todo.delete', [$todo->id]) }}" data-submit="delete" class="btn btn-sm btn-outline-danger">
                            <i class="fa fa-fw fa-trash"></i> Delete
                        </a>
                    </li>
                @empty
                    <li class="list-group-item">
                        No TODO items found, <a href="{{ route('todo.create') }}">create one</a>!
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
@endsection
