<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    {{ $css }}
    <title>{{ $title }}</title>

</head>

<body class="h-full">
    <div class="min-h-full">

        <x-navbar-sidebar></x-navbar-sidebar>

        <main class="p-4 md:ml-64 h-auto pt-16">
            <div class="mx-auto max-w-8x1 px-4 py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
</body>

</html>
