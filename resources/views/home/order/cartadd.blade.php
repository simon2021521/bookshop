<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>EWShop - 欢迎使用【EWShop】商城系统</title>
    <meta name="keywords" content="源代码,lmonkey,php,shop,ewphp,php商城系统,b2c商城系统,php商城源码,b2c商城源码,开源免费网上商城系统"/>
    <meta name="description" content="EWShop1.0 教学演示系统！"/>
    <link type="text/css" rel="stylesheet" href="../app/views/home/resource/css/style.css"/>
    <script type="text/javascript" src="../app/views/public/js/jquery.js"></script>
    <script type="text/javascript" src="../app/views/public/js/global.js"></script>
</head>
<body>
<div class="pagetop">
    <div class="quick_menu">
        <p>
            <span class="fl">您好<a style="border:0px;padding:0px" href="/user/order" title="会员中心"><span class="cred">user001</span></a>， 欢迎使用【EWShop】商城系统</span>
            <span class="fr">
				<a href="/user/order" title="会员中心">会员中心</a>
				<a href="/order/add" title="购物车" class="gwc">购物车 <span class="cred">0</span> 件</a>
				<a href="/order/plist" title="订单查询">订单查询</a>
				<a href="/user/logout" title="退出" style="border:0">退出</a>
			</span>
        </p>
    </div>


    <div class="width980">
        <div class="header" style="padding:10px 0">
            <div class="fl logo">
                <a href="/" title="欢迎使用【EWShop】商城系统">
                    <img src="../uploads/2020-0812-5f3384e8e3cae.png" height="50" alt="欢迎使用【EWShop】商城系统"/>
                </a>
            </div>

            <div class="sear fl">
                <form method="get" action="/plist/0">
                    <div class="inputbg fl">
                        <input type="text" name="keyword" value="" class="fl searinput c666"/>
                    </div>
                    <input type="submit" class="fl sear_btn" onclick="this.form.submit();return false;" value="搜索"/>
                </form>
            </div>
            <p class="top_tel fr">咨询热线：400-700-1388</p>
        </div>
    </div>

    <div class="clear"></div>

    <div class="nav">
        <ul>
            <li class="sel"><a href="/" title="首页">首页</a></li>
            <li><a href="/plist/15">前端</a></li>
            <li><a href="/plist/15">前端</a></li>
            <li><a href="/plist/15">前端</a></li>
            <li><a href="/plist/15">前端</a></li>
            <li><a href="/plist/15">前端</a></li>
            <li><a href="/plist/15">前端</a></li>
            <li><a href="/plist/15">前端</a></li>
            <li><a href="/plist/15">前端</a></li>
            <li class="sel"><a href="/page/16" title="关于我们">关于我们</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- content -->

<div class="content">
    <div class="liucheng">我的购物车</div>
    <div class="mat10">
        <div class="gouwuche">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="gwc_tb">
                <tr>
                    <th width="100">商品图片</th>
                    <th >商品名称</th>
                    <th width="160">商品单价(元)</th>
                    <th width="110">购买数量</th>
                    <th width="100">操作</th>
                </tr>
                <tr id="896" class="product_id">
                    <td class="hotimg"><img src="../uploads/product/2020-0820-5f3e08d935cc4.png" /></td>
                    <td style="text-align:left">
                        <a href="/product/" title="《细说网页制作》" target="_blank" class="cblue font14">《细说网页制作》</a>
                    </td>
                    <td class="strong num font14">38.0</td>
                    <td class="shuliang" style="padding-left:10px;">
                        <span class="img1" onclick="bro_numchange('product_num[896]', '-', 1);cart_num('896', 'product_num[896]')">-</span>
                        <div class="shuliang_box"><input type="text" name="product_num[896]" value="2" readonly /></div>
                        <span class="img2" onclick="bro_numchange('product_num[896]', '+', 996);cart_num('896', 'product_num[896]')">+</span>
                    </td>
                    <td><a href="javascript:cart_del('896');">删除</a></td>
                </tr>
                <tr id="898" class="product_id">
                    <td class="hotimg"><img src="../uploads/product/2020-0820-5f3e059c25d7b.png" /></td>
                    <td style="text-align:left">
                        <a href="/product/" title="《细说PHP》第4版" target="_blank" class="cblue font14">《细说PHP》第4版</a>

                    </td>
                    <td class="strong num font14">108.0</td>
                    <td class="shuliang" style="padding-left:10px;">
                        <span class="img1" onclick="bro_numchange('product_num[898]', '-', 1);cart_num('898', 'product_num[898]')">-</span>
                        <div class="shuliang_box"><input type="text" name="product_num[898]" value="1" readonly /></div>
                        <span class="img2" onclick="bro_numchange('product_num[898]', '+', 17);cart_num('898', 'product_num[898]')">+</span>
                    </td>
                    <td><a href="javascript:cart_del('898');">删除</a></td>
                </tr>
            </table>
        </div>
        <div class="fukuan font13">
            <strong>应付总额(￥)：</strong><span class="strong num1 font16 cred" id="order_money">193.0</span>(元)
            ＝ <span class="strong num1 font14 cred" id="order_productmoney">184.0</span>(商品总额)
            ＋ <span class="strong num1 font14 cred" id="order_wlmoney">9.0</span>(运费)
        </div>
        <form method="post" id="form" action="/order/add" onsubmit="return validate('click')">
            <div style="border:1px #ddd solid; padding:10px 20px; margin-top:10px;">
                <h3 class="shxx_tt">付款方式</h3>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="shxx mat10">
                    <tr>
                        <td width="60" align="right"><input type="radio" name="payway" id="2" value="2" checked /></td>
                        <td width="190"><label for="2">&nbsp;银行转账/汇款</label></td>
                        <td class="c666"><label for="2">通过线下汇款方式支付，汇款帐号：建设银行 00000025400000xxxx 陈某某</label></td>
                    </tr>
                    <tr>
                        <td width="60" align="right"><input type="radio" name="payway" id="3" value="3" checked /></td>
                        <td width="190"><label for="3">&nbsp;货到付款</label></td>
                        <td class="c666"><label for="3">送货上门后再收款，支持现金、POS机刷卡、支票支付</label></td>
                    </tr>
                </table>
                <h3 class="shxx_tt mat10">收货信息</h3>
                <div class="shxx mat10">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="120" style="text-align:right;"><span class="cred1">*</span> 配送区域：</td>
                            <td style="text-align:left;">
                                <select name="province" id="province" class="inputselect"></select>
                                <select name="city" id="city" class="inputselect"></select>
                                <span id="province"></span><span id="city"></span>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align:right;"><span class="cred1">*</span> 收货地址： </td>
                            <td style="text-align:left;"><input type="text" name="address" value="" class="inputall input400"> <span class="stats1" id="address">收货地址必须添写详细</span></td>
                        </tr>
                        <tr>
                            <td style="text-align:right;"><span class="cred1">*</span> 收货姓名： </td>
                            <td style="text-align:left;"><input type="text" name="tname" value="" class="inputall input150"> <span class="stats1" id="tname">收货人不能为空</span></td>
                        </tr>
                        <tr>
                            <td style="text-align:right;"><span class="cred1">*</span> 联系电话： </td>
                            <td style="text-align:left;"><input type="text" name="phone" value="" class="inputall input150"> <span class="stats1" id="phone">联系电话确保准确无误</span></td>
                        </tr>
                        <tr>
                            <td style="text-align:right;">用户留言： </td>
                            <td style="text-align:left;"><textarea class="inputtext" name="content" style="width:400px;height:80px"></textarea></td>
                        </tr>
                        <tr>
                            <td style="text-align:right;"></td>
                            <td style="text-align:left;">
                                <input type="submit" name="do_submit" class="btn_05" value="提交订单" style="margin:0"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" src="../app/views/public/js/shengshi.js"></script>
<script type="text/javascript">
    //改变购物车中的商品数量
    function cart_num(product_id,name) {

        $.getJSON("/order/cartnum", {"pid":product_id,"pnum":$(":input[name='"+name+"']").val()}, function(json){
            if (json.result) {
                $("#order_productmoney").html(json.money.order_productmoney);
                $("#order_wlmoney").html(json.money.order_wlmoney);
                $("#order_money").html(json.money.order_money);
            }
        })
    }

    function cart_del(product_id) {
        if (confirm('您确认要删除该商品吗?') == false) {
            return;
        }
        $.getJSON("/order/cartnum", {"pid":product_id,"pnum":0}, function(json){
            if (json.result) {
                $("#"+product_id).remove();
                $("#order_productmoney").html(json.money.order_productmoney);
                $("#order_wlmoney").html(json.money.order_wlmoney);
                $("#order_money").html(json.money.order_money);
            }
        })
    }


    $(function(){
        $("input[name='payway']").click(function(){
            $(this).parents("table").find("tr").removeClass('sel');
            $(this).parents("tr").addClass('sel');
        })
        $("input[name='payway']").each(function(){
            if ($(this).is(":checked")) $(this).parents("tr").addClass('sel');
        })
    })

    shengshi_init({"pval":"北京市","cval":"北京市"});
</script>


<script type="text/javascript">
    var rclick=null;
    function notnull(val){
        return val.match(/^\S+$/) ? true : false;
    }


    //设置三种状态
    function setStats(objstr,mess,check) {
        obj = document.getElementsByName(objstr)[0];



        obj.onfocus=function(){
            cobj = document.getElementById(objstr);
            cobj.className="stats1";
            cobj.innerHTML=mess;

        }


        obj.onblur=function(){
            cobj = document.getElementById(objstr);
            info=check(this.value, mess);
            if(info[0]){
                cobj.className="stats2";
                cobj.innerHTML="输入正确";
            }else{
                cobj.className="stats3";
                cobj.innerHTML=info[1];

            }
        }

        if(rclick=='click')
            obj.onblur();

    }
    //加载时用
    window.onload=validate;
    //点注册时使用
    function validate(click){
        if(click)
            rclick=click;

        var fg=true;


        setStats("address", '收货地址必须添写详细',function(val, mess){
            var info=[false, mess];
            if(notnull(val) && val.length >=8 ){
                info[0]=true;
            }else{
                fg=false;
            }

            return info;

        });

        setStats("tname",'收货人名称不对!', function(val, mess){
            var info=[false, mess];
            if(notnull(val) && val.length >=2 && val.length <=6 ){
                info[0]=true;
            }else{
                fg=false;
            }
            return info;
        });



        setStats("phone", '联系电话确保准确无误!', function(val, mess){
            var info=[false, mess];

            if(val.match(/(\(\d{3,4}\)|\d{3,4}-|\s)?\d{7,14}/)){
                info[0]=true;
            }else{
                fg=false;
            }
            return info;
        });

        if(click=='click')
            return fg;
    }
</script>


<!-- footer -->
<div class="clear"></div>
<div class="ad980">
    <a href="https://www.eduwork.cn" target="_blank">
        <img src="../uploads/ad/2020-0820-5f3dfe4eea645.png" width="980" height="80"/>
    </a>
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
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=779050720&site=qq&menu=yes">
                        <img border="0" src="http://wpa.qq.com/pa?p=2:779050720:41" alt="点击这里给我发消息" title="点击这里给我发消息">
                    </a>
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=779050720&site=qq&menu=yes">
                        <img border="0" src="http://wpa.qq.com/pa?p=2:779050720:41" alt="点击这里给我发消息" title="点击这里给我发消息">
                    </a>
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=779050720&site=qq&menu=yes">
                        <img border="0" src="http://wpa.qq.com/pa?p=2:779050720:41" alt="点击这里给我发消息" title="点击这里给我发消息">
                    </a>
                </p>
                <p class="tel_num">400-700-1388</p>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="flink">
        <span class="strong">友情链接：</span>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
        <a href="https://www.eduwork.cn" title="融职教育" target="_blank">融职教育</a>
    </div>
    <div class="subnav">
        Copyright <span class="num">&copy;</span>
        学习猿地 2018-2021 All Rights Reserved
        京ICP备1101010121号
        京公网安备121231212121　
        <p>
            咨询热线：400-700-1388　
            咨询QQ：779050720,46458494,3154661999　
        </p>
        <p>
            Powered by
            <a href="http://www.eduwork.cn" target="_blank" title="EWShop商城系统v1.0" class="cgreen">EDUWORK</a>
        </p>
    </div>


</div>


<script type="text/javascript" src="../app/views/public/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="../app/views/public/js/jquery.slide.js"></script>
<script type="text/javascript">
    $(function () {
        $("img").lazyload({
            effect: "fadeIn",
            container: $("body")
        });
        $("#jdtslide").KinSlideshow({
            moveStyle: "left",
            intervalTime: 5,
            mouseEvent: "mouseover",
            titleBar: {"titleBar_bgColor": ""},
            titleFont: {TitleFont_size: 14, TitleFont_color: "#ffffff"}
        });
        $(".fenlei_li").hover(
            function () {
                $(".fenlei_li").find("h3 a").removeClass("sel");
                $(this).find("h3 a").addClass("sel");
                $(".fenlei_li").find("div").hide();
                $(this).find("div").show();
            },
            function () {
                $(".fenlei_li").find("h3 a").removeClass("sel");
                $(".fenlei_li").find("div").hide();
            }
        )
    })
</script>
</body>
</html>