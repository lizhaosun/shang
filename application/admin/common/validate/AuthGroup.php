<?php

namespace app\admin\common\validate;
use think\Validate;

class AuthGroup extends Validate
{
    protected $rule=[
        'title|用户组名称'=> 'require|length:2,30|chsAlphaNum',
    ];
}