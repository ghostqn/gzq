@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/ystyle.css') }}"/>
@endsection

@section('js')
@endsection

@section('style')
@endsection

@section('content')
    <div class="cp_box">
        <div class="cp_tit">
            <h2>为您提供一个更好的管理方式！</h2>

            <div class="fw_titss">
                <div class="fw_titssin">
                    <form method="get" action="http://i.chanjet.com/register">
                        <input type="text" class="txt" name="account" placeholder="请输入您的手机号">
                        <input type="submit" class="btn" value="注册有礼">
                    </form>

                </div>
            </div>
        </div>
        <div class="cp_con">
            <div class="cp_conone">
                <h3>工作圈：人、才、货、客，一圈搞定！</h3>
                <img src="{{ asset('images/cp_bg1_03.jpg') }}" alt="">
            </div>
            <div class="cp_contwo">
                <div class="cp_contwoin">
                    <ul>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="li_in">
                                    <div class="imgbox">
                                        <img src="{{ asset('images/cp_icon1_03.png') }}" alt="" class="imgone">
                                        <img src="{{ asset('images/cp_icon13_03.png') }}" alt="" class="imgtwo">
                                    </div>
                                    <h4>协同OA</h4>
                                    <span></span>
                                    <em>协同办公一圈搞定</em>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="li_in">
                                    <div class="imgbox">
                                        <img src="{{ asset('images/cp_icon1_05.png') }}" alt="" class="imgone">
                                        <img src="{{ asset('images/cp_icon14_05.png') }}" alt="" class="imgtwo">
                                    </div>
                                    <h4>互联网财税</h4>
                                    <span></span>
                                    <em>协同办公一圈搞定</em>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="li_in">
                                    <div class="imgbox">
                                        <img src="{{ asset('images/cp_icon1_07.png') }}" alt="" class="imgone">
                                        <img src="{{ asset('images/cp_icon11_07.png') }}" alt="" class="imgtwo">
                                    </div>
                                    <h4>在线进销存</h4>
                                    <span></span>
                                    <em>协同办公一圈搞定</em>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="li_in">
                                    <div class="imgbox">
                                        <img src="{{ asset('images/cp_icon1_09.png') }}" alt="" class="imgone">
                                        <img src="{{ asset('images/cp_icon12_09.png') }}" alt="" class="imgtwo">
                                    </div>
                                    <h4>移动CRM</h4>
                                    <span></span>
                                    <em>协同办公一圈搞定</em>
                                </div>
                            </a>
                        </li>
                        <li class="li_five">
                            <a href="javascript:void(0);">
                                <div class="li_in">
                                    <div class="imgbox">
                                        <img src="{{ asset('images/cp_icon2_03.png') }}" alt="" class="imgone">
                                        <img src="{{ asset('images/cp_icon22_03.png') }}" alt="" class="imgtwo">
                                    </div>
                                    <h4>移动CRM</h4>
                                    <span></span>
                                    <em>协同办公一圈搞定</em>
                                </div>
                            </a>
                        </li>
                        <li  class="li_five">
                            <a href="javascript:void(0);">
                                <div class="li_in">
                                    <div class="imgbox">
                                        <img src="{{ asset('images/cp_arr_03.png') }}" alt="" class="imgone">
                                        <img src="{{ asset('images/cp_arr_33.png') }}" alt="" class="imgtwo">
                                    </div>
                                    <h4>更多</h4>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="cp_conthree">
                <h3>工作圈，企业最好用的移动管理平台<br/>
                    办公简单 · 协作高效 · 管理更轻松
                </h3>
                <div class="cp_conthreein">
                    <img src="{{ asset('images/cp_bg2_03.jpg') }}" alt="">
                    <a href="javascript:void(0);" class="nth_2">
                            <span>
                                签到
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_3">
                            <span>
                                多方通话
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_4">
                            <span>
                                工作报告
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_6">
                            <span>
                                过程管理
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_7">
                            <span>
                                一建报税
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_8">
                            <span>
                                留声机
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_9">
                            <span>
                                客户建档
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_10">
                            <span>
                                任务提醒
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_11">
                            <span>
                                智能记账
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_12">
                            <span>
                                在线学习
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_13">
                            <span>
                                名片扫描
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_14">
                            <span>
                                商品共享
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_15">
                            <span>
                                便捷简单
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_16">
                            <span>
                                税负测算
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_17">
                            <span>
                                跟踪对账
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_19">
                            <span>
                                实时库存
                            </span>

                    </a>
                    <a href="javascript:void(0);" class="nth_20">
                            <span>
                                便捷统计
                            </span>
                    </a>
                    <a href="javascript:void(0);" class="nth_21">
                            <span>
                                移动下单
                            </span>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('jscontent')
<script type="text/javascript">
    $(function() {
        $(".us_tabbox").eq(0).show();
        $(".us_tabtit ul li").click(function(event) {
            $(this).addClass('cur').siblings().removeClass('cur');
            $(".us_tabbox").eq($(this).index()).show().siblings().hide();
        });

    });
</script>
@endsection
