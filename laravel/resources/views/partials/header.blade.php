<header id="header">
    
    <div class="blue_container">
        
        <div class="copyright">
            <div class="copyright_left">
                DC POWER<i class="fas fa-trademark"></i> 
                VISA<i class="far fa-registered"></i>
            </div>
            <div>
                ADDITIONAL DC SITE<i class="fas fa-caret-down"></i>
            </div>
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
                @if ($loop->last)
                    <i class="fas fa-caret-down"></i>
                @endif
            @endforeach
        </div>

        <div class="search">
            <input type="search" placeholder="Search">
            <button><i class="fas fa-search"></i></button>
        </div>
    </nav>

    <div class="jumbo"></div>        

</header>