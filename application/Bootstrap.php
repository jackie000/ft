<?php
class Bootstrap extends Yaf_Bootstrap_Abstract{

    public function _initConfig(){
        Yaf_Registry::set('config', Yaf_Application::app()->getConfig() );
    }

    public function _initDatabase(){
        Yaf_Registry::set( 'database', Yaf_Registry::get('config')->database->master->toArray() );

    }

    public function _initRedis(){
        //Yaf_Registry::set( 'redis', Yaf_Registry::get('config')->cache->redis->toArray() );

    }
}
?>
