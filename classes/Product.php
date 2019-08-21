<?php
namespace aitsydney;
class Product extends Database{
    public $products = array();
    private $category = null;
    private $perpage = 12;
    private $page = null;

    public $product_query = "
      SELECT 
      @product_id := product.product_id AS product_id,
      product.name,
      product.description,
      product.price,
      ( SELECT @image_id := product_image.image_id FROM product_image WHERE product_image.product_id = @product_id LIMIT 1 ) AS image_id,
      ( SELECT image_file_name FROM image WHERE image.image_id = @image_id ) AS image
      FROM product
    ";

    public function __construct(){
      parent::__construct();
      // if a category is in the GET request set the category variable
      if( isset( $_GET['category_id'] ) ){
        $this -> category = $_GET['category_id'];
      }
      if( isset( $_GET['page'] ) ){
        $this -> page = $_GET['page'];
      }
    }

    public function getProducts(){
      //if category is set modify the query to join with product_category table
      if( isset($this -> category) ){
        $this -> product_query = 
          $this -> product_query . " " . 
          "INNER JOIN product_category
          ON product.product_id = product_category.product_id
          WHERE product_category.category_id = ?";
      }
      //if pagination is enabled
      if( isset( $this -> page ) ){
        //append to the query to add pagination
        $this -> product_query = 
        $this -> product_query . " " .
        "AND product.product_id > ? 
        ORDER BY product.product_id LIMIT ? ";
      }
      $statement = $this -> connection -> prepare( $this -> product_query );
      //if category is set we need to bind the category_id 
      if( isset($this -> category) ){
        $statement -> bind_param( 'i' , $this -> category );
      }
      if( $statement -> execute() ){
          $result = $statement -> get_result();
          $products = array();
          $count = 0;
          while( $row = $result -> fetch_assoc() ){
              $count++;
              array_push( $products, $row );
          }
      }
      $this -> products['items'] = $products;
      $this -> products['total'] = $count;
      return $this -> products;
    }
    
}
?>