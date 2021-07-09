@extends('layouts.app')

@section('header_content')
@endsection

@section('main_content')

<main id="show_main">

    <div class="blue_line">
        <img src="{{$comic['thumb']}}" alt="">
    </div>

   <div class="comic_wrapper">

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



</main>



@endsection

@section('footer')
@endsection