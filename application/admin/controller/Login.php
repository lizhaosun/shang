<?php
namespace app\admin\controller;
use app\admin\common\controller\Base;
use think\Controller;
use think\facade\Request;
use think\facade\Session;
use app\admin\common\model\AdminUser ;

class Login extends Controller
{
    public function login(){

        return $this->fetch();
    }
    public function dologin(){
        $data=Request::param();
        /*$data2=Db('admin_user')->where('admin_name',$data['admin_name'])
            ->where('admin_password',$data['admin_password'])->find();*/
        $data2=AdminUser::where('admin_name',$data['admin_name'])
        ->where('admin_password',md5($data['admin_password']))
            ->find();


            if($data2){

                Session::set('admin_id',$data2['id']);
                Session::set('admin_name',$data2['admin_name']);

                 $this->success('登录成功','/admin.php/index/index');
            }else{
               $this->error('登录失败');
            }
    }
}