<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Default')</title>
    <link rel="stylesheet" href="{{asset("style.css")}}">
</head>
<body>
    @section('')
       @include('includes.navbar')       
    @show

    <div class="content-page">
        @yield('content')
    </div>
</body>
</html>