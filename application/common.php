<?php
use think\Db;
//根据用户的主键id,查询用户名称
if(!function_exists('getUserName')) {
    function getUserName($id)
    {
        return Db::table('goods_type')->where('id', $id)->value('name');
    }
}
//找商品名字
if(!function_exists('getGoodsShangpin')) {
    function getGoodsShangpin($id)
    {
        return Db::table('goods_shangpin')->where('id', $id)->value('gt_name');
    }
}
//找商品价格
if(!function_exists('getGoodsShangpinjg')) {
    function getGoodsShangpinjg($id)
    {
        return Db::table('goods_shangpin')->where('id', $id)->value('gt_curprice');
    }
}
//找市场价格
if(!function_exists('getGoodsShangpinsc')) {
    function getGoodsShangpinsc($id)
    {
        return Db::table('goods_shangpin')->where('id', $id)->value('gt_oriprice');
    }
}
//找商品图
if(!function_exists('getGoodsShangpintu')) {
    function getGoodsShangpintu($id)
    {
        return Db::table('goods_shangpin')->where('id', $id)->value('gt_imagepath');
    }
}