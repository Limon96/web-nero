@extends('layouts.base')

@section('title'){{ config('app.blog.title') }}@endsection
@section('description'){{ config('app.blog.meta_description') }}@endsection
@section('keywords'){{ config('app.blog.meta_keywords') }}@endsection
@section('microdata')

    <meta property="og:site_name" content="WEB-NERO" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:title" content="{{ config('app.blog.og_title') }}" />
    <meta property="og:description" content="{{ config('app.blog.og_description') }}" />
    <meta property="og:image" content="{{ asset(config('app.blog.og_image')) }}" />
    <meta property="og:image:url" content="{{ asset(config('app.blog.og_image')) }}" />
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
                <h1 class="display-none no-padding no-margin" aria-hidden="true">NERO-WEB, Создание сайтов, интернет магазинов, SEO продвижение, Блог</h1>
                <h2 class="display-none no-padding no-margin" aria-hidden="true">Создание сайтов в Краснодаре от 5000 рублей под ключ, Блог</h2>
                <h5 class="text-capitalize alt-font text-white margin-20px-bottom font-weight-700">
                    Блог</h5>
                <p class="text-white margin-5px-bottom"> Тут для Вас собраны полезные статьи</p>
                <div class="page_nav">
                    <a href="{{ route('home') }}" class="text-white">Главная</a>
                    <span class="text-white"><i class="fa fa-angle-double-right"></i> Блог</span>
                </div>
            </div>
        </div>
    </section>
    <!-- blog cover end-->

    <!-- blog content-->
    <section class="standalone text-center">

        <div class="container">

            <div class="row">

                @foreach($blogPosts as $item)
                <div class="item_st clearfix">
                    <div class="col-md-6 text-left sm-text-center margin-80px-bottom sm-margin-50px-bottom">
                        <div class="standalon-text">
                            <a href="{{ route('blog.index', $item->slug) }}">
                                <h5 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 sm-width-100 xs-width-100">
                                    {{ $item->title }}
                                </h5>
                            </a>
                            <p>
                                {{ $item->intro }}
                            </p>
                            <a href="{{ route('blog.index', $item->slug) }}" class="page_st">Подробне</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-left sm-text-center margin-80px-bottom sm-margin-50px-bottom">
                        <div class="standalon-image">
                            <img src="{{ thumbnail($item->image, 700, 400) }}" alt="{{ $item->title }}">
                        </div>
                    </div>
                </div>
                @endforeach


            </div>


        </div>
    </section>
    <!-- blog content end-->

@endsection

