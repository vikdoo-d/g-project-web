@include('Layout.header')
<link rel="stylesheet" href="../css/genews.css">
<div id="main">
    <div class="news-header">
        <div class="w-newsList w-newsList1 clearfix" id="newsList1">
            <div class="swiper-wrapper">
                @foreach($h_news as $k=>$v)
                    <div class="swiper-slide">
                        <div class="news-item">
                            <a href="/news/{{$v['cate']}}/{{$v['id']}}" target="_blank" class="clearfix">
                                <div class="news-imgbox img-count">
                                    <div class="aspectRatio"></div>
                                    <div class="img-count-in"><img src="{{$v['img_url']}}"></div>
                                </div>
                                <div class="news-text">
                                    <div class="date">
                                        <div class="year">{{$v['year']}}</div>
                                        <div class="day_month">{{$v['day_month']}}</div>
                                    </div>
                                    <div class="news-h">{{$v['title']}}</div>
                                    <div class="news-sum">
                                        {{$v['summary']}}
                                    </div>
                                    <div class="more"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="adSN_page"></div>
            <div class="swiper-num">
                <span class="active"></span>/
                <span class="total"></span>
            </div>
        </div>
    </div>
</div>


@include('Layout.footer')
<script type="text/javascript">
    $(function(){
        /*图片位置计算*/
        var imgCount = function () {
            $('.img-count').each(function (index, element) {
                var imgH = $(this).height();
                var imgW = $(this).width();
                var $thisimg = $(this).find('img');
                var img = new Image();
                img.onload = function () {
                    if ($thisimg.data("img") === false) {
                        return '';
                    }
                    var imgWidth = img.width;
                    var imgHeight = img.height;
                    if ((imgWidth / imgHeight) < (imgW / imgH)) {
                        $thisimg.css({'height': (imgW / imgH) * ((imgHeight * 1.00) / imgWidth) * imgH, 'max-height': (imgW / imgH) * ((imgHeight * 1.00) / imgWidth) * imgH, 'top': -((imgW / imgH) * ((imgHeight * 1.00) / imgWidth) - 1) / 2 * imgH})
                    } else {
                        $thisimg.css({'width': (imgH / imgW) * ((imgWidth * 1.00) / imgHeight) * imgW, 'max-width': (imgH / imgW) * ((imgWidth * 1.00) / imgHeight) * imgW, 'left': -((imgH / imgW) * ((imgWidth * 1.00) / imgHeight) - 1) / 2 * imgW})
                    }
                }
                img.src = $thisimg.attr("src");
            });
        }

        //滚动设置
        var swiper = new Swiper('#newsList1', {
            effect : 'fade',
            fadeEffect: {
                crossFade: true,
            },
            direction : 'horizontal',
            loop: true,
            autoplay : {
                delay:5000,//滚动速度
                disableOnInteraction: false,
            },
            pagination: {
                el: '.adSN_page',
                clickable :true,
            },
            on:{
                init:function(){
                    var total=this.slides.length-2;
                    $('.swiper-num .total').text('0'+total);
                    this.emit('transitionEnd');
                },
                transitionEnd:function(){
                    var index=this.realIndex+1;
                    $(".swiper-num .active").text("0"+index);
                }
            }
        });

        imgCount();
        $(window).resize(function () {
            imgCount();
        });
    });
</script>
</body>
</html>
