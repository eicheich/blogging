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