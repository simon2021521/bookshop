<div class="clear"></div>
{% for v in ads %}
{% if v.position == 4 %}
<div class="ad980">
    {% if v.url is null %}
    <img src="{{res}}/ad/{{v.logo}}" width="980" height="80"/>
    {%else%}
    <a href="{{v.url}}" target="_blank">
        <img src="{{res}}/ad/{{v.logo}}" width="980" height="80"/>
    </a>
    {% endif %}
</div>
{% endif %}
{% endfor %}


<div class="foot">
    <div class="bottom_link">
        <div class="border_link">
            <div class="item_1 fl">
                <h3>用户指南</h3>
                <ul class="mat5">
                    <li><a href="/page/{{page[0].id}}" title="{{page[0].name}}">{{page[0].name}}</a></li>
                    <li><a href="/page/{{page[1].id}}" title="{{page[1].name}}">{{page[1].name}}</a></li>
                    <li><a href="/page/{{page[2].id}}" title="{{page[2].name}}">{{page[2].name}}</a></li>
                </ul>
            </div>

            <div class="bottom_libg fl"></div>

            <div class="item_1 fl">
                <h3>配送方式</h3>
                <ul class="mat5">
                    <li><a href="/page/{{page[3].id}}" title="{{page[3].name}}">{{page[3].name}}</a></li>
                    <li><a href="/page/{{page[4].id}}" title="{{page[4].name}}">{{page[4].name}}</a></li>
                    <li><a href="/page/{{page[5].id}}" title="{{page[5].name}}">{{page[5].name}}</a></li>
                </ul>
            </div>

            <div class="bottom_libg fl"></div>

            <div class="item_1 fl">
                <h3>售后服务</h3>
                <ul class="mat5">
                    <li><a href="/page/{{page[6].id}}" title="{{page[6].name}}">{{page[6].name}}</a></li>
                    <li><a href="/page/{{page[7].id}}" title="{{page[7].name}}">{{page[7].name}}</a></li>
                    <li><a href="/page/{{page[8].id}}" title="{{page[8].name}}">{{page[8].name}}</a></li>
                </ul>
            </div>

            <div class="bottom_libg fl"></div>

            <div class="item_1 fl">
                <h3>关于我们</h3>
                <ul class="mat5">
                    <li><a href="/page/{{page[9].id}}" title="{{page[9].name}}">{{page[9].name}}</a></li>
                    <li><a href="/page/{{page[10].id}}" title="{{page[10].name}}">{{page[10].name}}</a></li>
                    <li><a href="/page/{{page[11].id}}" title="{{page[11].name}}">{{page[11].name}}</a></li>
                </ul>
            </div>

            <div class="bottom_libg fl"></div>


            <div class="foot_tel fl">
                <h3 class="c666">{{setting.web_title}}</h3>
                <p class="mat10">
                    {% for v in setting.web_qqs %}
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={{v}}&site=qq&menu=yes">
                        <img border="0" src="http://wpa.qq.com/pa?p=2:{{v}}:41" alt="点击这里给我发消息" title="点击这里给我发消息">
                    </a>
                    {% endfor %}
                </p>
                <p class="tel_num">{{setting.web_phone}}</p>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div class="flink">
        <span class="strong">友情链接：</span>
        {% for v in links %}
        <a href="{{v.url}}" title="{{v.name}}" target="_blank">{{v.name}}</a>
        {% endfor %}
    </div>
    <div class="subnav">
        Copyright <span class="num">&copy;</span>
        {{setting.web_copyright}} All Rights Reserved
        {{setting.web_icp}}
        <p>
            咨询热线：{{setting.web_phone}}
            咨询QQ：{{setting.web_qq}}　
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
