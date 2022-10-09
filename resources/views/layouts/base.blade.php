@php $v = 0.2; @endphp
<!doctype html>
<html class="no-js" lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="WEB-NERO">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    <title>@yield('title')</title>

    <!-- description -->
    <meta name="description" content="Создание сайтов в Краснодаре от 5000 рублей под ключ. Лучшее соотношение цены и качества. Гарантия результата и рост продаж. Варианты реализации и стоимость на сайте. Создаем только качественные, приносящие прибыль проекты." />
    <meta name="abstract" content="Создание сайтов в Краснодаре от 5000 рублей под ключ. Лучшее соотношение цены и качества. Гарантия результата и рост продаж. Варианты реализации и стоимость на сайте. Создаем только качественные, приносящие прибыль проекты." />

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <!-- description -->

    @yield('microdata')



    <link rel="stylesheet" href="{{ asset('access/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('access/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('access/revolution/css/settings.css') }}"/>
    <link rel="stylesheet" href="{{ asset('access/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('access/css/core.css') }}"/>
    <link rel="stylesheet" href="{{ asset('access/css/style.css?v=' . $v) }}"/>

    @yield('styles')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="90" class="side-nav before-after">

<header >
    <!-- start navigation -->
    <nav class="nav-white-text navbar navbar-default bootsnav navbar-fixed-top nav-white header-light bg-transparent nav_line">
        <div class="container nav-header-container">
            <div class="row">
                <div class="col-md-2 col-xs-5">
                    <a href="index.html" title="Logo" class="logo scroll">
                        <img src="images/logo-blue-black.webp" class="logo-dark" alt="web-nero">
                        <img src="images/logo-blue-white.webp" alt="web-nero" class="logo-light default"></a>
                </div>
                <!-- end logo -->
                <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right hidden-sm hidden-xs">
                    <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                        <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal normal_hide"
                            data-in="fadeIn" data-out="fadeOut">
                            <!-- start menu item -->
                            <li>
                                <a href="{{ route('home') }}#price" class="scroll">Цены</a>
                            </li>
                            <li>
                                <a href="porfolio.html" >Портфолио</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}#about" class="scroll">О нас</a>
                            </li>
                            <li>
                                <a href="blog.html" >Статьи</a>
                            </li>
                            <li>
                                <a href="contact.html" >Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-xs-5 width-auto sm-width-15 xs-width-20 no-padding">
                    <div class="header-social-icon sm-display-none" aria-hidden="true">
                        <a href="https://wa.me/79874451638" target="_blank" class="facebook-bg-hvr"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        <a href="https://t.me/neroweb2" target="_blank" class="twitter-bg-hvr"><i class="fa fa-telegram"></i></a>
                    </div>
                </div>
                <!--side nav -->
                <div id="menu_bars" class="right menu_bars">
                    <span class="t1"></span>
                    <span class="t2"></span>
                    <span class="t3"></span>
                </div>
                <div class="sidebar_menu">
                    <nav class="pushmenu pushmenu-right">
                        <a class="push-logo" href="{{ route('home') }}"><img src="{{ asset('images/logo-blue-white.webp') }}" alt="logo"></a>
                        <div class="medium-icon side-nav-social-icon list-inline">
                            <a class="facebook-bg-hvr" href="https://wa.me/79874451638" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>

                            <a class="pinterest-bg-hvr" href="https://t.me/neroweb2" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i></a>


                        </div>
                        <ul class="push_nav centered">
                            <li>
                                <a href="#price" class="scroll">Цены</a>
                            </li>
                            <li>
                                <a href="porfolio.html" >Портфолио</a>
                            </li>
                            <li>
                                <a href="#about" class="scroll">О нас</a>
                            </li>
                            <li>
                                <a href="blog.html" >Статьи</a>
                            </li>
                            <li>
                                <a href="contact.html" >Контакты</a>
                            </li>
                        </ul>

                        <p class="push-bottom text-white text-small">WEB-NERO Пора создавать сайт!</p>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- end header -->


@yield('content')


<!--footer Start-->
<footer class="bg-extra-dark-gray padding-30px-tb text-center">
    <div class="footer-widget-area">
        <div class="container">
            <p class="text-white text-large margin-10px-bottom margin-20px-top">© WEB-NERO</p>
            <p class="text-light-gray margin-10px-bottom politick_foot"><a href="{{ asset('politika-obrabotki-personalnykh-dannykh.html') }}">Политика обработки персональных данных</a></p>
        </div>
    </div>

</footer>
<!-- end footer -->


<div class="shadow_modal">
    <div class="content_modal">
        <div class="close_modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none">
                <path d="M6.22566 4.81096C5.83514 4.42044 5.20197 4.42044 4.81145 4.81096C4.42092 5.20148 4.42092 5.83465 4.81145 6.22517L10.5862 11.9999L4.81151 17.7746C4.42098 18.1651 4.42098 18.7983 4.81151 19.1888C5.20203 19.5793 5.8352 19.5793 6.22572 19.1888L12.0004 13.4141L17.7751 19.1888C18.1656 19.5793 18.7988 19.5793 19.1893 19.1888C19.5798 18.7983 19.5798 18.1651 19.1893 17.7746L13.4146 11.9999L19.1893 6.22517C19.5799 5.83465 19.5799 5.20148 19.1893 4.81096C18.7988 4.42044 18.1657 4.42044 17.7751 4.81096L12.0004 10.5857L6.22566 4.81096Z" fill="black"/>
            </svg>
        </div>

        <h3>Оставить заявку</h3>

        <form id="modalForm" autocomplete="off" >
            <div class="form-group">
                <input type="text" class="form_inputs" id="name2" required name="name" placeholder="Имя">
            </div>
            <div class="form-group">
                <input type="number"  class="form_inputs" id="usernumber2" required name="usernumber" placeholder="Телефон">
            </div>
            <label class="container_ch modals">
                <span class="bl_span2">Принимаю <a href="politika-obrabotki-personalnykh-dannykh.html">условия обработки персональных данных</a></span>
                <input type="checkbox" name="checked" checked="checked" required>
                <span class="checkmark_ch"></span>
            </label>
            <input type="hidden" name="formact" value="форма попап">
            <div class="button class_hide_btn">
                <button  class="btn btn-blue btn-rounded btn-large text-extra-small width-100" type="submit">Отправить заявку</button>
            </div>

            <div class="dep_sub">
                <div class="subb"> Заявка отправлена </div>
            </div>

        </form>

    </div>
</div>



<!-- javascript libraries -->
<script src="{{ asset('access/js/jquery-3.2.1.js') }}"></script>
<script src="{{ asset('access/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('access/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('access/js/parallaxie.min.js') }}"></script>

<script src="{{ asset('access/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('access/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('access/revolution/js/revolution.addon.beforeafter.min.js') }}"></script>
<!-- revolution extension -->

<script src="{{ asset('access/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('access/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('access/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('access/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>

<script src="{{ asset('access/js/main.js?v=' . $v) }}"></script>

@yield('scripts')
</body>
</html>
