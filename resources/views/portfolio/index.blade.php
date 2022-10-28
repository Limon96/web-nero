@extends('layouts.base')

@section('title'){{ config('app.portfolio.title') }}@endsection
@section('description'){{ config('app.portfolio.meta_description') }}@endsection
@section('keywords'){{ config('app.portfolio.meta_keywords') }}@endsection
@section('microdata')

    <meta property="og:site_name" content="WEB-NERO" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:title" content="{{ config('app.portfolio.og_title') }}" />
    <meta property="og:description" content="{{ config('app.portfolio.og_description') }}" />
    <meta property="og:image" content="{{ asset(config('app.portfolio.og_image')) }}" />
    <meta property="og:image:url" content="{{ asset(config('app.portfolio.og_image')) }}" />
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
                    Портфолио</h5>
                <p class="text-white margin-5px-bottom">Здесь собраны проекты сделанные нами, или в которых мы принимали непосредственное участие</p>
                <div class="page_nav">
                    <span class="text-white"></span> <a href="{{ route('home') }}" class="text-white">Главная</a> <span class="text-white"><i class="fa fa-angle-double-right"></i> Портфолио</span>
                </div>
            </div>
        </div>
    </section>
    <!-- blog cover end-->

    <!-- blog content-->
    <section class="standalone text-center">

        <div class="container">


            <div class="row">
                <div class="col-md-12">
                    <div class="tabs_op">
                        @foreach($portfolioCategories as $item)
                        <div class="item">
                            <button attr-open="{{ $item->slug }}">{{ $item->title }}</button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid">
            <div class="row">
                <div class="hert_f_bitrok">
                    <div class="bitrok">
                        @foreach($items as $item)



                            <div class="item_port" attr-cat="{{ $item->category->slug }}">
                                <div class="img_ret">
                                    <div class="ips_div" style="background-image: url('{{ thumbnail($item->image, 640) }}')">

                                    </div>
                                </div>

                                <div class="block_info">
                                    <div class="title_port">{{ $item->title }}</div>
                                    <div class="cat_port">{{ $item->category->title }}</div>
                                    <a href="{{ route('portfolio.show', $item->slug) }}" target="_blank">Подробнее</a>
                                </div>


                            </div>

                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- blog content end-->

@endsection


