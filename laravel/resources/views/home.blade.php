<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC comics</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body>
    <header id="header">

        <div class="blue_container">
            <div class="copyright">
                <div>DC POWER VISA</div>
                <div>ADDITIONAL DC SITE</div>
            </div>
        </div>
        
        <nav>
            <div class="logo">
                <img src="../img/dc-logo.png" alt="">
            </div>


        </nav>

    </header>

    <h1>Ciao!</h1>
    <a href="{{ route('single') }}">Single!</a>
</body>
</html>