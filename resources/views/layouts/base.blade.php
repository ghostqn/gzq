<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/public.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    @yield('css')
    <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    @yield('js')
    @yield('style')
</head>
<body>
<div class="warp">
    <div class="index_header">
        <div class="header_top_main">
            <a class="fl mt20  mr35" href="index"><img src="{{ asset('images/logo.png') }}" width="134" height="40" alt=""/></a>
            <div class="nav">
                <ul class="navU1">
                    <li><a href='product'>产品</a>
                        <ul class="navU2">
                            <li><a href="###">协同办公</a></li>
                            <li><a href="###">移动CRM</a></li>
                            <li><a href="###">互联网财税</a></li>
                            <li><a href="###">在线进销存</a></li>
                        </ul>
                    </li>
                    <li><a href='case'>案例</a>
                        <ul class="navU2">
                            <li><a href="###">建材</a></li>
                            <li><a href="###">连锁</a></li>
                            <li><a href="###">服装</a></li>
                            <li><a href="###">快销</a></li>
                        </ul>
                    </li>
                    <li><a href='download'>下载</a></li>
                    <li><a href='service'>服务</a></li>
                    <li><a href='about'>我们</a>
                        <ul class="navU2">
                            <li><a href="###">荣誉资质</a></li>
                            <li><a href="###">媒体报道</a></li>
                            <li><a href="###">新闻资讯</a></li>
                            <li><a href="###">加入我们</a></li>
                            <li><a href="###">联系我们</a></li>
                        </ul>
                    </li>
                    <li><a href='http://service.chanjet.com/' target="_blank">更多</a>
                        <ul class="navU2">
                            <li><a href="###">畅捷通学院</a></li>
                            <li><a href="###">服务社区</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="fr mt20">
                <a id="search_showandhidden" class="search_icon fl" href="javascript:void(0);"></a>
                <a class="register_btn fl ml35" href="https://register.chanjet.com/" target="_blank">注册有礼</a>
                <a class="fr login_btn ml35" href="https://www.chanjet.com/register?app=gzq&callback=https://www.gongzuoquan.com&account=" target="_blank">登录</a>
            </div>
        </div>
        <div class="header_search_box">
            <input class="header_search_input" type="text" placeholder="请输入关键字">
        </div>
    </div>

    @yield('content')

    <div class="part_5">
        <h1>让工作更轻松  让管理更简单</h1>
        <h2><a class="register_btn2" href="">仅需5秒  立即注册</a></h2>
        <div class="part_5_down_box">
            <a href="">PC版3.7下载</a><a href="https://itunes.apple.com/cn/app/id827564503" target="_blank">IOS版3.7下载</a><a href="">Android版3.7下载</a><a href="download.html">更多产品下载</a>
        </div>
    </div>
    <div class="part_6_link">
        <div class="part_6_link_content">
            <div class="part_6_link_box">
                <img src="{{ asset('images/icon0006.jpg') }}" alt=""/>
                <h1 onclick="location.href='product.html'">产品</h1>
                <a href="javascript:void(0);">协同办公</a>
                <a href="javascript:void(0);">移动CRM</a>
                <a href="javascript:void(0);">互联网财税</a>
                <a href="javascript:void(0);">在线进销存</a>
            </div>
            <div class="part_6_link_box">
                <img src="{{ asset('images/icon0007.jpg') }}" alt=""/>
                <h1  onclick="location.href='case.html'">案例</h1>
                <a href="javascript:void(0);">建材</a>
                <a href="javascript:void(0);">连锁</a>
                <a href="javascript:void(0);">服装</a>
                <a href="javascript:void(0);">快销</a>
            </div>
            <div class="part_6_link_box">
                <img src="{{ asset('images/icon0008.jpg') }}" alt=""/>
                <h1  onclick="location.href='service.html'">支持</h1>
                <a href="javascript:void(0);">区域服务</a>
                <a href="javascript:void(0);">定制服务</a>
                <a href="javascript:void(0);">使用手册</a>
                <a href="javascript:void(0);">常见问题</a>
            </div>
            <div class="part_6_link_box">
                <img src="{{ asset('images/icon0009.jpg') }}" alt=""/>
                <h1 onclick="location.href='about.html'">我们</h1>
                <a href="javascript:void(0);">荣誉资质</a>
                <a href="javascript:void(0);">媒体报道</a>
                <a href="javascript:void(0);">新闻资讯</a>
                <a href="javascript:void(0);">加入我们</a>
                <a href="javascript:void(0);">联系我们</a>
            </div>
            <div class="part_6_link_box">
                <img src="{{ asset('images/icon00010.jpg') }}" alt=""/>
                <h1 onclick="window.open('http://service.chanjet.com/')">更多</h1>
                <a href="http://edu.chanjet.com" target="_blank">畅捷通学院</a>
                <a href="http://service.chanjet.com/" target="_blank">服务社区</a>
            </div>

            <div class="part_6_link_box2 fr">
                <img class="mb20" src="{{ asset('images/icon00011.jpg') }}" width="277" height="56" alt=""/>
                <dl >
                    <dt><img src="{{ asset('images/codeWb.png') }}" width="105" height="105" /></dt>
                    <dd>工作圈微博</dd>
                </dl>
                <dl class="last-child">
                    <dt><img src="{{ asset('images/codeWx.jpg') }}" width="105" height="105" /></dt>
                    <dd>工作圈微信</dd>
                </dl>
            </div>
        </div>

    </div>
    <div class="footer">
        <div class="footer_content">
            <div class="share_box fr">
                <img src="{{ asset('images/icon00013.jpg') }}" alt="" style="display:none;"/>
                <span class="shareS1">分享</span>
                <ul class="shareU1">
                    <li class="fxQq"><img src="{{ asset('images/fx01.png') }}" alt=""/></li>
                    <li class="fxWb"><img src="{{ asset('images/fx02.png') }}" alt=""/></li>
                    <li class="fxTx"><img src="{{ asset('images/fx03.png') }}" alt=""/></li>
                    <li class="fxWx"><img src="{{ asset('images/fx04.png') }}" alt=""/></li>
                    <li class="fxRr"><img src="{{ asset('images/fx05.png') }}" alt=""/></li>
                </ul>
            </div>
            <p>畅捷通信息技术股份有限公司         地址：北京市海淀区北清路68号《用友产业园》    ©2016    京ICP备10212974号-9 </p>
        </div>

    </div>
</div>

<div class="back" id="back"></div>
<div class="inde_right">
    <a href="javascript:void(0);" class="kf">在线客服</a>
    <a href="javascript:void(0);" class="qq" style="display: none;"></a>
    <span>
            热线电话<br/>
            4006-600-
            <br/>566
        </span>
    <a href="javascript:void(0);" class="qr">点我<br/>下载</a>
</div>

@yield('script')

</body>
</html>