<?php

    require_once($_SERVER['DOCUMENT_ROOT'] . '/haraj/class/product.inc.php');    
        $product = new Product();
        $proid=$_COOKIE[$proid]
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);


if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {
 $status = 1;
		//insert file information into db table
        $query = "INSERT INTO product (product_name,product_price,product_description,product_condition,saler_name,saler_phone,saler_city,saler_address,category_id) VALUES ('{$product_name}','{$product_price}','{$product_description}','{$product_condition}','{$saler_name}','{$saler_phone}','{$saler_city}','{$saler_address}',{$category_id})";
            
            $response['error'] = true;
            if($this->db->execute_query($query) > 0){
                $response['error'] = false;
                $response["product"] = $this->get_last_product();
            } else {
                $response['error_number'] = 1;
            }//end if            
            return $response;
exit();
}

?>