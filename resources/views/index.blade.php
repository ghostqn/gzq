@extends('layouts.base')

@section('css')
@endsection

@section('js')
    <script src="{{ asset('js/jquery.db_tabmotionbanner.min.js') }}"></script>
@endsection

@section('style')
    <style>
        .mt-number-animate{ font-family: '微软雅黑'; line-height:40px; height: 40px;/*设置数字显示高度*/; font-size: 36px;/*设置数字大小*/ overflow: hidden; display: inline-block; position: relative;}
        .mt-number-animate .mt-number-animate-dot{ width: 15px;/*设置分割符宽度*/ line-height: 40px; float: left; text-align: center;}
        .mt-number-animate .mt-number-animate-dom{ width: 40px;/*设置单个数字宽度*/ text-align: center; float: left; position: relative; top: 0;}
        .mt-number-animate .mt-number-animate-dom .mt-number-animate-span{ width: 100%; float: left;}
    </style>
@endsection

@section('content')
    <div class="banner">
        <div class="db_tab25">
            <ul class="db_bgset">
                <li>
                    <img src="{{ asset('images/banner.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ asset('images/bj2.jpg') }}" height="985" alt="">
                </li>
            </ul>

            <ul class="db_imgset">
                <li>
                    <div class="db_1_1" mymove='cus' src="">
                        <div class="banner_context">
                            <h1>移动管理<span>一圈搞定</span></h1>
                            <p>Discover the power of our new theme</p>
                        </div>
                    </div>
                    <div class="db_1_2" mymove='cus' src="">
                        <div class="banner_btn_box">
                            <a href="" class="ios">IOS下载</a>
                            <a href="" class="android下载">Android下载</a>
                            <a href="" class="microsoft下载">Microsoft下载</a>
                        </div>
                    </div>
                    <div class="db_1_3" mymove='cus' src="">
                        <div class="banner_register">
                            <p>5秒完成注册 开启你的高效办公之旅</p>
                            <div>
                                <form method="get" action="http://i.chanjet.com/register">
                                    <input name="account" class="banner_register_input fl mr7" type="text" placeholder="输入手机号"/>
                                    <input value="立即注册" type="submit" class="banner_register_button fl"/>
                                </form>
                            </div>
                        </div>
                    </div>
                    <img class="db_1_4" src="{{ asset('images/banner1_pic1.png') }}" width="488" height="495" alt="">
                </li>
                {{--
                                    <li>
                                        <div class="db_2_1" mymove='cus' src="">
                                            <div class="banner_context">
                                                <h1>移动管理<span>一圈搞定</span></h1>
                                                <p>Discover the power of our new theme</p>
                                            </div>
                                        </div>
                                        <div class="db_2_2" mymove='cus' src="">
                                            <div class="banner_btn_box">
                                                <a href="" class="ios">IOS下载</a>
                                                <a href="" class="android下载">Android下载</a>
                                                <a href="" class="microsoft下载">Microsoft下载</a>
                                            </div>
                                        </div>
                                        <div class="db_2_3" mymove='cus' src="">
                                            <div class="banner_register">
                                                <p>5秒完成注册 开启你的高效办公之旅</p>
                                                <div>
                                                    <form method="get" action="http://i.chanjet.com/register">
                                                        <input name="account" class="banner_register_input fl mr7" type="text" placeholder="输入手机号"/>
                                                        <input value="立即注册" type="submit" class="banner_register_button fl"/>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                --}}
            </ul>

            <div class="db_menuwrap">
                {{--<ul class="DB_menuSet">
                    <li><img src="images/btn_off.png" alt=""></li>
                    <li><img src="images/btn_off.png" alt=""></li>
                    <li><img src="images/btn_off.png" alt=""></li>
                    <li><img src="images/btn_off.png" alt=""></li>
                </ul>
                nextArrow.jpg--}}
                {{--
                <div class="db_next"><img src="{{ asset('images/prevarrow.png') }}" alt="next"></div>
                <div class="db_prev"><img src="{{ asset('images/nextarrow.png') }}" alt="prev"></div>
                --}}
            </div>

        </div>


        {{-- <div class="banner_box">
                  <div class="banner_context mb45">
                      <h1>移动管理<span>一定搞圈</span></h1>
                      <p>Discover the power of our new theme</p>
                  </div>
                 <div class="banner_btn_box mb45">
                     <a href="" class="ios">IOS下载</a>
                     <a href="" class="android下载">Android下载</a>
                     <a href="" class="microsoft下载">Microsoft下载</a>
                 </div>
                 <div class="banner_register pt22">
                     <p>5秒完成注册 开启你的高效办公之旅</p>
                     <div>
                         <input class="banner_register_input fl mr7" type="text" placeholder="输入手机号"/>
                         <a class="banner_register_button fl">立即注册</a>
                     </div>

                 </div>
             </div>--}}
    </div>
    <div class="part_1">
        <div class="part_1_bg"></div>
        <h1>让小微企业的管理更容易！</h1>
        <p>工作圈，专为小微企业量身打造的管理平台。从协同办公、进销存管理、财务保税、客户管理、人力资源管理等领域， 全方位满足小微企业经营管理需求</p>
    </div>
    <div class="part_2">
        <div class="part_2_main">
            <div class="part_2_box part_2_box_style">
                <h1>协同办公</h1>
                <h2>易沟通、易办公、易集成</h2>
                <h3>高效的工作沟通</h3>
                <p>基于工作场景的多种沟通方式，更高效</p>
                <h3>便捷的办公流程</h3>
                <p>公告、审批、日报/周报、任务、网盘等，轻松便捷</p>
            </div>
            <div class="part_2_box part_2_box_style">
                <h1>互联网财税</h1>
                <h2>智能的票财税一体化</h2>
                <h3>基础凭证</h3>
                <p>辅助核算 数量核算  会计制度 </p>
                <h3>会计凭证</h3>
                <p>三大会计制度</p>
            </div>
            <div class="part_2_box part_2_box_style">
                <h1>客户管家</h1>
                <h2>指尖上的客户管理</h2>
                <h3>用户全面管理</h3>
                <p>客户资料、拜访记录、客户关怀，永不丢失 </p>
                <h3>销售快速跟进</h3>
                <p>外勤签到、商机漏斗、工作报告、分权限使用</p>
            </div>
            <div class="part_2_box part_2_box_style">
                <h1>在线进销存</h1>
                <h2>互联网方式，轻松打理生意</h2>
                <h3>轻松经营</h3>
                <p>快速开单，应收应付</p>
                <h3>移动互联</h3>
                <p>手机下单，微信分享商品及单据</p>
            </div>
        </div>
        <div class="part_2_bg"></div>
    </div>
    <div class="part_3">
        <h1 style="width: 640px;margin: 0 auto;height: 40px;line-height: 40px;position: relative;"><em class="numberRun2"></em><span style="position: absolute;right: 0;top: 0;">企业力荐选择</span></h1>
        <div class="nav" style="display: none;">
            <a href="">餐饮服务</a><a href="">旅游住宿</a><a href="" class="hover">汽车运输行业</a><a href="">批发零售</a><a href="">地产租赁</a>
        </div>
        <div class="box_logo">
            <table border="0" cellpadding="0" cellspacing="1" width="100%" align="center" style="background-color: #ccc;">
                <tr>
                    <td ><a href=""><img src="{{ asset('images/11.png') }}" width="167" height="154" alt=""/></a></td>
                    <td ><a href=""><img src="{{ asset('images/22.png') }}" width="167" height="154" alt=""/></a></td>
                    <td ><a href=""><img src="{{ asset('images/33.png') }}" width="167" height="154" alt=""/></a></td>
                    <td ><a href=""><img src="{{ asset('images/44.png') }}" width="167" height="154" alt=""/></a></td>
                    <td ><a href=""><img src="{{ asset('images/55.png') }}" width="167" height="154" alt=""/></a></td>
                    <td><a href=""><img src="{{ asset('images/66.png') }}" width="167" height="154" alt=""/></a></td>
                </tr>
                <tr>
                    <td><a href=""><img src="{{ asset('images/77.png') }}" width="167" height="154" alt=""/></a></td>
                    <td><a href=""><img src="{{ asset('images/88.png') }}" width="167" height="154" alt=""/></a></td>
                    <td><a href=""><img src="{{ asset('images/99.png') }}" width="167" height="154" alt=""/></a></td>
                    <td><a href=""><img src="{{ asset('images/1010.png') }}" width="167" height="154" alt=""/></a></td>
                    <td><a href=""><img src="{{ asset('images/1212.png') }}" width="167" height="154" alt=""/></a></td>
                    <td><a href=""><img src="{{ asset('images/1313.png') }}" width="167" height="154" alt=""/></a></td>
                </tr>
                <tr>
                    <td><a href=""><img src="{{ asset('images/1414.png') }}" width="167" height="154" alt=""/></a></td>
                    <td><a href=""><img src="{{ asset('images/1515.png') }}" width="167" height="154" alt=""/></a></td>
                    <td><a href=""><img src="{{ asset('images/1616.png') }}" width="167" height="154" alt=""/></a></td>
                    <td><a href=""><img src="{{ asset('images/1717.png') }}" width="167" height="154" alt=""/></a></td>
                    <td><a href=""><img src="{{ asset('images/1818.png') }}" width="167" height="154" alt=""/></a></td>
                    <td><a href=""><img src="{{ asset('images/1919.png') }}" width="167" height="154" alt=""/></a></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="part_4">
        <h3>企业及产品动态</h3>
        <div class="part_4_content">
            <div class="part_4_box">
                <h1> 工作圈，移动管理，一圈搞定</h1>
                <h2>工作圈，专为小微企业量身打造的管理平台</h2>
                <p>
                    工作圈，专为小微企业量身打造的管理平台<br />
                    从协同办公、进销存管理、财务保税、客户管理、人力资源管理等领<br />
                    域，全方位满足小微企业经营者管理需求，一圈搞定 “人，才，客，<br />货”
                    让小微企业管理更加敏捷。
                </p>
                <a href="" class="link">了解更多</a>
            </div>

            <div class="part_4_box2">
                <dl>
                    <dt><img src="{{ asset('images/tt1.jpg') }}" width="275" height="183" alt=""/></dt>
                    <dd><span>让小微企业的管理更容易！</span></dd>
                    <dd><a href="">工作圈，专为小微企业量身打造的管理平台。从协同办公、进销存管理、财务保税、客户管理，全方位满足小微企业经营者管理需求。</a></dd>
                </dl>
                <dl>
                    <dt><img src="{{ asset('images/tt2.jpg') }}" width="275" height="183" alt=""/></dt>
                    <dd><span>让小微企业的管理更容易！</span></dd>
                    <dd><a href="">工作圈，专为小微企业量身打造的管理平台。从协同办公、进销存管理、财务保税、客户管企业经营者管理需求。</a></dd>
                </dl>
                <dl>
                    <dt><img src="{{ asset('images/tt3.jpg') }}" width="275" height="183" alt=""/></dt>
                    <dd><span>让小微企业的管理更容易！</span></dd>
                    <dd><a href="">工作圈，专为小微企业量身打造的管理平台。从协同办公、进销存管理、财务保税、客户管理，全方位满足小经营者管理需求。</a></dd>
                </dl>
                <dl class="last-child">
                    <dt><img src="{{ asset('images/tt4.jpg') }}" width="275" height="183" alt=""/></dt>
                    <dd><span>让小微企业的管理更容易！</span></dd>
                    <dd><a href="">工作圈，专为小微企业量身打造的管理平台。从协同办公、进销存管理、财务保税、客户管理，全方位业经营者管理需求。</a></dd>
                </dl>
            </div>
        </div>

    </div>
@endsection


@section('script')
<script>
    (function($) {
        $.fn.numberAnimate = function(setting) {
            var defaults = {
                speed : 1000,//动画速度
                num : "", //初始化值
                iniAnimate : true, //是否要初始化动画效果
                symbol : '',//默认的分割符号，千，万，千万
                dot : 0 //保留几位小数点
            };
            //如果setting为空，就取default的值
            var setting = $.extend(defaults, setting);

            //如果对象有多个，提示出错
            if($(this).length > 1){
                alert("just only one obj!");
                return;
            }

            //如果未设置初始化值。提示出错
            if(setting.num == ""){
                alert("must set a num!");
                return;
            }
            var nHtml = '<div class="mt-number-animate-dom" data-num="--num--">\
            <span class="mt-number-animate-span">0</span>\
            <span class="mt-number-animate-span">1</span>\
            <span class="mt-number-animate-span">2</span>\
            <span class="mt-number-animate-span">3</span>\
            <span class="mt-number-animate-span">4</span>\
            <span class="mt-number-animate-span">5</span>\
            <span class="mt-number-animate-span">6</span>\
            <span class="mt-number-animate-span">7</span>\
            <span class="mt-number-animate-span">8</span>\
            <span class="mt-number-animate-span">9</span>\
            <span class="mt-number-animate-span">.</span>\
          </div>';

            //数字处理
            var numToArr = function(num){
                num = parseFloat(num).toFixed(setting.dot);
                if(typeof(num) == 'number'){
                    var arrStr = num.toString().split("");
                }else{
                    var arrStr = num.split("");
                }
                //console.log(arrStr);
                return arrStr;
            }

            //设置DOM symbol:分割符号
            var setNumDom = function(arrStr){
                var shtml = '<div class="mt-number-animate">';
                for(var i=0,len=arrStr.length; i<len; i++){
                    if(i != 0 && (len-i)%3 == 0 && setting.symbol != "" && arrStr[i]!="."){
                        shtml += '<div class="mt-number-animate-dot">'+setting.symbol+'</div>'+nHtml.replace("--num--",arrStr[i]);
                    }else{
                        shtml += nHtml.replace("--num--",arrStr[i]);
                    }
                }
                shtml += '</div>';
                return shtml;
            }

            //执行动画
            var runAnimate = function($parent){
                $parent.find(".mt-number-animate-dom").each(function() {
                    var num = $(this).attr("data-num");
                    num = (num=="."?10:num);
                    var spanHei = $(this).height()/11; //11为元素个数
                    var thisTop = -num*spanHei+"px";
                    if(thisTop != $(this).css("top")){
                        if(setting.iniAnimate){
                            //HTML5不支持
                            if(!window.applicationCache){
                                $(this).animate({
                                    top : thisTop
                                }, setting.speed);
                            }else{
                                $(this).css({
                                    'transform':'translateY('+thisTop+')',
                                    '-ms-transform':'translateY('+thisTop+')',   /* IE 9 */
                                    '-moz-transform':'translateY('+thisTop+')',  /* Firefox */
                                    '-webkit-transform':'translateY('+thisTop+')', /* Safari 和 Chrome */
                                    '-o-transform':'translateY('+thisTop+')',
                                    '-ms-transition':setting.speed/1000+'s',
                                    '-moz-transition':setting.speed/1000+'s',
                                    '-webkit-transition':setting.speed/1000+'s',
                                    '-o-transition':setting.speed/1000+'s',
                                    'transition':setting.speed/1000+'s'
                                });
                            }
                        }else{
                            setting.iniAnimate = true;
                            $(this).css({
                                top : thisTop
                            });
                        }
                    }else{
                        //等于0时，数字归0
                        $(this).css({
                            'transform':'translateY('+thisTop+')',
                            '-ms-transform':'translateY('+thisTop+')',   /* IE 9 */
                            '-moz-transform':'translateY('+thisTop+')',  /* Firefox */
                            '-webkit-transform':'translateY('+thisTop+')', /* Safari 和 Chrome */
                            '-o-transform':'translateY('+thisTop+')',
                            '-ms-transition':setting.speed/1000+'s',
                            '-moz-transition':setting.speed/1000+'s',
                            '-webkit-transition':setting.speed/1000+'s',
                            '-o-transition':setting.speed/1000+'s',
                            'transition':setting.speed/1000+'s'
                        });
                    }
                });
            };

            //初始化
            var init = function($parent){
                //初始化
                $parent.html(setNumDom(numToArr(setting.num)));
                runAnimate($parent);
            };

            //重置参数
            this.resetData = function(num){
                var newArr = numToArr(num);
                var $dom = $(this).find(".mt-number-animate-dom");
                if($dom.length < newArr.length){
                    $(this).html(setNumDom(numToArr(num)));
                }else{
                    $dom.each(function(index, el) {
                        $(this).attr("data-num",newArr[index]);
                    });
                }
                runAnimate($(this));
            }
            //init
            init($(this));
            return this;
        }
    })(jQuery);

    $(function(){
        var numRun2 = $(".numberRun2").numberAnimate({num:'450000', speed:2000, symbol:","});
        var nums2 = 450000;
        setInterval(function(){
            nums2+= 1;
            numRun2.resetData(nums2);
        },3000);
    });
</script>
<script type="text/javascript">
    $('.db_tab25').DB_tabMotionBanner({
        key: 'b28551',
        autoRollingTime: 6000,
        bgSpeed: 500,
        motion: {
            db_1_1: { left: -50, opacity: 0, speed: 1000, delay: 500 },
            db_1_2: { left: -50, opacity: 0, speed: 1000, delay: 1000 },
            db_1_3: { left: 100, opacity: 0, speed: 1000, delay: 1500 },
            db_1_4: { left:100,top:20, opacity: 0, speed: 1000, delay: 1500 },
            db_2_1: { top: 50, opacity: 0, speed: 1000, delay: 500 },
            db_2_2: { top: 50, opacity: 0, speed: 1000, delay: 1000 },
            db_2_3: { top: 100, opacity: 0, speed: 1000, delay: 1500 },
            db_3_1: { left: -50, opacity: 0, speed: 1000, delay: 500 },
            db_3_2: { top: 50, opacity: 0, speed: 1000, delay: 1000 },
            db_3_3: { top: 0, opacity: 0, speed: 1000, delay: 1500 },
            end: null
        }
    });

</script>
@endsection
