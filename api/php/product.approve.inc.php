<?php    
    if($_SERVER["REQUEST_METHOD"] === 'POST'){    
        require_once($_SERVER['DOCUMENT_ROOT'] . '/haraj/class/product.inc.php');    
        $product = new Product();
        $pro_id = $_POST['id'];
        $pro_stat=$_POST['stat'];
           
        $response = $product->approve_product($pro_id,$pro_stat);
        print json_encode($response);
    }//end if 
?>