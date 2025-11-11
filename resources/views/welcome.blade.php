<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel App') }}</title>

    {{-- Load Vite assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 text-gray-800">
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">
                {{ config('app.name', 'Laravel App') }}
            </h1>
            <nav class="space-x-4">
                <a href="/" class="text-gray-700 hover:text-indigo-600 font-medium">Home</a>
                <a href="/about" class="text-gray-700 hover:text-indigo-600 font-medium">About</a>
                <a href="/contact" class="text-gray-700 hover:text-indigo-600 font-medium">Contact</a>
            </nav>
        </div>
    </header>

    <main class="max-w-3xl mx-auto mt-12 px-6 text-center">
        <h2 class="text-4xl font-extrabold text-indigo-700 mb-4">
            Welcome to {{ config('app.name', 'Laravel App') }} 🚀
        </h2>
        <p class="text-lg text-gray-600 mb-8">
            You’re running Laravel {{ app()->version() }} on PHP {{ PHP_VERSION }}.
        </p>
        <a href="{{ url('/chirps') }}" 
           class="inline-block bg-indigo-600 text-white font-semibold px-6 py-3 rounded-lg shadow hover:bg-indigo-700 transition">
            View Chirps
        </a>
    </main>

    <footer class="mt-16 py-6 text-center text-gray-500 text-sm border-t">
        &copy; {{ date('Y') }} {{ config('app.name', 'Laravel App') }}. All rights reserved.
    </footer>
</body>
</html>
