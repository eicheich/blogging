@extends('layouts.app')

@section('title', 'Write a Post')
@include('layouts.navbar') <!-- Navbar inclusion -->

@section('content')

<div class="container mt-5">
    @include('layouts.sessions')
    <div class="row">
        @if ($postType == 'story')
            <div class="col-md-12">
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" name="body" rows="10" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        @endif
    </div>
</div>
@if ($postType == 'basic')
    <div class="col-md-12">
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
        <label for="summary">Summary</label>
        <textarea class="form-control" id="summary" name="summary" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endif

@endsection
