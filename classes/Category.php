<?php
namespace aitsydney;

use aitsydney\Database;

class Category extends Database{
  $query = "
  SELECT @cat_id := category.category_id AS category_id,
  category.category_name AS category_name,
  ( SELECT COUNT(product_id) FROM product_category WHERE category_id = @cat_id ) AS product_count
  FROM `category` WHERE category.active = 1
  ";
  public function __construct(){
    parent::__construct();
  }
  public function getCategories(){
    
  }
}
?>