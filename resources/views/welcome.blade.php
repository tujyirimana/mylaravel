<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stock Management System</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Header Navigation -->
<header class="py-3 bg-light border-bottom">
    <div class="container d-flex justify-content-end">
        @if (Route::has('login'))
            <nav class="d-flex gap-3">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-secondary">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</header>

<!-- Main Section -->
<main class="text-center py-5">
    <div class="container">
        <h1 class="mb-3">
            STOCK MANAGEMENT SYSTEM USING Laravel 12
        </h1>
        <p class="lead">
            Welcome to your centralized system for managing product stocks efficiently and effectively.
        </p>
    </div>
</main>

</body>
</html>