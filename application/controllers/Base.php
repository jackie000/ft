<?php
class BaseController extends Yaf_Controller_Abstract {
    public function init(){
        $this->getview()->assign( 'cookieUser', $this->getCookieUser() );
    }

    public function getCookieUser(){
        return 10;
    }

    public function getUser(){
        return 1;
    }

    public function getMeta(){
        return [ 'title'=>'1', 'description'=>'1', 'keywords'=>'1' ];
    }

    public function getCategories(){

    }

    public function getHostInfo(){
        return '1';
    }



}
