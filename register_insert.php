<?php
    /* register_insert.php */
    
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];
    $email = $email1."@".$email2;
    $regist_day = date("Y-m-d (H:i)");
    $level = 9;
    $point = 0;

    // var_dump($id);
    // var_dump($pw);
    // var_dump($name);
    // var_dump($email);
    // var_dump($regist_day);
    
    include "./db_con.php";

    // 	id	pw	name	email	level	point	
    $sql = "insert into member (id, pw, name, email, regist_day, level, point) values('$id', '$pw', '$name', '$email', '$regist_day', 9, 0)";

    mysqli_query($con, $sql);
    mysqli_close($con); //접속 종료

    echo "
        <script>
            location.href ='./';
        </script>
    ";


?>
