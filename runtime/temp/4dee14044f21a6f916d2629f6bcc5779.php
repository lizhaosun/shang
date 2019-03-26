<?php /*a:1:{s:74:"D:\myphp_www\PHPTutorial\WWW\shang\application\index\view\index\lists.html";i:1553584564;}*/ ?>
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
    <title>服装服饰-女装-百度MALL
    </title>
    <script>

    </script>
    <meta name="keywords" content="服装服饰、女装、报价、促销、新闻、评论、导购、图片">
    <meta name="description" content="百度MALL是国内最专业的 服装服饰、女装 网上购物商城，提供服装服饰、女装的最新报价、促销、评论、导购、图片等相关信息">
    <script src="/static/index/js/core.js"></script>
    <link rel="stylesheet" href="/static/index/css/goodslist.css">
</head>
<script>

</script>
<body>
<script>
    function mygouwu(){
        window.location.href="<?php echo url('/index/user/gouwuche2'); ?>";
    }
    var GLOBAL_CONF = {"debug":true,"passport":{"host":"passport.baidu.com","tpl":"bdmall"},"site":{"siteId":7202944,"ucId":10914574}};
</script>

<div id="common-header" class="normal-header">
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
                <a href="javascript:;" class="J_regBtn" data-position-id="1000008" onclick="myzhuce();return false">免费注册</a><span class="separate">|</span>

                </span>

                <?php endif; ?>
                <a href="/home" target="_blank" data-position-id="1000005">个人中心</a><span class="separate">|</span>
                <a href="/cart/list" target="_blank" data-position-id="1000006"  onclick="mygouwu();return false"><i class="bag-icon f-icon"></i>购物袋（<span class="num">0</span>）</a>
            </div>
        </div>
    </div>
    <div id="header">
        <div >

        </div>

        <a class="logo" href="/" data-position-id="1000001">
            <img src="/static/index/img/mall_logo.png">
        </a>
        <form action="<?php echo url('index/lists'); ?>" method="get" onsubmit="true">
            <input style="display:none"/>
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
    <div id="">

</div>
</div>
<script>
    function mylogin(){
        window.location.href="<?php echo url('/admin/login/login'); ?>";
    }
    function myindex(){
        window.location.href="<?php echo url('index'); ?>";
    }

    function myzhuce(){
        window.location.href="<?php echo url('zhuce'); ?>";
    }

function myclear(){
    window.location.href="<?php echo url('index/login_clear'); ?>";
}


</script>

<div class="goods-list-container">

    <div class="nav-bar">
        <div class="total-goods">共<span class="num"><?php echo htmlentities($cout1); ?></span>件商品</div>

        <div class="nav_position comWidth">

            <div class="nav">
                <?php if(is_array($spfu1) || $spfu1 instanceof \think\Collection || $spfu1 instanceof \think\Paginator): $i = 0; $__LIST__ = $spfu1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$spfu): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('index/lists',['id'=>$spfu['id']]); ?>" class="sm" data-id="1398" data-position-id="" onclick="myClick(<?php echo htmlentities($spfu['id']); ?>);return false"><?php echo htmlentities($spfu['name']); ?></a>
                <span class="icon-arrow-right2"></span>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>

    </div>

    <div>
        <div class="main-content">

            <div class="store-sinfo" data-sid="18061262886301460904652522302" data-exp-infos=""></div>
            <div class="product-filter">
                <div class="product-filter-content">

                    <div class="product-attr-filter">

                        <div class="product-attr-content">
                            <!-- 类目 -->

                            <!-- 已选择 -->

                            <!-- 筛选属性 -->
                            <div class="filter-content">
                                <ul class="categoty-wrapper">
                                    <?php if(is_array($sou0) || $sou0 instanceof \think\Collection || $sou0 instanceof \think\Paginator): $i = 0; $__LIST__ = $sou0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sou): $mod = ($i % 2 );++$i;?>
                                    <li class="filter-item attribute-item" data-id="43246">
                                        <div class="filter-item-container">
                                            <div class="filter-item-wrapper">
                                                <h3><?php echo htmlentities($sou['name']); ?></h3>
                                                <a href="javascript:void(0)" class="multiply"><i class="icon-plus"></i>多选</a>
                                                <a href="javascript:void(0)" class="more stretch">更多<i class="icon-arrow-down2"></i></a>
                                                <a href="javascript:void(0)" class="more shrink">收起<i class="icon-arrow-up2"></i></a>

                                                <!--                     价格特殊处理 -->
                                                <div class="sub-category">
                                                    <?php if(is_array($sou['chlid1']) || $sou['chlid1'] instanceof \think\Collection || $sou['chlid1'] instanceof \think\Paginator): $i = 0; $__LIST__ = $sou['chlid1'];if( count($__LIST__)==0 ) : echo "没有内容" ;else: foreach($__LIST__ as $key=>$chlid1): $mod = ($i % 2 );++$i;?>
                                                    <a class="filter-element" data-pid="43246" data-vid="11071" onclick="myClick(<?php echo htmlentities($chlid1['id']); ?>);return false" class="category-item" href="javascript:void(0)"><?php echo htmlentities($chlid1['name']); ?></a>
                                                    <?php endforeach; endif; else: echo "没有内容" ;endif; ?>
                                                </div>
                                                <div class="btn-bar">
                                        <span>
                                        <a href="javascript:" class="btn confirm">确定</a>
                                        <a href="javascript:" class="btn cancle">取消</a>
                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="shop-product-list" data-count="3027">
                <ul class="product-list">
                    <?php if(is_array($deail1) || $deail1 instanceof \think\Collection || $deail1 instanceof \think\Paginator): $i = 0; $__LIST__ = $deail1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$deail11): $mod = ($i % 2 );++$i;?>
                    <li class="product-item product-item0" data-id="<?php echo htmlentities($deail11['gt_tid']); ?>" data-skuid="<?php echo htmlentities($deail11['gt_tpid']); ?>" data-position-id="4000020">
                        <div class="product-wrapper">

                            <div class="img-container">
                                <img class="cover-img" src="/uploads/<?php echo htmlentities($deail11['gt_imagepath']); ?>" data-title="<?php echo htmlentities($deail11['gt_name']); ?>" onclick="mydeail(<?php echo htmlentities($deail11['id']); ?>);return false">
                            </div>
                            <div class="small-img-list  no-padding ">
                                <div class="banner">
                                    <div class="swiper-container">

                                        <div class="swiper-wrapper">

                                            <div class="swiper-slide">
                                                <a href="javascript:void(0)" onclick="mydeail(<?php echo htmlentities($deail11['id']); ?>);return false" target="_blank">
                                                    <img data-origin="/uploads/<?php echo htmlentities($deail11['gt_imagepath']); ?>" src="/uploads/<?php echo htmlentities($deail11['gt_imagepath']); ?>" class="swiper-lazy" alt="">
                                                </a>
                                                <a href="javascript:void(0)" onclick="mydeail(<?php echo htmlentities($deail11['id']); ?>);return false" target="_blank">
                                                    <img data-origin="/uploads/<?php echo htmlentities($deail11['gt_imagepath']); ?>" src="/uploads/<?php echo htmlentities($deail11['gt_imagepath']); ?>" class="swiper-lazy" alt="">
                                                </a>
                                                <a href="javascript:void(0)" onclick="mydeail(<?php echo htmlentities($deail11['id']); ?>);return false" target="_blank">
                                                    <img data-origin="/uploads/<?php echo htmlentities($deail11['gt_imagepath']); ?>" src="/uploads/<?php echo htmlentities($deail11['gt_imagepath']); ?>" class="swiper-lazy" alt="">
                                                </a>
                                                <a href="javascript:void(0)" onclick="mydeail(<?php echo htmlentities($deail11['id']); ?>);return false" target="_blank">
                                                    <img data-origin="/uploads/<?php echo htmlentities($deail11['gt_imagepath']); ?>" src="/uploads/<?php echo htmlentities($deail11['gt_imagepath']); ?>" class="swiper-lazy" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="context">
                                <h3 class="price">

                                    <sub>￥</sub><?php echo htmlentities($deail11['gt_curprice']); ?>
                                </h3>
                                <a class="title" onclick="mydeail(<?php echo htmlentities($deail11['id']); ?>);return false" alt="<?php echo htmlentities($deail11['gt_name']); ?>" title="<?php echo htmlentities($deail11['gt_name']); ?>" data-position-id="4000020"><?php echo htmlentities($deail11['gt_name']); ?></a>
                                <p class="shop-name" alt="<?php echo htmlentities(getUserName($deail11['gt_tpid'])); ?>" title="<?php echo htmlentities(getUserName($deail11['gt_tpid'])); ?>" data-id="297" data-position-id="4000021">
                                    <a onclick="mydeail(<?php echo htmlentities($deail11['id']); ?>);return false" target="_blank" data-position-id="4000021"><?php echo htmlentities(getUserName($deail11['gt_tpid'])); ?></a>
                                </p>
                            </div>

                            <!--             <i class="icon-favorite"></i>
<button class="btn-add">加入购物车</button> -->

                        </div>

                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>


                </ul>
            </div>

            <?php echo $deail1; ?>


        </div>
        <style>
            /*分页*/
            .pagination {}
            .pagination li {display: inline-block;margin-right: -1px;padding: 5px;border: 1px solid #e2e2e2;min-width: 20px;text-align: center;}
            .pagination li.active {background: #009688;color: #fff;border: 1px solid #009688;}
            .pagination li a {display: block;text-align: center;}
        </style>

        <div class="left-aside">

            <div class="aside-menu" id="shop_list">
                <h3 class="tit">所有分类</h3>
                <ul id="accordion" class="accordion">
                    <?php if(is_array($listsList) || $listsList instanceof \think\Collection || $listsList instanceof \think\Paginator): $i = 0; $__LIST__ = $listsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$listlist): $mod = ($i % 2 );++$i;?>
                    <li>

                        <div data-id="<?php echo htmlentities($listlist['id']); ?>" class="link floor0" title="<?php echo htmlentities($listlist['name']); ?>" alt="<?php echo htmlentities($listlist['name']); ?>">

                            <i class="icon-fold icon-plus"></i>
                            <i class="icon-fold icon-minus"></i>

                            <!-- 更多 -->

                            <a class="cat-node" data-id="<?php echo htmlentities($listlist['id']); ?>" title="<?php echo htmlentities($listlist['name']); ?>" alt="<?php echo htmlentities($listlist['name']); ?>" onclick="myClick(<?php echo htmlentities($listlist['id']); ?>);return false"><?php echo htmlentities($listlist['name']); ?></a>

                        </div>
                        <ul class="submenu">
                            <?php if(is_array($listlist['chlid2']) || $listlist['chlid2'] instanceof \think\Collection || $listlist['chlid2'] instanceof \think\Paginator): $i = 0; $__LIST__ = $listlist['chlid2'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chlid2): $mod = ($i % 2 );++$i;?>
                            <li>

                                <div data-id="<?php echo htmlentities($chlid2['id']); ?>" class="link floor1" title="<?php echo htmlentities($chlid2['name']); ?>" alt="<?php echo htmlentities($chlid2['name']); ?>">

                                    <i class="icon-fold icon-plus"></i>
                                    <i class="icon-fold icon-minus"></i>

                                    <!-- 更多 -->

                                    <a class="cat-node" data-id="<?php echo htmlentities($chlid2['id']); ?>" title="<?php echo htmlentities($chlid2['name']); ?>" alt="<?php echo htmlentities($chlid2['name']); ?>" onclick="myClick(<?php echo htmlentities($chlid2['id']); ?>);return false"><?php echo htmlentities($chlid2['name']); ?></a>

                                </div>

                                <ul class="submenu">
                                    <?php if(is_array($chlid2['chlid3']) || $chlid2['chlid3'] instanceof \think\Collection || $chlid2['chlid3'] instanceof \think\Paginator): $i = 0; $__LIST__ = $chlid2['chlid3'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chlid3): $mod = ($i % 2 );++$i;?>
                                    <li>

                                        <div data-id="<?php echo htmlentities($chlid3['id']); ?>" class="link floor2" title="<?php echo htmlentities($chlid3['name']); ?>" alt="<?php echo htmlentities($chlid3['name']); ?>">
                                            <i class="icon-fold icon-plus"></i>
                                            <i class="icon-fold icon-minus"></i>
                                            <!-- 更多 -->
                                            <a class="cat-node" data-id="<?php echo htmlentities($chlid3['id']); ?>" title="<?php echo htmlentities($chlid3['name']); ?>" alt="<?php echo htmlentities($chlid3['name']); ?>" onclick="myClick(<?php echo htmlentities($chlid3['id']); ?>);return false"><?php echo htmlentities($chlid3['name']); ?></a>

                                        </div>
                                        <ul class="submenu">
                                            <?php if(is_array($chlid3['chlid4']) || $chlid3['chlid4'] instanceof \think\Collection || $chlid3['chlid4'] instanceof \think\Paginator): $i = 0; $__LIST__ = $chlid3['chlid4'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$chlid4): $mod = ($i % 2 );++$i;?>
                                            <li>

                                                <div data-id="<?php echo htmlentities($chlid3['id']); ?>" class="link floor3" title="<?php echo htmlentities($chlid3['name']); ?>" alt="<?php echo htmlentities($chlid3['name']); ?>">

                                                    <i class="icon-fold"></i>

                                                    <!-- 更多 -->

                                                    <a class="cat-node" data-id="<?php echo htmlentities($chlid3['id']); ?>" title="<?php echo htmlentities($chlid3['name']); ?>" alt="<?php echo htmlentities($chlid3['name']); ?>" onclick="myClick(<?php echo htmlentities($chlid3['id']); ?>);return false"><?php echo htmlentities($chlid3['name']); ?></a>

                                                </div>
                                                <ul class="submenu">
                                                </ul>
                                            </li>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            <!-- 折叠按钮 -->
                                        </ul>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    <!-- 折叠按钮 -->
                                </ul>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <!-- 折叠按钮 -->
                        </ul>
                    </li>
<?php endforeach; endif; else: echo "" ;endif; ?>
                    <!-- 折叠按钮 -->
                </ul>
            </div>
            <!-- 每条类目 -->
            <div class="knowledge-container"></div>
        </div>
    </div>
    <div class="widget-tool-bar">
        <div class="widget-tool-item icon-feedback2 btn-feedback" title="意见反馈">
            <div class="desc btn-feedback">意见反馈</div>
        </div>
        <div class="widget-tool-item widget-backtop icon-arrow-up" title="回到顶部">
            <div class="desc">回到顶部</div>
        </div>
    </div>
    <script>

    </script>
</div>

<div id="assistant"></div>

<div id="footer">

    <ul class="helper">
        <li>
            <div class="helper-item">
                <i class="helper-icon icon-diamond"></i>
                <h3>臻选品牌 正品保障</h3>
            </div>
        </li>
        <li>
            <div class="helper-item">
                <i class="helper-icon icon-crown"></i>
                <h3>新款推荐 引领潮流</h3>
            </div>
        </li>
        <li>
            <div class="helper-item">
                <i class="helper-icon icon-lamp"></i>
                <h3>创意个性 特色特惠</h3>
            </div>
        </li>
        <li>
            <div class="helper-item">
                <i class="helper-icon icon-flower"></i>
                <h3>优质服务 无忧购物</h3>
            </div>
        </li>
    </ul>

    <div class="footer-link">
        <ul>
            <li>
                <h3 class="title">
                    <a >服务保障</a>
                </h3>
                <p><a href="/footer/helpCenter/qualitySafeguard" data-potition-id="1000039" target="_blank">正品保障</a></p>
                <p><a href="/footer/helpCenter/returnService" data-potition-id="1000039" target="_blank">七天无理由退换货</a></p>
                <p><a href="/footer/helpCenter/returnPolicy" data-potition-id="1000039" target="_blank">退货政策</a></p>
                <p><a href="/footer/helpCenter/returnProcess" data-potition-id="1000039" target="_blank">退货流程</a></p>
            </li>
            <li>
                <h3 class="title">
                    <a >购物指南</a>
                </h3>
                <p><a class="register" href="javascript:" data-potition-id="1000040" target="_blank">免费注册</a></p>
                <p><a href="/footer/helpCenter/shoppingProcess" data-potition-id="1000040" target="_blank">购物流程</a></p>
                <p><a href="/footer/helpCenter/accountManagement" data-potition-id="1000040" target="_blank">账户管理</a></p>
                <p><a href="/footer/helpCenter/distributionMode" data-potition-id="1000040" target="_blank">配送方式</a></p>
                <p><a href="/footer/helpCenter/shoppingGuide/shoppingStep" data-potition-id="1000040" target="_blank">用户帮助</a></p>
            </li>
            <li>
                <h3 class="title">
                    <a >支付方式</a>
                </h3>
                <p><a href="/footer/helpCenter/onlinePayment" data-potition-id="1000041" target="_blank">在线支付</a></p>
                <p><a href="https://www.baifubao.com/" data-potition-id="1000041" target="_blank">百度钱包</a></p>
            </li>
            <li>
                <h3 class="title">
                    <a>商家服务</a>
                </h3>
                <p><a href="http://mallzs.baidu.com/#/home" data-potition-id="1000042" target="_blank">商家入驻</a></p>
                <p><a href="/footer/ruleCenter/rule" data-potition-id="1000042" target="_blank">规则中心</a></p>
                <p><a href="/footer/helpCenter/merchantsSettled" data-potition-id="1000042" target="_blank">商家帮助</a></p>
            </li>
            <li class="footer-follow">
                <h1 class="footer-logo">
                    <img src="/static/index/img/logo_reverse.png">
                </h1>
                <p class="slogan">百度旗下电商，为您提供值得信赖的品质服务</p>
                <div class="follow">
                    <span class="text">关注我们</span>
                    <i class="icon-weixin-logo icon-wechat">
                        <span class="two-dimension-code"></span>
                    </i>
                    <a  target="_blank"  href="http://weibo.com/baidumall2015" class="icon-weibo-logo icon-micro-blog">
                    </a>
                    <a href="http://tieba.baidu.com/f?ie=utf-8&kw=百度MALL" class="icon-weibo-logo icon-tieba" target="_blank">
                    </a>
                </div>
                <div class="feedback">
                    <span class="text">意见反馈</span>
                    <i class="icon-feedback btn-feedback"></i>
                </div>
            </li>
        </ul>
    </div>

    <div class="footer-copyright">
        <div>
            <a class="cop" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP证030173号</a>
            <a class="cop" href="/footer/businessLicence" target="_blank">营业执照信息</a>
        </div>
        <p>©2015-2016 baidu.com版权所有</p>
    </div>
</div>

<script type="text/javascript" src="/static/index/js/backtop.js"></script>
<script type="text/javascript" src="/static/index/js/category.js"></script>

<script type="text/javascript" src="/static/index/js/header.js"></script>
<script type="text/javascript" src="/static/index/js/index.js"></script>
<script type="text/javascript" src="/static/index/js/etpl.js"></script>

<script>

    $(function () {
        require(['goodsList/category']);
    })
</script>
<script>

    function myClick(id){
            window.location.href="<?php echo url('index/lists'); ?>"+"?id="+id;
    }

    function mydeail(id){
        window.location.href="<?php echo url('index/details'); ?>"+"?id="+id;
    }
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
        page: 'MALL-list',
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

</script>
<script>

</script>
</body>
</html>
