<?php    
    if($_SERVER["REQUEST_METHOD"] === 'POST'){    
        require_once($_SERVER['DOCUMENT_ROOT'] . '/haraj/class/product.inc.php');    
        $product = new Product();
        $ddlcat = $_POST['ddlcat'];
        $pro_name = $_POST['pro_name'];
        $pro_price = $_POST['pro_price'];    
        $pro_desc = $_POST['pro_desc'];    
        $pro_cond = $_POST['pro_cond'];
        $seller_name = $_POST['seller_name'];    
        $seller_mob = $_POST['seller_mob'];
        $seller_city = $_POST['seller_city'];  
        $seller_address = $_POST['seller_address'];               
        $response = $product->new_product($pro_name,$pro_price,$pro_desc,$pro_cond,$seller_name,$seller_mob,$seller_city,$seller_address,$ddlcat);
        print json_encode($response);
    }//end if 
?>