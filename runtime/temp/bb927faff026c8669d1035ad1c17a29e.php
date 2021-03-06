<?php /*a:1:{s:80:"D:\myphp_www\PHPTutorial\WWW\shang\application\admin\view\index\product_add.html";i:1552650836;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>

<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />

<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<link href="/static/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page-container">
	<form action="<?php echo url('product_add_goods'); ?>" method="post" id="login" name="login" enctype="multipart/form-data" class="form form-horizontal" id="form-article-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>商品名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="gt_name" name="gt_name">
			</div>
		</div>
		<div class="row cl">

			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>
				分类级别：</label>
			<div class="formControls col-xs-6 col-sm-6">
				<span class="select-box">
				  <select class="select" size="1" name="gt_tid" id="gt_tid">

					  <?php if(is_array($productCategoryAdd) || $productCategoryAdd instanceof \think\Collection || $productCategoryAdd instanceof \think\Paginator): $i = 0; $__LIST__ = $productCategoryAdd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$PCA): $mod = ($i % 2 );++$i;?>
					<option name="" value="<?php echo htmlentities($PCA['id']); ?>,<?php echo htmlentities($PCA['pid']); ?>"><?php echo htmlentities($PCA['level']); ?>级分类&nbsp;<?php echo htmlentities($PCA['name']); ?></option>
					  <?php endforeach; endif; else: echo "" ;endif; ?>

				  </select>
				</span>

			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品的单位：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="gt_unit" id="gt_unit" placeholder="商品的单位" value="" class="input-text" style=" width:25%">
			</div>
		</div>
<!--		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品属性：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="0" placeholder="" id="gt_unit" name="gt_unit">
			</div>
		</div>-->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品属性：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="check-box">
					<input type="radio" name="gt_attributes" value="1" id="checkbox-1">
					<label for="checkbox-1">1.推荐</label>
				</div>
				<div class="check-box">
					<input type="radio" name="gt_attributes"   value="2" id="checkbox-2">
					<label for="checkbox-2">2.新上</label>
				</div>
				<div class="check-box">
					<input type="radio" name="gt_attributes"  value="3" id="checkbox-3">
					<label for="checkbox-3">3.热卖</label>
				</div>
				<div class="check-box">
				<input type="radio" name="gt_attributes"  value="4" id="checkbox-4">
				<label for="checkbox-4">4.促销</label>
			</div>
				<div class="check-box">
					<input type="radio" name="gt_attributes"  value="5" id="checkbox-5">
					<label for="checkbox-5">5.包邮</label>
				</div>
				<div class="check-box">
				<input type="radio" name="gt_attributes"  value="6" id="checkbox-6">
				<label for="checkbox-6">6.限时</label>
			</div>
				<div class="check-box">
					<input type="radio" name="gt_attributes"  value="7" id="checkbox-7">
					<label for="checkbox-7">7.不参与会员折扣</label>
				</div>

			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品编号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="gt_number" id="gt_number" placeholder="商品编号" value="" class="input-text" style=" width:25%">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">条形码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="gt_barcode" id="gt_barcode" placeholder="条形码" value="" class="input-text" style=" width:25%">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">现价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="gt_curprice" id="gt_curprice" placeholder="现价" value="" class="input-text" style=" width:25%">&nbsp;&nbsp;元
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">市场价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="gt_oriprice" id="gt_oriprice" placeholder="市场价" value="" class="input-text" style=" width:25%">&nbsp;&nbsp;元
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">成本价：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="gt_cosprice" id="gt_cosprice" placeholder="成本价" value="" class="input-text" style=" width:25%">&nbsp;&nbsp;元
			</div>
		</div>
		<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">库存：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" name="gt_inventory" id="gt_inventory" placeholder="库存" value="" class="input-text" style=" width:25%">
		</div>
	</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">限制购买量：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="gt_restrict" id="gt_restrict" placeholder="限制购买量" value="" class="input-text" style=" width:25%">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">已经购买量：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="gt_already" id="gt_already" placeholder="已经购买量" value="" class="input-text" style=" width:25%">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">运费：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="gt_freight" id="gt_freight" placeholder="已经购买量" value="" class="input-text" style=" width:25%">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品属性：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="check-box" >
					<input type="radio" name="gt_status" value="0" id="checkbox-1-1">
					<label for="checkbox-1-1">1.上架</label>
				</div>
				<div class="check-box">
					<input type="radio" name="gt_status"  value="1" id="checkbox-2-1">
					<label for="checkbox-2-1">2.下架</label>
				</div>
			</div>
		</div>

<!--		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">商品详情描述</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="gt_text" id="gt_text" placeholder="" value="" class="input-text">
			</div>
		</div>-->

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">图片上传：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-list-container">
                    <div class="form-group">
                        <label for="title_img" class="control-label">商品图片</label>
                        <input type="file" name="title_img" class="form-control" id="title_img" placeholder="标题图片">
                    </div>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">详细内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script name="gt_text" id="editor" type="text/plain" style="width:100%;height:400px;"></script>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button  id='submit' class="btn btn-primary radius" value="提交" type="submit">提交</button>
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="/static/admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">


$(function(){
	var ue = UE.getEditor('editor');
});
</script>
</body>
</html>