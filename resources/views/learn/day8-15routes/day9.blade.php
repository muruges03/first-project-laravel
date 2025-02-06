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
        <h1 class=" text-3xl">create and view using eloquent ORM</h1>
    </div>
    <form action="/customers" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
        </div>
        <div>
            <label for="phone_number" class="block text-sm font-medium text-gray-600">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Create</button>
    </form>
    @foreach ($customers as $customer)
    <ul class="text-lg text-center mt-6">
        <li>name: {{$customer->name}}</li>
        <li>email: {{$customer->email}}</li>
        <li>phone number: {{$customer->phone_number}}</li>
    </ul>
    @endforeach
    {{ $customers->links() }}

    <div>
        <ul class="space-y-3 mt-3 list-disc">
           <li>Above examples explained on eloquent ORM</li>
           <li>Above example to create the customer using the create method ex: Customer::create(data) and using multiple methods like insert,update,detach,delete,...etc</li>
           <li>And show the data based on retrive the records using Customer::all() , and using multiple methods like find, select, where..etc </li>
            <li> <a class="text-blue-500" href="\day8-15"> << back</a></li>
        </ul>
    </div>
</div>
</body>
</html>
