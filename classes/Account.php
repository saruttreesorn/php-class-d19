<?php

namespace aitsydney;

use aitsydney\Database;
use aitsydney\Token;
use aitsydney\Validator;
use aitsydney\SessionManager;

class Account extends Database{
  private $response = array();
  private $errors = array();

  public function __construct(){
    parent::__construct();
  }

  public function register($email,$password){

    //validate the data using the validator class
    $validate_email = Validator::email( $email );
    if( isset( $validate_email['errors']) ){
      $this -> errors['email'] = implode( ',' , $validate_email['errors']);
    }

    $validate_password = Validator::password( $password, true );
    if( isset( $validate_password['errors'] ) ){
      $this -> errors['password'] = implode(',' , $validate_password['errors'] );
    }
    print_r( $this -> errors );
    if( count($this -> errors) > 0 ){
      $this -> response['errors'] = $this -> errors;
      $this -> response['success'] = false;
      return $this -> response;
    }
    else{
      //start entering to database
      $query = "
        INSERT INTO account (account_id,email,password,updated,created,accessed,active) 
        VALUES( UNHEX( ? ), ?, ?, NOW(), NOW(), NOW(), 1 );
      ";
      $account_id = $this -> createAccountId();
      $hashed = password_hash( $password, PASSWORD_DEFAULT );

      try{
        $statement = $this -> connection -> prepare( $query );
        if( $statement == false ){
          throw new \Exception('query failed');
        }
        if( $statement -> bind_param('sss', $account_id, $email, $hashed ) == false ){
          throw new \Exception('parameter binding failed');
        }
        if( $statement -> execute() == false ){
          throw new \Exception('execute failed');
        }
        else{
          //account is created
          //create session
          SessionManager::setVar('auth', $account_id );

        }
      }
      catch( Exception $exc ){
        $this -> errors = $exc -> getMessage();
        print_r( $this -> errors );
      }
    }

  }
  public function createAccountId(){
    return Token::generate( 32 );
  }
}
?>