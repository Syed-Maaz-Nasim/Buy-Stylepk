<?php
    include('../admin/dist/connection.php');
    session_start();
    
    $id = $_POST["id"];
    $query="SELECT * FROM gallery WHERE product_id = ".$id;
    $data=mysqli_query($mycon,$query);
    $total=mysqli_num_rows($data);
    $rows=mysqli_fetch_assoc($data);
    if ($total != 0) {
        if (count($rows) > 0) {
            $image = $rows["product_image"];
            $title = $rows["product_title"];
            $desc = $rows["product_discription"];
            $price = $rows["product_price"];

            $idStr = strval($id);
            if (array_key_exists("product_id:".$idStr, $_SESSION))
            {
                $oldArray = $_SESSION['product_id:'.$idStr];
                $quantity = $oldArray['quantity'];
                $quantity++;

                $oldArray['quantity'] = $quantity;
                $_SESSION["product_id:".$idStr] = $oldArray;
                // $_SESSION['']++;
            }
            else {
                $product = array("id"=>$id, "desc"=>$desc, "image"=>$image, "title"=>$title, "price"=>$price, "quantity"=>1);
                $_SESSION['product_id:'.$idStr] = $product;
            }
            
// if session already contains product, just increment quantity by 1
            // $_SESSION['product_id:'.$idStr] = $product;
            // else add product in session

            print_r($_SESSION);
        }
        
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);

?>