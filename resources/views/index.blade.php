@extends('layouts.app')

@section('title', 'Blog Index')
@include('layouts.navbar') <!-- Navbar inclusion -->

@section('content')

<div class="container mt-5">
    @include('layouts.sessions')
    @include('components.write-card') <!-- Write card inclusion -->
    <div class="row">
        <div class="col-md-8">
            <h2 class="mb-4">Latest Posts</h2>
                @foreach($posts as $post)
                <div class="card mb-4 shadow-sm border-0">
                    <div class="card-header d-flex align-items-center">
                        <img src="{{ $post->user->avatar ?? asset('storage/img/image.png') }}" 
                             onerror="this.onerror=null;this.src='https://via.placeholder.com/40';" 
                             class="rounded-circle" 
                             alt="Author Avatar" 
                             style="width: 40px; height: 40px; margin-right: 15px !important;">
                        <div>
                            <h6 class="mb-0 font-weight-bold">{{ $post->user->name }}</h6>
                            <small class="text-muted">{{ '@' . $post->user->username }}</small>
                        </div>
                    </div>
                    

                    @if($post->thumbnail)
                        <img src="{{ $post->thumbnail }}" class="card-img-top" alt="Blog Image">
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">
                            {{ Str::limit($post->content, 200, '...') }}
                        </p>

                        <div class="mt-auto">
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                            @if($post->allow_interaction == 1)
                                <a href="#" class="btn btn-outline-primary btn-sm ml-2">Interact</a>
                            @else
                                <a href="#" class="btn btn-outline-secondary btn-sm ml-2 disabled">Interact</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

        

            
            <!-- Blog post 2 -->
            <div class="card mb-4">
                <img src="https://via.placeholder.com/750x300" class="card-img-top" alt="Blog Image">
                <div class="card-body">
                    <h5 class="card-title">Blog Post Title 2</h5>
                    <p class="card-text">Another short description about a different blog post. Make it intriguing to grab attention.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>

            <!-- Pagination -->
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
