<div id="portfolio-page-{{ $game->id }}" class="portfolio-page-content">
    <div class="container">
        <div class="portfolio-nav">
            <div id="portfolio-close-button" class="portfolio-close-button">
                <a href="#portfolio"><i class="fa fa-close"></i></a>
            </div>
        </div>

        <div class="portfolio-title">
            <h1>{{ $game->name }}</h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <div class="item">
                        <img src="images/portfolio/{{ $folderName }}/1_1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/portfolio/{{ $folderName }}/1_2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/portfolio/{{ $folderName }}/1_3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/portfolio/{{ $folderName }}/1_4.jpg" alt="">
                    </div>
                </div>

                <div class="portfolio-page-video embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{ $game->youtube_url }}?autoplay=0" frameborder="0" allowfullscreen></iframe>
                </div>

                <script type="text/javascript">
                    jQuery(document).ready(function($){
                        $('.portfolio-page-carousel').owlCarousel({
                            smartSpeed:1200,
                            items: 1,
                            loop: true,
                            dots: true,
                            nav: true,
                            navText: false,
                            margin: 10
                        });
                    });
                </script>
            </div>

            <div class="col-sm-5 col-md-5 portfolio-block">
                <!-- Game Description -->
                <div class="block-title">
                    <h3>Описание</h3>
                </div>
                <ul class="project-general-info">
                    <li><p><i class="fa fa-users"></i>{{ $game->number_of_players }} Игроков</p></li>
                    <li><p><i class="fa fa-clock-o"></i>{{ $game->time }} Минут</p></li>
                    <li><p><i class="fa fa-child"></i>{{ $game->age }}</p></li>
                    <li><p><i class="fa fa-calendar"></i>Опубикована в {{ $game->publish_year }}</p></li>
                    <li><p><i class="fa fa-globe"></i> <a href="{{ $game->tesera_url }}" target="_blank">{{ $game->tesera_url }}</a></p></li>
                    <li><p><i class="fa fa-video-camera"></i> <a href="{{ $game->youtube_url }}" target="_blank">Полный Обзор и Геймплей</a></p></li>
                </ul>
                <p class="text-justify">{{ $game->description }}</p>
                <div class="portfolio-page-image">
                    <center><img src="images/portfolio/{{ $folderName }}/1_0.jpg" width="400" alt="{{ $game->name }}"></center>
                </div>
                <!-- /Project Description -->

                <!-- Technology -->
                <div class="tags-block">
                    <div class="block-title">
                        <h3>Тип</h3>
                    </div>
                    <ul class="tags">
                        <li><a>{{ $types[$game->type] }}</a></li>
                        <li><a>{{ $game->language }}</a></li>
                    </ul>
                </div>
                <!-- /Technology -->

                <!-- Share Buttons -->
                <div class="btn-group share-buttons">
                    <div class="block-title">
                        <h3>Поделиться</h3>
                    </div>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-facebook"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-twitter"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-dribbble"></i> </a>
                </div>
                <!-- /Share Buttons -->
            </div>
        </div>
    </div>
</div>
