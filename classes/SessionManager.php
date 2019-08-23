<?php
namespace aitsydney;
 
class SessionManager{
  public $auth_status = false;
  public function __construct(){
    //check session status
    if( session_status() == PHP_SESSION_NONE ){
      session_start();
    }
    $this -> auth_status = $this -> getAuthStatus();
  }
  public function getAuthStatus(){
    if( isset($_SESSION['auth']) ){
      return true;
    }
    else{
      return false;
    }
  }
  public function destroy(){
    session_destroy();
  }
  public function setVar($var, $value ){
    $_SESSION[$var] = $value;
  }
}
?>