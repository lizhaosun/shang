<?php

namespace app\admin\common\validate;
use think\Validate;

class AdminUser extends Validate
{
    protected $rule=[
        'admin_name|管理员账号'=> 'require|length:2,30|chsAlphaNum',
        'admin_password|管理员密码'=> 'require|length:2,60|chsAlphaNum\'',
    ];
}