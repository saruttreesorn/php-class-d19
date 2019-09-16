<?php

namespace aitsydney;

use \Exception;
use aitsydney\Database;
use aitsydney\Token;
use aitsydney\Validator;
use aitsydney\SessionManager;

class Account extends Database{
  // arrays to surface errors to front end
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
    
    if( count($this -> errors) > 0 ){
      $this -> response['errors'] = $this -> errors;
      $this -> response['success'] = false;
      return $this -> response;
    }
    else{
      // query for database.
      // account id is hex, so needs to be converted to binary using UNHEX()
      $query = "
        INSERT INTO account (account_id,email,password,updated,created,accessed,active) 
        VALUES( UNHEX( ? ), ?, ?, NOW(), NOW(), NOW(), 1 );
      ";
      $account_id = $this -> createAccountId();
      $hashed = password_hash( $password, PASSWORD_DEFAULT );

      try{
        $statement = $this -> connection -> prepare( $query );
        if( $statement == false ){
          throw new Exception('query failed');
        }
        if( $statement -> bind_param('sss', $account_id, $email, $hashed ) == false ){
          throw new Exception('parameter binding failed');
        }
        if( $statement -> execute() == false ){

          throw new Exception('execute failed');
        }
        else{
          //account is created
          //create session
          SessionManager::setVar('auth', $account_id );
          $this -> response['success'] = true;
        }
      }
      catch( Exception $exc ){
        error_log ( $exc -> getMessage() );
        $this -> errors['system'] = 'Something went wrong';
        $this -> response['errors'] = $this -> errors;
        $this -> response['success'] = false;
      }
    }
    return $this -> response;
  } 
  public function createAccountId(){
    // use the generate function in Token class
    return Token::generate( 32 );
  }

  public function login( $email, $password ){
    // account_id is stored as binary so HEX() is used to get original string
    $query = "
      SELECT HEX( account_id ), email, password 
      FROM account
      WHERE email = ?
    ";
    try{
      $statement = $this -> connection -> prepare( $query );
      if( $statement == false ){
        throw new Exception('query error');
      }
      if( $statement -> bind_param('s',$email ) == false ){
        throw new Exception('parameter binding failed');
      }
      if( $statement -> execute() == false ){
        throw new Exception('execute failed');
      }
    }
    catch( Exception $exc ){
      error_log( $exc -> getMessage() );
      $this -> errors['system'] = 'Something went wrong';
      $this -> response['errors'] = $this -> errors;
      $this -> response['success'] = false;
    }
    // get the result
    $result = $statement -> get_result();
    // check if there is a result
    if( $result -> num_rows == 0 ){
      $this -> errors['system'] = 'the credentials supplied does not match our records';
      $this -> response['errors'] = $this -> errors;
      $this -> response['success'] = false;
      return $this -> response;
    }
    $account = $result -> fetch_assoc();
    // check the password
    if( password_verify($password, $account['password'] ) ){
      // passwords match
      $this -> response['success'] = true;
      return $this -> response;
    }

  }
  
}
?>