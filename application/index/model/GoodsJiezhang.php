<?php
namespace app\index\model;
use think\Model;

class GoodsJiezhang extends Model
{
    protected $pk='id';
    protected $table='goods_jiezhang';

    protected $autoWriteTimestamp=true;//自动时间戳
    protected $createTime='create_time';
    Protected $updateTime='update_time';
    protected $dateFormat='Y年m月d日';
//获取器
/*    public function getStatusAttr($value){
        $status=['1'=>'启用','0'=>'禁用'];
        return $status[$value];
    }
    public function getIsAdminAttr($value){
        $status=['1'=>'管理员','0'=>'注册会员'];
        return $status[$value];
    }
    //修改器
    public function setPasswordAttr($value){
        return sha1($value);
    }*/

}