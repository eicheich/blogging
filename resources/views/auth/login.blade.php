@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow-lg" style="width: 22rem;">
        <h2 class="text-center mb-4">Login</h2>
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" required>
                    <span class="input-group-text show-password" onclick="togglePassword()">Show</span>
                </div>
            </div>
            <div class="mb-3">
                <a href="#" class="text-decoration-none">Forgot Password?</a>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        <div class="mt-3 text-center">
            <span>Don't have an account?</span> 
            <a href="{{ route('register.page') }}" class="text-decoration-none">Register</a>
        </div>
    </div>
</div>
@endsection
