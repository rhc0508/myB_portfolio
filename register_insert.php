<!-- /* register_insert.php */ -->
<?php
    
    $id = $_POST["id"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];
    $email = $email1."@".$email2;
    $regist_day = date("Y-m-d (H:i)");


    // var_dump($id);
    // var_dump($pw);
    // var_dump($name);
    // var_dump($email);
    // var_dump($regist_day);
    
    include "./db_con.php";

    // 기존 아이디가 존재하는 것 찾기
    $sql = "select * from member where id='$id'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result); 

    if($num_record){
        // DB에 동일한 아이디 존재 -> 회원가입 화면으로 다시 돌려보냄
        echo ("
            <script>
                alert('동일한 아이디가 존재합니다. 다른 아이디로 변경해주세요.');
                history.go(-1);
            </script>
        ");
    }else{
        // DB에 동일한 아이디 존재 X -> 회원가입 진행
        // 	id	pw	name	email	level	point	
        $sql = "insert into member (id, pw, name, email, regist_day, level, point) values('$id', '$pw', '$name', '$email', '$regist_day', 9, 0)";
        mysqli_query($con, $sql);
    }
    mysqli_close($con); //접속 종료

    echo "
        <script>
            location.href ='./';
        </script>
    ";


?>
