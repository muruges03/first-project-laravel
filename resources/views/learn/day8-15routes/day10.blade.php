<div>
    <h1 class="text-center">day 10 explain about factories how to work in laravel <a class="text-blue-500" href="\day8-15"> << back</a></h1>
    <ul class="space-y-3 mt-3 list-disc">
       <li>First you create the factories like day 8 if you create start the day 10 lession</li>
       <li>Factories are make a fack data for the database</li>
       <li>They are define the blueprints for model instances</li>
       <li>Try the example below to generate the fake vendor</li>
       <li>Below example to create the fake data based on factory its used for test purpose</li>
    </ul>
    <button id="generatevendor">click to generate</button>
    <span> Total count {{$vendors->count()}}</span>
    @foreach ($vendors as $vendor)
<ul>
    <li>name:{{$vendor->name}}</li>
    <li>type:{{$vendor->type}}</li>
    <li>contact:{{$vendor->contact}}</li>
    <li>status:{{$vendor->status}}</li>
</ul>
    @endforeach
{{ $vendors->links() }}
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#generatevendor").click(function () {
            $.ajax({
                url: "/generate_vendor",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function (data) {
                   location.reload()
                },
                error: function () {
                    alert("Something went wrong!");
                }
            });
        });
    });
</script>
