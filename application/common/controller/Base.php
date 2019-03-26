<?php


namespace app\common\controller;
use think\Controller;
use think\facade\Session;

use think\facade\Cache;


class Base extends Controller
{
    protected function initialize()
    {

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
//判断是否可以调用Redis缓存  (留念)
    public function testRedis()
    {
        try {
            $redis = new \Redis();
            $redis->connect('127.0.0.1', 6379, 1);// 127.0.0.1 连接的IP，6379 连接的端口，2 连接的超时时长，单位：秒
            $res = $redis->ping(); // 检测当前链接状态，返回PONG或者抛出异常。
            if ($res === '+PONG') {
                $op= [
                    'type' => 'Redis',

// 缓存类型为Redis
                ];
                return cache($op);
            }
        } catch (\Exception $e) {
                $op= [
                    'type' => 'File',
// 默认类型File
                ];

            return cache($op);
        }

    }

}