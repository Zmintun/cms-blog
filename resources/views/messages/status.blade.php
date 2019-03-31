@foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{ $error }}
    </div>
@endforeach

@if(session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
@endif