<div>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <h1 class="text-center text-xl font-bold">day 12 explain about Pivot Tables and BelongsToMany Relationships <a class="text-blue-500" href="\day8-15"> << back</a></h1>
    <ul class="space-y-3 mt-3 text-lg p-9 list-disc">
<li>Ex: single mine have a multiple stone types its have to achive belongstomany relationships</li>
<li>This relationship to achive to store and show the data and its store the pivot tables</li>
<li>Pivot table are intermediate table its have a mine id and stone type id to store data</li>
<li>Below the example to unterstand how its works</li>
    </ul>
    <form action="{{ url('/store-mine-stones') }}" method="POST" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf
        <div class="mb-4">
            <label for="mine" class="block text-gray-700 font-medium">Select Mine:</label>
            <select name="mine_id" id="mine" required class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                @foreach ($mines as $mine)
                    <option value="{{ $mine->id }}">{{ $mine->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="stone_types" class="block text-gray-700 font-medium">Select Stone Types:</label>
            <select name="stone_types[]" size="3" id="stone_types" multiple  class="w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                @foreach ($stoneTypes as $stoneType)
                    <option value="{{ $stoneType->id }}">{{ $stoneType->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">Assign Stones</button>
    </form>
    <div class="container mx-auto p-6">
        @foreach ($mines as $mine)
            <div class="bg-white shadow-lg rounded-lg p-4 mb-6">
                <h2 class="text-xl font-semibold text-gray-800 border-b pb-2 mb-4">
                    {{ $mine->name }}
                </h2>
                <ul class="space-y-2">
                    @foreach ($mine->stoneTypes as $stoneType)
                        <li class="flex items-center bg-gray-100 px-4 py-2 rounded-lg">
                            <span class="text-gray-700">{{ $stoneType->name }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

</div>
