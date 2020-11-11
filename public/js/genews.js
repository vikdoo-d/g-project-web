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

    var cateClick = function () {
        // var test = window.location.pathname;//获取到当前页面的href
        $('.news-content-a ul li').click(function(){

            $('.news-content-a ul li').each(function(){
                // var url=$(this).attr('href');
                $(this).removeClass('active')
                //在循环遍历中比对，如果找到了与当前页面相同的href就给当前添加class
                // if(test==url){
                //
                // }

            });
            $(this).addClass('active');
        })
    }

    cateClick()
    imgCount();
    $(window).resize(function () {
        imgCount();
    });
});
