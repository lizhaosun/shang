<?php
use think\Db;
if(!function_exists('getGTtidName')){
    function getGTtidName($id){
        return Db::table('goods_type')->where('id',$id)->value('name');
    }
}
if(!function_exists('attributesName')){
    function attributesName($id){
        switch ($id){
            case 1;
                echo '推荐';
                break;
            case 2;
                echo '新上';
                break;
            case 3;
                echo '热卖';
                break;
            case 4;
                echo '促销';
                break;
            case 5;
                echo '包邮';
                break;
            case 6;
                echo '限时卖';
                break;
            case 7;
                echo '不参与会员折扣';
                break;
        }
    }
}
if(!function_exists('getArtContent')){
    function getGtContent($content){
        return mb_substr(strip_tags($content),0,10).'...';
    }
}