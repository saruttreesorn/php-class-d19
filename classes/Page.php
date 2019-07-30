<?php
namespace aitsydney\site;
class Page extends aitsydney\Database {
  private $name;
  private $url;
  private $menu;
  private $menu_order;
  private $content;
  private $page = array();

  public function __construct( Array $params ){
    $this -> page = $params;
    $this -> setParams();
  }
  private function setParams(){
    $params = $this -> params;

    if( isset( $params['name'] ) ){
      $this -> name = $params['name'];
    }
    if( isset( $params['url'] ) ){
      $this -> url = $params['url'];
    }
    if( isset( $params['menu'] ) ){
      $this -> url = $params['menu'];
    }
    if( isset( $params['menu_order'] ) ){
      $this -> url = $params['menu_order'];
    }
    if( isset( $params['content'] ) ){
      $this -> url = $params['content'];
    }
  }
  public function getPage() {
    return $this -> params;
  }
}
?>