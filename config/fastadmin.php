﻿<?php
//FastAdmin配置
return [

    //是否开启前台会员中心
    'usercenter'          => true,
    //登录验证码
    'login_captcha'       => true,
    //登录失败超过10次则1天后重试
    'login_failure_retry' => true,
    //是否同一账号同一时间只能在一个地方登录
    'login_unique'        => false,
    //登录页默认背景图
    'login_background'    => "/static/assets/img/loginbg.jpg",
    //是否启用多级菜单导航
    'multiplenav'         => false,
    //自动检测更新
    'checkupdate'         => false,
    //版本号
    'version'             => '1.0.0.20190111_beta',
    //API接口地址
    'api_url'             => 'https://api.fastadmin.net',
];