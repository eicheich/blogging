@extends('layouts.app')

@section('title', 'Login')

@section('content')

<h1>Email Verification</h1>

@if (session('message'))
    <p>{{ session('message') }}</p>
@endif

<p>Please verify your email address by clicking the link we just sent to your email.</p>

<p>If you did not receive the email, click below to request another one:</p>

<form method="POST" action="{{ route('verification.send') }}">
    @csrf
    <button type="submit">Resend Verification Email</button>
</form>

@endsection
