
<footer class="footer" style="background-color: #f0f3f5">
{{--    <div class="footer_main">--}}
{{--        <div class="footer_left">--}}
{{--            <img src="https://cdn.gejia.cn/static/image/wechat_qrcode.jpg" />--}}
{{--            <img class="footer-sign" src="/PC/img/sign.png" />--}}
{{--            <p style="left: -170px;top:18px">关注公众号，查看真房源</p>--}}
{{--            <p style="left: 58px;top:-20px"> 十年口碑 / 限时独家 / 海量房源 / 专业承诺 / 真诚服务</p>--}}


{{--        </div>--}}

{{--        <div class="footer_right">--}}
{{--            <img src="/PC/img/logo.png" />--}}
{{--            <span class="bottom"></span>--}}
{{--            <p> 地址： 芜湖镜湖区万达广场一期三号楼</p>--}}
{{--            <p> 邮编： 241000 <span> &nbsp;&nbsp;&nbsp;全国热线： 400-800-0080</span></p>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="copyright-footer">
        <p class="copyright" style="margin: 0;line-height: 50px;color: #757678">
            <span class="color-a">安徽格家房产经纪有限公司</span> |
            <a style="color: #757678" target="_blank" href="https://beian.miit.gov.cn">皖ICP备2020016689号</a> |

            <a style="color: #757678" target="_blank" href="https://www.gejia.cn">Copyright &copy; 2020 WWW.GEJIA.CN</a>
        </p>
    </div>

</footer>
<a href="#" class="back-to-top" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
<script src="/js/lib/jquery/jquery.min.js"></script>
<script src="/js/lib/swiper.min.js"></script>
<script src="/js/lib/video.min.js"></script>
<script src="/js/lib/jquery/jquery.modal.min.js"></script>
<script>
    var test = window.location.pathname;//获取到当前页面的href

    $('#header ul li').each(function(){
        var url=$(this).children('a').attr('href');
        $(this).removeClass('active')
        //在循环遍历中比对，如果找到了与当前页面相同的href就给当前添加class
        if(test==url){
            $(this).addClass('active');
        }
    });
    showScroll();
    function showScroll(){
        $(window).scroll( function() {
            var scrollValue=$(window).scrollTop();
            scrollValue > 100 ?  $('.back-to-top').fadeIn():$('.back-to-top').fadeOut();
        } );
        $('.back-to-top').click(function(){
            $("html,body").animate({scrollTop:0},1000);
            return false;
        });
    }
</script>
<script>
    $(document).ready(function () {
        var mySwiper = new Swiper('.swiper-container', {
            autoplay: true,
            delay: 3000,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                bulletClass: 'my-bullet',
                bulletActiveClass: 'my-bullet-active',
            },
        })
    })
</script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}



