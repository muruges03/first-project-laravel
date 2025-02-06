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
        <h1 @mouseover="open = true" @click.away="open = false" class=" text-5xl p-8 m-auto text-white">welcome to day 1-7 (Basic Steps)</h1>
       @include('learn.day1-7routes.welcome')
       <div class="flex justify-center item-center h-32 w-full">{{ $slot }}</div>

    </div>
        <div  x-show="open"  class="">
            <x-sidebar ></x-sidebar>
        </div>
    </div>

</body>

</html>
