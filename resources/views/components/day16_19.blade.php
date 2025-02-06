<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day 1-5</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="rounded-lg">
    <div x-data="{ open: false }"     class="flex w-100vw rounded-lg h-screen justify-center item-center">
        <div class="bg-pink-600">
        <h1 @mouseover="open = true" @click.away="open = false" class=" text-4xl p-8 m-auto text-white">welcome to day 16-19 forms explanations</h1>
       @include('learn.day16-19routes.welcome')

    </div>
        <div  x-show="open"  class="">
        </div>
    </div>

</body>

</html>
