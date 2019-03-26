<?php
namespace app\index\controller;
use app\admin\common\model\GoodsType;
use app\common\controller\Base;
use think\facade\Request;
use think\facade\Db;
use think\facade\Session;
use app\index\model\GoodsGouwuche;
use app\index\model\GoodsJiezhang;
use app\admin\common\model\GoodsShangpin;
class User extends Base
{
    //购物车
    public function gouwuche(){
        $this->isLogin(); //会员登录检测

        $data= Request::post();
        $admin_id=$data['admin_id'];

        if(!($data3= GoodsShangpin::where('id',$data['id'])->find())){
            $this->error('没有该商品','index/index');
        };//获取商品数据

        if($data!=null){

            if(empty($res= GoodsGouwuche::where('vip_id',$admin_id)->find())){

                $gouwu['vip_id']=$admin_id;
                $gouwu['s_id']=$data['id'];
                $gouwu['d_id']=$data3['gt_tid'];
                $gouwu['shuliang']=1;//可以利用前台接收数据来定义商品数量

                if(GoodsGouwuche::create($gouwu)){
                    return json('成功');
                }else{
                    return json('失败');
                }

            }else{

                $gouwu['vip_id']=$admin_id;
                $s_id=explode(',',$res['s_id']);
                foreach ($s_id as $k=>$v) {//遍历表中商品id
                    if($data['id']==$v){//判断表中是否有这个商品
                        $sp_id=explode(',', $res['shuliang']);//分割商品id得到会员的每个购车商品id
                        foreach ($sp_id as $k1=>$v1){//如果同一商品增加商品数量
                            if($k1==$k){//下标
                                if(empty($gouwu2['shuliang'])){
                                    $gouwu2['shuliang']=($v1+1);
                                }else{
                                    $gouwu2['shuliang']=$gouwu2['shuliang'].','.($v1+1);
                                }
                            }else{
                                if(empty($gouwu2['shuliang'])){
                                    $gouwu2['shuliang']=($v1);
                                }else{
                                    $gouwu2['shuliang']=$gouwu2['shuliang'].','.($v1);
                                }
                            }
                        }
                        $gouwu2['d_id']=$res['d_id'];
                        $gouwu2['s_id']=$res['s_id'];
                    }else{
                        $gouwu1['s_id']=(GoodsGouwuche::where('vip_id',$admin_id)->find())['s_id'].','.$data['id'];//赋值商品id
                        $gouwu1['shuliang']=(GoodsGouwuche::where('vip_id',$admin_id)->find())['shuliang'].','.'1';//赋值数量
                        $gouwu1['d_id']=(GoodsGouwuche::where('vip_id',$admin_id)->find())['d_id'].','.$data3['gt_tid'];//赋值父级id
                    }
                }
                if(!empty($gouwu2)){
                    $gouwu=$gouwu2;
                }else{
                    $gouwu=$gouwu1;
                }
            }
            if( GoodsGouwuche::where('vip_id',$admin_id)->update($gouwu)){

                return json('成功');
            }else{
                return json('失败');
            }//封装

        }else{

            $this->error('请选择商品','index/index');
        }

    }
    public function gouwuche2(){
        $admin_id=   Session::get('admin_id');
        $gouwuche= GoodsGouwuche::where('vip_id',$admin_id)->find();
        $exd=explode(',', $gouwuche['d_id']);
        $exs=explode(',', $gouwuche['shuliang']);
        $exl=explode(',', $gouwuche['s_id']);
        if(!((count($exd)==count($exs))&&(count($exd)==count($exl)))){
            $this->error('非法操作','index/index');
        }else{
            $gouwuche['d_id']=$exd;
            $gouwuche['shuliang']=$exs;
            $gouwuche['s_id']=$exl;
            $this->view->assign('gouwuche',$gouwuche);
        }
        return $this->view->fetch();
    }
    public function userdel(){
        $data=Request::param();//获取要删除的商品id与会员id
       $res= GoodsGouwuche::where('vip_id',$data['admin_id'])->find();
       $sid= explode(',',$res['s_id']) ;
        $did= explode(',',$res['d_id']) ;//分割商品id 商品分类id和数量
        $shuliang= explode(',',$res['shuliang']) ;
       foreach($sid as $key =>$value){
           if($data['s_id']==$value){


           }else{
               if(empty($shangpin['s_id'])){
                   $shangpin['s_id']=$value;
               }else{
                   $shangpin['s_id']=$shangpin['s_id'].','.$value;
               }
               if(empty($shangpin['d_id'])){
                   $shangpin['d_id']=$did[$key];
               }else{
                   $shangpin['d_id']=$shangpin['d_id'].','.$did[$key];
               }
               if(empty($shangpin['shuliang'])){
                   $shangpin['shuliang']=$shuliang[$key];
               }else{
                   $shangpin['shuliang']=$shangpin['shuliang'].','.$shuliang[$key];
               }

           }

       }
        GoodsGouwuche::where('vip_id',$data['admin_id'])->update($shangpin);
       $this->success('删除成功','gouwuche2','',0);
    }
    public function jiezhang2(){
        $data= Request::post();

        $sid= explode(',',$data['s_id']) ;

        foreach ($sid as $k1=>$v1){
          $res=  GoodsShangpin::where('id',$v1)->find();
          if(empty($fuzhang['d_id'])){
              $fuzhang['d_id']=$res['gt_tid'];
          }else{
              $fuzhang['d_id']=$fuzhang['d_id'].','.$res['gt_tid'];
          }
        }
        $fuzhang['s_id']=$data['s_id'];
        $fuzhang['shuliang']=$data['shuliang'];
        $fuzhang['vip_id']=$data['admin_id'];

       if( GoodsJiezhang::create($fuzhang)){
           return ['status'=>1,'message'=>'结账'];
       }else{
           return  ['status'=>1,'message'=>'非法操作'];
       }
    }
    public function jiezhang(){
        $admin_id= Session::get('admin_id');
       $res =GoodsJiezhang::where('vip_id',$admin_id)->order('create_time','desc')->find();
       halt($res);
        return $this->view->fetch();

    }

}