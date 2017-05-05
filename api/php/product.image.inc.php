<?php
if(isset($_POST['submit_image']))
{
    require_once($_SERVER['DOCUMENT_ROOT'] . '/haraj/class/product.inc.php');    
        $product = new Product();
        $proid=$_COOKIE[$proid]
for($i=0;$i<count($_FILES["upload_file"]["name"]);$i++)
{
 $uploadfile=$_FILES["upload_file"]["tmp_name"][$i];
 $folder="images/";
 move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i], "$folder".$_FILES["upload_file"]["name"][$i]);
 $response = $product->new_product_img($pro_id,$_FILES["upload_file"]["tmp_name"][$i]);

}
exit();
}
?>