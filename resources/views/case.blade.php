@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/ystyle.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.gridster.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/jquery.db_tabmotionbanner.min.js') }}"></script>
    <script src="{{ asset('js/jquery.gridster.with-extras.min.js') }}"></script>
    <script src="{{ asset('js/jquery.gridster.min.js') }}" type="text/javascript" ></script>
@endsection

@section('style')
    <style>
        ul{
            list-style:none;
        }

        li{
            background: #fff;
        }
        .handle {
            border-bottom: 1px solid #e5e5e5;
        }
        .small img{
            height:83px;
            width:97px;
        }
        .gridster {
            position:relative;
            background-color:#CCC;
        }
        .gridster > * {
            margin: 0 auto;
            -webkit-transition: height .4s;
            -moz-transition: height .4s;
            -o-transition: height .4s;
            -ms-transition: height .4s;
            transition: height .4s;
        }

        .gridster .gs_w{
            z-index: 2;
            position: absolute;
        }

        .ready .gs_w:not(.preview-holder) {
            -webkit-transition: opacity .3s, left .3s, top .3s;
            -moz-transition: opacity .3s, left .3s, top .3s;
            -o-transition: opacity .3s, left .3s, top .3s;
            transition: opacity .3s, left .3s, top .3s;
        }

        .ready .gs_w:not(.preview-holder) {
            -webkit-transition: opacity .3s, left .3s, top .3s, width .3s, height .3s;
            -moz-transition: opacity .3s, left .3s, top .3s, width .3s, height .3s;
            -o-transition: opacity .3s, left .3s, top .3s, width .3s, height .3s;
            transition: opacity .3s, left .3s, top .3s, width .3s, height .3s;
        }

        .gridster .preview-holder {
            z-index: 1;
            position: absolute;
            background-color: #fff;
            border-color: #fff;
            opacity: 0.3;
        }

        .gridster .player-revert {
            z-index: 10!important;
            -webkit-transition: left .3s, top .3s!important;
            -moz-transition: left .3s, top .3s!important;
            -o-transition: left .3s, top .3s!important;
            transition: left .3s, top .3s!important;
        }

        .gridster .dragging {
            z-index: 10!important;
            -webkit-transition: all 0s !important;
            -moz-transition: all 0s !important;
            -o-transition: all 0s !important;
            transition: all 0s !important;
        }
        p{
            margin:10px;
        }

        .case_part ul li{
            overflow: hidden;
            background-color: white;
            /*width: 210px;*/
            /*height: 150px;*/
            border: solid 1px #e5e5e5;
            position: absolute;
        }
    </style>
@endsection

@section('content')
    <div class="case_banner">
        <h1>一切为了您取得持续的成功</h1>
        <div class="fw_titss" style="padding-top:0">
            <div class="fw_titssin">
                <form method="get" action="http://i.chanjet.com/register">
                    <input type="text" class="txt" name="account" placeholder="请输入您的手机号">
                    <input type="submit" class="btn" value="注册有礼">
                </form>
            </div>
        </div>

    </div>

    <div class="case_part">
        <div class="wrapper case_listone" >
            <ul>
                <li  data-row="1" data-col="1" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/case_pic1.jpg') }}" alt=""/></a>

                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl>

                </li>
                <li  data-row="1" data-col="2" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/01.png') }}" alt=""/ height="325px"></a>
                        <div class="txtbox">
                            <h4 style="padding-top:120px;">
                                为超过
                                两万户家庭提供产品和服务
                            </h4>
                            <span>
                                        服务提升32%
                                        失误率为0
                                        财务提升32%+
                                    </span>
                        </div>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl>
                </li>
                <li  data-row="1" data-col="3" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/02.png') }}" alt=""/ height="325px"></a>
                        <div class="txtbox">
                            <h4 style="padding-top:110px;">
                                国内知名毛巾企业，集开发设计、生产、后整、仓储、销售于一体的大型民营企业
                            </h4>
                            <span>
                                        办公效率提升50%工作圈成为员工必修课
                                    </span>
                        </div>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl>
                </li>
                <li  data-row="1" data-col="4" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/03.png') }}" alt=""/></a>
                        <div class="txtbox">
                            <h4 style="padding-top:30px;">
                                优质葡萄酒的进口业务，拥有多个国际著名品牌的中国独家代理权
                            </h4>
                            <span>
                                        订单提升47%错误率为0
                                    </span>
                        </div>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl>
                </li>
                {{-- <li  data-row="1" data-col="5" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/case_pic5.jpg') }}" alt=""/></a>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl>
                </li> --}}
                <li data-row="2" data-col="4" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/04.png') }}" alt=""/></a>
                        <div class="txtbox">
                            <h4 style="padding-top:30px;">
                                行业知名品牌，为全球上千家企业提供食品添加剂服务
                            </h4>
                            <span>
                                        企业整体效率提升37%                 随时审批，流程5分钟搞定
                                    </span>
                        </div>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl>
                </li>

            </ul>
        </div>
    </div>
    <div class="case_part">
        <!--case_part2_pic6.jpg-->
        <div class="wrapper case_listone" >
            <ul>
                <li  data-row="1" data-col="1" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/case_part2_pic1.jpg') }}" alt=""/></a>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl>
                </li>
                <li  data-row="1" data-col="2" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/06.png') }}" alt=""/></a>
                        <div class="txtbox">
                            <h4 style="padding-top:100px;">
                                最专业量身定制公司
                                拥有多家西装定制体验店
                            </h4>
                            <span>
                                        人手一个工作圈处理订单时间减少40%资金周转速度大幅提升，经营效益有显著提高
                                    </span>
                        </div>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl>
                </li>
                <li  data-row="1" data-col="3" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/07.png') }}" alt=""/></a>
                        <div class="txtbox">
                            <h4 style="padding-top:100px;">
                                中国企业独特的风景线“杯装茶饮”
                            </h4>
                            <span>
                                        业绩翻倍业务量显著提升3分钟完成工作报告
                                    </span>
                        </div>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl>
                </li>
                <li  data-row="1" data-col="4" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/08.png') }}" alt=""/></a>
                        <div class="txtbox">
                            <h4 style="padding-top:100px;">
                                北京市财政局批准的专业财会代理公司
                            </h4>
                            <span>
                                        售后5秒搞定客户提高了资源利用和业务管理的正确性
                                    </span>
                        </div>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl>
                </li>
                <li  data-row="1" data-col="5" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/09.png') }}" alt=""/></a>
                        <div class="txtbox">
                            <h4 style="padding-top:100px;">
                                是一家向企业和个人用户提供SAAS服务的移动互联网安全公司
                            </h4>
                            <span>
                                        项目管理，忙而不乱考勤统计，5秒完成网上请示报销，省时省力

                                    </span>
                        </div>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl>
                </li>

            </ul>
        </div>
    </div>
    <div class="case_part">
        <div class="wrapper case_listone" >
            <ul>
                <li  data-row="1" data-col="1" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/case_part3_pic1.jpg') }}" alt=""/></a>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl></li>
                <li  data-row="1" data-col="3" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/011.png') }}" alt="" height="325px"/></a>
                        <div class="txtbox">
                            <h4 style="padding-top:50px;">
                                现拥有五家超市门店，经营面积超过7700平方米
                            </h4>
                            <span>协同办公得到企业一致好评</span>
                        </div>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl></li>
                <li  data-row="1" data-col="2" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/013.png') }}" alt=""/></a>
                        <div class="txtbox">
                            <h4 style="padding-top:100px;">
                                国家AAAA级旅游度假区。占地约1300亩，总投资6.8亿元人民币
                            </h4>
                            <span>
                                        保障员工的去向和安全财务能多处理30%的单据

                                    </span>
                        </div>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl></li>
                <li  data-row="1" data-col="4" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/010.png') }}" alt=""/></a>
                        <div class="txtbox">
                            <h4 style="padding-top:100px;">
                                是一家致力于为B2B销售的的互联网公司
                            </h4>
                            <span>
                                        沟通更加密切、顺畅、高效

                                    </span>
                        </div>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl></li>
                <li  data-row="1" data-col="5" data-sizex="1" data-sizey="2">
                    <dl class="case_pic_inbox">
                        <dt>
                            <a href=""><img src="{{ asset('images/012.png') }}" alt=""/></a>
                        <div class="txtbox">
                            <h4 style="padding-top:80px;">
                                国家工商部注册，代理销售福建亲亲、旺旺、上海光明、重庆辣媳妇等系列休闲食品，有着,广阔的市场前景
                            </h4>
                            <span>
                                        客户满意度提升30%+退货审批10分钟搞定退货的乱货率为0 手机移动办公，随时随地处理业务

                                    </span>
                        </div>
                        </dt>
                        <dd><a href="">昆仑万维</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>


    <div class="case_more">
        <div class="case_more_main">
            <a href="">查看更多</a>
        </div>
    </div>
    @endsection
@section('jscontent')
<script>
    $(function(){ //DOM Ready

        $("div.wrapper ul").gridster({
            widget_margins: [10, 10],
            widget_base_dimensions: [210, 150],
            max_size_x: 5,//设置每个widget x的size 默认为 6
            max_size_y: 2,//设置每个widget y的size 默认为 6
        });

        var gridster = $(".gridster ul").gridster().data('gridster');

        $(".case_listone dt").mouseenter(function(event) {
            $(this).children('.txtbox').stop().animate({"top":0}, 200)
        });
        $(".case_listone dt").mouseleave(function(event) {
            $(this).children('.txtbox').stop().animate({"top":"100%"}, 200)
        });

    });
</script>
@endsection
