<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\ProductsTable;
use Helpers\HTTP;



if($_FILES['product_photo']['name']){

    move_uploaded_file($_FILES['product_photo']['tmp_name'], "photos/".$_FILES['product_photo']['name']);

    $img="photos/".$_FILES['product_photo']['name'];
    } else {
        echo "DOG";
    }


$data = [
    "product_name" => $_POST['product_name'] ?? 'Unknown',
    "product_description" => $_POST['product_description'] ?? 'Unknown',
    "product_photo" => $_FILES['product_photo']['name'],
    
];

$table = new ProductsTable(new MySQL());

if( $table ) {
    $table->insertProducts($data);
    
    HTTP::redirect("/gameupload.php", "registered=true");
} else {
    
    HTTP::redirect("/gameupload.php", "error=true");
}

