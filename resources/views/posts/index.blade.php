<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Мир Настольных Игр</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Мир Настольных Игр" />
    <meta name="keywords" content="настольные игры, молдова, board games, moldova, jocuri de masa" />
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

<!-- Single Post page -->
<div id="page" class="page blog-post-page">
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
                    <a class="pt-trigger" href="{{route("game.main")}}#home" data-animation="58" data-goto="1">Главная</a><!-- href value = data-id without # of .pt-page. Data-goto is the number of section -->
                </li>
                <!-- /About Me Subpage link -->
                <!-- About Me Subpage link -->
                <li>
                    <a class="pt-trigger" href="{{route("game.main")}}#about_me" data-animation="59" data-goto="2">О Нас</a>
                </li>
                <!-- /About Me Subpage link -->
                <li>
                    <a class="pt-trigger" href="{{route("game.main")}}#resume" data-animation="60" data-goto="3">Купить</a>
                </li>
                <li>
                    <a class="pt-trigger" href="{{route("game.main")}}#portfolio" data-animation="61" data-goto="4">Список Игр</a>
                </li>
                <li>
                    <a class="pt-trigger" href="{{route("game.main")}}#blog" data-animation="58" data-goto="5">Статьи</a>
                </li>
                <li>
                    <a class="pt-trigger" href="{{route("game.main")}}#contact" data-animation="59" data-goto="6">Контакты</a>
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

    <div id="main" class="site-main">
        <div class="page-wrapper">
            <a class="blog-back-button" href="{{route("game.main")}}#blog"><i class="fa fa-angle-left"></i></a>

            <div class="blog-post-main-image">
                <img class="post-image img-responsive" src="{{ url('images/blog/blog_kanagawa/kanagawa_main_full.jpg') }}" alt="Канагава" />
            </div>

            <div class="blog-post-content">
                <h1>Художественная школа в Канагаве</h1>
                <ul class="tags">
                    <li><a>Настольная Игра</a></li>
                    <li><a>Канагава</a></li>
                    <li><a>Стратегия</a></li>
                    <li><a>Медитативный драфт</a></li>
                    <li><a>Вид Фудзияма</a></li>
                </ul>
                <p class="lead">
                    Художник в Японии, подобен самураю, только в руках его не меч, а кисть. В середине XIX века, мастер Хокусай открыл в Канагаве художественную школу, чтобы передать ученикам свои умения и мастерство.
                </p>
                <blockquote>
                    <p>"Даже если у человека нет особых талантов,</p>
                    <p>но он упорно овладевает знанием, -</p>
                    <p>он не опозорится перед другими."</p>
                    <footer>Японская мудрость <cite title="Source Title"> Фудзияма</cite></footer>
                </blockquote>
                <center><img class="post-image img-responsive" src="{{ url('images/blog/blog_kanagawa/kanagawa-na-site-1.jpg') }}" alt="Канагава" /></center>
                <p>
                    Участникам настольной игры Kanagawa выпадет честь посещать уроки Хокусая, а после, применять полученные знания на холстах. И как знать, возможно, ученикам удастся превзойти учителя. Художник, написавший самое гармоничное полотно, станет победителем игры.
                </p>

                <h4 class="blog-item-title">ШКОЛА ИСКУССТВ</h4>

                <p>
                    В японской школе вас не усадят за парты, искусство здесь преподается на специальном коврике, на котором мастер будет раскладывать карты уроков. Одна карта – один урок. Обратите внимание, что каждый урок (карта) состоит из двух частей: левая – студийная, а правая – художественная. С помощью студийной части урока, игроки будут получать кисти и модернизировать свой инвентарь, а с помощью художественной – рисовать и увеличивать свое полотно.
                </p>
                <center><img class="post-image img-responsive" src="{{ url('images/blog/blog_kanagawa/kanagawa-na-site-2.jpg') }}" alt="Канагава" /></center>

                <h4 class="blog-item-title">ЧТО МЫ БУДЕМ РИСОВАТЬ?</h4>

                <p>На фоне пейзажей разных времен года, вы будете рисовать здания, деревья, людей и животных. Все зависит от того, какой урок Мастера вы освоите лучше других.</p>
                <center><img class="post-image img-responsive" src="{{ url('images/blog/blog_kanagawa/kanagawa-na-site-3.jpg') }}" alt="Канагава" /></center>

                <p>Каждая художественная карта содержит в себе тип пейзажа (горный, лесной, равнинный, водный), время года, персонажа и очки гармонии. Полотно складывается путем стыкования карт в один ряд. Старайтесь выкладывать карты полотна в определенных последовательностях. За это, художник будет награждаться дипломами.</p>

                <h4 class="blog-item-title">КАК РИСОВАТЬ?</h4>

                <p>Во время обучения, игроки будут брать с коврика карты уроков, и выкладывать их перед собой. Игрок сам решает, какой стороной выкладывать карту, и какую часть урока использовать: улучшить студию или увеличить полотно.</p>
                <center><img class="post-image img-responsive" src="{{ url('images/blog/blog_kanagawa/kanagawa-na-site-4.jpg') }}" alt="Канагава" /></center>
                <p>В начале игры, каждый ученик получает стартовую плитку, к которой будет стыковать взятые в школе карты уроков. Сверху – полотно, снизу – студия.
                    Чтобы писать картину, у игрока должна быть кисть, размещенная на палитре необходимого пейзажа. Другими словами, чтобы выложить карту с горным пейзажем, игрок должен разместить фигурку кисти на соответствующую палитру в студии.</p>

                <center><img class="post-image img-responsive" src="{{ url('images/blog/blog_kanagawa/kanagawa-na-site-5.jpg') }}" alt="Канагава" /></center>

                <p>Согласно стартовой плитке, ученики начинают игру уже с двумя кистями, а остальной инвентарь и новые кисти они смогут получить в процессе игры. </p>

                <h4 class="blog-item-title">ПОДСЧЕТ ОЧКОВ</h4>

                <p>Когда все уроки Мастера усвоены, а готовые полотна игроков вдохновляют своей красотой, начинается подсчет очков: за каждую карту урока в полотне, за полученные промежуточные дипломы, за самую длинную связку карт с одинаковым временем года и за набранные очки гармонии. Игрок с максимальным количеством очков объявляется победителем.</p>

                <h4 class="blog-item-title">ДЛЯ КОГО ИГРА</h4>

                <p>Kanagawa – очень красивая настольная игра, наполненная умиротворенной восточной атмосферой. Хорошо подойдет для уютного семейного вечера за чашечкой чая или в компании друзей. Несомненно, понравится любителям пособирать карточные сеты, поклонникам живописи, и японской культуры.</p>

                <blockquote>
                    <p>"Чтоб холодный вихрь</p>
                    <p>Ароматом напоить, опять раскрылись</p>
                    <p>Поздней осенью цветы."</p>
                    <footer>Мацуо Басё <cite title="Source Title"> </cite></footer>
                </blockquote>
                       
                <div class="post-info">
                    <span class="autor"><i class="fa fa-fw fa-user"></i>Путеводитель в Мир Настольных Игр</span>
                    <span class="divider">|</span>
                    <span class="date"><i class="fa fa-fw fa-clock-o"></i>01 December, 2017</span>
                    <!-- Share Buttons -->
                    <div class="btn-group share-buttons pull-right hidden-xs">
                        <a class="tip social-button" href="https://www.facebook.com/mirigr.md" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a class="tip social-button" href="https://www.youtube.com/channel/UCmg7RM71JEdRdt27BbQMUbA" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a>
                        <a class="tip social-button" href="https://www.facebook.com/mirigr.md" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                    </div>
                    <!-- /Share Buttons -->
                </div>

                {{--<div class="post-comments">
                    <div class="block-title">
                        <h3>Comments (3)</h3>
                    </div>

                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="images/blog/comments/comment_photo_1.png" alt="">
                        </a>
                        <div class="media-body">
                            <div class="media-heading">
                                <a href="#">John Doe</a> <span class="divider">|</span> <span class="light-gray">1 hour ago</span>
                            </div>
                            <p>Nam pellentesque laoreet augue sed facilisis. Suspendisse nec sollicitudin mauris. Integer fringilla a odio sit amet fermentum. Nunc nibh mauris, pretium eu risus et, finibus facilisis lorem.</p>
                            <div class="media-footer">
                                <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                <span class="divider"></span>
                                <i class="fa fa-thumbs-up"></i>
                                <span>0</span>
                                <i class="fa fa-thumbs-down"></i>
                            </div>

                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/blog/comments/comment_photo_2.png" alt="">
                                </a>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="#">Bryan Morris</a> <span class="divider">|</span> <span class="light-gray">5 hours ago</span>
                                    </div>
                                    <p>Donec fermentum elementum massa nec imperdiet. Quisque iaculis accumsan elit eget porttitor.</p>
                                    <div class="media-footer">
                                        <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                        <span class="divider"></span>
                                        <i class="fa fa-thumbs-up"></i>
                                        <span>0</span>
                                        <i class="fa fa-thumbs-down"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object" src="images/blog/comments/comment_photo_1.png" alt="">
                                </a>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <a href="#">John Doe</a> <span class="divider">|</span> <span class="light-gray">12 hours ago</span>
                                    </div>
                                    <p>Nulla tincidunt augue lacinia purus scelerisque fringilla. Donec venenatis volutpat lacus, ac efficitur ligula imperdiet id. Nunc gravida ullamcorper metus, ut gravida velit condimentum vel.</p>
                                    <div class="media-footer">
                                        <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                        <span class="divider"></span>
                                        <i class="fa fa-thumbs-up"></i>
                                        <span>0</span>
                                        <i class="fa fa-thumbs-down"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="post-comment-add">
                    <div class="block-title">
                        <h3>Leave a Comment</h3>
                    </div>
                    <form class="form-add-comment">
                        <div class="form-group">
                            <input class="form-control" placeholder="Your name" name="name">
                            <div class="form-control-border"></div>
                            <i class="form-control-icon fa fa-user"></i>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message..." name="message"></textarea>
                            <div class="form-control-border"></div>
                            <i class="form-control-icon fa fa-comment"></i>
                        </div>
                        <button class="button" type="submit">Add comment</button>
                    </form>
                </div>--}}

            </div>

        </div>
    </div>
</div>
<!-- /Single Post page -->

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
