/**
 * Created by wenkai on 2016/11/24.
 */
$(function () {
    var search_showAndHidden = $("#search_showandhidden");
    var header_search_box = $("div.header_search_box");
    search_showAndHidden.on("click",function () {
        header_search_box.slideToggle(100);
    });
    header_search_box.find("input").on("blur",function () {
        $(this).parent().fadeOut(100);
    });

    header_search_box.find("input").on("focus",function (e) {
    });

    $(document).keyup(function(e){
        var getValue = header_search_box.find('input').val();
        var curKey = e.which;
        if(curKey==13 && getValue!=''){
            header_search_box.fadeOut(100);
            header_search_box.find('input').val('')
        }
    });

    $(window).scroll(function() {

        if(header_search_box.find('input').val()!=''){
            header_search_box.fadeIn(100);
        }else{
            header_search_box.fadeOut(100);
        }


        if($(this).scrollTop()>200){
            $("#back").fadeIn(100);
        }else{
            $("#back").fadeOut(100);
        }
    });

    $("#back").on('click',function () {
        $('body,html').animate({ scrollTop: 0 }, 200);
    });
    $(".inde_right .qr").click(function(event) {
        //$(".part_6_link").offset.top(0);
        $('body,html').animate({ scrollTop: 10000}, 200);
    });
    $(".inde_right .kf").click(function(event) {
        if($(this).parent().height()==24){
            $(this).parent().stop().animate({"height":"165px","bottom":"100px"});
        }else{
            $(this).parent().stop().animate({"height":"24px","bottom":"241px"});
        }
    });


    //导航
    $(".navU1 li").live("mouseenter", function () {
        $(this).children("ul").stop(false,true).slideDown();
    }).live("mouseleave", function () {
        $(this).children("ul").stop(false,true).slideUp();
    });

    var _title,_source,_sourceUrl,_showcount,_desc,_summary,_site,
        _width = 600,
        _height = 600,
        _top = (screen.height-_height)/2,
        _left = (screen.width-_width)/2,
        _url = 'https://gzq.chanjet.com/?cooporigin=bd01701',
        _pic = 'https://gzq.static.chanjet.com/cms/template/1/bluewise/_files/images/3.jpg',
        _picWx = 'http://localhost:12345/%E5%B7%A5%E4%BD%9C%E5%9C%88%E7%BD%91%E7%AB%99/%E5%B7%A5%E4%BD%9C%E5%9C%88%E9%A1%B5%E9%9D%A2/src/images/codeWx.jpg';





     //分享到新浪微博
     function shareToSinaWB(event){
         //event.preventDefault();
         var _shareUrl = 'http://v.t.sina.com.cn/share/share.php?&appkey=895033136';     //真实的appkey，必选参数
         _shareUrl += '&url='+ encodeURIComponent(_url||document.location);     //参数url设置分享的内容链接|默认当前页location，可选参数
         _shareUrl += '&title=' + encodeURIComponent(_title||document.title);    //参数title设置分享的标题|默认当前页标题，可选参数
         _shareUrl += '&source=' + encodeURIComponent(_source||'');
         _shareUrl += '&sourceUrl=' + encodeURIComponent(_sourceUrl||'');
         _shareUrl += '&content=' + 'utf-8';   //参数content设置页面编码gb2312|utf-8，可选参数
         _shareUrl += '&pic=' + encodeURIComponent(_pic||'');  //参数pic设置图片链接|默认为空，可选参数
         window.open(_shareUrl,'_blank','width='+_width+',height='+_height+',top='+_top+',left='+_left+',toolbar=no,menubar=no,scrollbars=no, resizable=1,location=no,status=0');
     }
    //分享到QQ空间
    function shareToQzone(event){
        //event.preventDefault();

        var _shareUrl = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?';
        _shareUrl += 'url=' + encodeURIComponent(_url||document.location);   //参数url设置分享的内容链接|默认当前页location
        _shareUrl += '&showcount=' + _showcount||0;      //参数showcount是否显示分享总数,显示：'1'，不显示：'0'，默认不显示
        _shareUrl += '&desc=' + encodeURIComponent(_desc||'分享的描述');    //参数desc设置分享的描述，可选参数
        _shareUrl += '&summary=' + encodeURIComponent(_summary||'分享摘要');    //参数summary设置分享摘要，可选参数
        _shareUrl += '&title=' + encodeURIComponent(_title||document.title);    //参数title设置分享标题，可选参数
        _shareUrl += '&site=' + encodeURIComponent(_site||'');   //参数site设置分享来源，可选参数
        _shareUrl += '&pics=' + encodeURIComponent(_pic||'');   //参数pics设置分享图片的路径，多张图片以＂|＂隔开，可选参数
        window.open(_shareUrl,'_blank','width='+_width+',height='+_height+',top='+_top+',left='+_left+',toolbar=no,menubar=no,scrollbars=no,resizable=1,location=no,status=0');
    }

    //分享到腾迅微博
    function shareToQQwb(event){
        //event.preventDefault();
        var _shareUrl = 'http://v.t.qq.com/share/share.php?';
        _shareUrl += 'title=' + encodeURIComponent(_title||document.title);    //分享的标题
        _shareUrl += '&url=' + encodeURIComponent(_url||location.href);    //分享的链接
        _shareUrl += '&appkey=5bd32d6f1dff4725ba40338b233ff155';    //在腾迅微博平台创建应用获取微博AppKey
        _shareUrl += '&site=' + encodeURIComponent(_site||'');   //分享来源
        _shareUrl += '&pic=' + encodeURIComponent(_pic||'');    //分享的图片，如果是多张图片，则定义var _pic='图片url1|图片url2|图片url3....'
        window.open(_shareUrl,'_blank','width='+_width+',height='+_height+',left='+_left+',top='+_top+',toolbar=no,menubar=no,scrollbars=no,resizable=1,location=no,status=0');
    }

    //分享到人人网
    function shareToRenren(event){
        //event.preventDefault();
        var _shareUrl = 'http://share.renren.com/share/buttonshare.do?';
        _shareUrl += 'link=' + encodeURIComponent(_url||location.href);   //分享的链接
        _shareUrl += '&title=' + encodeURIComponent(_title||document.title);     //分享的标题
        window.open(_shareUrl,'_blank','width='+_width+',height='+_height+',left='+_left+',top='+_top+',toolbar=no,menubar=no,scrollbars=no,resizable=1,location=no,status=0');
    }

    //分享到微信
    function shareToWeiXin(){

        $("body").prepend("<div class='shareWx'><img src='images/codeWx.jpg'/><img src='images/cls.png' class='shareCls'/></div>");


    }
    $(".shareWx").live("click", function () {
        $(this).remove();
    });
    $(".shareU1 li").mouseenter(function () {
        $(this).stop(false,true).animate({"width":"25px","top":"15px","height":"25px","margin":"0 5px"},10)
    }).mouseleave(function () {
        $(this).stop(false,true).animate({"width":"15px","top":"20px","height":"15px","margin":"0 10px"},10)
    });
    $(".fxQq").click(function () {
        shareToQzone();
    }).mouseenter(function () {
        $(this).children("img").attr("src","images/fx010.png")
    }).mouseleave(function () {
        $(this).children("img").attr("src","images/fx01.png")
    });
    $(".fxWb").click(function () {
        shareToSinaWB();
    }).mouseenter(function () {
        $(this).children("img").attr("src","images/fx020.png")
    }).mouseleave(function () {
        $(this).children("img").attr("src","images/fx02.png")
    });
    $(".fxTx").click(function () {
        shareToQQwb();
    }).mouseenter(function () {
        $(this).children("img").attr("src","images/fx030.png")
    }).mouseleave(function () {
        $(this).children("img").attr("src","images/fx03.png")
    });
    $(".fxWx").click(function () {
        shareToWeiXin();
    }).mouseenter(function () {
        $(this).children("img").attr("src","images/fx040.png")
    }).mouseleave(function () {
        $(this).children("img").attr("src","images/fx04.png")
    });
    $(".fxRr").click(function () {
        shareToRenren();
    }).mouseenter(function () {
        $(this).children("img").attr("src","images/fx050.png")
    }).mouseleave(function () {
        $(this).children("img").attr("src","images/fx05.png")
    });
});