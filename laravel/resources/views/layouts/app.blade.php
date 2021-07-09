<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC comics</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/aa8b984e32.js" crossorigin="anonymous"></script>
</head>
<body>
   
    @include('partials.header')

    @yield('main_content')

    @include('partials.footer')
    
</body>
</html>