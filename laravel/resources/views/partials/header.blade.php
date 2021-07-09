<header id="header">
    
    <div class="blue_container">
        
        <div class="copyright">
            <div>DC POWER VISA</div>
            <div>ADDITIONAL DC SITE</div>
        </div>

    </div>

    <nav>
        <div class="logo">
            <a href="{{route('index')}}">
                <img src="../img/dc-logo.png" alt="">
            </a>
        </div>

        <div class="links">
            @foreach($links as $link)
                <a href="">{{ $link }}</a>
            @endforeach
        </div>

        <div class="search">
            <input type="search" placeholder="Search">
        </div>
    </nav>

    <div class="jumbo"></div>        

</header>