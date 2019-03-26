<?php /*a:1:{s:76:"D:\myphp_www\PHPTutorial\WWW\shang\application\index\view\index\details.html";i:1553584564;}*/ ?>
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
        <title><?php echo htmlentities($detail['gt_name']); ?></title>

<meta name="keywords" content="<?php echo htmlentities($detail['gt_name']); ?>">
<meta name="description" content="<?php echo htmlentities($detail['gt_name']); ?>">

        <link rel="shortcut icon" href="http://mallcdn.baidu.com/static/2016033051016/favicon.ico" >
        <script src="/static/index/js/core.js"></script>

        <script>

        </script>

<link rel="stylesheet" href="/static/index/css/style.css">
<link rel="stylesheet" href="/static/index/css/product.css">

        <script>


        </script>
    </head>
    <script>
        alog('speed.set', 'ht', +new Date);
    </script>
    <body>
        <script>
            function mylogin(){
                window.location.href="<?php echo url('/admin/login/login'); ?>";
            }
            var GLOBAL_CONF = {"debug":false,"passport":{"host":"passport.baidu.com","tpl":"bdmall"},"site":{"siteId":7202944,"ucId":10914574}};
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
                <a href="javascript:;" class="J_regBtn" data-position-id="1000008">免费注册</a><span class="separate">|</span>

                <?php endif; ?>
                <a href="/home" target="_blank" data-position-id="1000005">个人中心</a><span class="separate">|</span>
                <a href="/cart/list" target="_blank" data-position-id="1000006"  onclick="mygouwu();return false"><i class="bag-icon f-icon"></i>购物袋（<span class="num">0</span>）</a>
            </div>
        </div>
    </div>
    <div id="header">

        <a class="logo" href="/" data-position-id="1000001">
            <img src="/static/index/img/mall_logo.png">
        </a>
<div class="search-box">
    <input type="text" class="search-text" placeholder="搜索你想要的" value="">
    <button class="search-btn">搜索</button>
    <ul class="search-suggest">
    </ul>
</div>

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

</div>

<script>



</script>

	<div class="product_container">


<div class="nav_position comWidth">
	<div class="nav" data-back-cat-id="16356">
        <?php if(is_array($spfu1) || $spfu1 instanceof \think\Collection || $spfu1 instanceof \think\Paginator): $i = 0; $__LIST__ = $spfu1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$spfu): $mod = ($i % 2 );++$i;?>
			<a class="lm" href="<?php echo url('index/lists',['id'=>$spfu['id']]); ?>" data-id="1398" data-type="2" data-position-id="3000012" onclick="myClick(<?php echo htmlentities($spfu['id']); ?>);return false"><?php echo htmlentities($spfu['name']); ?></a>

			<span>&gt;</span>
        <?php endforeach; endif; else: echo "" ;endif; ?>

	</div>



</div>

<div class="description_info comWidth">

	<div class="description clearfix">

		<div  id="mask"></div>
		<div id="big-show" class="comWidth">


    <div class="gallery-thumbs">

                    <div class="product-swiper-slide swiper-slide-active 0"  index="0">
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>">
                        <span class="icon-four-corner"></span>
                    </div>
                    <div class="product-swiper-slide 1"   index="1">
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>">
                        <span class="icon-four-corner"></span>
                    </div>
                    <div class="product-swiper-slide 2"   index="2">
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>">
                        <span class="icon-four-corner"></span>
                    </div>
                    <div class="product-swiper-slide 3"   index="3">
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>">
                        <span class="icon-four-corner"></span>
                    </div>
    </div>

    <div class="gallery-top product-swiper-container">
        <div class="product-swiper-wrapper">

                    <a class="product-swiper-slide 0 swiper-slide-active" >
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>">
                    </a>

                    <a class="product-swiper-slide 1" >
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>">
                    </a>

                    <a class="product-swiper-slide 2" >
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>">
                    </a>

                    <a class="product-swiper-slide 3" >
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>">
                    </a>


        </div>




    </div>

        <div class="swiper-arrow arrow-next icon-arrow-right"></div>
        <div class="swiper-arrow arrow-prev icon-arrow-left"></div>
        <div class="mask-close icon-no"></div>








		</div>

		<div class="leftArea">



    <div class="product-swiper-container small-box gallery-top">
        <div id='float-box'></div>
        <div id="float-icon" class="icon-search"></div>

        <div class="product-swiper-wrapper">
                    <a class="product-swiper-slide 0 swiper-slide-active" >
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" data-srcmi="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>" >
                    </a>

                    <a class="product-swiper-slide 1" >
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" data-srcmi="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>" >
                    </a>

                    <a class="product-swiper-slide 2" >
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" data-srcmi="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>" >
                    </a>

                    <a class="product-swiper-slide 3" >
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" data-srcmi="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>" >
                    </a>


        </div>

    </div>


    <div class="des_smimg gallery-thumbs">
                    <div class="product-swiper-slide swiper-slide-active 0"  index="0">
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>" >
                        <span class="icon-four-corner"></span>
                    </div>
                    <div class="product-swiper-slide 1" index="1">
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>" >
                        <span class="icon-four-corner"></span>
                    </div>
                    <div class="product-swiper-slide 2" index="2">
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>" >
                        <span class="icon-four-corner"></span>
                    </div>
                    <div class="product-swiper-slide 3" index="3">
                                <img src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="<?php echo htmlentities($detail['gt_name']); ?>" >
                        <span class="icon-four-corner"></span>
                    </div>
    </div>










		<div class="share_set">
			<ul class="share_addition clearfix">
				<li>
					<div class="share_btn">
						<span class="share_icon icon-share"></span>
						<span class="share_des">分享</span>
					</div>
					<div id="bdshare-contain">
						<div class="bdsharebuttonbox" id="bdshare-box">
							<a href="#" class="bds_tsina icon-micro-blog" data-cmd="tsina" title="分享到新浪微博"></a>
							<a href="#" class="bds_tqq icon-tm-blog" data-cmd="tqq" title="分享到腾讯微博"></a>
							<a href="#" class="bds_douban icon-douban" data-cmd="douban" title="分享到豆瓣网"></a>
							<a href="#" class="bds_tieba icon-post-bar" data-cmd="tieba" title="分享到百度贴吧"></a>

						</div>
						<span class="big-tringle"></span>
						<span class="small-tringle"></span>
					</div>
				</li>
				<li>
					<a class="mark_btn">
						<span class="mark_icon icon-unfavorite2"></span>
						<span class="mark_icon icon-favorite"></span>
						<span class="mark_des">收藏</span>
					</a>
				</li>
			</ul>

		</div>



		</div>

		<div class="rightArea">
			<div class="des_content">

				<h1 class="des_content_tit" data-id="17170"><?php echo htmlentities($detail['gt_name']); ?></h1>
				<p class="des_content_subtit"><?php echo htmlentities($detail['gt_name']); ?></p>




					<div class="des_position">
						<div class="dl_position">
<dl class="clearfix price">
    <dt class="price_title" >价格</dt>
        <dd class="clearfix">
        <span class="price_yuan">￥</span>
        <span class="price_int"><?php echo htmlentities($detail['gt_curprice']); ?></span>
        <span class="price_des">.00</span>
        <span class="price_cut_icon">4.6折</span>
        <span class="price_cut_yuan">￥</span>
        <span class="price_cut_money"><?php echo htmlentities($detail['gt_oriprice']); ?></span>
    </dd>
</dl>
						</div>
					</div>

					<div class="des_down">
						<dl class="clearfix product-comment">
							<dt>商品评价</dt>
							<dd>
								<div class="score-star score-star-"></div>
							</dd>
						</dl>

						<dl class="clearfix delivery-panel" >
							<dt class="delivery">运费</dt>

<dd>
	<div class="postAge">
		<span class="deliveryAdd" title="浙江杭州">浙江杭州</span>
		<span>&nbsp;&nbsp;至</span>
		<span class="addr_tri">
			<span class="addr_tri_1" id="inputTest">选择收货地址</span>

			<i class="addr_icon icon-arrow-down4" id="inputIcon" ></i>

		</span>
		<div class="postAge-info">
				<span></span>
		</div>
	</div>
</dd>



	            		</dl>


		            			<dl class="clearfix para para0" >


										<dt class="para-select" data-pid="28"><span>颜色</span></dt>
									<dd class="clearfix ">
										<div class="para-dd">

												<div class="des_item " title="红印花" data-pid="28" data-vid="红印花" data-srcsi="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" data-srcmi="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" data-srcli="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" >
															<img class="color-img" title="红印花" src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="红印花"></img>

												</div>

										<div>
									</dd>
								</dl>

		            			<dl class="clearfix para para1" >


										<dt class="small-para-select" data-pid="41998"><span>尺码</span></dt>
									<dd class="clearfix ">
										<div class="para-dd">

											<div class="des_item des_item_sm " data-pid="41998" data-vid="2059"><span>S</span>
											</div>


											<div class="des_item des_item_sm " data-pid="41998" data-vid="2054"><span>M</span>
											</div>


											<div class="des_item des_item_sm " data-pid="41998" data-vid="2053"><span>L</span>
											</div>


											<div class="des_item des_item_sm " data-pid="41998" data-vid="18763"><span>XL</span>
											</div>


											<div class="des_item des_item_sm " data-pid="41998" data-vid="18764"><span>XXL</span>
											</div>

										<div>
									</dd>
								</dl>

					</div>

					<div class="book_up">
						<div class="des_input">
							<input type="text" id="des_num_text" value="1">
						</div>

						<div class="des_number">
							<div class="plus unselectable" unselectable="on">+</div>
							<hr/>
							<div class="reduction disable unselectable" unselectable="on">-</div>
						</div>
					</div>

					<div class="shop_buy">

						<a href="javascript:;" class="shopping_btn " data-position-id="3000017" onclick="mygouwu();return false;">立即购买</a>
                        <?php if(app('session')->get('admin_id')!=0): ?>
                        <a href="javascript:;" class="buy_btn "  onclick="mygouwu2(<?php echo htmlentities($detail['id']); ?>,<?php echo htmlentities(app('session')->get('admin_id')); ?>);return false;"><span class="buy_icon icon-shopping"></span><span class="buy_des">加入购物袋</span></a>
                        <?php else: ?>
                        <a href="javascript:;" class="buy_btn "  onclick="mygouwu3();return false;"><span class="buy_icon icon-shopping"></span><span class="buy_des">加入购物袋</span></a>
                        <?php endif; ?>

					</div>
					<div class="kc">
						<span>
						<span id="skuStock" class="hard_kc" data-value="2">仅剩2件</span>
						</span>
					</div>

					<div class="addition">
						<ul class="des_addition clearfix">
            <li>
                <a class="guarantee-option seven_days_return_btn" href="/footer/helpCenter/serviceGuarantee/seventDayReturn" target="_blank">
                    <i class="seven_days_return_icon icon-seven-day"></i>
                    <span class="seven_days_return_des content">七天无理由退换货</span>
                    <span class="desc tip">七天无理由退换货</span>
                    <span class="desc">所售商品支持“七天无理由退货”</span>
                </a>
            </li>

						</ul>
					</div>

			</div>
		</div>
		<div class="comWidth big-box-contain">
		    <div id="big-box">

		                        <img class="big-img big-img-show" data-id="0" src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" data-srcli="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="http://ipcmm.baidu.com/media/v1/0f000c3ljVpN6Tln0s9nf0.jpg">
		                        <img class="big-img" data-id="1" src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" data-srcli="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>">
		                        <img class="big-img" data-id="2" src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" data-srcli="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>">
		                        <img class="big-img" data-id="3" src="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" data-srcli="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>" alt="/uploads/<?php echo htmlentities($detail['gt_imagepath']); ?>">
		    </div>

		</div>
	</div>
</div>
        <script>
            function mygouwu2(id,admin_id){

                $.ajax({
                    type:"POST",
                    url:"<?php echo url('index/user/gouwuche'); ?>",
                    data: {
                        id:id,
                        admin_id:admin_id,
                    },//数据传到PHP文件

                    dataType:"json",
                    success: function(data){
                        alert(data);


                    },
                    error:function(jqXHR){

                        alert("错误:"+jqXHR.message);}
            })}
            function mygouwu(){
                window.location.href="<?php echo url('/index/user/gouwuche2'); ?>";
            }
            function mygouwu3(){
                alert('请登录')
                window.location.href="<?php echo url('/admin/login/login'); ?>";
            }
            function myclear(){
                window.location.href="<?php echo url('index/login_clear'); ?>";
            }


        </script>
<div class="des_info comWidth clearfix">
	<div class="leftArea">
	</div>

	<div class="centerArea">
		<div class="product_detail_tit clearfix">
			<h3 class="product-detail-tab active" data-target="detail_wraper">商品详情</h3>
			<h3 class="product-comment-tab" data-target="product-comment-wrapper">商品评价</h3>
		</div>

		<div class="product-comment-wrapper tab-content-wrapper">
<div class="widget-loading">
    <span class="content">
        <img src="/static/index/img/loading.gif">
        <span class="text">正在加载，请稍后…</span>
    </span>
</div>
		</div>


		<div class="clearfix detail_wraper tab-content-wrapper">
			<div class="clearfix detail_set" >
				<ul id="">
						<li title="<?php echo htmlentities($detail['gt_number']); ?>">
                            商品编号:<?php echo htmlentities($detail['gt_number']); ?>
						</li>
						<li title="<?php echo htmlentities($detail['gt_barcode']); ?>">
                            条形码：<?php echo htmlentities($detail['gt_barcode']); ?>
						</li>

				</ul>
			</div>

		</div>


	</div>
</div>
<div id="idStorage" data-shopid="297" data-userid="0" data-price="529.00" data-itemid="17170" data-skuid="94336" data-selectnum="1" data-skutype="0">
</div>



<script>
	var transSkuList = [{"imageId":89558,"infos":[{"pid":41998,"vid":2059},{"pid":28,"vname":"红印花"}],"itemId":17170,"outerId":"65341051007921","skuId":94336,"upc":"0","volume":0,"weight":0},{"imageId":89558,"infos":[{"pid":41998,"vid":2054},{"pid":28,"vname":"红印花"}],"itemId":17170,"outerId":"65341051007922","skuId":94337,"upc":"0","volume":0,"weight":0},{"imageId":89558,"infos":[{"pid":41998,"vid":2053},{"pid":28,"vname":"红印花"}],"itemId":17170,"outerId":"65341051007923","skuId":94338,"upc":"0","volume":0,"weight":0},{"imageId":89558,"infos":[{"pid":41998,"vid":18763},{"pid":28,"vname":"红印花"}],"itemId":17170,"outerId":"65341051007924","skuId":94339,"upc":"0","volume":0,"weight":0},{"imageId":89558,"infos":[{"pid":41998,"vid":18764},{"pid":28,"vname":"红印花"}],"itemId":17170,"outerId":"65341051007925","skuId":94340,"upc":"0","volume":0,"weight":0}];
</script>



<script>
    require(['product/toolbar']);
</script>


	</div>



<script type="text/javascript" src="/static/index/js/cookie.js"></script>
<script type="text/javascript" src="/static/index/js/md5.js"></script>
<script type="text/javascript" src="/static/index/js/toolbar.js"></script>
<script type="text/javascript" src="/static/index/js/header.js"></script>
<script type="text/javascript" src="/static/index/js/product.js"></script>
<script type="text/javascript" src="/static/index/js/etpl.js"></script>
<script type="text/javascript" src="/static/index/js/alog.min.js"></script>
<script>
    function zhuce(){
        window.location.href="<?php echo url('/admin/login/login'); ?>";
    }
$(function () {
    require(['product/product']);

})
</script>

    </body>
</html>
