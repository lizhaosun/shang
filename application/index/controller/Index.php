<?php
namespace app\index\controller;
use app\common\controller\Base;
use think\facade\Request;

use think\facade\Session;
use think\facade\Cache;
use app\admin\common\model\AdminUser as UserModel;
class Index extends Base
{
    public function index()
    {

        if(!Cache::store('redis')->get('ress')){
            $ress=$this->index_redis();//获取分类列表
            Cache::store('redis')->set('ress',$ress);
            $res= Cache::store('redis')->get('ress');
        }else{
            $res= Cache::store('redis')->get('ress');
        }
      $this->assign('goodsList',$res);//赋值
        return $this->view->fetch();
    }

    //Redis获取分类列表
    public function index_redis()
    {

        $data= Db('goods_type')->where('pid',1)->all();//获取一级分类
        $res=$data;
        foreach($data as $key=>$value){
            $res[$key]['chlid2']=array();
            $data2= Db('goods_type')->where('pid',$value['id'])->all();//获取2级分类
            $res[$key]['chlid2']=$data2;//合并

            foreach ($data2 as $k=>$v){
                $res[$key]['chlid2'][$k]['chlid3']=array();
                $data3=Db('goods_type')->where('pid',$v['id'])->all();//获取3级分类
                $res[$key]['chlid2'][$k]['chlid3']=$data3;//合并

                foreach($data3 as $k3=>$v3){
                    $res[$key]['chlid2'][$k]['chlid3'][$k3]['chlid4']=array();
                    $data4=Db('goods_type')->where('pid',$v3['id'])->all();//获取4级分类
                    $res[$key]['chlid2'][$k]['chlid3'][$k3]['chlid4']=$data4;//合并

                }
            }
        }
        return $res;
    }
    //详情页
    public function details()
    {
         $id=Request::param();
        if(!Cache::store('redis')->get('details')){
            $detai=   Db('goods_shangpin')->where('id',$id['id'])->find();//获取商品列表
            Cache::store('redis')->set('details',$detai);
            $detail= Cache::store('redis')->get('details');
        }else{
            $detail= Cache::store('redis')->get('details');
        }
        $this->view->assign('detail',$detail);

        if(!Cache::store('redis')->get('spfu1s')){
            $spfu1s=$this->details_redis($detail['gt_tid']);//获取详情页列表
            Cache::store('redis')->set('spfu1s',$spfu1s);
            $spfu1= Cache::store('redis')->get('spfu1s');
        }else{
            $spfu1= Cache::store('redis')->get('spfu1s');
        }
        $this->assign('spfu1', $spfu1);
        return $this->view->fetch('details');
    }
    //Redis获取详情页

    public function details_redis($id)
    {
        $spfu= Db('goods_type')->where('id',$id)->find();
        $fu= explode(',',$spfu['path']);
        foreach($fu as $k =>$v){
            if($v>0){
                $spfu1[$k]= Db('goods_type')->where('id',$v)->field('id,name')->find();
            }
        }

        $this->assign('spfu1', $spfu1);
        return $spfu1;
    }
    //分页
    public function lists()
    {   //商品属性搜索

        $map=[];
        $id=Request::param();
        if(empty($id['page'])){
            $id['page']=1;
        }
        if(!empty($id['keywords'])){
            $map[]=['gt_name','like','%'.($id['keywords']).'%'];
            if(!Cache::store('redis')->tag('sp_shuxing')->get($id['keywords'].$id['page'])){
                $deail=Db('goods_shangpin')->where($map)->paginate(2,false,['query' => request()->param()]);//获取商品列表(通过关键字)
                Cache::store('redis')->tag('sp_shuxing')->set($id['keywords'].$id['page'],$deail);
                $deail1= Cache::store('redis')->tag('sp_shuxing')->get($id['keywords'].$id['page']);
            }else{
                $deail1= Cache::store('redis')->tag('sp_shuxing')->get($id['keywords'].$id['page']);
            }

            $this->view->assign('deail1',$deail1);
            $this->assign('spfu1', $id['keywords']);
        }
            if(!empty($id['id'])){
                if(!Cache::store('redis')->get('spfu1')){
                    $spfu= Db('goods_type')->where('id',$id['id'])->find();
                    $fu= explode(',',$spfu['path']);
                    foreach($fu as $k =>$v){
                        if($v>0){
                            $spfu1[$k]= Db('goods_type')->where('id',$v)->field('id,name')->find();
                        }
                    }
                    Cache::store('redis')->set('spfu1',$spfu1);
                    $spfu11= Cache::store('redis')->get('spfu1');
                }else{
                    $spfu11= Cache::store('redis')->get('spfu1');
                }
                $this->assign('spfu1', $spfu11);
                //商品详情页 分页
                if(!Cache::store('redis')->get($id['id'].$id['page'])){
                    $deail=Db('goods_shangpin')->where('gt_tid', $id['id'])->paginate(2,false,['query' => request()->param()]);//带参数传递：分页 ['query' => request()->param()],有多少个参数传递都会自动给你增加上，不用一个一个参数这样子写的(->paginate(10,false,['query' => ['cate_id'=>$cate_id], ['keyword'=>$keyword]]);  )
                    Cache::store('redis')->set($id['id'].$id['page'],$deail,7200);
                    $deail1= Cache::store('redis')->get($id['id'].$id['page']);
                }else{
                    $deail1= Cache::store('redis')->get($id['id'].$id['page']);
                }


                $this->assign('deail1', $deail1);
}
        //分类 实现
        if(!Cache::store('redis')->get('res_fenlei')){

            $data = Db('goods_type')->where('pid', 1)->all();//获取一级分类
            $res = $data;
            foreach ($data as $key => $value) {
                $res[$key]['chlid2'] = array();
                $data2 = Db('goods_type')->where('pid', $value['id'])->all();//获取2级分类
                $res[$key]['chlid2'] = $data2;//合并
                foreach ($data2 as $k => $v) {
                    $res[$key]['chlid2'][$k]['chlid3'] = array();
                    $data3 = Db('goods_type')->where('pid', $v['id'])->all();//获取3级分类
                    $res[$key]['chlid2'][$k]['chlid3'] = $data3;//合并
                    foreach ($data3 as $k3 => $v3) {
                        $res[$key]['chlid2'][$k]['chlid3'][$k3]['chlid4'] = array();
                        $data4 = Db('goods_type')->where('pid', $v3['id'])->all();//获取4级分类
                        $res[$key]['chlid2'][$k]['chlid3'][$k3]['chlid4'] = $data4;//合并
                    }
                }
            }
            Cache::store('redis')->set('res_fenlei',$res);
            $res1= Cache::store('redis')->get('res_fenlei');
        }else{
            $res1= Cache::store('redis')->get('res_fenlei');
        }
        $this->assign('listsList', $res1);//分类赋值
        //总商品数
        if(!Cache::store('redis')->get('cout')){
            $cout= Db('goods_shangpin')->count();
            Cache::store('redis')->set('cout',$cout,7200);
            $cout1= Cache::store('redis')->get('cout');
        }else{
            $cout1= Cache::store('redis')->get('cout');
        }

        $this->assign('cout1', $cout1);
        //查询类型的父类
        //商品属性赋值 无限分类
        if(!Cache::store('redis')->get('sou0')){
            $sou=Db('goods_sou')->where('pid', 1)->all();
            $sou0 = $sou;
            foreach ($sou as $k1 => $v1) {
                $res[$k1]['chlid1'] = array();
                $sou1 = Db('goods_sou')->where('pid', $v1['id'])->all();//获取2级分类
                $sou0[$k1]['chlid1'] = $sou1;//合并
                foreach ($sou1 as $k2 => $v2) {
                    $res[$k1]['chlid1'][$k2]['chlid2'] = array();
                    $sou2 = Db('goods_sou')->where('pid', $v2['id'])->all();//获取3级分类
                    $sou0[$k1]['chlid1'][$k2]['chlid2'] = $sou2;//合并
                }
            }
            Cache::store('redis')->set('sou0',$sou0,7200);
            $sou01= Cache::store('redis')->get('sou0');
        }else{
            $sou01= Cache::store('redis')->get('sou0');
        }

        $this->assign('sou0', $sou01);

        return $this->view->fetch();
    }
    //退出登录
    public function login_clear(){
        Session::clear();
        $this->success('退出登录成功','index/index');
    }
    //注册
    public function zhuce(){
        $this->logined();
        return $this->view->fetch();
    }

    public function index_insert()
    {


            $data = Request::post();

            $res = $this->validate($data, 'app\admin\common\validate\AdminUser');
            if (true != $res) {
                return ['status' => -1, 'message' => $res];
            } else {
                $data['admin_password'] = md5($data['admin_password']);
                if ($user = UserModel::create($data)) {
                    //实现自动登录功能
                    $res = UserModel::get($user->id);
                    unset($res['admin_password']);
                    Session::set('admin_id',$res->id);
                    Session::set('admin_name',$res->name);
                    return ['status' => 1, 'message' => '恭喜,注册成功'];
                } else {
                    return ['status' => 0, 'message' => '注册失败'];
                }
            }
        }
}
