<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    <!-- Includiamo gli assets con la direttiva vite -->
    @vite('resources/js/app.js')
</head>
<body class="p-5 bg-dark text-light  d-flex justify-content-center flex-wrap">
    <h1 class="w-100 text-center p-4">Laravel Template</h1>
    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo">
   <div class="w-100 text-center p-4">
     <h3>Bootstrap</h3>
    <h3>Scss</h3></div>
</body>
</html>