<div>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <h1 class="text-center text-xl font-bold">day 11 explain about eloquent relationship <a class="text-blue-500" href="\day8-15"> << back</a></h1>
    <ul class="space-y-3 mt-3 text-lg p-6 list-disc">
       <li>Two key relationship is explain the relationship of table </li>
       <li>This can happen in many-to-many relationships, has-many-through relationships, or composite foreign key scenarios. </li>
       <li>below the example to explain the relationship</li>
       <li>customer details show based on relationship of belongsTo</li>
    </ul>
    <form action="{{ route('orders.store') }}" method="POST" class="max-w-lg mx-auto p-4 bg-white shadow-md rounded-lg">
        @csrf
        <h2 class="text-xl font-bold mb-4 text-center">Create Order</h2>

        <!-- Customer Selection -->
        <label for="customer_id" class="block text-sm font-medium">Select Customer:</label>
        <select name="customer_id" id="customer_id" class="w-full p-2 border rounded-lg mt-1">
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>

        <!-- Vendor Selection -->
        <label for="vendor_id" class="block text-sm font-medium mt-3">Select Vendor:</label>
        <select name="vendor_id" id="vendor_id" class="w-full p-2 border rounded-lg mt-1">
            @foreach($vendors as $vendor)
                <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
            @endforeach
        </select>

        <!-- Rock Type -->
        <label for="rock_type" class="block text-sm font-medium mt-3">Rock Type:</label>
        <select name="rock_type" id="rock_type" class="w-full p-2 border rounded-lg mt-1">
            <option value="igneous">igneous</option>
            <option value="sedimentary">sedimentary</option>
            <option value="metamorphic">metamorphic</option>
        </select>
        <!-- Status -->
        <label for="status" class="block text-sm font-medium mt-3">Status:</label>
        <select name="status" id="status" class="w-full p-2 border rounded-lg mt-1">
            <option value="pending">Pending</option>
            <option value="approved">Approved</option>
            <option value="shipped">Shipped</option>
        </select>

        <!-- Quantity -->
        <label for="quantity" class="block text-sm font-medium mt-3">Quantity (Tons):</label>
        <input type="number" name="quantity" id="quantity" class="w-full p-2 border rounded-lg mt-1" placeholder="Enter quantity">

        <!-- Submit Button -->
        <button type="submit" class="w-full bg-blue-500 text-white font-bold p-2 rounded-lg mt-4">Create Order</button>
    </form>
     customer details show based on relationship:
     @foreach ($orders as $order)
     <ul>
        <li>order id :{{$order->id}}</li>
        <li>customer name :{{$order->customer->name}}</li>
        <li>customer email :{{$order->customer->email}}</li>
    </ul>
     @endforeach

</div>
