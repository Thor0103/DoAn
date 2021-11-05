
@extends('home.layoutshome')
@section('home')
    <section class="sliders">
                <div class="aspect-ratio-169">
                    <img src="{{asset('home/image/slide1.jpg')}}" alt="">
                    <img src="{{asset('home/image/slide2.jpg')}}" alt="">
                    <img src="{{asset('home/image/slide3.jpg')}}" alt="">
                </div>
                <div class="dot-container">
                    <div class="dot active"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
            </div>
    </section>
@endsection
