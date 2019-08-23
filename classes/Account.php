<?php

namespace aitsydney;

use aitsydney\Database;
use aitsydney\Token;
use aitsydney\Validator;
use aitsydney\SessionManager;

class Account extends Database{
  public function __construct(){
    parent::__construct();
  }
  public function register($email,$password){
    //array to return a response
    $response = array();
    $errors = array();
    //validate the data using the validator class
    $validate_email = Validator::email( $email );
    if( isset( $validate_email['errors']) ){
      $errors['email'] = implode( ',' , $validate_email['errors']);
    }

    $validate_password = Validator::password( $password, true );
    if( isset( $validate_password['errors'] ) ){
      $errors['password'] = implode(',' , $validate_password['errors'] );
    }

    if( count($errors) > 0 ){
      $response['errors'] = $errors;
      $response['success'] = false;
      return $response;
    }
    else{
      //start entering to database
    }

  }
  public function createAccountId(){
    return Token::generate( 16 );
  }
}
?>