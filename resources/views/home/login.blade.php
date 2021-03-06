
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>用户登录 - 欢迎使用【EWShop】商城系统</title>
    <meta name="keywords" content="源代码,lmonkey,php,shop,ewphp,php商城系统,b2c商城系统,php商城源码,b2c商城源码,开源免费网上商城系统" />
    <meta name="description" content="EWShop1.0 教学演示系统！" />
    <link type="text/css" rel="stylesheet" href="{{ asset('home/css/styles.css')}}"/>
    <script type="text/javascript" src="{{ asset('home/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/js/global.js') }}"></script>
</head>
<body>
<div class="pagetop">


    <div class="quick_menu">
        <p>
            <span class="fl">您好，欢迎使用【EWShop】商城系统</span>
            <span class="fr">
                    <a href="{{ url('user/login') }}" title="登录">Login</a>
                    <a href="{{ url('user/logout') }}" title="登录">Logout</a>
                    <a href="{{ url('user/register') }}" title="注册">Register</a>
					<a href="/order/add" title="购物车" class="gwc">购物车 <span class="cred">0</span> 件</a>
					<a href="/order/plist" title="订单查询" style="border:0">订单查询</a>
				</span>
        </p>
    </div>



    <div class="width980">
        <div class="header"  style="padding:10px 0">
            <div class="fl logo">
                <a href="/" title="欢迎使用【EWShop】商城系统"><img src="../uploads/2020-0812-5f3384e8e3cae.png" height="50" alt="欢迎使用【EWShop】商城系统" /></a>
            </div>

            <div class="sear fl">
                <form method="get" action="/plist/0">
                    <div class="inputbg fl">
                        <input type="text" name="keyword" value="" class="fl searinput c666" />
                    </div>
                    <input type="submit" class="fl sear_btn" onclick="this.form.submit();return false;" value="搜索" />
                </form>
            </div>
            <p class="top_tel fr">咨询热线：400-700-1388</p>
        </div>
    </div>

    <div class="clear"></div>

    <div class="nav">
        <ul>
            <li class="sel"><a href="/" title="首页">首页</a></li>
            <li><a href="/plist/14">前沿</a></li>
            <li><a href="/plist/15">前端</a></li>
            <li><a href="/plist/16">后端</a></li>
            <li><a href="/plist/18">云计算</a></li>
            <li><a href="/plist/19">产品设计</a></li>
            <li class="sel"><a href="?m=page&a=index&id=16" title="关于我们">关于我们</a></li>
        </ul>
    </div>

    <div class="clear"></div>

</div>

<!-- content -->
<div class="width980">
    <div class="loginbox">
        <div class="logintt"><p>用户登录</p></div>
        <div class="fl login_l">
            <form action="{{ url('user/dologin')}}" method="post" id="form">
                {{ csrf_field() }}
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="60">用户名:</td>
                        <td><input type="text" name="name" class="input1" /><span id="user_name_show"></span></td>
                    </tr>

                    <tr>
                        <td>密　码:</td>
                        <td><input type="password" name="pw" class="input1" /><span id="user_pw_show"></span></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="do_submit" class="btn_05" value="Login" style="margin:0" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="fl login_zc">
            <p>如果您尚未注册，请先注册</p>
            <p class="login_lx"><a href="/user/register" title="注册">注册</a></p>
        </div>
        <div class="clear"></div>
    </div>
</div>



<!-- footer -->

<div class="clear"></div>
<div class="ad980">
    <a href="https://www.eduwork.cn" target="_blank"><img src="../uploads/ad/2020-0820-5f3dfe4eea645.png" width="980" height="80" /></a>
</div>



<div class="foot">
    <div class="bottom_link">
        <div class="border_link">
            <div class="item_1 fl">
                <h3>用户指南</h3>
                <ul class="mat5">
                    <li><a href="/page/12" title="订单查询">订单查询</a></li>
                    <li><a href="/page/13" title="退换货流程">退换货流程</a></li>
                    <li><a href="/page/15" title="用户协议">用户协议</a></li>
                </ul>
            </div>

            <div class="bottom_libg fl"></div>

            <div class="item_1 fl">
                <h3>配送方式</h3>
                <ul class="mat5">
                    <li><a href="/page/17" title="联系我们">联系我们</a></li>
                    <li><a href="/page/18" title="诚聘英才">诚聘英才</a></li>
                    <li><a href="/page/8" title="支付方式">支付方式</a></li>
                </ul>
            </div>

            <div class="bottom_libg fl"></div>


            <div class="item_1 fl">
                <h3>售后服务</h3>
                <ul class="mat5">
                    <li><a href="/page/9" title="常见问题">常见问题</a></li>
                    <li><a href="/page/10" title="配送时间及运费">配送时间及运费</a></li>
                    <li><a href="/page/11" title="验货与签收">验货与签收</a></li>
                </ul>
            </div>

            <div class="bottom_libg fl"></div>


            <div class="item_1 fl">
                <h3>关于我们</h3>
                <ul class="mat5">
                    <li><a href="/page/7" title="购物指南">购物指南</a></li>
                    <li><a href="/page/16" title="公司简介">公司简介</a></li>
                    <li><a href="/page/14" title="退换货条款">退换货条款</a></li>
                </ul>
            </div>

            <div class="bottom_libg fl"></div>


            <div class="foot_tel fl">
                <h3 class="c666">欢迎使用【EWShop】商城系统</h3>
                <p class="mat10">
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=779050720&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:779050720:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=46458494&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:46458494:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a>
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3154661999&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:3154661999:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a>


                </p>
                <p class="tel_num">400-700-1388</p>
            </div>

            <div class="clear"></div>
        </div>
    </div>

    <div class="flink">
        <span class="strong">友情链接：</span>

        <a href="http://www.eduplayer.cn" title="智校云" target="_blank">智校云</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.lmonkey.com" title="学习猿地" target="_blank">学习猿地</a>
        <a href="http://www.ydma.cn" title="细说PHP" target="_blank">细说PHP</a>
        <a href="http://www.baidu.com" title="百度" target="_blank">百度</a>

    </div>
    <div class="subnav">
        Copyright <span class="num">&copy;</span> 学习猿地 2018-2021 All Rights Reserved 京ICP备1101010121号 京公网安备 121231212121　
        <p>咨询热线：400-700-1388　咨询QQ：779050720,46458494,3154661999　</p>

        <p>Powered by <a href="http://www.eduwork.cn" target="_blank" title="EWShop商城系统v1.0" class="cgreen">EDUWORK</a></p>
    </div>


</div>




<script type="text/javascript" src="../app/views/public/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="../app/views/public/js/jquery.slide.js"></script>
<script type="text/javascript">
    $(function(){
        $("img").lazyload({
            effect:"fadeIn",
            container:$("body")
        });
        $("#jdtslide").KinSlideshow({
            moveStyle:"left",
            intervalTime:5,
            mouseEvent:"mouseover",
            titleBar:{"titleBar_bgColor":""},
            titleFont:{TitleFont_size:14,TitleFont_color:"#ffffff"}
        });
        $(".fenlei_li").hover(
            function(){
                $(".fenlei_li").find("h3 a").removeClass("sel");
                $(this).find("h3 a").addClass("sel");
                $(".fenlei_li").find("div").hide();
                $(this).find("div").show();
            },
            function(){
                $(".fenlei_li").find("h3 a").removeClass("sel");
                $(".fenlei_li").find("div").hide();
            }
        )
    })
</script>
</body>
</html>


