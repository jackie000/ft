<?php
class Cache {

    private static $_instance;

    private function __construct(){
    }
    
    private function __clone(){
    }

    public static function getInstance(){
        if( self::$_instance === null ){
            $conf = Yaf_Registry::get('redis');
            $redis = new \Redis();
            $redis->connect( $conf['server'], $conf['port'] );
            self::$_instance = $redis;
        }

        return self::$_instance;
    }

}
?>
