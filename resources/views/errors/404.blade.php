@extends('layouts.base')

@section('title') 404 - Not Found @endsection
@section('description') 404 - Not Found @endsection
@section('keywords') 404 - Not Found @endsection

@section('scripts')
    <script>

    </script>
@endsection

@section("content")


    <!-- cover-->
    <section class="bg blog-cover">
        <div class="container">
            <div class="text-center sm-padding-40px-tb sm-padding-15px-lr">
                <h4 class="text-capitalize alt-font text-white margin-20px-bottom font-weight-700">
                    404</h4>
                <p class="text-white margin-5px-bottom">Такой страницы нет!</p>
                <div class="page_nav">
                    <span class="text-white"></span> <a href="{{ route('home') }}" class="text-white">Главная</a> <span class="text-white"><i class="fa fa-angle-double-right"></i> 404</span>
                </div>
            </div>
        </div>
    </section>
    <!-- cover end-->

    <!-- content -->
    <section id="error">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-2"></div>
                <div class="col-md-6 col-sm-8 text-center">
                    <div class="error" >
                        <h1 class="alt-font text-light-gray font-weight-800">404</h1>
                        <h2 class="no-margin font-weight-500 alt-font">404</h2>
                    </div>
                    <p class="margin-20px-bottom">Такой страницы нет!</p>
                    <a href="{{ route('home') }}" class="btn btn-blue btn-rounded btn-medium">Перейти на главную</a>
                </div>
                <div class="col-md-3 col-sm-2"></div>
            </div>
        </div>
    </section>
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
                                    <a href="https://wa.me/79874451638" target="_blank">
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


