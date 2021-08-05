<?php 
    $id = $_POST["id"];
    $idStr = strval($id);
    session_start();
    // var_dump($_SESSION);
    // die();
    // var_dump("");
    unset($_SESSION['product_id:'.$idStr]);
    // var_dump($_SESSION);
    header('Location: cart.php');
?>