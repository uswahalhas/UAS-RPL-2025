<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Booking System') }}</title>

    <!-- Link to CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Optional: Include any additional styles -->
    @stack('styles')
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/booking') }}">Booking</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>

                @auth
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link nav-link">Logout</button>
        </form>
    </li>
@endauth

            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content') <!-- Content from specific views will be injected here -->
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Booking System. All rights reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Optional: Include any additional scripts -->
    @stack('scripts')
</body>
</html>
