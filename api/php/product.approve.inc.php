<?php    
    if($_SERVER["REQUEST_METHOD"] === 'POST'){    
        require_once($_SERVER['DOCUMENT_ROOT'] . '/haraj/class/product.inc.php');    
        $product = new Product();
        $pro_id = $_POST['id'];
           
        $response = $product->approve_product($pro_id);
        print json_encode($response);
    }//end if 
?>