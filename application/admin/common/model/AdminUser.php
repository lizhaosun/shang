<?php
namespace app\admin\common\model;
use think\Model;

class AdminUser extends Model
{
    protected $pk='id';
    protected $table='admin_user';


    /*//获取器
        public function getStatusAttr($value){
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