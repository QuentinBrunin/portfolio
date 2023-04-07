<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.4.1/dist/css/glide.core.min.css">
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
        <title>Laravel</title>
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body>
    @inertia
    <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
