<?php
require_once '../../config/config.php';
include_once '../../libs/database.php';
include_once '../../libs/categories.php';

if(isset($_POST['btn-edit'])){
    extract($_REQUEST);
    $okUpload = false;
    if($_FILES['image']['size'] > 0){
        $okUpload = true;
        $image = uniqid().$_FILES['image']['name'];
    }else{
        $image = '';
    }

    update_category($name,$image,$id);
    if($okUpload){
        move_uploaded_file($_FILES['image']['tmp_name'],'../../images/' . $image);
    }
    header('Location:' .ROOT .'admin/?page=category');
}

?>
