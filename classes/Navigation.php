<?php
namespace aitsydney;
use aitsydney\SessionManager;
use aitsydney\Database;

class Navigation extends Database {
  protected $session;
  protected $nav_items = array();
  private $min_page_level = 0;
  private $max_page_level = 2;

  public function __construct(){
    parent::__construct();
    $this -> buildNav();
  }
  
  protected function buildNav(){
    if( SessionManager::get('auth') ){
      $this -> max_page_level = 2;
      $this -> min_page_level = 1;
    }
    else{
      $this -> min_page_level = 0;
      $this -> max_page_level = 1;
    }
    
    $query = 'SELECT * from page WHERE active = 1 AND level >= ? AND level <= ?';
    $statement = $this -> connection -> prepare( $query );
    $statement -> bind_param( 'ii', $this -> min_page_level, $this -> max_page_level );
    if( $statement -> execute() ){
      $result = $statement -> get_result();
      $navs = array();
      while( $row = $result -> fetch_assoc() ){
        array_push( $navs, $row );
      }
      $this -> nav_items['navs'] = $navs;
      $this -> nav_items['active'] = $this -> getActivePage();
    }
    else{
      error_log('failed to get navigation items');
    }
  }

  public function getNav(){
    return $this -> nav_items;
  }
  private function getActivePage(){
    return basename( $_SERVER['PHP_SELF'] );
  }
}
?>