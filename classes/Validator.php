<?php
namespace aitsydney;

use \Exception;

//validates email, username or password
class Validator{
  public static $response = array();
  public static $errors = array();
  public static function email( $email ){
    $response = array();
    $errors = array();
    
    if( filter_var($email,FILTER_VALIDATE_EMAIL) == false ){
      $errors['invalid'] = 'invalid email address';
    }
    if( count($errors) > 0 ){
      $response['errors'] = $errors;
      $response['success'] = false;
    }
    else{
      $response['success'] = true;
    }
    return $response;
  }
  public static function username( $username, $min = 4, $max = 16 ){
    $response = array();
    $errors = array();
    //split username into array
    $chars = str_split( $username );
    // if username is not letters and numbers (eg contains symbols)
    if( ctype_alnum($username) == false ){
      $exc = array();
      for( $i = 0; $i < count($chars); $i++ ){
        if( ctype_alnum( $chars[$i] ) == false && $chars[$i] !== '-' && $chars[$i] !== '_' && $chars[$i] !== ' ' ){
          array_push( $exc , $chars[$i] );
        }
      }
      if( count($exc) > 0 ){
        $symbols = implode( ' or ' , $exc );
        $errors['alphanumeric'] = "username cannot contain $symbols" ;
      }
    }
    // if username has spaces at beginning or end
    if( strlen( trim($username) ) !== strlen($username) ){
      $errors['startchar'] = 'username cannot begin or end with space' ;
    }
    // if username contains spaces
    if( strpos( ' ' , $username ) > 0 ){
      $errors['spaces'] = 'username cannot contain spaces' ;
    }
    // if username contains html tags
    if( strlen( strip_tags($username) ) !== strlen($username) ){
      $errors['html'] = 'username cannot contain html tags';
    }
    if( strlen( $username < $min ) || strlen( $username > $max ) ){
      $errors['length'] = "username must be between $min and $max characters" ;
    }

    if( count($errors) > 0 ){
      $response['success'] = false;
      $response['errors'] = $errors;
    }
    else{
      $response['success'] = true;
    }
    return $response;
  }
  public static function password( $password , $length = 8 ){
    $response = array();
    $errors = array();
    if( strlen($password) < 8 ){
      $errors['length'] = 'password must be '.$length.' characters or more';
    }
    //total count of letters in the string
    $lower = 0;
    $num = 0;
    $upper = 0;
    //split string into an array
    $chars = str_split($password );
    print_r($chars);
    for( $i = 0; $i < count($chars); $i++ ){
      if( ctype_lower( $chars[$i] ) ){ 
        $lower++; 
      }
      if( ctype_digit( $chars[$i] ) ){ 
        $num++; 
      }
      if( ctype_upper( $chars[$i] ) ){ 
        $upper++;
      }
    }
    if( $lower == 0 ){
      $errors['alpha'] = 'password must contain at least one lowercase character';
    }
    if( $num == 0 ){
      $errors['numeric'] = 'password must contain at least one digit';
    }
    if( $upper == 0 ){
      $errors['upper'] = 'password must contain at least one uppercase character';
    }
    
    if( count($errors) > 0 ){
      $response['success'] = false;
      $response['errors'] = $errors;
    }
    else{
      $response['success'] = true;
    }
    return $response;
  }
}
?>