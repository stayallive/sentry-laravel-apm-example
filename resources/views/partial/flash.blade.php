@if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

@if(session('message'))
    <div class="alert alert-{{ session('message.type', 'info') }}" role="alert">
        {{ session('message.text', 'Missing flash message!') }}
    </div>
@endif
