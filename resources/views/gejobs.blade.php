@include('Layout.header')
<div id="main">
    <div id="main">
        <div class="swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide-prev">
                    <div class="video-js">
                        <img class="banner" src="../img/about_swiper.png" alt="">
                        <button class="vjs-big-play-button vjs-play-button-show" type="button" id="btn">
                            <span aria-hidden="true" class="vjs-icon-placeholder"></span>
                            <span class="vjs-control-text"></span>
                        </button>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="my-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="my-bullet my-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <div id="login-form">
            <div preload="auto"
                 class="video-js vjs-fluid"
                 id="my-player" lang="en" role="region" aria-label="Video Player">
                <video muted id="my-player_html5_api" class="vjs-tech" preload="auto" tabindex="-1" controls autoplay="autoplay">
                    <source src="../video/0bf2faaaiaaalyaiaka3lnpvakgdaquaabaa.f10002.mp4"
                            type="video/mp4">
                </video>

            </div>
        </div>
        <div class="bottom-block">

        </div>
</div>


@include('Layout.footer')
<script>
    $(document).ready(function () {
        var player = videojs('my-player', {
            fluid: true,
            autoplay: true,
        });
        $('#btn').click(function () {
            $('#login-form').modal();
            player.play();
        });
        var player_company = videojs('my-player-company', { fluid: true });
        $('#btn_company').click(function () {
            $('#login-form-company').modal();
            player_company.play();
        });
    })
</script>
</body>
</html>
