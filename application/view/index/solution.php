{include file="application/view/index/header.php" /}

<style type="text/css">
    .photo-mask {
        position: fixed;
        z-index: 10;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.8);
        filter: alpha(opacity=20);
        -moz-opacity: 0.8;
        opacity: 0.8;
        display: none;
    }

    .photo-panel {
        position: absolute;
        display: none;
        clear: both;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 10;
    }

    .photo-panel .photo-div,
    .photo-panel .photo-bar {
        width: 100%;
    }

    .photo-panel .photo-div {
        width: 960px;
        height: 560px;
        z-index: 11;
        margin: auto;
        position: relative;
    }

    .photo-panel .photo-close {
        background: url(public/static/images/tool_img/close.png);
        width: 56px;
        height: 56px;
        position: absolute;
        margin-left: 664px;
    }

    .photo-panel .photo-close:hover {
        background: url(public/static/images/tool_img/close_ch.png);
        width: 56px;
        height: 56px;
        position: absolute;
        margin-left: 664px;
    }

    .photo-panel .photo-bar-tip {
        width: 700px;
        height: 44px;
        position: absolute;
        margin-top: -64px;
        padding: 10px;
    }

    .photo-panel .photo-bar-tip:hover {
        width: 700px;
        height: 44px;
        position: absolute;
        margin-top: -64px;
        background: #000;
        filter: alpha(opacity=20);
        -moz-opacity: 0.8;
        opacity: 0.8;
        color: #fff;
        padding: 10px;
    }

    .photo-panel .photo-img {
        width: 720px;
        float: left;
        height: 560px;
        background: #fff;
    }

    .photo-panel .photo-view-w {
        width: 720px;
        height: 560px;
        text-align: center;
        vertical-align: middle;
        display: table-cell;
    }

    .photo-panel .photo-view-h {
        width: 720px;
        height: 560px;
        text-align: center;
        vertical-align: middle;
    }

    .photo-panel .photo-view-w img {
        max-width: 700px;
        height: auto;
        vertical-align: middle;
        text-align: center;
        max-height: 540px;
        margin: 10px;
        -moz-box-shadow: 5px 5px 5px #a6a6a6;
        /* 老的 Firefox */
        box-shadow: 5px 5px 5px #a6a6a6;
        -webkit-animation: swing 1s .2s ease both;
        -moz-animation: swing 1s .2s ease both;
    }

    .photo-panel .photo-view-h img {
        max-width: 700px;
        height: 540px;
        margin: 10px;
        -moz-box-shadow: 5px 5px 5px #a6a6a6;
        /* 老的 Firefox */
        box-shadow: 5px 5px 5px #a6a6a6;
        -webkit-animation: swing 1s .2s ease both;
        -moz-animation: swing 1s .2s ease both;
    }

    @-webkit-keyframes swing {
        20%,
        40%,
        60%,
        80%,
        100% {
            -webkit-transform-origin: top center
        }
        20% {
            -webkit-transform: rotate(15deg)
        }
        40% {
            -webkit-transform: rotate(-10deg)
        }
        60% {
            -webkit-transform: rotate(5deg)
        }
        80% {
            -webkit-transform: rotate(-5deg)
        }
        100% {
            -webkit-transform: rotate(0deg)
        }
    }

    @-moz-keyframes swing {
        20%,
        40%,
        60%,
        80%,
        100% {
            -moz-transform-origin: top center
        }
        20% {
            -moz-transform: rotate(15deg)
        }
        40% {
            -moz-transform: rotate(-10deg)
        }
        60% {
            -moz-transform: rotate(5deg)
        }
        80% {
            -moz-transform: rotate(-5deg)
        }
        100% {
            -moz-transform: rotate(0deg)
        }
    }

    .photo-panel .photo-left,
    .photo-panel .photo-right {
        width: 120px;
        float: left;
        margin-top: 220px;
    }

    .photo-panel .arrow-prv {
        background: url(public/static/images/tool_img/l.png);
        width: 120px;
        height: 120px;
    }

    .photo-panel .arrow-prv:hover {
        background: url(public/static/images/tool_img/l_ch.png);
        width: 120px;
        height: 120px;
        cursor: pointer;
    }

    .photo-panel .arrow-next {
        background: url(public/static/images/tool_img/r.png);
        width: 120px;
        height: 120px;
    }

    .photo-panel .arrow-next:hover {
        background: url(public/static/images/tool_img/r_ch.png);
        width: 120px;
        height: 120px;
        cursor: pointer;
    }
</style>

<div class="page">
    <div class="rowFluid">
        <div class="span12">
            <div class="main">
                <div class="page">
                    <div class="rowFluid">
                        <div class="span12">
                            <div class="main">
                                <div class="z_banner">
                                    <div class="rowFluid">
                                        <div class="span12">
                                            <div class="container">
                                                <h3 class="z_banner_title">拾尔画学员作品展示</h3>
                                                <div class="z_banner_text">用优秀的作品去敲开企业的大门</div>
                                                <div class="rowFluid">
                                                    <!--                                                    <div class="span12">
                                                                                                            <div class="web_tip">
                                                                                                                <h4>选好记录编号联系客服</h4>
                                                                                                            </div>
                                                                                                        </div>-->
                                                </div>
                                            </div>
                                            <ul class="platform_advantage_bg_z">
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="template_show">
                                    <div class="rowFluid">
                                        <div class="span12">
                                            <div class="container">
                                                <div class="template_show_content" style="min-height: 0px;"> 
                                                    <div class="span6 col-xs-12 wow fadeInUp">
                                                        <div class="template_show_list_box">
                                                            <div class="template_show_list">
                                                                <div class="template_show-container">
                                                                    <div class="template_show_list_pic"> <a class="front-model"> <img width="472" height="290" src="__IMG__/anli1.jpg" alt="教室素描"/> </a> </div>
                                                                    <div class="template_show_list_text">
                                                                        <h3>教室素描</h3>
                                                                    </div>
                                                                    <div class="template_show_list_button"> 
                                                                        <a href="http://wpa.qq.com/msgrd?v=3&uin=94690024&site=qq&menu=yes" class="all_button " title="咨询详情" target="_blank">咨询详情</a> 
                                                                        <a href="javascript:;" data-url="__IMG__/anli1.jpg" title="预览作品" class="all_button see_photo">预览作品</a> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span6 col-xs-12 wow fadeInUp">
                                                        <div class="template_show_list_box">
                                                            <div class="template_show_list">
                                                                <div class="template_show-container">
                                                                    <div class="template_show_list_pic"> <a class="front-model"> <img width="472" height="290" src="__IMG__/anli2.jpg" alt="餐厅设计"/> </a> </div>
                                                                    <div class="template_show_list_text">
                                                                        <h3>餐厅设计</h3>
                                                                    </div>
                                                                    <div class="template_show_list_button"> 
                                                                        <a href="http://wpa.qq.com/msgrd?v=3&uin=94690024&site=qq&menu=yes" class="all_button " title="咨询详情" target="_blank">咨询详情</a> 
                                                                        <a href="javascript:;" data-url="__IMG__/anli2.jpg" title="预览作品" class="all_button see_photo">预览作品</a> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span6 col-xs-12 wow fadeInUp">
                                                        <div class="template_show_list_box">
                                                            <div class="template_show_list">
                                                                <div class="template_show-container">
                                                                    <div class="template_show_list_pic"> <a class="front-model"> <img width="472" height="290" src="__IMG__/anli3.jpg" alt="客厅设计"/> </a> </div>
                                                                    <div class="template_show_list_text">
                                                                        <h3>客厅设计</h3>
                                                                    </div>
                                                                    <div class="template_show_list_button"> 
                                                                        <a href="http://wpa.qq.com/msgrd?v=3&uin=94690024&site=qq&menu=yes" class="all_button " title="咨询详情" target="_blank">咨询详情</a> 
                                                                        <a href="javascript:;" data-url="__IMG__/anli3.jpg" title="预览作品" class="all_button see_photo">预览作品</a> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span6 col-xs-12 wow fadeInUp">
                                                        <div class="template_show_list_box">
                                                            <div class="template_show_list">
                                                                <div class="template_show-container">
                                                                    <div class="template_show_list_pic"> <a class="front-model"> <img width="472" height="290" src="__IMG__/anli4.jpg" alt="酒店餐厅设计"/> </a> </div>
                                                                    <div class="template_show_list_text">
                                                                        <h3>酒店餐厅设计</h3>
                                                                    </div>
                                                                    <div class="template_show_list_button"> 
                                                                        <a href="http://wpa.qq.com/msgrd?v=3&uin=94690024&site=qq&menu=yes" class="all_button " title="咨询详情" target="_blank">咨询详情</a> 
                                                                        <a href="javascript:;" data-url="__IMG__/anli4.jpg" title="预览作品" class="all_button see_photo">预览作品</a> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span6 col-xs-12 wow fadeInUp">
                                                        <div class="template_show_list_box">
                                                            <div class="template_show_list">
                                                                <div class="template_show-container">
                                                                    <div class="template_show_list_pic"> <a class="front-model"> <img width="472" height="290" src="__IMG__/anli5.jpg" alt="房屋设计"/> </a> </div>
                                                                    <div class="template_show_list_text">
                                                                        <h3>房屋设计</h3>
                                                                    </div>
                                                                    <div class="template_show_list_button"> 
                                                                        <a href="http://wpa.qq.com/msgrd?v=3&uin=94690024&site=qq&menu=yes" class="all_button " title="咨询详情" target="_blank">咨询详情</a> 
                                                                        <a href="javascript:;" data-url="__IMG__/anli5.jpg" title="预览作品" class="all_button see_photo">预览作品</a> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span6 col-xs-12 wow fadeInUp">
                                                        <div class="template_show_list_box">
                                                            <div class="template_show_list">
                                                                <div class="template_show-container">
                                                                    <div class="template_show_list_pic"> <a class="front-model"> <img width="472" height="290" src="__IMG__/anli6.jpg" alt="房屋设计效果"/> </a> </div>
                                                                    <div class="template_show_list_text">
                                                                        <h3>房屋设计效果</h3>
                                                                    </div>
                                                                    <div class="template_show_list_button"> 
                                                                        <a href="http://wpa.qq.com/msgrd?v=3&uin=94690024&site=qq&menu=yes" class="all_button " title="咨询详情" target="_blank">咨询详情</a> 
                                                                        <a href="javascript:;" data-url="__IMG__/anli6.jpg" title="预览作品" class="all_button see_photo">预览作品</a> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rowFluid">
                                                    <div class="span12">
                                                        <div class="web_tip">
                                                            <h4>如果你的理想是成为一名高级设计师,戳这里</h4>
                                                            <div class="create_web"> <a href="http://wpa.qq.com/msgrd?v=3&uin=94690024&site=qq&menu=yes" title="高级定制咨询">高级定制咨询</a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--                                                <div class="know_more wow fadeInUp">
                                                                                                    <div class="know_more_text">如果你的理想是成为一名高级设计师,</div>
                                                                                                    <a target="_blank" class="all_button" href="#" title="">立即咨询</a>
                                                                                                    <a target="_blank" class="all_button" href="#" title="">立即咨询</a>
                                                                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {include file="application/view/index/footer.php" /}

                <div class="photo-mask"></div>
                <div class="photo-panel">
                    <div class="photo-div">
                        <div class="photo-left">
                            <div class="arrow-prv"></div>
                        </div>
                        <div class="photo-img">
                            <div class="photo-bar">
                                <div class="photo-close"></div>
                            </div>
                            <div class="photo-view-h">
                                <img src="http://b.zol-img.com.cn/sjbizhi/images/9/800x1280/1471524533521.jpg" />
                            </div>
                        </div>
                        <div class="photo-right">
                            <div class="arrow-next"></div>
                        </div>
                    </div>
                </div>

                <script>
                    var img_index = 0;
                    var img_src = "";

                    $(function () {
                        
                        if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
                            /*window.location.href="你的手机版地址";*/
                            //如何调用？
                            $(".see_photo").click(function () {
                                var skip_url = $(this).attr('data-url');
                                $(this).attr('target','_blank');
                                $(this).attr('href',skip_url);                       
                            });
                        }else{
                            //计算居中位置                       
                            $(window).scroll( function(){
                                var mg_top = $('html').scrollTop()+($(window).height()-$('.photo-div').height())/2;  
                                $(".photo-div").css({
                                    "margin-top": "" + mg_top + "px"
                                });
                            });
                            //关闭
                            $(".photo-close").click(function () {
                                $(".photo-mask").hide();
                                $(".photo-panel").hide();
                            });
                            //下一张
                            $(".photo-panel .photo-div .arrow-next").click(function () {
                                img_index++;
                                if (img_index >= $(".template_show_content div.col-xs-12").length) {
                                    img_index = 0;
                                }
                                img_src = $(".template_show_content div.col-xs-12").eq(img_index).find('img').attr("src");
                                photoView($("div.col-xs-12 img"));
                            });
                            //上一张
                            $(".photo-panel .photo-div .arrow-prv").click(function () {
                                img_index--;
                                if (img_index < 0) {
                                    img_index = $(".template_show_content div.col-xs-12").length - 1;
                                }
                                img_src = $(".template_show_content div.col-xs-12").eq(img_index).find('img').attr("src");
                                photoView($("div.col-xs-12 img"));
                            });
                            //如何调用？
                            $(".see_photo").click(function () {
                                $(".photo-mask").show();
                                $(".photo-panel").show();
                                img_src = $(this).parent().parent().find('img').attr("src");
                                img_index = $(".template_show_content div.col-xs-12").index();
                                photoView($(this));
                            });
                            //自适应预览
                            function photoView(obj) {
                                if ($(obj).width() >= $(obj).height()) {
                                    $(".photo-panel .photo-div .photo-img .photo-view-h").attr("class", "photo-view-w");
                                    $(".photo-panel .photo-div .photo-img .photo-view-w img").attr("src", img_src);
                                } else {
                                    $(".photo-panel .photo-div .photo-img .photo-view-w").attr("class", "photo-view-h");
                                    $(".photo-panel .photo-div .photo-img .photo-view-h img").attr("src", img_src);
                                }
                            }
                        }
                });
                </script>