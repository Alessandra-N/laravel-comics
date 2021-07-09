@extends('layouts.app')



@section("main_content")
    <main id="index_main">

        <div class="container">
            <div class="current">CURRENT SERIES</div>
            @foreach($comics as $index => $comic) 
            <div class="card">
            <a href="{{route('comic', ['id' => $index])}}">
                <div class="card_poster">
                    <img src="{{ $comic['thumb']}}" alt="">
                </div>
                <p>{{ $comic['series'] }}</p>
            </a>
                
        </div>
            @endforeach
        </div>

        <button>LOAD MORE</button>
        
        <div class="main_links">
            @foreach($main_links as $main_link)
            <div class="main_link">
                
                <img src="img/buy-{{ $main_link['src']}}" alt="">
                <a href="#">{{ $main_link['title']}}</a> 
                
            </div>
            @endforeach
        </div>
        
    </main>
@endsection