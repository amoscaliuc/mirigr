<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="description" content="Creative Personal Resume Template">
    <meta name="keywords" content="настольные игры">
    <meta name="author" content="tatwerat.com">
    <!--mobile-meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Вводное Слово</title>
    <!--owl-carousel-->
    <link rel="stylesheet" href="{{ url('js/owl-carousel/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('js/owl-carousel/owl.theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('js/owl-carousel/owl.transitions.css') }}" type="text/css">
    <!--color-box-->
    <link rel="stylesheet" href="{{ url('js/colorbox/colorbox.min.css') }}" type="text/css">
    <!--main-style-->
    <link rel="stylesheet" media="screen" href="{{ url('css/style.css') }}" type="text/css">
    <!--blog-style-->
    <link rel="stylesheet" class="blog-style" media="screen" href="{{ url('css/blog.css') }}" type="text/css">
    <!--responsive-style-->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}" type="text/css">
</head>
<body data-page="blog">
<div id="Wrapper">
    <header>
        <div class="container-fluid fixed" id="Header">
            <div class="container">
                <div class="logo"><span>М</span></div>
                {{--<div class="logo"><img src="images/logo.png" alt=""></div>--}}
                <p class="logoName">Мир Настольных Игр</p>
                <p class="jobTitle">Знакомство с Лучшими в Мире Настольными Играми</p>
                <p class="jobTitle">0 (793) 1-60-60</p>
                <a href="#About" class="moreData fa fa-angle-down"></a>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-default AH_Nav" id="navTopMenu" role="navigation">
        <div class="container-fluid">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="#Header" class="home" id="homepages" data-hover="dropdown">ГЛАВНАЯ</a>
                            {{--<ul class="dropdown-menu"  aria-labelledby="homepages">
                                <li><a href="index.html">Home Min Header</a></li>
                                <li><a href="index-fullheight.html">Home Full Header</a></li>
                                <li><a href="index-boxed.html">Home Boxed Width</a></li>
                            </ul>--}}
                        </li>
                        <li><a href="#About" class="about">О НАС</a></li>
                        <li><a href="#Portfolio" class="portfolio">ИГРЫ</a></li>
                        <li><a href="#Activity" class="activity">СТАТЬИ</a></li>
                        <li><a href="#Clients" class="clients">КЛИЕНТЫ</a></li>
                        <li><a href="#ContactUS" class="contact">СВЯЗЬ</a></li>
                        {{--<li class="active dropdown">
                            <a href="blog.html" id="bloglist" data-hover="dropdown" class="contact">Pages &raquo;</a>
                            <ul class="dropdown-menu"  aria-labelledby="bloglist">
                                <li><a href="blog.html">blog</a></li>
                                <li><a href="single-blog.html">single post</a></li>
                                <li><a href="portfolio.html">portfolio</a></li>
                                <li><a href="portfolio-fullwidth-columns2.html">portfolio columns 2</a></li>
                                <li><a href="portfolio-fullwidth-columns3.html">portfolio columns 3</a></li>
                                <li><a href="portfolio-fullwidth-columns4.html">portfolio columns 4</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="Shop.html" id="shoplist" data-hover="dropdown" class="contact">Shop &raquo;</a>
                            <ul class="dropdown-menu"  aria-labelledby="shoplist">
                                <li><a href="shop.html">shop [1]</a></li>
                                <li><a href="shop-2.html">shop [2]</a></li>
                                <li><a href="product-single.html">product single</a></li>
                                <li><a href="cart.html">cart</a></li>
                            </ul>
                        </li>--}}
                    </ul>
                </div>
            </div>
            <div class="scrollTop fa fa-caret-up"></div>
        </div>
    </nav>
    <div id="Body">
        <div class="container-fluid" id="Blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 content">
                        <div class="blog_breadcrumb">
                            <ul>
                                <li><a href=""><i class="fa fa-home"></i> Главная</a></li>
                                <li>/</li>
                                <li><a href="">Статья</a></li>
                                <li>/</li>
                                <li><a href="">Вводная</a></li>
                            </ul>
                        </div>
                        <div class="singleBlog">
                            <div class="title">
                                <span class="format"><i class="fa fa-pencil"></i></span>
                                <h2>Путеводитель в Мир Настольных Игр</h2>
                            </div>
                            <div class="post_slideshow">
                                <img src="{{ url('images/posts/about/about_header.jpg') }}" alt="">
                            </div>
                            <div class="single_details">
                                <ul>
                                    <li><i class="fa fa-clock-o"> 12 Nov 2017</i></li>
                                    <li>By : <a href="">Путеводитель В Мир Настольных Игр</a></li>
                                    <li>IN : <a href="">Ввводная</a></li>
                                    <li><a href=""><i class="fa fa-comments"> 0 Comments</i></a></li>
                                </ul>
                            </div>
                            <div class="single_content">
                                <p>
                                    {{ $post->body }}
                                </p>
                            </div>
                            <div class="single_bottom">
                                <div class="tags">
                                    <b>Tags : </b>
                                    <a href="#">html5</a>
                                    <a href="#">css</a>
                                    <a href="#">wordpress</a>
                                    <a href="#">php</a>
                                    <a href="#">psd</a>
                                    <a href="#">images</a>
                                    <a href="#">videos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 sidebar">
                        <div class="widget">
                            <h2>Search</h2>
                            <form action="#" method="post" class="searchForm">
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" required="required" placeholder="search value ...">
                                    <span class="input-group-btn">
                                                <button type="submit" class="btn btn-lg btn-default"><i class="fa fa-search"></i></button>
                                            </span>
                                </div>
                            </form>
                        </div>
                        <div class="widget">
                            <h2>categories</h2>
                            <ul class="categories">
                                <li><a href="#">category [1]</a></li>
                                <li><a href="#">category [2]</a></li>
                                <li><a href="#">category [3]</a></li>
                                <li><a href="#">category [4]</a></li>
                                <li><a href="#">category [5]</a></li>
                                <li><a href="#">category [6]</a></li>
                                <li><a href="#">category [7]</a></li>
                                <li><a href="#">category [8]</a></li>
                                <li><a href="#">category [9]</a></li>
                                <li><a href="#">category [10]</a></li>
                            </ul>
                        </div>
                        <div class="widget-feed">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="facebook-likes">
                                        <i class="fa fa-facebook"></i>
                                        <span>45,120</span>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="twitter-followers">
                                        <i class="fa fa-twitter"></i>
                                        <span>45,190</span>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="instagram-followers">
                                        <i class="fa fa-instagram"></i>
                                        <span>95,340</span>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="youtube-sub">
                                        <i class="fa fa-youtube"></i>
                                        <span>145,120</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                            <h2>popular</h2>
                            <ul class="popular">
                                <li>
                                    <img src="images/posts/post1.gif" alt="">
                                    <a href="#" class="title">At vero eos et accusam et justo duo ... </a>
                                    <span><i class="fa fa-comments"></i> 451</span>
                                </li>
                                <li>
                                    <img src="images/posts/post2.gif" alt="">
                                    <a href="#" class="title">At vero eos et accusam et justo duo ... </a>
                                    <span><i class="fa fa-comments"></i> 451</span>
                                </li>
                                <li>
                                    <img src="images/posts/post3.gif" alt="">
                                    <a href="#" class="title">At vero eos et accusam et justo duo ... </a>
                                    <span><i class="fa fa-comments"></i> 451</span>
                                </li>
                                <li>
                                    <img src="images/posts/post1.gif" alt="">
                                    <a href="#" class="title">At vero eos et accusam et justo duo ... </a>
                                    <span><i class="fa fa-comments"></i> 451</span>
                                </li>
                                <li>
                                    <img src="images/posts/post2.gif" alt="">
                                    <a href="#" class="title">At vero eos et accusam et justo duo ... </a>
                                    <span><i class="fa fa-comments"></i> 451</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <h2>tags cloud</h2>
                            <div class="tags">
                                <a href="#">html5 <span>25</span></a>
                                <a href="#">css <span>10</span></a>
                                <a href="#">wordpress <span>37</span></a>
                                <a href="#">php <span>47</span></a>
                                <a href="#">psd <span>13</span></a>
                                <a href="#">images <span>142</span></a>
                                <a href="#">videos <span>285</span></a>
                            </div>
                        </div>
                        <div class="widget">
                            <h2>Login</h2>
                            <form action="#" method="post" class="loginForm">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" required="required" placeholder="yourname">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" required="required" placeholder="password">
                                </div>
                                <button type="submit" class="btn btn-default">Login</button> &nbsp; OR &nbsp; <a href="">Register</a>
                            </form>
                        </div>
                        <div class="widget">
                            <h2>Portfolio</h2>
                            <div class="widgetSlider">
                                <div class="owl-carousel">
                                    <div class="item">
                                        <img src="images/projects/project1.gif" alt="">
                                        <a href="images/projects/project1-lg.gif" title="your project name [1]"><i class="fa fa-link"></i> Your Project Name [1]</a>
                                    </div>
                                    <div class="item">
                                        <img src="images/projects/project2.gif" alt="">
                                        <a href="images/projects/project2-lg.gif" title="your project name [2]"><i class="fa fa-link"></i> Your Project Name [2]</a>
                                    </div>
                                    <div class="item">
                                        <img src="images/projects/project3.gif" alt="">
                                        <a href="images/projects/project3-lg.gif" title="your project name [3]"><i class="fa fa-link"></i> Your Project Name [3]</a>
                                    </div>
                                    <div class="item">
                                        <img src="images/projects/project4.gif" alt="">
                                        <a href="images/projects/project4-lg.gif" title="your project name [4]"><i class="fa fa-link"></i> Your Project Name [4]</a>
                                    </div>
                                    <div class="item">
                                        <img src="images/projects/project5.gif" alt="">
                                        <a href="images/projects/project1-lg.gif" title="your project name [5]"><i class="fa fa-link"></i> Your Project Name [5]</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid fellowUs">
            <div class="container">
                <ul class="col-md-8 col-md-offset-2">
                    <li><a href="https://www.facebook.com/mirigr.md" target="_blank" class="fa fa-facebook"></a></li>
                    {{--<li><a href="" class="fa fa-twitter"></a></li>--}}
                    <li><a href="https://www.facebook.com/mirigr.md" target="_blank" class="fa fa-google-plus"></a></li>
                    <li><a href="https://www.facebook.com/mirigr.md" target="_blank" class="fa fa-linkedin"></a></li>
                    <li><a href="https://www.youtube.com/watch?v=sz-R78_VRqk" target="_blank" class="fa fa-youtube"></a></li>
                    {{--<li><a href="" class="fa fa-dribbble"></a></li>
                    <li><a href="" class="fa fa-behance"></a></li>
                    <li><a href="" class="fa fa-android"></a></li>
                    <li><a href="" class="fa fa-apple"></a></li>--}}
                    <li><a href="" class="fa fa-rss"></a></li>
                </ul>
            </div>
        </div>
        <!--/fellowUs-->
    </div>
    <!--/Body-->
</div>
<!--/Wrapper-->
<div class="wrapperLoading"><span class="fa fa-refresh"></span></div>
<!--java scripts file-->
<script type="text/javascript" src="{{ url('js/jquery/jquery.js') }}"></script>
<script type='text/javascript' src="{{ url('js/drag-drop/drag-drop.js') }}"></script>
<script type="text/javascript" src="{{ url('js/bootstrap/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/colorbox/colorbox.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/knob/jquery.knob.js') }}"></script>
<script type="text/javascript" src="{{ url('js/owl-carousel/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/viewport-checker/viewportchecker.js') }}"></script>
<script type="text/javascript" src="{{ url('js/jquery/jquery.custom.js') }}"></script>
<!--/java scripts file-->
</body>
</html>