<?php
/**
 * @file Error.php
 * @brief 错误异常处理
 * @version v1.0
 * @date 2016-05-19
 */

class ErrorController extends Yaf_Controller_Abstract {
    //从2.1开始, errorAction支持直接通过参数获取异常
    //
    public function init(){
        Yaf_Dispatcher::getInstance()->disableView();
    }
    public function errorAction($exception) {
        $this->getView()->assign("exception", $exception);

        switch( $exception->getCode() ){
        case YAF_ERR_NOTFOUND_MODULE:
        case YAF_ERR_NOTFOUND_CONTROLLER:
        case YAF_ERR_NOTFOUND_ACTION:
        case YAF_ERR_NOTFOUND_VIEW:
            return $this->_pageNotFound( $exception );
        default:
            return $this->_unknownError( $exception );
        }

    }

    private function _pageNotFound( $e ){
        if( strtolower($this->getRequest()->getMethod() ) != "cli" ){
            $this->getResponse()->setHeader($this->getRequest()->getServer( 'SERVER_PROTOCOL' ), 'HTTP/1.0 404 Not Found');
        }
        echo $this->_view->error = 'Page was not found';
    }

    private function _unknownError( $e ){
        if( strtolower($this->getRequest()->getMethod() ) != "cli" ){
            $this->getResponse()->setHeader($this->getRequest()->getServer( 'SERVER_PROTOCOL' ),'HTTP/1.0 500 Internal Server Error');

        }
        echo $this->_view->error = 'Application Error : ' . $e->getMessage();
    }

}
