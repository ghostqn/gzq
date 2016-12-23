@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/fz-video.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/iconfont.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/ystyle.css') }}"/>
@endsection

@section('js')
    <script src="{{ asset('js/fz-video.js') }}"></script>
@endsection

@section('style')
    <style>
        #testBox{
            width: 953px;
            height: 537px;
            margin: 4px auto;
        }
    </style>
@endsection

@section('content')
    <div class="us_box">
        <div class="us_tit">
            <div class="fw_titss">
                <div id="testBox"></div>
                <div class="fw_titssin">
                    <form method="get" action="http://i.chanjet.com/register">
                        <input type="text" class="txt" name="account" placeholder="请输入您的手机号">
                        <input type="submit" class="btn" value="注册有礼">
                    </form>
                </div>
            </div>
        </div>
        <div class="us_bot">
            <div class="us_title">
                <h3>工作圈，专为小微企业量身打造的管理云平台。</h3>
                <p>
                    工作圈，专为小微企业量身打造的管理云平台。从协同OA、在线进销存、互联网财税、移动CRM等领域，全方位满足小微企业经营管理需求。一圈搞定“人、财、客、货”，让小微企业的管理更敏捷。工作圈，专为小微企业量身打造的管理云平台。从协同OA、在线进销存、互联网财税、移动CRM等领域，全方位满足小微企业经营管理需求。一圈搞定“人、财、客、货”，让小微企业的管理更敏捷。
                </p>
            </div>
            <div class="us_tab">
                <div class="us_tabtit">
                    <div class="us_tabtitin">
                        <ul>
                            <li >
                                <a href="javascript:void(0);">
                                    荣誉资质</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    媒体报道</a>
                            </li>
                            <li class="cur">
                                <a href="javascript:void(0);">
                                    新闻资讯</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    加入我们</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    联系我们</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    在线反馈</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="us_tabbot">
                    <div class="us_tabbox">
                        <ul>
                            <li onclick="location.href='1.html'">
                                <div class="li_in">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            打通数据 工作圈一圈搞定小微企业的
                                            “人、财、货
                                        </a>
                                    </h4>
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('images/us_img_03.jpg') }}" alt="">
                                    </a>
                                    <span>2013-08-15 17:15:42</span>
                                    <div class="txt">
                                        <a href="javascript:void(0);">
                                            9月21日，畅捷通在北京正式发布小微企业管理云平台——工作圈。在发布会上，作为国内首家实现第三方应用数据打通的云平台...
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li onclick="location.href='2.html'">
                                <div class="li_in">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            厚积薄发 工作圈三位一体造就小微企业管
                                            理云平台
                                        </a>
                                    </h4>
                                    <a href="javascript:void(0);">
                                        <img src="{{ asset('images/us_img_05.jpg') }}" alt="">
                                    </a>
                                    <span>2013-08-15 17:15:42</span>
                                    <div class="txt">
                                        <a href="javascript:void(0);">
                                            在大数据、云计算、物联网等互联网化生态格局中，如何让面广量大的小微企业不掉队、不被边缘化?为破解这个难题，畅捷通信息技术...
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li  onclick="location.href='3.html'">
                                <div class="li_in">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            工作圈和T+的联姻， 畅捷通要走自己的
                                            "协同"+"管理"路
                                        </a>
                                    </h4>
                                    <img src="{{ asset('images/us_img_07.jpg') }}" alt="">
                                    <span>2013-08-15 17:15:42</span>
                                    <div class="txt">
                                        <a href="javascript:void(0);">
                                            　当“北京”遇上“西雅图”，当“协同”遇到“业务”，当看到了具有诗和远方的独白“相守，是最温暖的承诺”时，所有一切就成了必然选择...
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li  onclick="location.href='4.html'">
                                <div class="li_in">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            畅捷通T+工作圈深度融合 打造小微企业
                                            管理新平台
                                        </a>
                                    </h4>
                                    <img src="{{ asset('images/us_img_12.jpg') }}" alt="">
                                    <span>2013-08-15 17:15:42</span>
                                    <div class="txt">
                                        <a href="javascript:void(0);">
                                            3月21日，国内领先的小微企业财务及管理平台畅捷通，宣布旗下ERP软件T+与协同办公平台工作圈完成了紧密集成，推出市场期...
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li onclick="location.href='5.html'">
                                <div class="li_in">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            畅捷通T+12.1正式上线 融合工作圈破除
                                            信息高垒
                                        </a>
                                    </h4>
                                    <img src="{{ asset('images/us_img_13.jpg') }}" alt="">
                                    <span>2013-08-15 17:15:42</span>
                                    <div class="txt">
                                        <a href="javascript:void(0);">
                                            在大数据、云计算、物联网等互联网化生态格局中，如何让面广量大的小微企业不掉队、不被边缘化?为破解这个难题，畅捷通信息技术...
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li onclick="location.href='6.html'">
                                <div class="li_in">
                                    <h4>
                                        <a href="javascript:void(0);">
                                            【重磅】 整合ERP，工作圈再建企业应用
                                            里程碑
                                        </a>
                                    </h4>
                                    <img src="{{ asset('images/us_img_14.jpg') }}" alt="">
                                    <span>2013-08-15 17:15:42</span>
                                    <div class="txt">
                                        <a href="javascript:void(0);">
                                            　当“北京”遇上“西雅图”，当“协同”遇到“业务”，当看到了具有诗和远方的独白“相守，是最温暖的承诺”时，所有一切就成了必然选择...
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- <div class="us_more">
                            <a href="javascript:void(0);">查看更多</a>
                        </div> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">
    $(function() {
        $(".us_tabbox").eq(0).show();
        /*$(".us_tabtit ul li").click(function(event) {
         $(this).addClass('cur').siblings().removeClass('cur');
         $(".us_tabbox").eq($(this).index()).show().siblings().hide();
         });*/

    });
    var FZ_VIDEO = new createVideo(
        "testBox",	//容器的id
        {
            url 		: 'src/video/gongzuoquan.mp4', 	//视频地址
            autoplay	: true				//是否自动播放
        }
    );
</script>
@endsection