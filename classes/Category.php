<?php
namespace aitsydney;

use aitsydney\Database;

class Category extends Database{
  public $category_array = array();

  public function __construct(){
    parent::__construct();
  }
  public function getCategories(){
    $query = "
      SELECT @cat_id := category.category_id AS category_id,
      category.category_name AS category_name,
      ( SELECT COUNT(product_id) FROM product_category WHERE category_id = @cat_id ) AS product_count
      FROM category
      WHERE category.active = 1
    ";
    $statement = $this -> connection -> prepare( $query );
    try{
      if( $statement -> execute() == false ){
        throw( new Exception('query execute failed') );
      }
      else{
        $categories = array();
        $result = $statement -> get_result();
        while( $row = $result -> fetch_assoc() ){
          array_push( $categories , $row );
        }
        $this -> category_array['items'] = $categories;
        $this -> category_array['active'] = $this -> getActiveCategoryId();
        $this -> category_array['page'] = $this -> getCurrentPage();
        return $this -> category_array;
      }
    }
    catch( Exception $e ){
      error_log( $e -> getMessage() );
    }
  }

  private function getActiveCategoryId(){
    //find which category is requested in the URL
    if( isset($_GET['category_id']) ){
      return $_GET['category_id'];
    }
  }

  private function getCurrentPage(){
    return basename( $_SERVER['PHP_SELF'] );
  }
}
?>