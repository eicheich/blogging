<div class="card mb-4">
    <div class="card-header">
        Write a Post
    </div>
    <div class="card-body">
        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
            </div>
            <div class="form-group mb-3">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Write your content here" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="image">Upload Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
            </div>
            <div class="form-group mb-3">
                <img id="image-preview" src="#" alt="Image Preview" style="display: none; max-width: 50%; height: auto;">
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="is_private" name="is_private">
                <label class="form-check-label" for="is_private">Private Post</label>
            </div>
            <div class="form-check d-flex align-items-center mb-3">
                <input class="form-check-input" type="checkbox" id="allow_interaction" name="allow_interaction">
                <label class="form-check-label d-inline-flex align-items-center ms-2" for="allow_interaction">
                    Allow Interaction
                    <i class="bi bi-question-circle ms-1" data-bs-toggle="tooltip" data-bs-placement="right" title="Allow users to interact with this post (like, comment, share)"></i>
                </label>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Submit Post</button>
            </div>
        </form>
    </div>
</div>
<script>
    function previewImage(event) {
        var output = document.getElementById('image-preview');
        if (event.target.files.length > 0) {
            var reader = new FileReader();
            reader.onload = function(){
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        } else {
            output.src = '#';
            output.style.display = 'none';
        }
    }
</script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>