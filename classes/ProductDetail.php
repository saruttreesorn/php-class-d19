<?php
namespace aitsydney;

use aitsydney\Product;
use aitsydney\Database;

class ProductDetail extends Product{
  public $product_detail = array();

  public function __construct(){
    parent::__construct();
  }

  public function getProductDetail($id){
    //get the details from product table based on its id
    $product_query = "
      SELECT 
      product.product_id,
      product.name,
      product.price,
      product.description,
      product_quantity.quantity
      FROM product
      INNER JOIN product_quantity
      ON product.product_id = product_quantity.product_id
      WHERE product.product_id = ?
      AND active = 1
    ";
    $statement = $this -> connection -> prepare( $product_query );
    //pass the product id as parameter of type 'i' for integer
    $statement -> bind_param( 'i', $id );
    if( $statement -> execute() ){
        $result = $statement -> get_result();
        $row = $result -> fetch_assoc();
        //store product detail in 'product' key in the array product_detail
        $this -> product_detail['product'] = $row;
        //get all images for the product by calling getProductImages() with the id of the product
        $this -> product_detail['images'] = $this -> getProductImages( $id );
        return $this -> product_detail;
    }
  }
  public function getProductImages( $id ){
    //get the images that belong to the product
    $image_query = "
      SELECT
      image.image_file_name AS image
      FROM product_image
      INNER JOIN
      image
      ON product_image.image_id = image.image_id
      WHERE product_image.product_id = ?
    ";
    $product_images = array();
    $statement = $this -> connection -> prepare( $image_query );
    $statement -> bind_param( 'i' , $id );
    if( $statement -> execute() ){
        $result = $statement -> get_result();
        while( $row = $result -> fetch_assoc() ){
            array_push( $product_images, $row['image'] );
        }
        return $product_images;
    }
  }
}

?>