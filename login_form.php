<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyB - 로그인</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/ login.css">
</head>
<body>
    <header>
        <?php include "./header.php"?>
    </header>

    <section>
     <div id="main_content">
            <h1>LOGIN MEMBER</h1>

            <div id="login_box">
                <form id="login_form" name="login_form" action="./login_insert.php" method="post">

                    <div class="form id_form"> <!-- 아이디 -->
                        <!-- <div class="label_box">
                            <label for="userid">아이디</label>
                        </div> -->
                        <div class="input_box">
                            <input type="text" name="id" id="userid" placeholder="아이디" required>
                        </div>
                    </div>

                    <div class="form pw_form"> <!-- 비밀번호 -->
                        <!-- <div class="label_box">
                            <label for="userpw">비밀번호</label>
                        </div> -->
                        <div class="input_box">
                            <input type="password" name="pw" id="userpw" placeholder="비밀번호" required>
                        </div>
                    </div>
                </form>
            </div>

            <div class="buttons">
                <button type="button">로그인</button>
                <button onclick ="location.href='./register_form.php'" type="button">회원가입</button>
            </div>
        </div>
    </section>

    <footer>
        <?php include "./footer.php"?>
    </footer>
    
    <script src="./js/login.js"></script>
</body>
</html>