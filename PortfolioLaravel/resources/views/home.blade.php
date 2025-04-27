<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('bootstrap')
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <title>Portfolio</title>

</head>
<body>
    {{-- --------------Navbar------------- --}}
    @include('component.navbar')

    {{-- ------------- Content ----------- --}}
    @include('component.content')

    @include('component.login')

    {{-- -------------- Footer ------------- --}}
    
</body>
</html>