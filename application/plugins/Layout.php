<?php
class LayoutPlugin extends Yaf_Plugin_Abstract {
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        echo 1;
    }


    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        echo 2;
    }

    public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        echo 3;
    }

    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        echo 4;
    }

    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        echo 5;
        var_dump( get_class_methods( $request ) );
    }

    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        echo 6;
    }
}

?>
