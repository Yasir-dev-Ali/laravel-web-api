<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Laravel App' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100 text-gray-900">

    {{-- Navbar --}}
    <header class="p-4 bg-blue-600 text-white">
        <h1 class="text-xl font-semibold">My Laravel App</h1>
    </header>

    {{-- Main content from child views --}}
    <main class="p-6">
        {{ $slot }}
    </main>

</body>
</html>
