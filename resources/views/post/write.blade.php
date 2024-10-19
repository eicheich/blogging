@extends('layouts.app')

@section('title', 'Write a Post')
@include('layouts.navbar') <!-- Navbar inclusion -->

@section('content')

<div class="container mt-5">
    @include('layouts.sessions')
    <div class="row">
        @if ($postType == 'story')
            <div class="col-md-12">
                <h2>Write Poetry</h2>
            </div>
        @endif
    </div>
</div>