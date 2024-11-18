<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Presto</title>
</head>

<body>
    <x-navbar></x-navbar>
    <div class=" spazioNav2">
        {{ $slot }}
    </div>
    <x-footer></x-footer>

</body>

</html>
