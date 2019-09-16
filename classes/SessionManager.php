<?php
namespace aitsydney;
// this class is a wrapper for the PHP Session object
class SessionManager{ 
  public static function init() {
    //check session status
    // if not started
    if( session_status() == PHP_SESSION_NONE ){
      // start session
      session_start();
    }
  }
  public static function set($var, $value ){
    self::init();
    $_SESSION[$var] = $value;
    return;
  }
  public static function get( $var_name ){
    self::init();
    return ( isset( $_SESSION[$var_name] ) ) ? $_SESSION[$var_name] : false;
  }
  public static function empty( $var ){
    self::init();
    unset( $_SESSION[$var] );
    return;
  }
}
?>