<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\ProductsTable;
use Helpers\HTTP;
use Helpers\Auth;

$auth = Auth::check();
$table = new ProductsTable(new MySQL());
$id = $_GET['product_id'];
$table->delete($id);

HTTP::redirect("/store.php");
