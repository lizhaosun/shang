<?php
namespace app\admin\controller;
use app\admin\common\controller\Base;
use think\facade\Session;
use app\admin\common\model\AdminUser;
use app\admin\common\model\AuthGroup;
use app\admin\common\model\AdminUser as UserModel;
use app\admin\common\model\AuthRule;
use think\facade\Request;


class User extends Base
{   public function member_add()
{
    return $this->view->fetch('member_add');
}
//退出登录
    public function logout(){
        Session::clear();
        /*    Session::delete('user_id');
            Session::delete('user_name');
            Session::delete('is_admin');*/
        $this->success('退出登录成功','index');
    }
//注册
    public function insert(){

        if(Request::isAjax()){
            $data=Request::post();
                $data['admin_password']=md5($data['admin_password']);
                if($user=UserModel::create($data)){

                    //实现自动登录功能
                    $res=UserModel::get($user->id);


                    Session::set('admin_id',$res->id);
                    Session::set('admin_name',$res->name);

                    return ['status'=>1,'message'=>'恭喜,注册成功'];
                }else{
                    return ['status'=>0,'message'=>'注册失败'];
                }
            }
    }

    public  function admin_list(){
        if($AdminList=AdminUser::order('id','asc')->all()){
            $this->assign('AdminList',$AdminList);
        }
    return $this->view->fetch();

    }
    public  function admin_add(){
        $data=Request::param();
        if($data==null){
            $Adminadd[0]['id']=null;
            $Adminadd[0]['admin_name']=null;
            $Adminadd[0]['admin_password']=null;

        }else{
            $Adminadd=AdminUser::where('id',$data['id'])->all();
        }
        $this->assign('Adminadd',$Adminadd);

        return $this->view->fetch();

    }
    public  function admin_password_edit(){
        $data=Request::param();
        if($data['id']==null){
            $auth_group['admin_name']=$data['admin_name'];
            $auth_group['admin_password']=$data['admin_password'];

            if(AdminUser::create($data)){
                $this->success('增添管理成功','admin_list');
                return $this->view->fetch('增添管理成功','admin_list');
            }else{
                $this->error('添加错误');
                return $this->view->fetch('错误','admin_list');
            }
        }else{
            $auth_group['id']=$data['id'];
        $auth_group['admin_name']=$data['admin_name'];
        $auth_group['admin_password']=$data['admin_password'];

        if(AdminUser::update($data)){
            $this->success('增添管理成功','admin_list');
            return $this->view->fetch('增添管理成功','admin_list');
        }else{
            $this->error('添加错误');
            return $this->view->fetch('错误','admin_list');
        }}
    }
    public  function admin_del(){
        $data=Request::param();
        if(AdminUser::where('id',$data['id'])->delete()){
            return  ['status'=>1, 'msg'=>'删除成功~~'];
        }else{
            return  ['status'=>0, 'msg'=>'删除失败,已经删除~~'];
        }

    }
    /*管理员管理 权限管理  查*/
    public  function admin_permission(){
        if($RuleList=AuthRule::order('id','asc')->all()){
            $this->assign('RuleList',$RuleList);
        }
        return $this->view->fetch();

    }
    /*改和增*/
    public  function admin_permission_add(){
        $data=Request::param();
        if($data==null){
            $apa[0]['id']=null;
            $apa[0]['name']=null;
            $apa[0]['title']=null;
            $apa[0]['status']=null;
            $apa[0]['condition']=null;
        }else{
            $apa=AuthRule::where('id',$data['id'])->all();
        }
        $this->assign('apa',$apa);
        return $this->view->fetch();
    }
    /*删除*/
    public  function admin_permission_del(){
        $data=Request::param();
        if(AuthRule::where('id',$data['id'])->delete()){
            return  ['status'=>1, 'msg'=>'删除成功~~'];
        }else{
            return  ['status'=>0, 'msg'=>'删除失败,已经删除~~'];
        }

    }
    /*存*/
    public  function admin_permission_add_save(){
        $data=Request::param();
        if($data['id']==null){
            $admin_permission['name']=$data['name'];
            $admin_permission['title']=$data['title'];
            $admin_permission['condition']=$data['condition'];
            $admin_permission['status']=$data['status'];
            if(AuthRule::create($admin_permission)){
                $this->success('增添管理成功','admin_permission');
                return $this->view->fetch('增添管理成功','admin_permission');
            }else{
                $this->error('添加错误');
                return $this->view->fetch('错误','admin_permission');
            }
        }else{
        $admin_permission['id']=$data['id'];
        $admin_permission['name']=$data['name'];
        $admin_permission['title']=$data['title'];
        $admin_permission['condition']=$data['condition'];
        $admin_permission['status']=$data['status'];
        if(AuthRule::update($admin_permission)){
            $this->success('增添管理成功','admin_permission');
            return $this->view->fetch('增添管理成功','admin_permission');
        }else{
            $this->error('添加错误');
            return $this->view->fetch('错误','admin_permission');
        }}
    }
    /*管理员管理 角色管理 查*/
    public  function admin_role(){
        if($GroupList=AuthGroup::order('id','asc')->all()){
            $this->assign('GroupList',$GroupList);
        }

        return $this->view->fetch();

    }
    /*删除*/
    public  function admin_role_del(){
        $data=Request::param();
        if(AuthGroup::where('id',$data['id'])->delete()){
            return  ['status'=>1, 'msg'=>'删除成功~~'];
        }else{
            return  ['status'=>0, 'msg'=>'删除失败,已经删除~~'];
        }

    }
/*增和改*/
    public  function admin_role_add(){
        $data=Request::param();
        if($data==null){
            $ara[0]['id']=null;
            $ara[0]['title']=null;
            $ara[0]['status']=null;
            $ara[0]['rules']=null;
        }else{
        $ara=AuthGroup::where('id',$data['id'])->all();
        }
        $authr=AuthRule::all();
        $this->assign('ara',$ara);
        $this->assign('authr',$authr);
        return $this->view->fetch('admin_role_add');
    }
    /*存*/
    public  function admin_role_add_save(){
        $data=Request::param();
        if($data['id']==null){

            $auth_group['rules']=$data['rules'];
            $auth_group['title']=$data['title'];

            if(AuthGroup::create($auth_group)){
                $this->success('增添管理成功','admin_role');
                return $this->view->fetch('增添管理成功','admin_role');
            }else{
                $this->error('添加错误');
                return $this->view->fetch('错误','admin_role');
            }
        }else{
        $auth_group['id']=$data['id'];
        $auth_group['rules']=$data['rules'];
        $auth_group['title']=$data['title'];

       if(AuthGroup::update($auth_group)){
          $this->success('增添管理成功','admin_role');
           return $this->view->fetch('增添管理成功','admin_role');
       }else{
            $this->error('添加错误');
           return $this->view->fetch('错误','admin_role');
       }
}
    }


}
