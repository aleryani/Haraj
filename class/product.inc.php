<?php
    include_once($_SERVER['DOCUMENT_ROOT'] . '/haraj/core/init.inc.php');
    class Product {        
        private $db;
        
        public function __construct(){
            $this->db = new db_connect();
        }
        
        

        public function get_products_by_category($category_id){
            $category_id = $this->db->escape_string($category_id);
            $response['error'] = true;
            
                $response['error'] = false;
                $query = "SELECT * FROM product WHERE category_id={$category_id}";
                $response['product'] = $this->db->execute_select_query($query);
          
            return $response;
        }//end get_products_by_category function

        public function get_products(){
            $category_id = $this->db->escape_string($category_id);
            $response['error'] = true;

                $response['error'] = false;
                $query = "SELECT * FROM product ";
                $response['product'] = $this->db->execute_select_query($query);

            return $response;
        }
        
        public function get_products_with_images(){

            $response['error'] = true;
     
                $response['error'] = false;
                $query = "SELECT product.product_id,product.product_name, product.product_price, product.product_description, category.category_name, product.publish_date, product.saler_city, product.saler_address, product.product_status,product.product_condition, product_picture.picture_path FROM   category INNER JOIN product ON category.category_id = product.category_id INNER JOIN product_picture ON product.product_id = product_picture.product_id where product_status=1";
                $response['product'] = $this->db->execute_select_query($query);
   
            return $response;
        }
        public function get_pending_products_with_images(){

            $response['error'] = true;
     
                $response['error'] = false;
                $query = "SELECT product.product_id,product.product_name, product.product_price, product.product_description, category.category_name, product.publish_date, product.saler_city, product.saler_address, product.product_status,product.product_condition, product_picture.picture_path FROM   category INNER JOIN product ON category.category_id = product.category_id INNER JOIN product_picture ON product.product_id = product_picture.product_id where product_status=0";
                $response['product'] = $this->db->execute_select_query($query);
   
            return $response;
        }

        public function get_product_Details($product_id){
        
            $response['error'] = true;
        
                $response['error'] = false;
                $query = "SELECT category.category_name, product.product_name,product.product_condition, product.product_price, product.product_description, product.saler_name, product.saler_city, product.saler_phone, product.saler_address, product.publish_date,product.product_id FROM   category INNER JOIN product ON category.category_id = product.category_id WHERE (product.product_id = {$product_id})";
                $response['product'] = $this->db->execute_select_query($query);
   
            return $response;
        }

        
        
        function get_last_product(){            
            $query = "SELECT * FROM product WHERE product_id=(SELECT MAX(product_id) FROM product)";
            return $this->db->execute_select_query($query)[0];
        }//end get_last_product function 
        
        public function new_product($product_name,$product_price,$product_description,$product_condition,$saler_name,$saler_phone,$saler_city,$saler_address,$category_id){
            $product_name = $this->db->escape_string($product_name);
            $product_price = $this->db->escape_string($product_price);
            $product_description = $this->db->escape_string($product_description);
            $product_condition = $this->db->escape_string($product_condition);
            $saler_name = $this->db->escape_string($saler_name);
            $saler_phone = $this->db->escape_string($saler_phone);
            $saler_city = $this->db->escape_string($saler_city);
            $saler_address = $this->db->escape_string($saler_address);

            $category_id = $this->db->escape_string($category_id);
            
            $query = "INSERT INTO product (product_name,product_price,product_description,product_condition,saler_name,saler_phone,saler_city,saler_address,category_id) VALUES ('{$product_name}','{$product_price}','{$product_description}','{$product_condition}','{$saler_name}','{$saler_phone}','{$saler_city}','{$saler_address}',{$category_id})";
            
            $response['error'] = true;
            if($this->db->execute_query($query) > 0){
                $response['error'] = false;
                $response["product"] = $this->get_last_product();
            } else {
                $response['error_number'] = 1;
            }//end if            
            return $response;
        }//end new_product function

        public function approve_product($product_id){
            $product_id = $this->db->escape_string($product_id);
            $query = "UPDATE product set product_status='1' where product_id='{$product_id}'";
            
            $response['error'] = true;
            if($this->db->execute_query($query) > 0){
                $response['error'] = false;
            } else {
                $response['error_number'] = 1;
            }//end if            
            return $response;
        }//end new_product function
        public function new_product_img($product_id,$product_img){
            $product_id = $this->db->escape_string($product_id);
            $product_img = $this->db->escape_string($product_img);
            
            $query = "INSERT INTO product_picture (product_id,picture_path) VALUES ('{$product_id}','{$picture_path}')";
            
            $response['error'] = true;
            if($this->db->execute_query($query) > 0){
                $response['error'] = false;
               // $response["product"] = $this->get_last_product();
            } else {
                $response['error_number'] = 1;
            }//end if            
            return $response;
        }//end new_img function
        
        
        public function get_products_by_ids($ids){
            $query = "SELECT * FROM product WHERE product_id IN ({$ids})";
            return $this->db->execute_select_query($query);
        }//end get_locations_by_id function

        public function get_categories(){
            $query = "SELECT * FROM category";
            return $response['categories'] = $this->db->execute_select_query($query);
        
        }
    }

?>