@if (session('success'))
    <div class="alert alert-success text-dark" role="alert">
        {{ session('success') }}
    </div>
@elseif (session('error'))
    <div class="alert alert-danger text-dark" role="alert">
        {{ session('error') }}
    </div>
@elseif (session('warning'))
    <div class="alert alert-warning text-dark" role="alert">
        {{ session('warning') }}
    </div>
@endif