<?php
namespace app\admin\controller;
use app\admin\common\controller\Base;
use think\App;
use think\facade\Session;
use app\admin\common\model\Goodstype;
use app\admin\common\model\GoodsShangpin;
use think\facade\Request;

class Index extends Base
{
    public function index()
    {
        return $this->view->fetch();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
    public function _blank()
    {
        return $this->view->fetch();
    }
    public function _footer()
    {
        return $this->view->fetch();
    }
    public function _header()
{
    return $this->view->fetch();
}
    public function _menu()
    {
        return $this->view->fetch();
    }
    public function _meta()
{
    return $this->view->fetch();
}

    public function articleAdd()
    {
        return $this->view->fetch('article-add');
    }
    public function articleClass()
    {
        return $this->view->fetch('article-class');
    }
    public function articleClassEdit()
    {
        return $this->view->fetch('article-class-edit');
    }
    public function articleList()
    {
        return $this->view->fetch('article-list');
    }
    public function changePassword()
    {
        return $this->view->fetch('change-password');
    }
    public function charts1()
    {
        return $this->view->fetch('charts-1');
    }
    public function charts2()
    {
        return $this->view->fetch('charts-2');
    }
    public function charts3()
    {
        return $this->view->fetch('charts-3');
    }
    public function charts4()
{
    return $this->view->fetch('charts-4');
}
    public function charts5()
    {
        return $this->view->fetch('charts-5');
    }
    public function charts6()
{
    return $this->view->fetch('charts-6');
}    public function charts7()
{
    return $this->view->fetch('charts-7');
}
    public function codeing()
{
    return $this->view->fetch('codeing');
}
    public function feedbackList()
    {
        return $this->view->fetch('feedback-list');
    }
    public function index2()
    {
        return $this->view->fetch('index-2');
    }
    public function login()
    {
        return $this->view->fetch('login');
    }

    public function menberDel()
    {
        return $this->view->fetch('member-del');
    }
    public function memberList()
{
    return $this->view->fetch('member-list');
}
    public function memberRecordBrowse()
    {
        return $this->view->fetch('member-record-browse');
    }
    public function memberRecordDownload()
    {
        return $this->view->fetch('member-record-download');
    }
    public function memberRecordShare()
    {
        return $this->view->fetch('member-record-share');
    }
    public function memberShow()
    {
        return $this->view->fetch('member-show');
    }
    public function pictureAdd()
    {
        return $this->view->fetch('picture-add');
    }
    public function pictureList()
    {
        return $this->view->fetch('picture-list');
    }
    public function pictureShow()
    {
        return $this->view->fetch('picture-show');
    }
    //产品管理,添加产品 无限分类
    public function product_add()
    {
        $productCategoryAdd=Db('goods_type')
            ->field("*,concat(path,',',id)as paths")//暂时觉得没叼用
            ->order('path')
            ->select();  //无限分类
        foreach($productCategoryAdd as $k=>$v){
            $productCategoryAdd[$k]['name']=str_repeat('|------',$v['level']).$v['name'];//书写分类
        }
        $this->view->assign('productCategoryAdd',$productCategoryAdd);
        return $this->view->fetch('product_add');
    }
    //产品管理,添加产品 写入数据
    public function product_add_goods(){
        $data=Request::param();//获取product_add的数据
        $rule='app\admin\common\validate\GoodsShangpin';//验证一下咯
        $res=$this->validate($data,$rule); //判断是否符合规则
        if(true===$res){
            $file=Request::file();
            if(!empty($file)){
                $file=Request::file('title_img');
                $info=$file->validate([
                    'require'=>'require',
                    'size'=>2097150,
                    'ext'=>'jpeg,jpg,png,gif',
                ])->move('uploads');
                if($info){
                    $data['gt_imagepath']= $info->getSaveName();

                }else{
                    $this->error($file->getError(),'product_add');
                }

            }

            $data2=explode(',',$data['gt_tid']);
            $data['gt_tid']=$data2[0];
            $data['gt_tpid']=$data2[1];//赋值一下id
            if(GoodsShangpin::create($data,true)){
                return $this->success('商品添加成功','product_add',1);
            }else{
                return $this->success('商品添加失败','product_add',1);
            }
        }else{
            $this->error($res,'product_add',1);
        }
    }
    //产品管理 产品列表 遍历
    public function product_list()
    {   if($productList=GoodsShangpin::order('gt_tid','asc')->all()){
        $this->assign('productList',$productList);
    }
        return $this->view->fetch('product_list');
    }
    //产品管理 产品列表 改
    public function product_edit(){
        $productCategoryAdd=Db('goods_type')
            ->order('path')
            ->select();  //无限分类
        foreach($productCategoryAdd as $k=>$v){
            $productCategoryAdd[$k]['name']=str_repeat('|------',$v['level']).$v['name'];//书写分类
        }
        $this->view->assign('productCategoryAdd',$productCategoryAdd); //把无限分类实现一下而已
        $id=Request::param('id');
        $productEdit=GoodsShangpin::where('id',$id)->find();
        $this->view->assign('productEdit',$productEdit);//方便员工,不需要大修改呢
        return $this->view->fetch('product_edit');
    }
    public function product_up_goods(){
        $data=Request::param();
        $rule='app\admin\common\validate\GoodsShangpin';//验证一下咯
        $res=$this->validate($data,$rule); //判断是否符合规则
        $id=$data['id'];

        unset($data['id']);
        unset($data['file']);
        if(true===$res){
            $data2=explode(',',$data['gt_tid']);
            $data['gt_tid']=$data2[0];
            $data['gt_tpid']=$data2[1];//赋值一下id
            if(GoodsShangpin::where('id',$id)->update($data)){
                return $this->success('商品修改成功','product_list');
            }else{
                return $this->success('商品修改失败','product_edit');
            }
        }else{
            $this->error($res,'product_edit',1);
        }
    }
    public function doDel(){
        //获取id
        $id=Request::param('id');

        $data2=explode(',',$id);
        //执行删除

        foreach ($data2 as $k){
            if(GoodsShangpin::where('id',$k)->delete()){
                return $this->success('删除成功','product_list');
            }else{
                //删除失败
                $this->error('删除失败');
            }
        }
    }
    public function desc_id()
    {   $id=Request::param();
    halt($id);
        return $this->view->fetch('product_brand');
    }

    public function product_brand()
    {
        return $this->view->fetch('product_brand');
    }
    public function product_category()
    {
        return $this->view->fetch('product_category');
    }
    //产品管理 -分类管理 无限分类实现
    public function product_category_add()
    {
        $productCategoryAdd=Db('goods_type')
            ->field("*,concat(path,',',id)as paths")//暂时觉得没叼用
            ->order('path')
            ->select();  //无限分类
        foreach($productCategoryAdd as $k=>$v){
            $productCategoryAdd[$k]['name']=str_repeat('|------',$v['level']).$v['name'];//书写分类
            }
        $this->view->assign('productCategoryAdd',$productCategoryAdd);
        return $this->view->fetch('product_category_add');//渲染模板
        }
    //产品管理 -分类管理 提交表单
        public function goods_type_add()
        {
            $data=Request::param();
            if(empty($data['name'])){
                $this->error('类名不能为空');
            }

            $data2=Db('goods_type')
                ->where('id',$data['id'])
                ->find();                           //利用父级ID查找PATH从而获取基本信息
            $data3=Db('goods_type')
                ->order('id','desc')
                ->find();                           //获取最高ID书写PATH最后的值
            $data4= $data3['id']+1;
            $data['path']=$data2['path'].','.$data4;
            $data['level']=$data2['level']+1;
            $data['pid']=$data2['id'];
            unset($data['id']);                     //编辑出要写入数据表中的值
           if(GoodsType::create($data,true)){
               return $this->success('分类添加成功','product_category_add');
           }else{
               return $this->success('添加失败','product_category_add');
           }
        }
        //获取分类数据
        public function product_category_ajax(){
            $data=GoodsType::field('id,pid,name')->select();
            echo $data;
        }
        //删除分类信息
        public function product_category_del(){
            $data=Request::param();
            if(!GoodsType::where('pid',$data['id'])->find()){
                if(GoodsType::where('id',$data['id'])->delete()){
                    return ['status'=>1,'message'=>'删除成功'];
                }else{
                    return ['status'=>0,'message'=>'删除不成功'];
                }
            }
        }

    public function recordBrowse()
    {
        return $this->view->fetch('record-browse');
    }
    public function recordDownload()
    {
        return $this->view->fetch('record-download');
    }
    public function recordShare()
    {
        return $this->view->fetch('record-share');
    }
    public function systemBase()
    {
        return $this->view->fetch('system-base');
    }
    public function systemCategory()
    {
        return $this->view->fetch('system-category');
    }
    public function systemCategoryAdd()
    {
        return $this->view->fetch('system-category-add');
    }
    public function systemData()
    {
        return $this->view->fetch('system-data');
    }
    public function systemLog()
    {
        return $this->view->fetch('system-log');
    }
    public function systemShielding()
    {
        return $this->view->fetch('system-shielding');
    }
    public function userAdd()
    {
        return $this->view->fetch('user-add');
    }
    public function userList()
    {
        return $this->view->fetch('user-list');
    }
    public function userPasswordEdit()
    {
        return $this->view->fetch('user-password-edit');
    }
    public function userShow()
    {
        return $this->view->fetch('user-show');
    }
    public function welcome()
    {
        return $this->view->fetch('welcome');
    }

}
