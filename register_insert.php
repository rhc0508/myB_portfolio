<?php
    /* register_insert.php */
    
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $regist_day = date("Y-m-d (H:i)");

    var_dump($id);
    var_dump($pw);
    var_dump($name);
    var_dump($email);
?>