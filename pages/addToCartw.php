<?php
    include('../admin/dist/connection.php');
    session_start();
    
    $id = $_POST["id"];
    $query="SELECT * FROM products_tbl WHERE product_id = ".$id;
    $data=mysqli_query($mycon,$query);
    $total=mysqli_num_rows($data);
    $rows=mysqli_fetch_assoc($data);
    if ($total != 0) {
        if (count($rows) > 0) {
            $image = $rows["product_image"];
            $title = $rows["product_title"];
            $desc = $rows["product_discription"];
            $price = $rows["product_price"];

            $product = array("id"=>$id, "desc"=>$desc, "image"=>$image, "title"=>$title, "price"=>$price, "quantity"=>1);
            $idStr = strval($id);
            $_SESSION['product_id:'.$idStr] = $product;
            print_r($_SESSION);
        }
        
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);

?>