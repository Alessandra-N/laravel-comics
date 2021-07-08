@extends ('layouts.app')

@section("header_content")
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

            <div class="links">
                @foreach($links as $link)
                    <a href="">{{ $link }}</a>
                @endforeach
            </div>

            <div class="search">
                <input type="search">
            </div>
        </nav>
   
        <div class="jumbo"></div>        

    </header>


@endsection

@section("main_content")

    <main>

        <div class="container">
            @foreach($comics as $comic) 
            <div class="card">
                <div class="card_poster">
                    <img src="{{ $comic['thumb']}}" alt="">
                </div>

                <a href="">{{ $comic['title'] }}</a>

                
            </div>
            

            @endforeach
        </div>

    </main>

    <a href="{{ route('single') }}">Single!</a>
@endsection