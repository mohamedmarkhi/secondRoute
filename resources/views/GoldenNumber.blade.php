<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    {{-- <div id="stId">
        <h1>This is Markhi's Home Page</h1>
    </div>
    <div>
        <ul>
            <li><a href="./">Home</a></li>
        </ul>
    </div> --}}
    
    @extends('layout') 

    @section('title', 'my title')

    @section('description')


    @endsection

    {{-- URL('images/img1') --}}
    
{{-- <a href='{{ route('price', ['from' => 'HomePage']) }}'>Price</a>
<a href='{{ route('cont', ['from' => 'HomePage']) }}'>contact</a> --}}

</body>
</html>