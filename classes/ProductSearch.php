<?php
namespace aitsydney;

use aitsydney\Product;

class ProductSearch extends Product {

  public $search_result = array();

  public function __construct(){
    parent::__construct();
  }

  public function searchProducts( $keyword ){
    //append '%' to keyword to be able to match words containing keyword
    $search_term = "%$keyword%";
    //this class inherits $product_query from product, so we can append to it to add search term
    $search_query = $this -> product_query . ' ' . 'WHERE name LIKE ? OR description LIKE ?';
    $statement = $this -> connection -> prepare( $search_query );
    $statement -> bind_param( 'ss', $search_term, $search_term );
    if( $statement -> execute() ){
      $result = $statement -> get_result();
      $products = array();
      $total = 0;
      while( $row = $result -> fetch_assoc() ){
        $total++;
        array_push( $products, $row );
      }
      $this -> search_result['keyword'] = $keyword;
      $this -> search_result['products'] = $products;
      $this -> search_result['total'] = $total;
    }
    return $this -> search_result;
  }
}
?>