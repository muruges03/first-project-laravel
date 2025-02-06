<div class="p-10">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <h1 class="text-center text-xl font-bold">day 13 Eager Loading and the N+1 Problem<a class="text-blue-500" href="\day8-15"> << back</a></h1>
    <ul class="space-y-3 mt-3 text-lg p-9 list-disc">
<li>Eager loading is Reduces the number of database queries
    and Improves performance in scenarios where related data is always needed. </li>
<li>Lazy loading are Can lead to the N+1 problem if multiple related records are accessed inefficiently.</li>
<li>Below example with queries to click the laravel debugbar and check here</li>
<li>First one are fetch the data based on Eager loading </li>
<li>Second one fetch the data based on lazy loading with n+1 problem</li>
    </ul>
    <h1 class="mt-4 font-bold">first example of eager loading using mine names</h1>
    @foreach($mines as $mine)
    <ul class="list-disc">
        <li>{{$mine->name}}</li>
    </ul>
    @endforeach
    <h1 class="mt-4 font-bold">Second example of lazy loading using stone type names</h1>
    @foreach($stoneTypes as $type)
    <ul class="list-disc">
        <li>{{$type->name}}</li>
    </ul>
    @endforeach
</div>
