<style>
    body{
        background-image: url('{{ asset('images/image.png') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        opacity: 0.9;
    }
    .content {
        background-color: rgba(255, 255, 255, 0.8);
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="content">
        <nav class="navbar navbar-expand-md navbar-light bg-dark">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ route('dashboard') }}">
                    <h4>Flights.com</h4>
                </a>
                <a class="navbar-brand text-white" href="{{ route('bookings') }}">
                    <h4>Bookings</h4>
                </a>
                <a class="navbar-brand text-white" href="{{ route('passengers') }}">
                    <h4>Passengers</h4>
                </a>
            </div>
        </nav>

        <div class="container mt-4">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
