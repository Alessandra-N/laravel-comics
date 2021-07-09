@extends('layouts.app')

@section('header_content')
@endsection

@section('main_content')

<main id="show_main">

    <div class="blue_line">
        <img src="{{$comic['thumb']}}" alt="">
    </div>

   <div class="comic_wrapper">

        <div class="comic_wrapper_top">
            <div class="top_left">
                <div class="comic_title">
                    {{$comic['title']}}
                </div>

                <div class="comic_price">
                    <div class="price_left">
                        <p><span> U.S. Price:</span> {{$comic['price']}}</p>
                        <p><span>Avaible</span></p>
                    </div>
                    <div class="price_right">
                        <p>Check Avaibility</p>
                    </div>
                </div>

                <div class="comic_description">
                    {{$comic['description']}}
                </div>
            </div>

            <div class="top_right">
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
            
        </div>

        <div class="comic_wrapper_bot">
            <div class="bot_left">
                <div class="bot_title">Talent</div>
                <div class="bot_art">
                    <h5>Art by</h5>
                    <div class="bot_artist_list">
                    <p>
                        @foreach($comic['artists'] as $comic_artist)
                            {{$comic_artist}}
                        @endforeach
                    </p>
                    </div>
                </div>
                <div class="bot_write">
                    <h5>Written by</h5>
                    <div class="bot_writers_list">
                    <p>
                        @foreach($comic['writers'] as $comic_writer)
                            {{$comic_writer}}
                        @endforeach
                    </p>
                    </div>
                </div>
            </div>

            <div class="bot_right">
                <div class="bot_series">
                    <h5>Series:</h5>
                    {{$comic['series']}}
                </div>
                <div class="bot_price">
                    <h5>U.S. Price:</h5>
                    {{$comic['price']}}
                </div>
                <div class="bot_sale">
                    <h5>On Sale Date:</h5>
                    {{$comic['sale_date']}}
                </div>
            </div>
        </div>
        
    </div> 



</main>



@endsection

@section('footer')
@endsection