<?php

class Bootstrap extends Yaf_Bootstrap_Abstract{

    public function _initPlugin(Yaf_Dispatcher $dispatcher) {

    }

    public function _initRoute(Yaf_Dispatcher $dispatcher) {

        //Yaf_Route_Static不用手动去设置，它始终留在栈底，最后进行匹配

        //Yaf_Route_Simple

        //Yaf_Route_Supervar

        //Yaf_Route_Map

        //Yaf_Route_Rewrite

        //Yaf_Route_Regex


    }


    public function _initView(Yaf_Dispatcher $dispatcher){
        //在这里注册自己的view控制器，例如smarty,firekylin
    }
}

