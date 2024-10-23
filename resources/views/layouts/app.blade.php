<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
        }
        .poppins{
            font-family: 'Poppins', sans-serif;
        }
        .crimson {
            font-family: 'Crimson Text', serif;
        }
        .show-password {
            cursor: pointer;
        }
        .main-color {
            color: #AF9371;
        }
    </style>
</head>
<body>
    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    @include('layouts.footer')

    <!-- JavaScript -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordToggle = document.querySelector('.show-password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggle.textContent = 'Hide';
            } else {
                passwordInput.type = 'password';
                passwordToggle.textContent = 'Show';
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
