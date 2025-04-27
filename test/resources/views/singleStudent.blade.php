<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('bootstrap')
</head>
<body>
    <div class="container-fluid px-0">
        @foreach ($data as $item)
        <h1 class="text-center py-4 bg-dark text-light">Welcome {{$item->Name}}</h1>
        @endforeach
        <h3 class="text-center">your Information are Here</h3>
        <div class="container">

            @foreach($data as $item)
            <h4>Name: {{$item->Name}}</h4>
            <h4>Email: {{$item->Email}}</h4>
            <h4>Age: {{$item->Age}}</h4>
            <h4>Phone: {{$item->Phone}}</h4>
            <h4>Address: {{$item->Address}}</h4>
            @endforeach
        </div>

        <div class="text-center">
            <button class="btn btn-success mt-5"><a class="text-decoration-none text-light px-3 py-2 fs-4" href="{{route('s_info')}}">Home</a></button>
        </div>
    </div>
</body>
</html>