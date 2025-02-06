<div class="mt-8 max-w-3xl mx-auto">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <h2 class="text-xl font-semibold text-center text-gray-700">Customer List</h2>
    <div class="bg-white shadow-md rounded-lg p-6 mt-4">
        @foreach ($customers as $customer)
            <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                <div>
                    <p class="text-gray-800"><strong>Name:</strong> {{ $customer->name }}</p>
                    <p class="text-gray-800"><strong>Email:</strong> {{ $customer->email }}</p>
                    <p class="text-gray-800"><strong>Phone:</strong> {{ $customer->phone_number }}</p>
                </div>
                <div class="flex gap-10">
                    <a href="{{ route('customers.edit', $customer->id) }}"
                        class="bg-blue-500 text-white px-4 pt-2 h-9 rounded-lg hover:bg-blue-600 transition">
                        Edit
                    </a>
                    <form action="{{ route('customers.delete', $customer->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <div type="submit"
                            class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition"
                           >
                            Delete
                    </div>
                    </form>
                </div>



            </div>
        @endforeach
    </div>
    <div class="mt-4">
        {{ $customers->links() }}
    </div>
</div>

