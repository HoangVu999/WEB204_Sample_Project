<?php

require_once '../../libs/products.php';
require_once '../../config/config.php';

if(isset($_POST['btnsave'])){
    extract($_REQUEST);
    $okUpload = false;
    if($_FILES['image']['size'] > 0){
        $okUpload = true;
        $image = uniqid().$_FILES['image']['name'];
    }else
        $image = '';

    insert_products($name,$description, $image,$detail,$price,$sale,$status,$cate_id);
    if($okUpload){
        move_uploaded_file($_FILES['image']['tmp_name'],'../../images/' . $image);
    }
    header('Location:' .ROOT .'admin/?page=product');
}
?>

