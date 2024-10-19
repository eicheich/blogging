@foreach($posts as $post)
    <div class="card mb-4 border-0">
        <div class="card-body">
            <h5 class="card-title poppins font-weight-bold">{{ $post->title }}</h5>
            <p class="card-text crimson">
                {{ Str::limit($post->content, 200, '...') }}
            </p>
            <div class="d-flex align-items-center">
                <small class="text-muted">
                    <span class="main-color">By {{ $post->user->name ?? 'Unknown Author' }}</span>
                </small>
                <style>
                    
                </style>
            </div>
            <a href="#" class="text-dark font-weight-bold mt-3 d-block read-more-link">Read more</a>
            <style>
                .read-more-link {
                    transition: color 0.3s ease;
                }
                .read-more-link:hover {
                    color: #AF9371 !important; /* Change to your desired hover color */
                }
            </style>
        </div>
    </div>
    <hr style="border-top: 1px solid #ccc; width: 100%;">
@endforeach
