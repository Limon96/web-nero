@extends('layouts.base')

@section('title'){{ $item->title }}@endsection
@section('description'){{ $item->meta_description }}@endsection
@section('keywords'){{ $item->meta_keywords }}@endsection
@section('microdata')

    <meta property="og:site_name" content="WEB-NERO" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:title" content="{{ $item->meta_title }}" />
    <meta property="og:description" content="{{ $item->meta_description }}" />
    <meta property="og:image" content="{{ asset($item->image) }}" />
    <meta property="og:image:url" content="{{ asset($item->image) }}" />
    <meta property="og:street_address" content="г. Краснодар" />
    <meta property="og:country_name" content="Россия" />

@endsection
@section('scripts')

@endsection

@section("content")


    <!-- blog cover-->
    <section class="bg blog-cover">
        <div class="container">
            <div class="text-center sm-padding-40px-tb sm-padding-15px-lr">
                <h1 class="display-none no-padding no-margin" aria-hidden="true">NERO-WEB, Создание сайтов, интернет магазинов, SEO продвижение, Портфолио</h1>
                <h2 class="display-none no-padding no-margin" aria-hidden="true">Создание сайтов в Краснодаре от 5000 рублей под ключ, Портфолио</h2>
                <h5 class="text-capitalize alt-font text-white margin-20px-bottom font-weight-700">
                    {{ $item->title }}</h5>

                <div class="page_nav">
                    <span class="text-white"></span> <a href="{{ route('home') }}" class="text-white">Главная</a> <span class="text-white"><i class="fa fa-angle-double-right"></i> <a href="{{ route('portfolio.index') }}" class="text-white">Портфолио</a></span>
                </div>
            </div>
        </div>
    </section>
    <!-- blog cover end-->

    <!-- blog content-->
    <section class="standalone text-center single_portfol">

        <div class="container">


            <div class="row">
                <div class="col-md-12">
                    <p>{{ $item->category->title }}</p>
                    <p>{!! $item->text !!}</p>
                    @if($item->link)<a rel="nofollow" href="{{ $item->link }}" target="_blank">Перейти на сайт</a>@endif

                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                </div>
            </div>



        </div>
    </section>
    <!-- blog content end-->

@endsection
