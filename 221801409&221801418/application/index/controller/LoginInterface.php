<?php
namespace app\index\controller;

use app\index\model\paper;
use think\Controller;
class LoginInterface extends Controller
{
// 创建用户数据页面
    public function create()
    {
        return view('LoginInterface');//加载模板，会自动找到view下的user的user.htmurl_convertl
    }
}