<?php
return [
    'AUTH_CONFIG'=>[
        'AUTH_ON'=>TRUE,//认证开关
        'AUTH_TYPE'=>1,//认证方式,1为实时认证,2为登录验证
        'AUTH_GROUP'=>'auth_group',
        'AUTH_GROUP_ACCESS'=>'auth_group_access',
        'AUTH_RULE'=>'auth_rule',
    ],
    'url_route_on'=>true,
    'log'=>[
        'type'=>'trace',//支持socket trace file
    ],
];