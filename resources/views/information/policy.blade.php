@extends('layouts.base')

@section('title'){{ config('app.portfolio.title') }}@endsection
@section('description'){{ config('app.portfolio.meta_description') }}@endsection
@section('keywords'){{ config('app.portfolio.meta_keywords') }}@endsection
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
                <h1 class="display-none no-padding no-margin" aria-hidden="true">NERO-WEB, Создание сайтов, интернет магазинов, SEO продвижение, Портфолио</h1>
                <h2 class="display-none no-padding no-margin" aria-hidden="true">Создание сайтов в Краснодаре от 5000 рублей под ключ, Портфолио</h2>
                <h5 class="text-capitalize alt-font text-white margin-20px-bottom font-weight-700">
                    Политика обработки персональных данных</h5>

                <div class="page_nav">
                    <span class="text-white"></span> <a href="{{ route('home') }}" class="text-white">Главная</a>
                </div>
            </div>
        </div>
    </section>
    <!-- blog cover end-->

    <!-- blog content-->
    <section class="standalone text-center ">

        <div class="container">


            <div class="row">
                <div class="col-md-12">
                    <h3>Политика обработки персональных данных</h3>


                    <p style="text-align: justify;">
                        <b>1 ВВЕДЕНИЕ</b>
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        1.1 Настоящий документ определяет политику WEB-NERO (далее – Компания) в отношении обработки персональных данных (далее – ПДн).<br>
                        1.2 Настоящая Политика разработана в соответствии с действующим законодательством Российской Федерации о персональных данных.
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        1.3 Действие настоящей Политики распространяется на все процессы по сбору, записи, систематизации, накоплению, хранению, уточнению, извлечению, использованию, передачи (распространению, предоставлению, доступу), обезличиванию, блокированию, удалению, уничтожению персональных данных, осуществляемых с использованием средств автоматизации и без использования таких средств.
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        <b>2 ПРИНЦИПЫ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</b>
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        Обработка персональных данных осуществляется на основе следующих принципов:
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        1) Обработка персональных данных осуществляется на законной и справедливой основе;
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        2) Обработка персональных данных ограничивается достижением конкретных, заранее определенных и законных целей. Не допускается обработка персональных данных, несовместимая с целями сбора персональных данных;
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        3)&nbsp;Не допускается объединение баз данных, содержащих персональные данные, обработка которых осуществляется в целях, несовместных между собой;
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        4) Обработке подлежат только те персональные данные, которые отвечают целям их обработки;
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        5) Содержание и объем обрабатываемых персональных данных соответствуют заявленным целям обработки. Обрабатываемые персональные данные не являются избыточными по отношению к заявленным целям обработки;
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        6) При обработке персональных данных обеспечивается точность персональных данных, их достаточность, а в необходимых случаях и актуальность по отношению к заявленным целям их обработки.
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        7) Хранение персональных данных осуществляется в форме, позволяющей определить субъекта персональных данных не дольше, чем этого требуют цели обработки персональных данных, если срок хранения персональных данных не установлен федеральным законом, договором, стороной которого, выгодоприобретателем или поручителем по которому является субъект персональных данных. Обрабатываемые персональные данные подлежат уничтожению, либо обезличиванию по достижении целей обработки или в случае утраты необходимости в достижении этих целей, если иное не предусмотрено федеральным законом.
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        <b>3 УСЛОВИЯ ОБРАБОТКИ ПЕРСОНАЛЬНЫХ ДАННЫХ</b>
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        3.1 Обработка персональных данных осуществляется с соблюдением принципов и правил, установленных Федеральным законом «О персональных данных». Обработка персональных данных допускается в следующих случаях:<br>
                        1) Обработка персональных данных осуществляется с согласия субъекта персональных данных на обработку его персональных данных;<br>
                        2) Обработка персональных данных необходима для достижения целей, предусмотренных международным договором Российской Федерации или законом, для осуществления и выполнения возложенных законодательством Российской Федерации на оператора функций, полномочий и обязанностей;<br>
                        3) Обработка персональных данных необходима для осуществления правосудия, исполнения судебного акта, акта другого органа или должностного лица, подлежащих исполнению в соответствии с законодательством Российской Федерации об исполнительном производстве;<br>
                        4) обработка персональных данных необходима для исполнения договора, стороной которого либо выгодоприобретателем или поручителем по которому является субъект персональных данных, а также для заключения договора по инициативе субъекта персональных данных или договора, по которому субъект персональных данных будет являться выгодоприобретателем или поручителем;<br>
                        5) обработка персональных данных необходима для защиты жизни, здоровья или иных жизненно важных интересов субъекта персональных данных, если получение согласия субъекта персональных данных невозможно;<br>
                        6) обработка персональных данных необходима для осуществления прав и законных интересов оператора или третьих лиц, либо для достижения общественно значимых целей при условии, что при этом не нарушаются права и свободы субъекта персональных данных;<br>
                        7) обработка персональных данных осуществляется в статистических или иных исследовательских целях, при условии обязательного обезличивания персональных данных. Исключение составляет обработка персональных данных в целях продвижения товаров, работ, услуг на рынке путем осуществления прямых контактов с потенциальным потребителем с помощью средств связи, а также в целях политической агитации;<br>
                        8) осуществляется обработка персональных данных, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных, либо по его просьбе (далее – персональные данные, сделанные общедоступными субъектом персональных данных);<br>
                        9) осуществляется обработка персональных данных, подлежащих опубликованию или обязательному раскрытию в соответствии с федеральным законом.<br>
                        3.2 Компания может включать персональные данные субъектов в общедоступные источники персональных данных, при этом Компания берет письменное согласие субъекта на обработку его персональных данных.<br>
                        3.3 Компания может осуществлять обработку специальных категорий персональных данных, касающихся расовой, национальной принадлежности, состояния здоровья, при этом Компания обязуется брать письменное согласие субъекта на обработку его персональных данных<br>
                        3.4 Биометрические персональные данные (сведения, которые характеризуют физиологические и биологические особенности человека, на основании которых можно установить его личность и которые используются оператором для установления личности субъекта персональных данных) в Компании не обрабатываются.<br>
                        3.5 Компания не осуществляет трансграничную передачу персональных данных.<br>
                        3.6 Принятие на основании исключительно автоматизированной обработки персональных данных решений, порождающих юридические последствия в отношении субъекта персональных данных или иным образом затрагивающих его права и законные интересы, не осуществляется.<br>
                        3.7 В условиях лицензии на осуществление деятельности Компании отсутствует запрет на передачу персональных данных третьим лицам без согласия в письменной форме субъекта персональных данных.<br>
                        3.8 При отсутствии необходимости письменного согласия субъекта на обработку его персональных данных согласие субъекта может быть дано субъектом персональных данных или его представителем в любой позволяющей получить факт его получения форме.<br>
                        3.9 Компания вправе поручить обработку персональных данных другому лицу с согласия субъекта персональных данных, если иное не предусмотрено федеральным законом, на основании заключаемого с этим лицом договора (далее – поручение оператора). При этом Компания в договоре обязует лицо, осуществляющее обработку персональных данных по поручению Компании, соблюдать принципы и правила обработки персональных данных, предусмотренные настоящим Федеральным законом.<br>
                        3.10 В случае если Компания поручает обработку персональных данных другому лицу, ответственность перед субъектом персональных данных за действия указанного лица несет Компания. Лицо, осуществляющее обработку персональных данных по поручению Компании, несет ответственность перед Компанией.<br>
                        3.11 Компания обязуется и обязует иные лица, получившие доступ к персональным данным, не раскрывать третьим лицам и не распространять персональные данные без согласия субъекта персональных данных, если иное не предусмотрено федеральным законом.
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        <b>4 ОБЯЗАННОСТИ КОМПАНИИ</b>
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        В соответствии с требованиями Федерального закона № 152-ФЗ «О персональных данных» Компания обязана:<br>
                        • Предоставлять субъекту персональных данных по его запросу информацию, касающуюся обработки его персональных данных, либо на законных основаниях предоставить отказ.<br>
                        • По требованию субъекта персональных данных уточнять обрабатываемые персональные данные, блокировать или удалять, если персональных данных являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки.<br>
                        • Вести Журнал учета обращений субъектов персональных данных, в котором должны фиксироваться запросы субъектов персональных данных на получение персональных данных, а также факты предоставления персональных данных по этим запросам.<br>
                        • Уведомлять субъекта персональных данных об обработке персональных данных в том случае, если персональные данные были получены не от субъекта персональных данных. Исключение составляют следующие случаи:<br>
                        1. Субъект ПДн уведомлен об осуществлении обработки его ПДн соответствующим оператором;<br>
                        2. ПДн получены Компанией на основании федерального закона или в связи с исполнением договора, стороной которого либо выгодоприобретателем или поручителем по которому является субъект ПДн;<br>
                        3. ПДн сделаны общедоступными субъектом ПДн или получены из общедоступного источника;<br>
                        4. Компания осуществляет обработку ПД для статистических или иных исследовательских целей, для осуществления профессиональной деятельности журналиста либо научной, литературной или иной творческой деятельности, если при этом не нарушаются права и законные интересы субъекта ПДн;<br>
                        5. Предоставление субъекту ПД сведений, содержащихся в Уведомлении об обработке ПД нарушает права и законные интересы третьих лиц.<br>
                        • В случае достижения цели обработки персональных данных незамедлительно прекратить обработку персональных данных и уничтожить соответствующие персональные данные в срок, не превышающий тридцати дней с даты достижения цели обработки персональных данных, если иное не предусмотрено договором, стороной которого, выгодоприобретателем или поручителем по которому является субъект персональных данных, иным соглашением между Компанией и субъектом персональных данных либо если Компания не вправе осуществлять обработку персональных данных без согласия субъекта персональных данных на основаниях, предусмотренных №152-ФЗ «О персональных данных» или другими федеральными законами.<br>
                        • В случае отзыва субъектом персональных данных согласия на обработку своих персональных данных прекратить обработку персональных данных и уничтожить персональные данные в срок, не превышающий тридцати дней с даты поступления указанного отзыва, если иное не предусмотрено соглашением между Компанией и субъектом персональных данных. Об уничтожении персональных данных Компания обязана уведомить субъекта персональных данных.<br>
                        • В случае поступления требования субъекта о прекращении обработки персональных данных в целях продвижения товаров, работ, услуг на рынке немедленно прекратить обработку персональных данных.
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        <b>5 МЕРЫ ПО ОБЕСПЕЧЕНИЮ БЕЗОПАСНОСТИ ПЕРСОНАЛЬНЫХ ДАННЫХ ПРИ ИХ ОБРАБОТКЕ</b>
                    </p>
                    <p style="text-align: justify;">
                    </p>
                    <p style="text-align: justify;">
                        5.1 При обработке персональных данных Компания принимает необходимые правовые, организационные и технические меры для защиты персональных данных от неправомерного или случайного доступа к ним, уничтожения, изменения, блокирования, копирования, предоставления, распространения персональных данных, а также от иных неправомерных действий в отношении персональных данных.<br>
                        5.2 Обеспечение безопасности персональных данных достигается, в частности:<br>
                        • определением угроз безопасности персональных данных при их обработке в информационных системах персональных данных;<br>
                        • применением организационных и технических мер по обеспечению безопасности персональных данных при их обработке в информационных системах персональных данных, необходимых для выполнения требований к защите персональных данных, исполнение которых обеспечивает установленные Правительством Российской Федерации уровни защищенности персональных данных;<br>
                        • применением прошедших в установленном порядке процедуру оценки соответствия средств защиты информации;<br>
                        • оценкой эффективности принимаемых мер по обеспечению безопасности персональных данных до ввода в эксплуатацию информационной системы персональных данных;<br>
                        • учетом машинных носителей персональных данных;<br>
                        • обнаружением фактов несанкционированного доступа к персональным данным и принятием мер;<br>
                        • восстановлением персональных данных, модифицированных или уничтоженных вследствие несанкционированного доступа к ним;<br>
                        • установлением правил доступа к персональным данным, обрабатываемым в информационной системе персональных данных, а также обеспечением регистрации и учета всех действий, совершаемых с персональными данными в информационной системе персональных данных;<br>
                        • контролем за принимаемыми мерами по обеспечению безопасности персональных данных и уровня защищенности информационных систем персональных данных.
                    </p>


                </div>
            </div>



        </div>
    </section>
    <!-- blog content end-->

@endsection

