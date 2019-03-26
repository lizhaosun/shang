<?php /*a:1:{s:74:"D:\myphp_www\PHPTutorial\WWW\shang\application\index\view\index\index.html";i:1553584564;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="baidu-site-verification" content="ZEXvy8Xkma" />
    <link rel="dns-prefetch" href="//mallcmscdn.baidu.com">
    <link rel="dns-prefetch" href="//mallcdn.baidu.com">
    <link rel="dns-prefetch" href="//hm.baidu.com">
    <link rel="dns-prefetch" href="//bcscdn.baidu.com">
    <link rel="dns-prefetch" href="//bj.bcebos.com">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>百度MALL-全场正品，只为你臻选</title>
    <script>
        void function(g,f,j,c,h,d,b){g.alogObjectName=h,g[h]=g[h]||function(){(g[h].q=g[h].q||[]).push(arguments)},g[h].l=g[h].l||+new Date,d=f.createElement(j),d.async=!0,d.src=c,b=f.getElementsByTagName(j)[0],b.parentNode.insertBefore(d,b)}(window,document,"script","http://img.baidu.com/hunter/alog/alog.min.js","alog");void function(){function c(){return;}window.PDC={mark:function(a,b){alog("speed.set",a,b||+new Date);alog.fire&&alog.fire("mark")},init:function(a){alog("speed.set","options",a)},view_start:c,tti:c,page_ready:c}}();void function(n){var o=!1;n.onerror=function(n,e,t,c){var i=!0;return!e&&/^script error/i.test(n)&&(o?i=!1:o=!0),i&&alog("exception.send","exception",{msg:n,js:e,ln:t,col:c}),!1},alog("exception.on","catch",function(n){alog("exception.send","exception",{msg:n.msg,js:n.path,ln:n.ln,method:n.method,flag:"catch"})})}(window);
    </script>
    <meta name="description" content="百度MALL是百度旗下定位中高端的品质电商，定向邀请1000家国内外中高端知名品牌入驻，且只和品牌官方直接合作，确保100%正品行货。目标顾客是25-40岁，对品牌或高品质商品有追求的小资白领和中产家庭。">
    <meta name="keywords" content="百度MALL,品质电商,网上购物,网上商城">


    <script src="/static/index/js/core.js"></script>

    <script>
        require.config({
            'waitSeconds': 30,
            'baseUrl': 'http://mallcdn.baidu.com/static/2016033051016/js',
            'packages': [
                {
                    'name': 'echarts',
                    'location': '../dep/echarts/2.2.7/src',
                    'main': 'echarts'
                },
                {
                    'name': 'zrender',
                    'location': '../dep/zrender/2.1.1/src',
                    'main': 'zrender'
                }
            ]
        });
    </script>

    <link rel="stylesheet" href="/static/index/css/style.css">

    <script>
        var cr = Math.floor(Math.random() * 99999);
        var activityId = '';
        var pageId = '1' ? '1' : 0;
        var rtTag = $.stringifyJSON({
                "ecom_page": {
                    "page_type": "home"
                }
            }
        );

        // if (location.href.indexOf('mall.baidu.com') !== -1) {
        var _hmt = _hmt || [];
        var siteId = 'd64af1f3b8e241d56f0536501d4bfdd6';
        _hmt.push(['_setAccount', siteId]);
        _hmt.push(['_setAutoPageview', false]);

        if (rtTag) {
            _hmt.push(['_trackRTEvent', {
                data: $.parseJSON(rtTag)

            }]);

        }

        trackPageViewTJ(siteId, '1', '');
        if ('' !== '') {
            require(['common/md5'], function (md5) {
                var merchantSiteId = md5('');
                _hmt.push(['_setAccount', merchantSiteId]);
                _hmt.push(['_setAutoPageview', true]);
                deployBaiduTJ(merchantSiteId);
            });
            // }
        }

    </script>
</head>
<script>
    alog('speed.set', 'ht', +new Date);
</script>
<body>
<script>
    function myclear(){
        window.location.href="<?php echo url('index/login_clear'); ?>";
    }
    function mylogin(){
        window.location.href="<?php echo url('/admin/login/login'); ?>";
    }
    function mygouwu(){
        window.location.href="<?php echo url('/index/user/gouwuche2'); ?>";
    }
    var GLOBAL_CONF = {"debug":false,"passport":{"host":"passport.baidu.com","tpl":"bdmall"},"site":{"siteId":7202944,"ucId":10914574}};
</script>

<div class="home-container">

    <div id="common-header" class="normal-header0">
        <div class="mini-header-search">
            <div class="container">
                <div class="user-info">
                    <a href="/" target="_self" data-position-id="1000002">欢迎光临百度MALL</a><span class="separate">|</span>
                    <span class="common-login-info">
<?php if(app('session')->get('admin_id')>0): ?>
                <a href="javascript:;" class="J_loginBtn" data-position-id="1000007"><?php echo htmlentities(app('session')->get('admin_name')); ?></a><span class="separate">|</span>
                        </span>
                    <a href="javascript:;" target="_blank" data-position-id="1000005" onclick="myclear();return false">退出</a><span class="separate">|</span>

<?php else: ?>
                                        <a href="javascript:;" class="J_loginBtn" data-position-id="1000007" onclick="mylogin();return false">登录</a><span class="separate">|</span>
                <a href="javascript:;" class="J_regBtn" data-position-id="1000008">免费注册</a><span class="separate">|</span>



                    <?php endif; ?>
                    <a href="javascript:;" target="_blank" data-position-id="1000043">我的订单</a><span class="separate">|</span>
                    <a href="javascript:;" target="_blank" data-position-id="1000006"  onclick="mygouwu();return false"><i class="bag-icon f-icon"></i>购物袋（<span class="num">0</span>）</a>
                </div>
            </div>
        </div>
        <div id="header">

            <a class="logo" href="/" data-position-id="1000001">
                <img src="/static/index/img/mall_logo.png">
            </a>
            <form action="<?php echo url('index/lists'); ?>" method="get">
                <div class="search-box">
                    <input type="text" class="search-text" name="keywords" placeholder="搜索你想要的" value="">
                    <button type="submit" class="search-btn">搜索</button>
                    <ul class="search-suggest">
                    </ul>
                </div>
            </form>

            <dl class="widget-service-guarantee">
                <dd>
                    <i class="icon-guarantee22"></i>
                    <p>正品保障</p>
                </dd>
                <dd>
                    <i class="icon-certified"></i>
                    <p>品牌验真</p>
                </dd>
                <dd>
                    <i class="icon-compensation"></i>
                    <p>假一赔五</p>
                </dd>
            </dl>
        </div>
        <div class="nav-container">
            <div id="nav">
                <ul class="main-menu">
                    <li class="main-menu-item all-category with-sub-menu">
                        <a href="javascript:"><i class="ui-icon-category icon-category"></i>全部商品分类</a>

                        <div class="sub-menu-container">
                            <ul class="">

                                <?php if(is_array($goodsList) || $goodsList instanceof \think\Collection || $goodsList instanceof \think\Paginator): $i = 0; $__LIST__ = $goodsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodlist): $mod = ($i % 2 );++$i;?>
                                <li class="sub-menu-item">

                                    <h3><?php echo htmlentities($goodlist['name']); ?></h3>
                                    <div class="second-menu-wapper">
                                        <?php foreach($goodlist['chlid2'] as $chlid2): ?>
                                        <a href="<?php echo url('index/lists',['id'=>$chlid2['id']]); ?>" target="_blank" data-position-id="1000012"><?php echo htmlentities($chlid2['name']); ?></a>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="third-menu-container">
                                        <?php foreach($goodlist['chlid2'] as $chlid2): ?>
                                        <ul>
                                            <li>
                                                <h3 class="second-title"><a href="<?php echo url('index/lists',['id'=>$chlid2['id']]); ?>" target="_blank" data-position-id="1000012"><?php echo htmlentities($chlid2['name']); ?></a></h3>
                                                <div class="sub-item">
                                                    <?php if(is_array($chlid2['chlid3']) || $chlid2['chlid3'] instanceof \think\Collection || $chlid2['chlid3'] instanceof \think\Paginator): $i = 0; $__LIST__ = $chlid2['chlid3'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chlid3): $mod = ($i % 2 );++$i;?>
                                                    <a href="<?php echo url('index/lists',['id'=>$chlid3['id']]); ?>" target="_blank" data-position-id="1000012"><?php echo htmlentities($chlid3['name']); ?></a>

                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    &nbsp;
                                                </div>
                                            </li>
                                        </ul>
                                        <?php endforeach; ?>
                                    </div>

                                </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>

                            </ul>
                        </div>
                    </li>
                    <li class="main-menu-item"><a href="/" class="active" data-position-id="1000010">首页</a></li>
                    <!--                 <li class="main-menu-item"><a href="/" class="">臻选</a></li> -->
                    <!--                 <li class="main-menu-item"><a href="/flpurchase" class="" target="_blank">闪购</a></li> -->
                    <li class="main-menu-item"><a href="/brandStreet" class="" data-position-id="1000011">品牌街</a></li>
                </ul>

            </div>
        </div>
    </div>

    <script>

        $(document).ready(function(){
            require(['widget/header'], function (cart) {
                cart.init();
            });
        });

    </script>
    <div class="currentTime" data-time="1460904652379"></div>

    <div class="slide-banner-container">
        <div class="row show-grid slide-banner clearfix">
            <div class="col-lg-2">
            </div>

            <div class="col-lg-8 slider-controller">
                <i class="swiper-button-prev icon-arrow-left" ></i>
                <i class="swiper-button-next icon-arrow-right"></i>
                <div class="swiper-pagination swiper-pagination-white">
                    <span class="swiper-pagination-switch"></span>
                    <span class="swiper-pagination-switch"></span>
                    <span class="swiper-pagination-switch"></span>
                    <span class="swiper-pagination-switch"></span>
                </div>
            </div>

            <div class="col-lg-2 banner-small-img">

                <div class="banner-recomment" data-position-id="1000014">
                    <img src="/static/index/img/3de97f5becb06d1e2cf85673c352256c.png@q_90,f_png">
                    <dl class="content">
                        <dd>
                            <a class="" href="http://mall.baidu.com/promote?pageCode=RightFirst" target="_blank" alt="爆品热卖 限时抢" title="爆品热卖 限时抢">
                                爆品热卖 限时抢
                            </a>
                        </dd>
                        <dd>
                            <a class="" href="http://mall.baidu.com/shop?shopId=396" target="_blank" alt="欧莱雅新春钜惠 旅行装特卖" title="欧莱雅新春钜惠 旅行装特卖">
                                欧莱雅新春钜惠 旅行装特卖
                            </a>
                        </dd>
                        <dd>
                            <a class="" href="http://mall.baidu.com/shop?shopId=750" target="_blank" alt="汇源果汁低至19.9包邮特惠" title="汇源果汁低至19.9包邮特惠">
                                汇源果汁低至19.9包邮特惠
                            </a>
                        </dd>
                        <dd>
                            <a class="" href="http://mall.baidu.com/shop?shopId=219" target="_blank" alt="惠普星战系列游戏本8折优惠" title="惠普星战系列游戏本8折优惠">
                                惠普星战系列游戏本8折优惠
                            </a>
                        </dd>
                        <dd>
                            <a class="" href="http://mall.baidu.com/shop?shopId=344&tr=cp.32_pr.65032" target="_blank" alt="才子满1件送袜子2件送领带" title="才子满1件送袜子2件送领带">
                                才子满1件送袜子2件送领带
                            </a>
                        </dd>

                    </dl>
                </div>
                <a class="banner-recomment" href="http://mall.baidu.com/activity/latest" target="_blank">
                    <img src="/static/index/img/2730d9b8850f6d45f46a4b4d4df96259.jpg@q_90,f_webp">
                </a>

            </div>
        </div>

        <div class="main-slider">
            <div class="slider-item-container" style="background-color: #f6dbee">
                <div class="slider-img-container" data-color="#f6dbee">
                    <a href="http://mall.baidu.com/shop?shopId=563" target="_blank"  data-position-id="1000013">
                        <img src="/static/index/img/88bcf08d532b3fdd92f95305f2b04e19.jpg@q_90,f_webp">
                    </a>
                </div>
            </div>

            <div class="slider-item-container" style="background-color: #e8fbfa">
                <div class="slider-img-container" data-color="#e8fbfa">
                    <a href="http://mall.baidu.com/promote?pageCode=camel" target="_blank"  data-position-id="1000013">
                        <img src="/static/index/img/e20d646b43ac8c8a9170af3cb67eda29.jpg@q_90,f_webp">
                    </a>
                </div>
            </div>

            <div class="slider-item-container" style="background-color: #bf90b4">
                <div class="slider-img-container" data-color="#bf90b4">
                    <a href="http://mall.baidu.com/shop?shopId=740" target="_blank"  data-position-id="1000013">
                        <img src="/static/index/img/8402f3bb8af88204c7d8ed6eaef749d5.jpg@q_90,f_webp">
                    </a>
                </div>
            </div>

            <div class="slider-item-container" style="background-color: #000000">
                <div class="slider-img-container" data-color="#000000">
                    <a href="http://mall.baidu.com/shop?shopId=55&amp;tr=cp.32_pr.71157" target="_blank"  data-position-id="1000013">
                        <img src="/static/index/img/efcafd25439d88fce22360e572a16603.jpg@q_90,f_webp">
                    </a>
                </div>
            </div>

        </div>

    </div>
    <script>
        void function(e,t){for(var n=t.getElementsByTagName("img"),a=+new Date,i=[],o=function(){this.removeEventListener&&this.removeEventListener("load",o,!1),i.push({img:this,time:+new Date})},s=0;s<n.length;s++)!function(){var e=n[s];e.addEventListener?!e.complete&&e.addEventListener("load",o,!1):e.attachEvent&&e.attachEvent("onreadystatechange",function(){"complete"==e.readyState&&o.call(e,o)})}();alog("speed.set",{fsItems:i,fs:a})}(window,document);
    </script>
    <div class="main-container">



<script type="text/javascript" src="/static/index/js/header.js"></script>
<script type="text/javascript" src="/static/index/js/index.js"></script>
<script type="text/javascript" src="/static/index/js/etpl.js"></script>



<script>
    $(function () {
        require(['index']);
    })
</script>
<script>
    if ('' !== '') {
        require(['common/md5'], function (md5) {
            var merchantSiteId = md5('');
            clearBaiduTJ('', merchantSiteId);
        });
    }
</script>
<script>
    window.alogObjectConfig = {
        product: '682',
        page: 'MALL-index',
        speed: {
            sample: '1'
        },
        monkey: {
            sample: '1'
        },
        exception: {
            sample: '1'
        },
        feature: {
            sample: '1'
        }
    };
    void function(a,b,c,d,e,f){function g(b){a.attachEvent?a.attachEvent("onload",b,!1):a.addEventListener&&a.addEventListener("load",b)}function h(a,c,d){d=d||15;var e=new Date;e.setTime((new Date).getTime()+1e3*d),b.cookie=a+"="+escape(c)+";path=/;expires="+e.toGMTString()}function i(a){var c=b.cookie.match(new RegExp("(^| )"+a+"=([^;]*)(;|$)"));return null!=c?unescape(c[2]):null}function j(){var a=i("PMS_JT");if(a){h("PMS_JT","",-1);try{a=a.match(/{["']s["']:(\d+),["']r["']:["']([\s\S]+)["']}/),a=a&&a[1]&&a[2]?{s:parseInt(a[1]),r:a[2]}:{}}catch(c){a={}}a.r&&b.referrer.replace(/#.*/,"")!=a.r||alog("speed.set","wt",a.s)}}if(a.alogObjectConfig){var k=a.alogObjectConfig.sample,l=a.alogObjectConfig.rand;if("https:"===a.location.protocol){if(d="https://gss2.bdstatic.com/70cFsjip0QIZ8tyhnq"+d,!k||!l)return}else d="http://img.baidu.com"+d;k&&l&&l>k||(g(function(){alog("speed.set","lt",+new Date),e=b.createElement(c),e.async=!0,e.src=d+"?v="+~(new Date/864e5),f=b.getElementsByTagName(c)[0],f.parentNode.insertBefore(e,f)}),j())}}(window,document,"script","/hunter/alog/dp.min.js");
</script>
<script>
    alog('speed.set', 'drt', +new Date);
</script>
</body>
</html>
