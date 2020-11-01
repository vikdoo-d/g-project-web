
@include('Layout.header')
<link rel="stylesheet" href="../css/index.css">
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
            <div class="swiper-slide swiper-slide-active">
                <div class="video-js">
                    <img class="banner" src="../img/about_swiper2.png" alt="">
                    <button class="vjs-big-play-button vjs-play-button-show" type="button" id="btn_company">
                        <span aria-hidden="true" class="vjs-icon-placeholder"></span>
                        <span class="vjs-control-text"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="my-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="my-bullet my-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    <div id="login-form">
        <div preload="auto"
             class="video-js vjs-fluid"
             id="my-player" lang="en" role="region" aria-label="Video Player">
            <video muted id="my-player_html5_api" class="vjs-tech" preload="auto" tabindex="-1" controls autoplay="autoplay">
                <source src="../video/0bf2lqaamaaa54ageki2mzpvaxgdazoaabqa.f10002.mp4"
                        type="video/mp4">
            </video>

        </div>
    </div>
    <div id="login-form-company">
        <div preload="auto"
             class="video-js vjs-fluid"
             id="my-player-company" lang="en" role="region" aria-label="Video Player">
            <video muted id="my-player-company_html5_api" class="vjs-tech" preload="auto" tabindex="-1" controls autoplay="autoplay">
                <source
                    src="../video/0bf2yyaagaaa5uaia4y3lzpvbrwdapdaaaya.f10002.mp4"
                    type="video/mp4">
            </video>


        </div>
    </div>
    <div class="top-block">
        <div class="top-block-logo"></div>
        <div class="top-block-text">
            <p>
                <span class="text">格家房产</span>
                2010年创立于安徽芜湖，历经十年的磨砺与成长，
                现已发展成为拥有60余家直营连锁门店、拥有500多人的年轻职业化精英团队，
                是芜湖直营连锁中介的开拓者。
            </p>
            <p>
               公司主营二手房买卖租赁、新房联动销售，
                范围涉及住宅、别墅、写字楼、商铺等，
                同时提供代办房屋过户、按揭贷款、代办产权交易过户等服务。
            </p>
            <p >
                格家坚持以“人真、心诚、事久”为核心价值观，并始终秉承“为更多人找到满意的家”的服务理念，
                10年来格家人用脚步丈量着芜湖的每一个社区和商圈，不断地提升专业，细化服务。
                未来我们将继续践行公司的企业文化，竭诚为江城百姓置业安家！
            </p>
        </div>
    </div>
    <div class="icon-block">
        <div class="icon-block-inner">
            <div class="block-title">我们是谁</div>
            <div class="block-sub-title">格家房产以技术驱动的品质居住服务平台</div>
            <div class="block-line"></div>
            <div class="block-icon-wrap">
                <ul class="block-icon-list">
                    <li class="block-icon-item">
                        <img src="./img/icon_ershou.png" alt="二手房">
                        <div>二手房</div>
                    </li>
                    <li class="block-icon-item">
                        <img src="./img/icon_xinfang.png" alt="新房">
                        <div>新房</div>
                    </li>
                    <li class="block-icon-item">
                        <img src="./img/icon_zulin.png" alt="租赁">
                        <div>租赁</div>
                    </li>
                    <li class="block-icon-item">
                        <img src="./img/icon_zhuangxiu.png" alt="装修">
                        <div>装修</div>
                    </li>
                    <li class="block-icon-item">
                        <img src="./img/icon_more.png" alt="更多">
                        <div>更多</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom-block">
        <div class="block-title">用户价值</div>
        <div class="block-sub-title">建立全行业基础设施重塑消费者体验</div>
        <div class="block-line block-sub-line"></div>
        <div class="block-sub">
            <div class="block-sub-logo">
                <img src="../img/052729f1-ab56-11e8-b5f5-55c168a58b42.png" alt="">
            </div>
            <div class="block-sub-text">
                <h2>真信息</h2>
                <p>真房源数据库“楼盘字典”。收录超过1亿套房屋，一套房屋433
                    个字段描述，20万经纪人参与动态维护。7x24小时全生命周期真房源验真系统。</p>
            </div>
        </div>
        <div class="block-sub">
            <div class="block-sub-text">
                <h2>真价格</h2>
                <p>准确率90%的房屋估价。依托海量真实成交和在售数据，准确预估房屋真实市场价值。</p>
            </div>
            <div class="block-sub-logo">
                <img src="../img/6a84ad51-ab55-11e8-b5f5-55c168a58b42.png" alt="">
            </div>
        </div>
        <div class="block-sub">
            <div class="block-sub-logo">
                <img src="../img/fd1df951-ab55-11e8-b5f5-55c168a58b42.png" alt="">
            </div>
            <div class="block-sub-text">
                <h2>真体验</h2>
                <p>真VR看房。自由感受空间和方位的沉浸式看房，经纪人语音
                    在线讲解服务，打破时空限制，多
                    人交互场景体验。</p>
            </div>
        </div>
        <div class="block-sub">
            <div class="block-sub-text">
                <h2>真服务</h2>
                <p>信用评价体系。聚合优质经纪品牌和从业者入驻平台成为服务者，入驻服务者对应贝壳分，分值高将被激励，分值低会被降权甚至退出。</p>
            </div>
            <div class="block-sub-logo">
                <img src="../img/52e2df51-ab55-11e8-b5f5-55c168a58b42.png" alt="">
            </div>
        </div>
    </div>
</div>
@include('Layout.footer')
<script>
    $(document).ready(function () {
        var mySwiper = new Swiper('.swiper-container', {
            autoplay: {
                delay: 3000
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                bulletClass: 'my-bullet',
                bulletActiveClass: 'my-bullet-active',
            },
        });
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

