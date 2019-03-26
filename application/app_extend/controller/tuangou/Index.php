<?php
namespace app\app_extend\controller\tuangou;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
