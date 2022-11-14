@extends('layouts.base')

@section('title'){{ $item->meta_title ?? config('app.blog.title') }}@endsection
@section('description'){{ $item->meta_description ?? config('app.blog.meta_description') }}@endsection
@section('keywords'){{ $item->meta_keywords ?? config('app.blog.meta_keywords') }}@endsection
@section('microdata')

    <meta property="og:site_name" content="WEB-NERO" />
    <meta property="og:url" content="{{ route('home') }}" />
    <meta property="og:title" content="{{ $item->meta_title ?? config('app.blog.og_title') }}" />
    <meta property="og:description" content="{{ $item->meta_description ?? config('app.blog.og_description') }}" />
    <meta property="og:image" content="{{ asset($item->image ?? config('app.blog.og_image')) }}" />
    <meta property="og:image:url" content="{{ asset($item->image ?? config('app.blog.og_image')) }}" />
    <meta property="og:street_address" content="г. Краснодар" />
    <meta property="og:country_name" content="Россия" />


@endsection
@section('scripts')

@endsection
@section('scripts')
    <script>

    </script>
@endsection

@section("content")


    <!-- blog cover-->
    <section class="bg blog-cover" style="background-image: url({{ asset($item->image) }});">
        <div class="container">
            <div class="text-center sm-padding-40px-tb sm-padding-15px-lr">
                <h1 class="display-none no-padding no-margin" aria-hidden="true">NERO-WEB, Создание сайтов, интернет магазинов, SEO продвижение, Блог</h1>
                <h2 class="display-none no-padding no-margin" aria-hidden="true">Создание сайтов в Краснодаре от 5000 рублей под ключ, Блог</h2>
                <h5 class="text-capitalize alt-font text-white margin-20px-bottom font-weight-700">{{ $item->title }}</h5>

                <div class="page_nav">
                    <a href="{{ route('home') }}" class="text-white">Главная</a>
                    <span class="text-white">
                    <i class="fa fa-angle-double-right"></i>
                    <a href="{{ route('blog_category.index') }}" class="text-white"> Блог</a>
                </span>
                </div>
            </div>
        </div>
    </section>
    <!-- blog cover end-->

    <!-- blog content-->
    <section class="standalone text-center for_single asd">

        <div class="container">

            <div class="row">

                <div class="col-md-12 text-left sm-text-center margin-80px-bottom sm-margin-50px-bottom">
                    <div class="standalon-text">

                        {!! $item->text !!}

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- blog content end-->


    <!-- contact-->
    <section class="btn-version">
        <div class="get-quote-section xs-text-center">
            <div class="container">
                <div class="row clearfix">
                    <!--Form Column-->
                    <div class="col-md-6">
                        <div class="sec-title margin-50px-bottom">
                            <h3 class=" alt-font text-extra-dark-gray font-weight-300">
                                Остались вопросы?</h3>
                            <p>Оставьте свои контактные данные и пожелания, или задайте вопрос, и мы свяжемся с Вами в ближайшее время.</p>
                        </div>


                        <div class="massangers">
                            <h5 class=" alt-font text-extra-dark-gray font-weight-300">
                                Наши мессенджеры и контакты</h5>
                            <div class="button_contacts_foot">
                                <div class="item_root">
                                    <a href="https://wa.me/79612686212" target="_blank">
                                        <i aria-hidden="true" class="fa fa-whatsapp"></i>
                                        <span>Написать в WhatsApp</span>
                                    </a>
                                </div>
                                <div class="item_root">
                                    <a href="https://t.me/neroweb2" target="_blank">
                                        <i aria-hidden="true" class="fa fa-telegram"></i>
                                        <span>Написать в Telegram</span>
                                    </a>
                                </div>
                                <div class="item_root">
                                    <a href="tel:89612686212">
                                        <i aria-hidden="true" class="fa fa-phone"></i>
                                        <span>Позвонить на телефон</span>
                                    </a>
                                </div>
                                <div class="item_root">
                                    <a href="mailto:support@web-nero.ru">
                                        <i aria-hidden="true" class="fa fa-envelope-o"></i>
                                        <span>Написать на почту</span>
                                    </a>
                                </div>
                            </div>
                        </div>




                    </div>
                    <div class="form-column col-md-6">
                        <div class="contact-form">
                            <!--Title-->
                            <form class="form_class" id="footerForm">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" id="name1" class="form_inputs" required name="name" placeholder="Имя">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" id="email1" class="form_inputs" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="number" id="usernumber1" class="form_inputs" required name="usernumber" placeholder="Телефон">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 no-padding">
                                    <div class="form-group">
                                <textarea name="message" id="message1" class="form_inputs form_inputs_two" rows="5"
                                          cols="25" placeholder="Ваше сообщение, вопрос"></textarea>
                                    </div>
                                    <label class="container_ch">
                                        <span class="bl_span">Принимаю <a href="{{ route('policy') }}">условия обработки персональных данных</a></span>
                                        <input type="checkbox" name="checked" checked="checked" required>
                                        <span class="checkmark_ch"></span>
                                    </label>
                                    <input type="hidden" name="formact" value="форма в футере">
                                    <div class="button">
                                        <button  class="btn btn-blue btn-rounded btn-large text-extra-small width-100 hide_modal_foot">Отправить заявку</button>
                                    </div>


                                    <div class="hide_massage">
                                        <div class="cl_retf">
                                            Заявка отправлена
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->

@endsection


