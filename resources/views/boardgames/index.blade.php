<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Мир Настольных Игр</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Sunshine - Responsive vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Sunshine, portfolio" />
    <meta name="author" content="lmtheme" />
    <link rel="shortcut icon" href="{{ url('images/my_photo.png') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('css/transition-animations.css') }}">
    <link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/animate.css') }}">
    <link rel="stylesheet" href="{{ url('css/main.css') }}" type="text/css">

    <script src="{{ url('js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ url('js/modernizr.custom.js') }}"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
<!-- Loading animation -->
<div class="preloader">
    <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!-- /Loading animation -->

<div id="page" class="page">
    <!-- Header -->
    <header id="site_header" class="header mobile-menu-hide">
        <div class="my-photo">
            <img src="{{ url('images/my_photo.png') }}" alt="image">
            <div class="mask"></div>
        </div>

        <div class="site-title-block">
            <h1 class="site-title">Мир Настольных Игр</h1>
            <p class="site-description">Путеводитель</p>
            <p class="site-description">
                <table {{--border="1 px solid"--}} width="185" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="20%"><img width="80%" src="{{ url('images/md_flag.png') }}" alt="image"></td>
                        <td width="80%"><b>+373 (793) 1-60-60</b></td>
                    </tr>
                </table>
            </p>
        </div>

        <!-- Navigation & Social buttons -->
        <div class="site-nav">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
                <!-- About Me Subpage link -->
                <li>
                    <a class="pt-trigger" href="#home" data-animation="58" data-goto="1">Главная</a><!-- href value = data-id without # of .pt-page. Data-goto is the number of section -->
                </li>
                <!-- /About Me Subpage link -->
                <!-- About Me Subpage link -->
                <li>
                    <a class="pt-trigger" href="#about_me" data-animation="59" data-goto="2">О Нас</a>
                </li>
                <!-- /About Me Subpage link -->
                <li>
                    <a class="pt-trigger" href="#resume" data-animation="60" data-goto="3">Купить</a>
                </li>
                <li>
                    <a class="pt-trigger" href="#portfolio" data-animation="61" data-goto="4">Список Игр</a>
                </li>
                <li>
                    <a class="pt-trigger" href="#blog" data-animation="58" data-goto="5">Статьи</a>
                </li>
                <li>
                    <a class="pt-trigger" href="#contact" data-animation="59" data-goto="6">Контакты</a>
                </li>
            </ul>
            <!-- /Main menu -->

            <!-- Social buttons -->
            <ul class="social-links">
                <li><a class="tip social-button" href="https://www.facebook.com/mirigr.md" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                <li><a class="tip social-button" href="https://www.facebook.com/mirigr.md" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a class="tip social-button" href="https://www.facebook.com/mirigr.md" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="tip social-button" href="https://www.youtube.com/channel/UCmg7RM71JEdRdt27BbQMUbA" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                <!--<li><a class="tip social-button" href="#" title="last.fm"><i class="fa fa-lastfm"></i></a></li>-->
            </ul>
            <!-- /Social buttons -->
        </div>
        <!-- Navigation & Social buttons -->
    </header>
    <!-- /Header -->

    <!-- Mobile Header -->
    <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
            <div class="mobile-site-title">Мир Настольных Игр</div>
        </div>

        <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <!-- /Mobile Header -->

    <!-- Main Content -->
    <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
            <!-- Subpages -->
            <div class="subpages">

                <!-- Home Subpage -->
                <section class="pt-page pt-page-1 section-with-bg section-paddings-0" style="background-image: url(images/home_page_bg_1.png);" data-id="home">

                    <div class="home-page-block-bg">
                        <div class="mask"></div>
                    </div>
                    <div class="home-page-block">
                        <div class="v-align">
                            <h2>Знакомство</h2>
                            <div id="rotate" class="text-rotate">
                                <div>
                                    <p class="home-page-description">С Лучшими в Мире</p>
                                </div>
                                <div>
                                    <p class="home-page-description">Настольными Играми</p>
                                </div>
                            </div>
                            <div class="block end" style="text-align: center">
                                <ul class="info-list">
                                    <li><span class="title">Адрес:</span><span class="value">Молдова, Кишинев</span></li>
                                    <li><span class="title">Имейл:</span><span class="value"><a href="mailto:email@example.com">mirigr@gmail.com</a></span></li>
                                    <li><span class="title">Телефон:</span><span class="value">+373 (793) 1-60-60</span></li>
                                    <li><span class="title">_______________________________________</span><span class="value"></span></li>
                                </ul>
                            </div>
                            <div id="rotate1" class="text-rotate">
                                <div>
                                    <p class="home-page-description">НАСТОЛЬНЫЕ ИГРЫ - ОБЪЕДИНЯЮТ!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of Home Subpage -->

                <!-- About Me Subpage -->
                <section class="pt-page pt-page-2" data-id="about_me">
                    <div class="section-title-block">
                        <h2 class="section-title">О Нас</h2>
                        <h5 class="section-description">Суть и Причина</h5>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 subpage-block">
                            <div class="general-info">
                                <div class="block-title">
                                    <h3>Как Все Начиналось</h3>
                                </div>
                                <p  align="justify">
                                    Все началось с очень пессимистичного отношения к настольным играм, помять о монополии (он же менеджер), шашках, картах, и т.д. не давали долгое время вернуть к ним интерес и дать им еще один шанс. Тем более настольные игры, как и всё в мире, не стоят на месте и развитие их за последние десятилетия очень обширное не только в странах Запада и Европы, но и в России, Украине, Белоруссии и да, у нас друзья - в Молдове!
                                </p>
                                <center><img src="{{ url('images/about/zelievarenie1.jpg') }}" width="70%" alt="image"></center>
                                <p  align="justify">
                                    Первое знакомство с современными настольными играми началось с игры Зельеваренье. Это карточное строение сетов из карт, сбор ингредиентов, рецептов, эликсиров, талисманов – поразила в сердце с первого же раза, закончившись довольно стандартной фразой: “давай еще разок разложимся”
                                    Затем был Доминион, также карточная игра с различными сценариями из сотен карт!
                                </p>
                                <center><img src="{{ url('images/about/dominion.jpg') }}" width="70%" alt="image"></center>
                                <p  align="justify">
                                    Это был разрыв шаблонов о настольных играх. Дальше понеслось знакомство с ними благодаря друзьям, которые сами были увлечены и просто поделились этим, за что наша семья им очень благодарна!
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 subpage-block">
                            <div class="block-title">
                                <h3>Изречения</h3>
                            </div>
                            <div class="testimonials owl-carousel">
                                <!-- Testimonial 1 -->
                                <div class="testimonial-item" style="width:100%">
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-content">
                                        <div class="testimonial-text">
                                            <p>"Дайте Настольным Играм шанс, и они вас обязательно Удивят!"</p>
                                        </div>
                                    </div>
                                    <!-- /Testimonial Content -->
                                    <!-- Testimonial Author -->
                                    <div class="testimonial-credits">
                                        <!-- Picture -->
                                        <div class="testimonial-picture">
                                            <img src="{{ url('images/testimonials/testimonial_photo_1.png') }}" alt="">
                                        </div>
                                        <!-- /Picture -->
                                        <!-- Testimonial author information -->
                                        <div class="testimonial-author-info">
                                            <p class="testimonial-author">Board Game Community</p>
                                            <p class="testimonial-firm">Санкт Петербург</p>
                                        </div>
                                    </div>
                                    <!-- /Testimonial author information -->
                                </div>
                                <!-- End of Testimonial 1 -->
                                <!-- Testimonial 2 -->
                                <div class="testimonial-item" style="width:100%">
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-content">
                                        <div class="testimonial-text">
                                            <p>"Настольные Игры - Объединяют!"</p>
                                        </div>
                                    </div>
                                    <!-- /Testimonial Content -->
                                    <!-- Testimonial Author -->
                                    <div class="testimonial-credits">
                                        <!-- Picture -->
                                        <div class="testimonial-picture">
                                            <img src="{{ url('images/testimonials/testimonial_photo_2.png') }}" alt="">
                                        </div>
                                        <!-- /Picture -->
                                        <!-- Testimonial author information -->
                                        <div class="testimonial-author-info">
                                            <p class="testimonial-author">Путеводитель</p>
                                            <p class="testimonial-firm">В Мир Настольных Игр</p>
                                        </div>
                                    </div>
                                    <!-- /Testimonial author information -->
                                </div>
                                <!-- End of Testimonial 2 -->
                                <!-- Testimonial 3 -->
                                <div class="testimonial-item" style="width:100%">
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-content">
                                        <div class="testimonial-text">
                                            <p>"Несмотря на всю свою красивость, полноту компонентов, настольная игра всегда будет всего лишь средством, своеобразным катализатором общения, новых знакомств и сближения между людьми. Помните это!"</p>
                                        </div>
                                    </div>
                                    <!-- /Testimonial Content -->
                                    <!-- Testimonial Author -->
                                    <div class="testimonial-credits">
                                        <!-- Picture -->
                                        <div class="testimonial-picture">
                                            <img src="{{ url('images/testimonials/testimonial_photo_3.png') }}" alt="">
                                        </div>
                                        <!-- /Picture -->
                                        <!-- Testimonial author information -->
                                        <div class="testimonial-author-info">
                                            <p class="testimonial-author">Board Games MD</p>
                                            <p class="testimonial-firm">Настольные игры Молдова</p>
                                        </div>
                                    </div>
                                    <!-- /Testimonial author information -->
                                </div>
                                <!-- End of Testimonial 3 -->
                            </div>
                        </div>
                        <div class="general-info">
                            <p align="justify">
                                Дальше понеслась колесница знакомства со столь разнообразным и масштабным миром настольных игр, Агрикола, Пуэрто Рико, Эпоха Открытий, и т.д. Каждая игра имеет что-то свое, погружение в этот игровой мир всегда увлекателен из-за их шикарных разнообразных тематик. Реиграбельность многих современных настольных игр - отменна и не бывает практически двух идентичных партии, под любой состав.
                            </p>
                            <p  align="justify">
                                Сыну было 7, когда мы начали играть с ним в несложные настольные игры, игра 7 Чудес – этому очень сильно поспособствовала, мы все полюбили эту иргу, даже наша бабушка (люди в возрасте, с удовольствием играют в настольные игра, проверено) до сих пор сравнивает все новые игры с 7 Чудес. :) Игра взяла 1 место по миру среди продвинутых игр в 2011 году. И действительно, ведь награды, которые получают современные игры по миру – по достоинству заслуженны!
                            </p>
                            <center><img src="{{ url('images/about/7wonders.jpg') }}" width="40%" alt="image"></center>
                        </div>
                    </div>
                    <div class="general-info">
                        <div class="block-title">
                            <h3>Для чего был создан данный ресурс и услуга?</h3>
                        </div>
                        <p  align="justify">
                            Основная идея – это донести людям о чем-то, возможно новом в их жизни и поделится с чем-то, что нам, как семье, в свое время показалось очень интересным и полезным. В какой-то степени слоган страницы, что “Настольные Игры объединяют” может показаться напыщенным рекламным трюком, но это не так, так как это реальный опыт не только нашей семьи, но и очень многих отзывов семей по всему миру, кто дал настольным играм шанс и были поражены каждый чем-то по-своему. Разнообразие игр такое большое, что каждый находит в них что-то свое, близкое по духу.
                        </p>
                        <center><img src="{{ url('images/about/selestia.jpg') }}" width="40%" alt="image"></center>
                        <p  align="justify">
                            Единственный момент, который хочется отметить, что это только - альтернатива, т.е. дополнение к тому, что важно и должно быть в семье, любовь, уважение и все то, что укрепляет и объединяет, и не только в семье, но и в обществе в целом. Как говорится, все начинается сперва с самого человека, порядок и добро, а настольные игры – это может послужить просто одним из инструментов, которые в какой-то степени добавят еще один повод побыть и провести время совместно, при этом интерес сохраняется как у взрослых, так и у детей.
                        </p>
                        <center><img src="{{ url('images/about/istanbul.jpg') }}" width="40%" alt="image"></center>
                        <p  align="justify">
                            На самом деле говорить о пользе настольных игр не уместно, это и так известно, особенно для детей, которые перенимают многое от родителей. Поэтому, всем кому это интересно – Добро Пожаловать! Будем рады поделиться частичкой и лучиками добра посредством знакомства с таким интересным видом времяпровождения, как Настольные Игры.
                        </p>
                        <center><img src="{{ url('images/about/meeples.jpg') }}" width="25%" alt="image"></center>
                    </div>

                    <!-- Services block -->
                    {{--<div class="block-title">
                        <h3>Services</h3>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="service-block">
                                <div class="service-info">
                                    <img src="{{ url('images/service/web_design.png') }}" alt="Responsive Design">
                                    <h4>Web Design</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="service-block">
                                <div class="service-info">
                                    <img src="{{ url('images/service/copywrite.png') }}" alt="Copywriter">
                                    <h4>Copywriter</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="service-block">
                                <div class="service-info">
                                    <img src="{{ url('images/service/ecommerce.png')}}" alt="E-Commerce">
                                    <h4>E-Commerce</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="service-block">
                                <div class="service-info">
                                    <img src="{{ url('mages/service/management.png')}}" alt="Management">
                                    <h4>Management</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>--}}{{--
                    <!-- End of Services block -->

                    <!-- Clients block -->
                    --}}{{--<div class="block-title">
                        <h3>Clients</h3>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-md-2 subpage-block">
                            <div class="client_block">
                                <a href="#" target="_blank"><img src="{{ url('images/clients/client_1.png') }}" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2 subpage-block">
                            <div class="client_block">
                                <a href="#" target="_blank"><img src="{{ url('images/clients/client_2.png') }}" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2 subpage-block">
                            <div class="client_block">
                                <a href="#" target="_blank"><img src="{{ url('images/clients/client_3.png') }}" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2 subpage-block">
                            <div class="client_block">
                                <a href="#" target="_blank"><img src="{{ url('images/clients/client_4.png') }}" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2 subpage-block">
                            <div class="client_block">
                                <a href="#" target="_blank"><img src="{{ url('images/clients/client_5.png') }}" alt="image"></a>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-2 subpage-block">
                            <div class="client_block">
                                <a href="#" target="_blank"><img src="{{ url('images/clients/client_6.png') }}" alt="image"></a>
                            </div>
                        </div>
                    </div>--}}{{--
                    <!-- End of Clients block -->

                    <!-- Fun facts block -->
                    --}}{{--<div class="block-title">
                        <h3>Примерная Статистика</h3>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="fun-fact-block gray-bg">
                                <i class="pe-7s-icon pe-7s-smile"></i>
                                <h4>Happy Clients</h4>
                                <span class="fun-value">1,024</span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="fun-fact-block">
                                <i class="pe-7s-icon pe-7s-alarm"></i>
                                <h4>Working Hours</h4>
                                <span class="fun-value">6,256</span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="fun-fact-block gray-bg">
                                <i class="pe-7s-icon pe-7s-medal"></i>
                                <h4>Awards Won</h4>
                                <span class="fun-value">21</span>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 subpage-block">
                            <div class="fun-fact-block">
                                <i class="pe-7s-icon pe-7s-coffee"></i>
                                <h4>Coffee Consumed</h4>
                                <span class="fun-value">20,000</span>
                            </div>
                        </div>
                    </div>--}}
                    <!-- End of Fun fucts block -->
                </section>
                <!-- End of About Me Subpage -->

                <!-- Resume Subpage -->
                <section class="pt-page pt-page-3" data-id="resume">
                    <div class="section-title-block">
                        <h2 class="section-title">Купить</h2>
                        <h5 class="section-description">Что для это Нужно и Зачем?</h5>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-4 subpage-block">
                            <div class="block-title">
                                <h3>Условия</h3>
                            </div>
                            <img src="{{ url('images/service/marco3.jpg') }}" width="600" alt="image">
                            <div class="timeline">
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Что нужно</h5>
                                    <h4 class="event-name">Обычный созвон</h4>
                                    <span class="event-description">Встреча в удобное для вас время</span>
                                    <p>Созваниваемся, вы выбираете любую игру из <a href="#portfolio">Списка на Сайте</a>, договариваемся о встрече. А также возможен выезд на дом к вам с играми.</p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Цена</h5>
                                    <h4 class="event-name">Недорого для обычного вечера</h4>
                                    <span class="event-description">За каждую последующую игру за вечер: <b style="color: #0b0b0b;">+100 лей</b>.</span>
                                    <p> - <b>200 лей</b> (для игр не сложных, от 20 до 40 минут)</p>
                                    <p> - <b>350 лей</b> (для игр более сложных, 60+ минут)</p>
                                    <p><b>Цена за игру, независимо от количества участников!</b></p>
                                    <h4 class="event-name">За каждую последующую игру за вечер +100 лей.</h4>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Возраст</h5>
                                    <h4 class="event-name">У увлечении нет возраста</h4>
                                    <span class="event-description">Как дети от 8 лет, так и Взрослые</span>
                                    <p> - От <b>8</b> лет и <b>выше</b></p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Просьба!</h5>
                                    <h4 class="event-name">Очень Важная Просьба!</h4>
                                    <span class="event-description">Если для вас это впервые</span>
                                    <p>Ознакомиться со следующими <a href="https://www.youtube.com/watch?v=sz-R78_VRqk" target="_blank">СОВЕТАМИ</a> от Сообщества Настольных Игр - (BGC), это всего лишь 16 минут, но даст вам хорошее понимание важных нюансов!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 subpage-block">
                            <div class="block-title">
                                <h3>Причины</h3>
                            </div>
                            <img src="{{ url('images/service/marco2.jpg') }}" width="100%" alt="image">
                            <div class="timeline">
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Новый Горизонт</h5>
                                    <h4 class="event-name">В кругу Семьи и Близких</h4>
                                    <span class="event-description">Новизна - это всегда к лучшему</span>
                                    <p>Откройте новый горизонт альтернативного вида совместного досуга в кругу Семьи и Близких.</p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Подарок</h5>
                                    <h4 class="event-name">Для кого угодно из Близких</h4>
                                    <span class="event-description">Ограничении по возрасту - НЕТ!</span>
                                    <p>Порой бывает сложно подобрать подарок или купить что-то новое для семьи, чтобы было одновременно всем интересно и что не мало важно – объединяющее всех в какой-то альтернативной совместной деятельности. Потенциал современных настольных игр – справляется с этой задачей сполна!</p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Проба</h5>
                                    <h4 class="event-name">Вам Лично или кому-либо из Близких</h4>
                                    <span class="event-description">Любая игра из <a href="#portfolio">Списка на Сайте</a></span>
                                    <p>Попробуйте перед покупкой любую игру из списка ниже с подробным объяснением правил и самому сыграть, определив тем самым, насколько это подходит вам или близким.</p>
                                </div>
                                <!-- Single event -->
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Подход</h5>
                                    <h4 class="event-name">Как персонально, так и к компании</h4>
                                    <span class="event-description">Состав и Возраст не имеют значения</span>
                                    <p>Индивидуальный подход, любая тематика: экономической, стратегической, путешествия, кооперативной (где вы объединяетесь вместе и играете против механики игры), абстрактной, дуэльной (1х1) и т.д.</p>
                                    <h4 class="event-name">Интересно и познавательно будет всем, гарантия!</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 subpage-block">
                            <div class="block-title">
                                <h3>Статистика и Планы</h3>
                            </div>
                            <img src="{{ url('images/service/marco1.jpg') }}" width="100%" alt="image">
                            <div class="timeline">
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Примерное Распределение Игр</h5>
                                    <div class="skills-info">
                                        <h4>Экономические</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-4"></div>
                                        </div>

                                        <h4>Стратегические</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-5"></div>
                                        </div>

                                        <h4>Кооперативные</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-8"></div>
                                        </div>

                                        <h4>Абстрактные</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-7"></div>
                                        </div>

                                        <h4>Дуэльные</h4>
                                        <div class="skill-container">
                                            <div class="skill-percentage skill-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline">
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Заказ Игр</h5>
                                    <h4 class="event-name">В Скором времени</h4>
                                    <span class="event-description">Помощь в приобритении и доставке</span>
                                    <p>Возможен заказ Настольных Игр. Цены и сроки поставки в зависимости от наличия на складе у поставщика. Полная консультация по приобритению игр.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Resume Subpage -->

                <!-- Portfolio Subpage -->
                <section class="pt-page pt-page-4" data-id="portfolio">
                    <div class="section-title-block">
                        <h2 class="section-title">Список Игр</h2>
                        <h5 class="section-description">Лучшие Настольные Игры в Мире</h5>
                    </div>

                    <!-- Portfolio Content -->
                    <div class="portfolio-content">
                        <div class="block-title">
                            <h3>Топ Игр Для Начинающих</h3>
                        </div>
                        <!-- Portfolio filter -->
                        <ul id="portfolio_filters" class="portfolio-filters">
                            <li class="active">
                                <a class="filter btn btn-sm btn-link active" data-group="all">Все</a>
                            </li>
                            @foreach ($types as $key => $type)
                                <li>
                                    <a class="filter btn btn-sm btn-link" data-group="{{ $key }}">{{ $type }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <!-- End of Portfolio filter -->

                        <!-- Portfolio Grid -->
                        <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">
                            @foreach ($boardGames as $boardGame)
                                <figure class="item" data-groups='["all", "{{ $boardGame->type }}]"'>
                                    <a class="ajax-page-load" href="{{ route('game.show', $boardGame->id) }}">
                                        <img src="{{ url('images/portfolio/' . $boardGame->image) }}" alt="">
                                        <div>
                                            <h5 class="name">{{ $boardGame->name }}</h5>
                                            <small>{{ $types[$boardGame->type] }}</small>
                                            <i class="fa fa-file-text-o"></i>
                                        </div>
                                    </a>
                                </figure>
                            @endforeach
                        </div>
                        <!-- /Portfolio Grid -->
                        <div class="block-title">
                            <h3>Полный Список</h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 subpage-block">
                                <div class="timeline">
                                    <div class="timeline-event te-primary">
                                        <h5 class="event-date">Экономические</h5>
                                        <p>
                                            <ul class="project-general-info">
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/kingdom_builder/">Строитель Королевства</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/Caverna_The_Cave_Farmers/">Каверна</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/Agricola_revised_edition/">Агрикола</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a class="ajax-page-load" href="{{ route('game.show', 3) }}">7 Чудес + Вавилон и Города</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/puerto_rico/">Пуэрто Рико</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/age_of_empires_iii/">Эпоха Открытий</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/stone_age/">Каменный Век</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/die_burgen_von_burgund/">Замки Бургундии</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a class="ajax-page-load" href="{{ route('game.show', 6) }}">Cтамбул + Brief & Siegel, Mokka & Bakschisch</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/Isle_of_Skye/">Остров Скай</a></p></li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 subpage-block">
                                <div class="timeline">
                                    <div class="timeline-event te-primary">
                                        <h5 class="event-date">Стратегические</h5>
                                        <p>
                                            <ul class="project-general-info">
                                                <li><p><i class="fa fa-check-square-o"></i><a class="ajax-page-load" href="{{ route('game.show', 8) }}">Кингдомино</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/celestia/">Селестия</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/great_western_trail/">Великий Западный Путь</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/rokoko/">Рококо</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/5tribes/">Пять Племен + Ремесленники и Султаны</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/Potion-Making_Practice/">Зельеварение + Алхимики и Университет</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a class="ajax-page-load" href="{{ route('game.show', 1) }}">Билет на Поезд: Европа</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a class="ajax-page-load" href="{{ route('game.show', 2) }}">Доминион</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a class="ajax-page-load" href="{{ route('game.show', 7) }}">Канагава</a></p></li>
                                                <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/stone_age/">Путешествия Марко Поло</a></p></li>
                                            </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 subpage-block">
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Кооперативные</h5>
                                    <p>
                                        <ul class="project-general-info">
                                            <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/Robinson_Crusoe_Adventure_on_the_Cursed_Island/">Робинзон Крузо</a></p></li>
                                            <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/forbidden_island/">Запретный Остров</a></p></li>
                                            <li><p><i class="fa fa-check-square-o"></i><a class="ajax-page-load" href="{{ route('game.show', 5) }}">Андор + Легенда о звёздном щите</a></p></li>
                                        </ul>
                                    </p>
                                </div>
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Абстрактные</h5>
                                    <p>
                                        <ul class="project-general-info">
                                        <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/dixit_odyssey/">Диксит</a></p></li>
                                        </ul>
                                    </p>
                                </div>
                                <div class="timeline-event te-primary">
                                    <h5 class="event-date">Дуэльные</h5>
                                    <p>
                                        <ul class="project-general-info">
                                            <li><p><i class="fa fa-check-square-o"></i><a target="_blank" href="http://tesera.ru/game/7_wonders_duel/">7 чудес. Дуэль + Дополнение Пантеон</a></p></li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Portfolio Content -->

                </section>
                <!-- /Portfolio Subpage -->

                <!-- Blog Subpage -->
                <section class="pt-page pt-page-5" data-id="blog">
                    <div class="section-title-block">
                        <h2 class="section-title">Blog</h2>
                        <h5 class="section-description">My Diary</h5>
                    </div>
                    <div class="blog-masonry">
                        <!-- Blog Post 1 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_1.jpg" alt="blog-post-1" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">6</span><span class="month">Dec</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">Bootstrap is the Most Popular Framework</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 1 -->

                        <!-- Blog Post 2 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_2.jpg" alt="blog-post-2" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">3</span><span class="month">Nov</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">jQuery</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">One Framework, Every Device</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 2 -->

                        <!-- Blog Post 3 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_3.jpg" alt="blog-post-3" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">12</span><span class="month">Oct</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">Sport</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">Designed for Everyone, Everywhere</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 3 -->

                        <!-- Blog Post 4 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_4.jpg" alt="blog-post-4" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">18</span><span class="month">Aug</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">CSS</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">An Introduction To PostCSS</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 4 -->

                        <!-- Blog Post 5 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_5.jpg" alt="blog-post-5" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">2</span><span class="month">Jul</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">CSS3</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">Original and Innovative Web Layouts</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 5 -->

                        <!-- Blog Post 6 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_6.jpg" alt="blog-post-6" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">8</span><span class="month">May</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">HTML5</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">Creative and Innovative Navigation Designs</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 6 -->

                        <!-- Blog Post 7 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_7.jpg" alt="blog-post-7" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">7</span><span class="month">Apr</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">Design</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">Navigation for Mega-Sites</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 7 -->

                        <!-- Blog Post 8 -->
                        <div class="item">
                            <div class="blog-card">
                                <div class="media-block">
                                    <a href="blog-post-1.html">
                                        <img class="post-image img-responsive" src="images/blog/blog_post_8.jpg" alt="blog-post-8" />
                                        <div class="mask"></div>
                                        <div class="post-date"><span class="day">21</span><span class="month">Mar</span><!--<span class="year">2016</span>--></div>
                                    </a>
                                </div>
                                <div class="post-info">
                                    <ul class="category">
                                        <li><a href="#">CSS3</a></li>
                                    </ul>
                                    <a href="blog-post-1.html"><h4 class="blog-item-title">Front-End Challenge Accepted: CSS 3D Cube</h4></a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Blog Post 8 -->
                    </div>
                </section>
                <!-- End Blog Subpage -->

                <!-- Contact Subpage -->
                <section class="pt-page pt-page-6" data-id="contact">
                    <div class="section-title-block">
                        <h2 class="section-title">Contact</h2>
                        <h5 class="section-description">Get in Touch</h5>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 subpage-block">
                            <div class="block-title">
                                <h3>Get in Touch</h3>
                            </div>
                            <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.</p>
                            <div class="contact-info-block">
                                <div class="ci-icon">
                                    <i class="pe-7s-icon pe-7s-map-marker"></i>
                                </div>
                                <div class="ci-text">
                                    <h5>Los Angeles, USA</h5>
                                </div>
                            </div>
                            <div class="contact-info-block">
                                <div class="ci-icon">
                                    <i class="pe-7s-icon pe-7s-mail"></i>
                                </div>
                                <div class="ci-text">
                                    <h5>alexsmith@example.com</h5>
                                </div>
                            </div>
                            <div class="contact-info-block">
                                <div class="ci-icon">
                                    <i class="pe-7s-icon pe-7s-call"></i>
                                </div>
                                <div class="ci-text">
                                    <h5>+123 654 78900</h5>
                                </div>
                            </div>
                            <div class="contact-info-block">
                                <div class="ci-icon">
                                    <i class="pe-7s-icon pe-7s-check"></i>
                                </div>
                                <div class="ci-text">
                                    <h5>Freelance Available</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6 subpage-block">
                            <div class="block-title">
                                <h3>Contact Form</h3>
                            </div>
                            <form id="contact-form" method="post" action="contact_form/contact_form.php">

                                <div class="messages"></div>

                                <div class="controls">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                                        <div class="form-control-border"></div>
                                        <i class="form-control-icon fa fa-user"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                        <div class="form-control-border"></div>
                                        <i class="form-control-icon fa fa-envelope"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                                        <div class="form-control-border"></div>
                                        <i class="form-control-icon fa fa-comment"></i>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-callback="correctCaptcha"></div>

                                    <input type="submit" class="button btn-send" value="Send message">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- End Contact Subpage -->

            </div>
        </div>
        <!-- /Page changer wrapper -->
    </div>
    <!-- /Main Content -->
</div>

<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/page-transition.js') }}"></script>
<script src="{{ url('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ url('js/validator.js') }}"></script>
<script src="{{ url('js/jquery.shuffle.min.js') }}"></script>
<script src="{{ url('js/masonry.pkgd.min.js') }}"></script>
<script src="{{ url('js/owl.carousel.min.js') }}"></script>
<script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ url('js/jquery.hoverdir.js') }}"></script>
<script src="{{ url('js/main.js') }}"></script>

</body>
</html>
