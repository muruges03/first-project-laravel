<div>
    <h1 class="text-xl font-bold">Forms validation
    </h1>
    <ul class="list-disc p-10">
        <li>To create customer using forms </li>
        <li>Fill the form is not correctly to show the error and not store the database</li>
        <li>Show the error using error method in laravel </li>
            <li>validation apply on the controller to show the errors this page</li>
            <li>Lets try the below form</li>
        </ul>
    </div>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-4xl">

            <!-- Second Form -->
            <div class="p-6 bg-white rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-center text-gray-700">Create Customer</h2>
                <form action="/customers" method="POST" class="mt-6 space-y-4">
                    @csrf
                    <div>
                        <label for="name2" class="block text-sm font-medium text-gray-600">Name</label>
                        <input type="text" id="name2" name="name"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                            >
                    </div>
                    <div>
                        <label for="email2" class="block text-sm font-medium text-gray-600">Email</label>
                        <input type="email" id="email2" name="email"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                            >
                    </div>
                    <div>
                        <label for="phone_number2" class="block text-sm font-medium text-gray-600">Phone Number</label>
                        <input type="text" id="phone_number2" name="phone_number"
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                            >
                    </div>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                        Create
                    </button>
                </form>
            </div>
            @if ($errors->any())
            <div class="p-4 mb-4 text-red-700 bg-red-100 border border-red-400 rounded-lg">
                @foreach ($errors->all() as $error)
                    <p class=" text-orange-700 bg-red-100 border border-red-400 rounded-lg italic">{{ $error }}</p>
                @endforeach
            </div>
        @endif
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
