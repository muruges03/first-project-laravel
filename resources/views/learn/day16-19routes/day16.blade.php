<div>
    <h1 class="text-xl font-bold">Forms and CSRF Explained (with Examples)
    </h1>
    <ul class="list-disc p-10">
        <li>To create customer using forms </li>
        <li>first one is not have a @csrf token its show the 419 error for laravel form authentication</li>
        <li>Second one is include the csrf token so its save and show the data</li>
        <li>Try to feel the difference note: (when show the 419 page back on the browser)</li>
    </ul>
</div>
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-4xl">
        <!-- First Form -->
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center text-gray-700">Create Customer</h2>
            <form action="/customers" method="POST" class="mt-6 space-y-4">
                <div>
                    <label for="name1" class="block text-sm font-medium text-gray-600">Name</label>
                    <input type="text" id="name1" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div>
                    <label for="email1" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" id="email1" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div>
                    <label for="phone_number1" class="block text-sm font-medium text-gray-600">Phone Number</label>
                    <input type="text" id="phone_number1" name="phone_number" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                    Create
                </button>
            </form>
        </div>

        <!-- Second Form -->
        <div class="p-6 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center text-gray-700">Create Customer</h2>
            <form action="/customers" method="POST" class="mt-6 space-y-4">
                @csrf
                <div>
                    <label for="name2" class="block text-sm font-medium text-gray-600">Name</label>
                    <input type="text" id="name2" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div>
                    <label for="email2" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" id="email2" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div>
                    <label for="phone_number2" class="block text-sm font-medium text-gray-600">Phone Number</label>
                    <input type="text" id="phone_number2" name="phone_number" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                    Create
                </button>
            </form>
        </div>
    </div>
</div>

<div class="mt-8 max-w-3xl mx-auto">
    <h2 class="text-xl font-semibold text-center text-gray-700">Customer List</h2>
    <div class="bg-white shadow-md rounded-lg p-6 mt-4">
        @foreach ($customers as $customer)
            <div class="p-4 border-b border-gray-200">
                <p class="text-gray-800"><strong>Name:</strong> {{ $customer->name }}</p>
                <p class="text-gray-800"><strong>Email:</strong> {{ $customer->email }}</p>
                <p class="text-gray-800"><strong>Phone:</strong> {{ $customer->phone_number }}</p>
            </div>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $customers->links() }}
    </div>
</div>
