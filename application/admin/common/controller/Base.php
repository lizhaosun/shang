<?php

namespace app\admin\common\controller;

use think\Controller;
use think\facade\Session;
use org\Auth;

class Base extends Controller
{
    protected function initialize()
    {
        $uid=Session::get('admin_id');
        if(empty($uid)){
            $this->error('请先登录','admin/login/login');
        }
        //auth 权限访问限制
        if($uid!=6){
        $auth=new Auth();
        $controller = request()->controller();
        $action = request()->action();
            /*if(!$auth->check($controller,$uid)){
                $this->error('你没有访问的权限','admin/login/login');
            }*/

        if(!$auth->check($controller.'/'.$action,$uid)){
            $this->error('你没有访问的权限','admin/login/login');
        }

    }

    }
    public function logined(){
        if(Session::has('admin_id')){
            $this->error('你已经登录','index/index');
        }
    }
    public function isLogin(){
        if(!Session::has('admin_id')){
            $this->error('请登录','admin/login/login');
        }
    }


}