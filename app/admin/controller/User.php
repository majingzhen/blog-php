<?php
namespace app\admin\controller;

use think\facade\View;
use app\admin\model\Option;
class User {

    public function login(){
        $opt = new Option();
        $webName = $opt->getOneByKey("WEB_NAME");
        View::assign("WEB_NAME",$webName);
        return View::fetch();
    }
}
