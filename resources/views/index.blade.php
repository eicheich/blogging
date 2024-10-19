@extends('layouts.app')

@section('title', 'Blog Index')
@include('layouts.navbar') <!-- Navbar inclusion -->

@section('content')

<div class="container mt-5">
    @include('layouts.sessions')
    <div class="row">
        {{-- welcome $username --}}
        <div class="col-md-12">
            <h2>Welcome, {{ $user->username }}</h2>
        </div>
        <hr style="border-top: 1px solid #ccc; width: 100%;">
        <div class="col-md-8">
            <h3 class="mb-4">Latest Posts</h3>
            @include('components.read-post-card')
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <!-- Sidebar section -->
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    About
                </div>
                <div class="card-body">
                    <p>This is a blog about various topics, ranging from technology to lifestyle. Stay tuned for regular updates!</p>
                </div>
            </div>
            
            <div class="card mb-4">
                <div class="card-header">
                    Categories
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Technology</a></li>
                    <li class="list-group-item"><a href="#">Lifestyle</a></li>
                    <li class="list-group-item"><a href="#">Health</a></li>
                    <li class="list-group-item"><a href="#">Travel</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
