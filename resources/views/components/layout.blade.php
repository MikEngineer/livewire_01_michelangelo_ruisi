<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Livewire</title>
    @vite('resources/css/app.css')
</head>

<body>

    {{$slot}}


    @vite('resources/js/app.js')
</body>

</html>