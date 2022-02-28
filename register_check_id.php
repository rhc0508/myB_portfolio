<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 중복체크</title>
    <link rel="stylesheet" href="./css/idChk_pop.css">
</head>
<body>
    <h2 id="idChk_title">아이디 중복체크</h2>
    <div id="idChk_txt">

<?php
    // http://localhost:8080/portfolio/register_check_id.php?id=admin

    $id = $_GET["id"];
    // var_dump($id);

    if(!$id){
        // http://localhost:8080/portfolio/register_check_id.php?id=
        echo("<p>아이디를 입력해주세요.</p>");
    }else{
        // http://localhost:8080/portfolio/register_check_id.php?id=admin
        include "./db_con.php";
        $sql = "select * from member where id='$id'";
        // var_dump($sql);

        $result = mysqli_query($con, $sql);
        // var_dump($result); //객체화된 데이터들의 종합정보

        $num_record = mysqli_num_rows($result);
        // var_dump($num_record); //int(1) : 동일한 아이디가 하나 존재한다.(true) //int(0): 동일한 아이디가 존재하지 않는다.(false)

        if($num_record){
            echo "<p><b>".$id."</b> 아이디는 <span>중복된 아이디</span>입니다.</p><p>다른 아이디를 사용해 주세요.</p>";
        }else{
            echo "<p><b>".$id."</b> 아이디는 <span>사용 가능</span>합니다.</p>";
        }

        mysqli_close($con);
    }

?>

    </div>
    <div id="close">
        <button type="button" onclick="self.close();">닫기</button>
    </div>
    
</body>
</html>