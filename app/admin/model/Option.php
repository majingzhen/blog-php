<?php

    namespace app\admin\model;

    use think\facade\Db;

    class Option{
        public function getOneByKey($v){
            $obj = Db::name("option")->where("key",$v)->find();
            return $obj;
        }
    }
