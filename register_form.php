<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myB - 회원가입</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <header>
        <?php include "./header.php"?>
    </header>

    <section>
        <div id="main_content">
            <h1>JOIN MEMBER</h1>

            <div id="join_box">
                <form id="join_form" name="join_form" action="./register_insert.php" method="post">

                    <div class="form id_form"> <!-- 아이디 -->
                        <div class="label_box">
                            <label for="userid">아이디</label>
                        </div>
                        <div class="input_box">
                            <input type="text" name="id" id="userid" required>
                            <span></span>
                        </div>

                        <!-- 중복체크 register_check_id.php -->
                        <!--이미 사용중인 아이디입니다. 다른 아이디를 입력해주세요.-->
                    </div>

                    <div class="form pw_form"> <!-- 비밀번호 -->
                        <div class="label_box">
                            <label for="userpw">비밀번호</label>
                        </div>
                        <div class="input_box">
                            <input type="password" name="pw" id="userpw" required>
                            <span></span>
                        </div>
                    </div>

                    <div class="form pwConfirm_form"> <!-- 패스워드 확인 -->
                        <div class="label_box">
                            <label for="userpw_confirm">비밀번호 확인</label>
                        </div>
                        <div class="input_box">
                            <input type="password" name="pw_confirm" id="userpw_confirm" required>
                            <span></span> 
                        </div>
                        
                    </div>

                    <div class="form name_form"> <!-- 이름 -->
                        <div class="label_box">
                            <label for="username">이름</label>
                        </div>
                        <div class="input_box">
                            <input type="text" name="name" id="username" required>
                            <span></span>
                        </div>
                    </div>

                    <div class="form email_form"> <!-- 이메일 -->
                        <div class="label_box">
                            <label for="useremail">이메일</label>
                        </div>
                        <div class="input_box">
                            <input type="email" name="email" id="useremail" required>
                            <span></span>
                        </div>
                    </div>
                </form>
            </div>

            <!-- 체크박스 -->
            <div id="join_agreement">
                <div class="all">
                    <span>
                        <input type="checkbox" name="checkAll" id="checkAll">
                        <label for="checkAll">전체 동의합니다.</label>    
                    </span>
                    <span>전체동의는 필수 및 선택정보에 대한 동의도 포함되어 있으며, 개별적으로도 동의를 선택하실 수 있습니다. <br> 선택항목에 대한 동의를 거부하는 경우에도 회원가입 서비스는 이용 가능합니다.</span> 
                </div>
                <div class="part">
                    <ul>
                        <li>
                            <span>
                                <input type="checkbox" name="" id="checkAgree1"  required>
                                <label for="checkAgree1">만 14세 이상입니다.(필수)</label>
                            </span>
                        </li>
                        <li>
                            <span>
                                <input type="checkbox" name="" id="checkAgree2"  required>
                                <label for="checkAgree2">이용약관 동의(필수)</label>
                            </span>
                            <button type="button">내용보기</button>
                        </li>
                        <li>
                            <span>
                                <input type="checkbox" name="" id="checkAgree3"  required>
                                <label for="checkAgree3">개인정보 수집 및 이용에 대한 동의(필수)
                                </label>
                            </span>
                            <button type="button">내용보기</button>
                        </li>
                        <li>
                            <span>
                                <input type="checkbox" name="" id="checkAgree4"  required>
                                <label for="checkAgree4">개인정보 제3자 제공에 대한 동의(필수)
                                </label>
                            </span>
                            <button type="button">내용보기</button>
                        </li>
                        <li>
                            <span>
                                <input type="checkbox" name="" id="checkAgree5">
                                <label for="checkAgree5">개인정보 수집 및 이용안내(선택)
                                </label>
                            </span>
                            <button type="button">내용보기</button>
                        </li>
                        <li>
                            <span>
                                <input type="checkbox" name="" id="checkAgree6">
                                <label for="checkAgree6">개인정보 제3자 제공에 대한 동의(선택)
                                </label>
                            </span>
                            <button type="button">내용보기</button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="buttons">
                <button class="reset" type="button">취소</button>
                <button class="ok" type="button">확인</button>
            </div>
        </div>
    </section>
<!-- 
    <div class="dark"></div>
    <div class="popup">
        <div class="terms_title">
            <h2>이용약관</h2>
            <button class="close_btn"></button>
        </div>
        <div class="terms_cont">

        </div>
    </div> -->


    <footer>
        <?php include "./footer.php"?>
    </footer>
    
    <script src="./js/register_form.js"></script>
</body>
</html>