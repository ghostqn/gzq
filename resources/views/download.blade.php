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
        <div class="fw_tit xz_tit">
            <h2>支持您所有的设备</h2>
            <div class="fw_titss">
                <div class="fw_titssin">
                    <form method="get" action="http://i.chanjet.com/register">
                        <input type="text" class="txt" name="account" placeholder="请输入您的手机号">
                        <input type="submit" class="btn" value="注册有礼">
                    </form>
                </div>
            </div>
        </div>
        <div class="zm_z_con">
            <div class="fwcon_one">
                <p class="zm_gzq_tit">下载专区</p>
                <div class="zm_xzzq_wrap">
                    <div class="zm_xzq_box">
                        <p class="zm_xzlx_tb"><img src="{{ asset('images/zm_gzq_pic02.png') }}" ></p>
                        <div class="zm_xz_con">
                            <p class="xz_name">PC版3.7</p>
                            <ul class="xzsm_list">
                                <li>支持用多张图片DIY动态表情，不服来斗图</li>
                                <li>聊天时可发起"演示白板"，随心涂画辅助沟通</li>
                                <li>新增群日历，可查看节日、群活动等精彩事件</li>
                                <li>群聊通话管理，有序发言，掌控全场</li>
                                <li>团队通讯录，快速查看群成员电话</li>
                            </ul>
                            <p class="bb_time">2016-10-21</p>
                            <p class="xz_btn_wp"><a href="#">下载</a></p>
                        </div>
                    </div>
                    <div class="zm_xzq_box">
                        <p class="zm_xzlx_tb"><img src="{{ asset('images/zm_gzq_pic03.png') }}" ></p>
                        <div class="zm_xz_con">
                            <p class="xz_name">IOS版3.7</p>
                            <ul class="xzsm_list">
                                <li>支持用多张图片DIY动态表情，不服来斗图</li>
                                <li>聊天时可发起"演示白板"，随心涂画辅助沟通</li>
                                <li>新增群日历，可查看节日、群活动等精彩事件</li>
                                <li>群聊通话管理，有序发言，掌控全场</li>
                                <li>团队通讯录，快速查看群成员电话</li>
                            </ul>
                            <p class="bb_time">2016-10-21</p>
                            <p class="xz_btn_wp gys"><a href="https://itunes.apple.com/cn/app/id827564503" target="_blank">下载</a></p>
                        </div>
                    </div>
                    <div class="zm_xzq_box" style="margin:0;">
                        <p class="zm_xzlx_tb"><img src="{{ asset('images/zm_gzq_pic04.png') }}" ></p>
                        <div class="zm_xz_con">
                            <p class="xz_name">Android版3.7</p>
                            <ul class="xzsm_list">
                                <li>支持用多张图片DIY动态表情，不服来斗图</li>
                                <li>聊天时可发起"演示白板"，随心涂画辅助沟通</li>
                                <li>新增群日历，可查看节日、群活动等精彩事件</li>
                                <li>群聊通话管理，有序发言，掌控全场</li>
                                <li>团队通讯录，快速查看群成员电话</li>
                            </ul>
                            <p class="bb_time">2016-10-21</p>
                            <p class="xz_btn_wp"><a href="#">下载</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="zm_z_toe">
            <p class="zm_gzq_tit">其他产品</p>
            <div class="zm_qtcp_wrap">
                <ul class="zm_qtcp_com">
                    <li>
                        <div class="zm_jhbf">
                            <p class="qtcp_names">好会计  PC版 </p>
                            <p class="qtcp_timew">2016-11-21</p>
                            <p class="qtcp_xcby">遇见不同。简儿不凡。</p>
                        </div>
                        <a href="javascript:void(0);" class="qtcp_btn">下载</a>
                    </li>
                    <li>
                        <div class="zm_jhbf">
                            <p class="qtcp_names">好会计  PC版 </p>
                            <p class="qtcp_timew">2016-11-21</p>
                            <p class="qtcp_xcby">遇见不同。简儿不凡。</p>
                        </div>
                        <a href="javascript:void(0);" class="qtcp_btn">下载</a>
                    </li>
                    <li>
                        <div class="zm_jhbf">
                            <p class="qtcp_names">好会计  PC版 </p>
                            <p class="qtcp_timew">2016-11-21</p>
                            <p class="qtcp_xcby">遇见不同。简儿不凡。</p>
                        </div>
                        <a href="javascript:void(0);" class="qtcp_btn">下载</a>
                    </li>
                    <li>
                        <div class="zm_jhbf">
                            <p class="qtcp_names">好会计  PC版 </p>
                            <p class="qtcp_timew">2016-11-21</p>
                            <p class="qtcp_xcby">遇见不同。简儿不凡。</p>
                        </div>
                        <a href="javascript:void(0);" class="qtcp_btn">下载</a>
                    </li>
                    <li>
                        <div class="zm_jhbf">
                            <p class="qtcp_names">好会计  PC版 </p>
                            <p class="qtcp_timew">2016-11-21</p>
                            <p class="qtcp_xcby">遇见不同。简儿不凡。</p>
                        </div>
                        <a href="javascript:void(0);" class="qtcp_btn">下载</a>
                    </li>
                    <li>
                        <div class="zm_jhbf">
                            <p class="qtcp_names">好会计  PC版 </p>
                            <p class="qtcp_timew">2016-11-21</p>
                            <p class="qtcp_xcby">遇见不同。简儿不凡。</p>
                        </div>
                        <a href="javascript:void(0);" class="qtcp_btn">下载</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection