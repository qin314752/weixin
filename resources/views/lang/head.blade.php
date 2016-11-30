
<!DOCTYPE html>
<html language="zh">
        <head>
                <meta charset="utf-8" />
                <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
                <title>恒远嘉舜</title>
                <link rel="stylesheet" href="/home/css/common.css" type="text/css"/>
                <link rel="stylesheet" href="/home/css/index.css" type="text/css"/>
                <link rel="stylesheet" href="/home/themes/default/default.css" type="text/css" media="screen" />
                <link rel="stylesheet" href="/home/themes/light/light.css" type="text/css" media="screen" />
                <link rel="stylesheet" href="/home/themes/dark/dark.css" type="text/css" media="screen" />
                <link rel="stylesheet" href="/home/themes/bar/bar.css" type="text/css" media="screen" />
                <link rel="stylesheet" href="/home/css/nivo-slider.css" type="text/css" media="screen" />     
                <script src="/home/js/jquery-2.1.1.min.js" type="text/javascript"></script>
                <script src="/home/jquery.js"></script>
                <script type="text/javascript" src="/home/scripts/jquery-1.9.0.min.js"></script>
                <script type="text/javascript" src="/home/js/jquery.nivo.slider.js"></script>
                <script>
                        $(function() {
                                var $div_li = $("#tab .tab_menu .head .cont .nav ul li");
                                $div_li.click(function() {
                                        $(this).addClass("active1") //当前<li>元素高亮
                                                .siblings().removeClass("active1"); //去掉其它同辈<li>元素的高亮
                                        var index = $div_li.index(this); // 获取当前点击的<li>元素 在 全部li元素中的索引。
                                        $("#tab .tab_box > div") //选取子节点。不选取子节点的话，会引起错误。如果里面还有div 
                                                .eq(index).show() //显示 <li>元素对应的<div>元素
                                                .siblings().hide(); //隐藏其它几个同辈的<div>元素
                                })
                        })
                </script>
        </head>
        <body>
                <!--
                作者：446754162@qq.com
                时间：2016-10-28
                描述：top
        -->
        <div class="top">
                <div class="header">
                        <div style="position: absolute;width:300px;height: 60px;top: 50%;margin-top: -30px;background: url({{$config[0]->logo}}) no-repeat;text-indent: -9999em;background-size: 276px 60px;">
                                <h1>恒远嘉舜</h1>
                        </div>
                        <div class="telphone">
                                <p style="margin-right:50px">热线电话</p>
                                <span ><img style="margin-left: -10px" src="/home/img/tel.png"></span><a>{{$config[0]->phone}}</a>
                        </div>
                </div>
        </div>
        
            <div id="tab">              
                        
                
        <div class="tab_menu">
                <!--
                    作者：446754162@qq.com
                    时间：2016-10-28
                    描述：nav
                -->                 
                <div class="head">
                    <div class="cont">
                        <div class="nav"> 
                            <!--导航条-->
                            <ul class="nav-main">
                                <li><a href="/home/page">首页</a></li>
                                <li><a id="li-1" href="/home/page/daoheng?id=gongsi">公司简介</a></li>
                                <li><a id="li-2" href="/home/page/daoheng?id=licai">行业资讯</a></li>
                                <li><a id="li-3" href="/home/page/daoheng?id=gongyi">社会公益</a></li>
                                <li><a id="li-4" href="/home/page/daoheng?id=jigou">合作机构</a></li>
                                <li><a id="li-5" href="/home/page/daoheng?id=zhaopin">招聘</a></li>
                            </ul>
                            <!--隐藏盒子-->
                           <!--  <div id="box-1" class="hidden-box hidden-loc-index">
                                <ul>
                                    <li><a href="javascript:;">公司架构</a></li>                                  
                                </ul>
                            </div> -->
                            <!-- <div id="box-2" class="hidden-box hidden-loc-us">
                                <ul>
                                    <li><a href="news_lianjie.html">新闻中心</a></li>                                 
                                    <li><a href="/home/page/daoheng?id=licai">理财资讯</a></li>                                 
                                </ul>
                            </div> -->                                                                                                                                
                        </div>
                        <script type="text/javascript" src="js/main.js"></script> 
                    </div>
                </div>              
            </div>