<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        @livewireStyles
        @powerGridStyles

        <!-- Scripts -->
         
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
    //

</body>
</html>
