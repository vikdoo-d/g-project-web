
@include('Layout.header')
{{--<body onselectstart="return false"  oncontextmenu='return false' ondragstart='return false'  onselect='document.selection.empty()' oncopy='document.selection.empty()' onbeforecopy='return false' onmouseup='document.selection.empty()'>--}}
<link rel="stylesheet" href="../css/info.css">
<div id="main">
    <div class="detail-header">
        <div class="wrapper">
            <div class="m-crumb">
                <div class="wrap">
                    <a href="//www.gejia.cn/">格家房产</a>
                    <span>&nbsp;&gt;&nbsp;</span>
                    <a href="//www.gejia.cn/news/">房产资讯/百科</a>
                    <span>&nbsp;&gt;&nbsp;</span>

                    <span>正文</span>
                </div>
            </div>
        </div>
    </div>
    <div class="article">
{{--        <div class="content-wrap">--}}
            <div class="content" >
                <div class="content-l">
                    @if(!empty($data))
                        <div class="article-header">
                            <h1 class="article-title">{{$data['title']}}</h1>
                            <div class="meta">

                                <div class="meta-l">
                                    <time class="muted">发布时间：
                                        <i class="ico icon-time icon12"></i>{{$data['created_at']}}</time>
                                    <span class="muted">作者：
                            <i class="icon-user icon12"></i>{{$data['author']}}</span>
                                    <span class="muted">浏览
                            <i class="ico icon-eye-open icon12"></i>{{$data['page_view']}}次</span>
                                </div>
                                <div class="meta-r">
                        <span>来源：
                            @if($data['type'] == 2)
                                转载自{{$data['author']}}
                            @else
                                原创
                            @endif
                        </span>
                                </div>
                            </div>
                            <blockquote class="summary">
                                <p> <strong>资讯摘要：</strong>{{$data['summary']}}</p>
                            </blockquote>
                        </div>
                        <article class="article-content">

                            {!! $data['content'] !!}

                        </article>
                    @else


                    @endif


                </div>
                <div class="content-r">
                    <div class="box-r">
                        <div class="m-zhinan-side">
                            <div class="column">
                                <div class="title">最新百科<a href="//www.gejia.cn/news"
                                                          class="viewmore fr LOGCLICK" data-log_evtid="10612">查看更多</a></div>
                                <ul>
                                    @foreach($list as $k=>$v)
                                        <li class="secondcol">
                                            <div><a href="/{{$v['cate']}}/{{$v['id']}}" class="LOGCLICK"
                                                    target="_blank;" data-log_evtid="10611" log-mod="zuixin_baike"><p
                                                        title="{{$v['title']}}">{{$v['title']}}</p></a>
                                                <div class="mintips"><span>{{date('Y-m-d',strtotime($v['created_at']))}}</span></div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <footer>
                    <div class="copyright-footer">
                        <p class="copyright">

                            <span class="color-a">安徽格家房产经纪有限公司</span> |
                            <a target="_blank" href="https://beian.miit.gov.cn">皖ICP备2020016689号</a> |
                            <a target="_blank" href="https://www.gejia.cn">Copyright &copy; 2020 gejia.cn</a>
                        </p>
                    </div>
                </footer>

{{--                @include('Layout.footer')--}}
            </div>
{{--        </div>--}}

    </div>
</div>


<script type="text/javascript">

</script>


</body>
</html>
