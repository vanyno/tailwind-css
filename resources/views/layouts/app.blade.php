<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a class="text-lg font-semibold text-gray-800">
                {{ config('app.name', 'Laravel') }}
            </a>
            <div class="flex items-center space-x-4">
                <a class="text-gray-600 hover:text-gray-900">Home</a>
                <a class="text-gray-600 hover:text-gray-900">About</a>
                <a class="text-gray-600 hover:text-gray-900">Contact</a>
                @auth
                    <a class="text-gray-600 hover:text-gray-900">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-gray-900">Logout</button>
                    </form>
                @else
                    <a class="text-gray-600 hover:text-gray-900">Login</a>
                    <a class="text-gray-600 hover:text-gray-900">Register</a>
                @endauth
            </div>
        </div>
    </nav>
    @yield('content')

    <!-- Footer -->
    <footer class="bg-white shadow-md py-4 mt-12">
        <div class="container mx-auto text-center text-gray-600">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.
        </div>
    </footer>

</body>
</html>
``
