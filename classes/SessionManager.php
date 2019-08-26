<?php
namespace aitsydney;
 
class SessionManager{ 
  public static function initSession() {
    //check session status
    // if not started
    if( session_status() == PHP_SESSION_NONE ){
      // start session
      session_start();
    }
  }
  public static function getAuthStatus(){
    self::initSession();
    return self::getVar('auth');
  }
  public static function destroy(){
    self::initSession();
    session_destroy();
  }
  public static function setVar($var, $value ){
    self::initSession();
    $_SESSION[$var] = $value;
  }
  public static function getVar( $var_name ){
    self::initSession();
    return ( isset( $_SESSION[$var_name] ) ) ? $_SESSION[$var_name] : false;
  }
  public static function unsetVar( $var ){
    self::initSession();
    unset( $_SESSION[$var] );
    return;
  }
}
?>