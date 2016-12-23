@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/ystyle.css') }}"/>
@endsection

@section('js')
@endsection

@section('style')
@endsection

@section('content')
    <div class="fw_box">
        <div class="fw_tit">
            <h2 style="color:#aaa">提供完善的实施，培训，日常支持服务</h2>
            <div class="fw_titss">
                <div class="fw_titssin">
                    <form method="get" action="http://i.chanjet.com/register">
                        <input type="text" name="account" class="txt" placeholder="请输入您的手机号">
                        <input type="submit" class="btn" value="注册有礼">
                    </form>
                </div>
            </div>
        </div>
        <div class="fw_con">
            <div class="fwcon_one">
                <div class="fw_title">
                    <h3>定制服务</h3>
                    <p>
                        我们持续性为客户提供优质服务<br/>
                        工作圈，专为小微企业量身打造的管理云平台。从协同办公、进销存管理、财务报税、客户管理、人力资源管理等领域，全方位满足小微企业经营管理需求。<br/>
                        一圈搞定“人、财、客、货”，让小微企业的管理更敏捷。
                    </p>
                </div>
                <div class="fw_listone clearfix">
                    <div class="fw_listit">
                        专家走进企业
                    </div>
                    <ul>
                        <li>
                            <h4>程维</h4>
                            <p>滴滴出行创始人兼CEO，全面负责<br/>
                                滴滴公司的战略规划</p>
                            <img src="{{ asset('images/fw_img1_03.png') }}" alt="">
                        </li>
                        <li>
                            <h4>程维</h4>
                            <p>滴滴出行创始人兼CEO，全面负责<br/>
                                滴滴公司的战略规划</p>
                            <img src="{{ asset('images/fw_img1_03.png') }}" alt="">
                        </li>
                        <li>
                            <h4>程维</h4>
                            <p>滴滴出行创始人兼CEO，全面负责<br/>
                                滴滴公司的战略规划</p>
                            <img src="{{ asset('images/fw_img1_03.png') }}" alt="">
                        </li>
                        <li class="nth_four">
                            <h4>联系电话</h4>
                            <p>12345678910</p>
                            <a href="javasctipt:void(0);">立即预约</a>
                        </li>
                    </ul>
                </div>
                <div class="fw_listtwo clearfix">
                    <div class="fw_listit">
                        行业个性化服务
                    </div>
                    <ul>
                        <li>
                            <a href="javascript:void(0);">
                                <img src="{{ asset('images/fw_icon2_03.png') }}" alt="">
                                <h4>连锁</h4>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <img src="{{ asset('images/fw_icon2_05.png') }}" alt="">
                                <h4>服装</h4>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <img src="{{ asset('images/fw_icon2_07.png') }}" alt="">
                                <h4>快销</h4>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <img src="{{ asset('images/fw_icon2_09.png') }}" alt="">
                                <h4>旅游</h4>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <img src="{{ asset('images/fw_icon2_11.png') }}" alt="">
                                <h4>互联网</h4>
                            </a>
                        </li>
                        <li style="margin-right:0">
                            <a href="javascript:void(0);">
                                <img src="{{ asset('images/fw_icon2_13.png') }}" alt="">
                                <h4>软件</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="fwcon_two">
                <div class="fwcon_twoin">
                    <div class="fw_title">
                        <h3>区域服务</h3>
                        <p>
                            我们持续性为客户提供优质服务<br/>
                            工作圈，专为小微企业量身打造的管理云平台。从协同办公、进销存管理、财务报税、客户管理、人力资源管理等领域，全方位满足小微企业经营管理需求。<br/>
                            一圈搞定“人、财、客、货”，让小微企业的管理更敏捷。
                        </p>
                    </div>
                    <div class="fw_dtimg">
                        <ul>
                            <li class="li_1">
                                    <span>    
                                    </span>
                                <div class="li_box">
                                    <b></b>
                                    位置：广州<br/>
                                    联系人：陈碧澜<br/>
                                    电话：18922796388
                                </div>
                            </li>
                            <li class="li_2">
                                    <span>    
                                    </span>
                                <div class="li_box">
                                    <b></b>
                                    位置：重庆<br/>
                                    联系人：王庆伟<br/>
                                    电话：15823000961
                                </div>
                            </li>
                            <li class="li_3">
                                    <span>    
                                    </span>
                                <div class="li_box">
                                    <b></b>
                                    位置：上海<br/>
                                    联系人：胡仰名
                                    <br/>
                                    电话：18964352619
                                </div>
                            </li>
                            <li class="li_4">
                                    <span>    
                                    </span>
                                <div class="li_box">
                                    <b></b>
                                    位置：天津<br/>
                                    联系人：胡爱靖<br/>
                                    电话：18020037670
                                </div>
                            </li>
                            <li class="li_5">
                                    <span>    
                                    </span>
                                <div class="li_box">
                                    <b></b>
                                    位置：太原<br/>
                                    联系人：赵红义
                                    <br/>
                                    电话：351-7336938
                                </div>
                            </li>
                            <li class="li_6">
                                    <span>    
                                    </span>
                                <div class="li_box">
                                    <b></b>
                                    位置：石家庄<br/>
                                    联系人：齐英超
                                    <br/>
                                    电话：18903114455
                                </div>
                            </li>
                            <li class="li_7">
                                    <span>    
                                    </span>
                                <div class="li_box">
                                    <b></b>
                                    位置：郑州<br/>
                                    联系人：李峰
                                    <br/>
                                    电话：0371—63965852
                                </div>
                            </li>
                            <li class="li_8">
                                    <span>    
                                    </span>
                                <div class="li_box">
                                    <b></b>
                                    位置：武汉<br/>
                                    联系人：俞嫣
                                    <br/>
                                    电话：13871235093
                                </div>
                            </li>
                            <li class="li_9">
                                    <span>    
                                    </span>
                                <div class="li_box">
                                    <b></b>
                                    位置：厦门<br/>
                                    联系人：林信速
                                    <br/>
                                    电话：0592-5078153
                                </div>
                            </li>
                            <li class="li_10">
                                    <span>    
                                    </span>
                                <div class="li_box">
                                    <b></b>
                                    位置：南京<br/>
                                    联系人：孙亮
                                    <br/>
                                    电话：17006536008
                                </div>
                            </li>
                            <li class="li_11">
                                    <span>    
                                    </span>
                                <div class="li_box">
                                    <b></b>
                                    位置：长春<br/>
                                    联系人：姜继柏
                                    <br/>
                                    电话：13844090902
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="fw_table">
                        <table>
                            <tr>
                                <td width="134px">
                                    <span>华北地区</span>
                                </td>
                                <td>
                                    <p>天津　太原　石家庄　郑州</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>华中地区</span>
                                </td>
                                <td>
                                    <p>武汉</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>华南地区</span>
                                </td>
                                <td>
                                    <p>广州　福建</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>华东地区</span>
                                </td>
                                <td>
                                    <p>上海　江苏</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>东北地区</span>
                                </td>
                                <td>
                                    <p>长春</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>西南地区</span>
                                </td>
                                <td>
                                    <p>重庆</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="fwcon_three">
                <div class="fwcon_threein">
                    <div class="fwcon_threel">
                        <h4>使用手册</h4>
                        <p>我们持续性为客户提供优质服务<br/>
                            工作圈，专为小微企业量身打造的管理云平台。从协同<br/>办公、进销存管理、财务报税、客户管理</p>
                        <a href="javascript:void(0);">查看更多</a>
                    </div>
                    <div class="fwcon_threer">
                        <h4>常见问题</h4>
                        <ul>
                            <li>
                                    <span>
                                        问：工作报告可以在WEB端填写吗？
                                    </span>
                            </li>
                            <li>
                                    <span>
                                        问：工作报告可以在WEB端填写吗？
                                    </span>
                            </li>
                            <li>
                                    <span>
                                        问：工作报告可以在WEB端填写吗？
                                    </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">
    $(function() {
        $(".fw_dtimg ul li span").hover(function(event) {
            $(this).toggleClass('on');
            $(this).siblings().stop(true,false).toggle();
            $(this).parent().css({
                "z-index": 1
            });
            $(this).parent().siblings().css({
                "z-index": 0
            });
        });

    });
</script>
@endsection