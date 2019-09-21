<?php

namespace aitsydney\utilities;

class Request{
  public static function getIp(){
    //returns the client's ip address
    return ( $_SERVER['REMOTE_ADDR'] == '::1' ) ? '127.0.0.1' : $_SERVER['REMOTE_ADDR'];
  }
  public static function getUserAgent(){
    $user_agent = array();
    if( isset($_SERVER['HTTP_USER_AGENT']) ){
      //explode to an array
      $string = explode( ' ' , $_SERVER['HTTP_USER_AGENT'] );
    }
    return ( isset($_SERVER['HTTP_USER_AGENT']) ) ? $user_agent : 'undefined';
  }
}

?>