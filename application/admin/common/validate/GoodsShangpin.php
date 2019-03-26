<?php

namespace app\admin\common\validate;
use think\Validate;

class GoodsShangpin extends Validate
{
    protected $rule=[
        'gt_name|商品名称'=> 'require|length:2,30|chsAlphaNum',
        'gt_tid|分类级别'=> 'require',
        'gt_unit|商品的单位'=>'require|chsAlphaNum',
        'gt_attributes|商品属性'=>'require',
        'gt_number|商品编号'=>'require|alphaNum',
        'gt_barcode|条形码'=>'require|alphaNum',
        'gt_curprice|现价'=>'require|alphaNum',
        'gt_oriprice|市场价'=>'require|alphaNum',
        'gt_cosprice|成本价'=>'require|alphaNum',
        'gt_inventory|库存'=>'require|number',
        'gt_status|是否上架'=>'require|number',
        'gt_text|商品详情描述'=>'require',

    ];
}