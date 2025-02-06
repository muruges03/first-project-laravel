<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day 8</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="p-20">
    <div class="space-y-5">
        <h1 class=" text-5xl">Follow these steps:</h1>
        <h3 class="text-xl">Start the study for mine project,</h3>
    </div>
    <div>
        <ul class="space-y-3 mt-3 list-disc">
            <li>Create the migration using cli ex: php artisan make:migration create_mine_table..etc</li>
            <li>Create same type of cmd to change the rocks, inventory, vendors, invoice, orders, customer instead of mine</li>
            <li>To make done do the cmd for php artisan migrate</li>
            <li>And make a model for all above tables (php artisan make:model mine)</li>
            <li>And sure to make a factory also (php artisan make:factory minefactory)</li>
            <li>Easy tips to make a table , model and factory in single cmd use (php artisan make:model ModelName -m -f )</li>
            <li> <a class="text-blue-500" href="\day8-15"> << back</a></li>
        </ul>
    </div>
</div>
</body>
</html>
