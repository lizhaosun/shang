<?php
namespace app\admin\common\model;
use think\Model;

class GoodsShangpin extends Model
{
    protected $pk='id';
    protected $table='goods_shangpin';

    protected $autoWriteTimestamp=true;//自动时间戳
    protected $createTime='create_time';
    Protected $updateTime='update_time';
    protected $dateFormat='Y年m月d日';

    protected $auto = [];
    // 仅新增时设置
    protected $insert = ['type'=>1];
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