@if (count($errors) > 0)
    @foreach( $errors->all() as $error)
        <p class="alert alert-danger">{{ $error }} </p>
    @endforeach
@endif

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
@if (session('warning'))
<div class="alert alert-warning">
    {{ session('warning') }}
</div>
@endif

@if (session()->has('message'))
    <p class="alert alert-success">{{session('message') }}</p>
@endif