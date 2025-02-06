
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-lg bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold text-center text-gray-700">Edit Customer</h2>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Display Errors -->
        @if (session('success'))
        <div class="p-4 mb-4 text-green-700 bg-green-100 border border-green-400 rounded-lg">
            <p class="text-green-500">{{ session('success') }}</p>
        </div>

    @endif

    <span><a class="font-bold text-blue-500" href="/day18"><< back</a></span>
        <!-- Update Form -->
        <form action="{{ route('customers.update', $customer->id) }}" method="POST" class="mt-6 space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $customer->name) }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $customer->email) }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label for="phone_number" class="block text-sm font-medium text-gray-600">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $customer->phone_number) }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                Update
            </button>
        </form>


    </div>
</div>

