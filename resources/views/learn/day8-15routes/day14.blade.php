<div class="p-10">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <h1 class="text-center text-xl font-bold">day 14 all You Need to Know About Pagination<a class="text-blue-500" href="\day8-15"> << back</a></h1>
    <ul class="space-y-3 mt-3 text-lg p-9 list-disc">
<li>Create the pagination in render the page data using paginate method</li>
<li>To customize the pagination to publish the vendor laravel pagination</li>
<li>Most use pagination methods are simplepagination, paginate, cursorpagination.</li>
<li>cursorpagination is base64-encoded its look as same in first one hover the paginate see difference</li>
    </ul>
    <h1 class="mt-4 font-bold">first one using normal pagination</h1>
    @foreach($mines as $mine)
    <ul class="list-disc">
        <li>{{$mine->name}}</li>
    </ul>
    @endforeach
    <span>{{$mines->links()}}</span>
    <h1 class="mt-4 font-bold">Second one using simple pagination</h1>
    @foreach($stoneTypes as $type)
    <ul class="list-disc">
        <li>{{$type->name}}</li>
    </ul>
    @endforeach
    <span>{{$stoneTypes->links()}}</span>
    <h1 class="mt-4 font-bold">thired one using curser pagination</h1>
    @foreach($customers as $customer)
    <ul class="list-disc">
        <li>{{$customer->name}}</li>
    </ul>
    @endforeach
    <span>{{$customers->links()}}</span>
</div>
