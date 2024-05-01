@extends('layouts.app')

@section('banner')    
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <div class="swiperMain">
        <swiper-container class="mySwiper" navigation="true" pagination="true" keyboard="true" mousewheel="true" css-mode="true">
            <swiper-slide>
                <img src="/icons/หลังคา1.jpg" class="">
            </swiper-slide>
            <swiper-slide>
                <img src="/icons/หลังคา2.jpg" class="">
            </swiper-slide>
            <swiper-slide>
                <img src="/icons/หลังคา3.jpg" class="">
            </swiper-slide>
        </swiper-container>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>