<?php
namespace aitsydney;

class Validator{
  public static $response = array();
  public static $errors = array();
  public static function email( $email ){
    //convert email string to an array
    $email_chars = str_split($email);
    //must contain exactly one @ symbol
    $count = 0;
    for( $i = 0; $i < count($email_chars); $i++ ){
      if( $email_chars[$i] == '@'){

      }
    }
    if( $count > 1 ){
      //email contains more than one @
      array_push( self::$errors, 'must contain exactly one @ symbol');
    }
    //should be at least one character from beginning
    if( strpos($email,'@') < 1 && strpos($email, '@') !== -1 ){
      //contains @ in the beginning
      array_push( self::$errors, 'cannot begin with @ symbol');
    }
    //should be less or equal to 256 chars
    if( strlen($email) > 256 ){
      //longer than standard allows
      array_push( self::$errors, 'email address too long');
    }
    //use php filter to validate the rest (it's complicated)
    if( filter_var($email, FILTER_VALIDATE_EMAIL) == false ){
      // email is not valid for other reasons
      array_push( self::$errors, 'email is invalid');
    }
    if( count(self::$errors) > 0 ){
      self::$response['success'] = false;
      self::$response['errors'] = self::$errors;
    }
    else{
      self::$response['success'] = true;
    }
    return self::$response;
  }
  public static function username( $username ){

  }
  public static function password( $password, $detailed = false ){
    if( strlen($password) < 8 ){
      array_push( self::$errors, '8 characters or more' );
    }
    if( ctype_lower($password) ){
      array_push( self::$errors, 'must contain a capital letter' );
    }
    if( ctype_digit($password) ){
      array_push( self::$errors, 'cannot be numbers' );
    }
    if( count(self::$errors) > 0 ){
      self::$response['success'] = false;
      self::$response['errors'] = self::$errors;
    }
    else{
      self::$response['success'] = true;
    }
    return self::$response;
  }
}
?>