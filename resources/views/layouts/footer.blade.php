<footer class="bg-dark text-white mt-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-4">
                <h5>HOUSELAB</h5>
                <p>Your one-stop platform for sharing and learning.</p>
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('index') }}" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="" class="nav-link disabled text-decoration-none">Browse</a></li>
                    <li><a href="{{ route('post.create', ['postType' => 'basic']) }}" class="text-white text-decoration-none">Write a Post</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>Email: support@houselab.com</p>
                <p>Phone: +123 456 7890</p>
                <div>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <p>&copy; 2024 HOUSELAB. All Rights Reserved.</p>
        </div>
    </div>
</footer>
