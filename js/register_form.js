// join_form.js

$(document).ready(function(){
    function check_input(){
        // 아이디 작성여부
        if($("#join_form input[name='id']").val() == ""){
            $("#join_box .id_form span").text("아이디를 입력해주세요.").css("color", "red");

            $("#join_form input[name='id']").focus();
            return;
        }

        // 비밀번호 작성여부
        if($("#join_form input[name='pw']").val() == ""){
            $("#join_box .pw_form span").text("비밀번호를 입력해주세요.").css("color", "red");
            $("#join_form input[name='pw']").focus();
            return;
        }
    
        // 비밀번호 확인 작성여부
        if($("#join_form input[name='pw_confirm']").val() == "" || $("#join_form input[name='pw']").val() != $("#join_form input[name='pw_confirm']").val()){
            $("#join_box .pwConfirm_form span").text("비밀번호 정보가 일치 하지 않습니다.").css("color", "red");
            // document.join_form.pw.value = ""
            $("#join_form input[name='pw_confirm']").val() == "";
            $("#join_form input[name='pw']").focus();
            return;
        }
        
        // 이름 작성여부
        if($("#join_form input[name='name']").val() == ""){
            $("#join_box .name_form span").text("이름을 입력해주세요.").css("color", "red");
            $("#join_form input[name='name']").focus();
            return;
        }
        
        // 이메일 작성여부
        if($("#join_form input[name='email']").val().match("@") == null){
            $("#join_box .email_form span").text("이메일 형식이 올바르지 않습니다.").css("color", "red");
            $("#join_form input[name='email']").focus();
            return;
        }

        const $agree1 = $(".part input#checkAgree1").is(":checked");
        const $agree2 = $(".part input#checkAgree2").is(":checked");
        const $agree3 = $(".part input#checkAgree3").is(":checked");
        const $agree4 = $(".part input#checkAgree4").is(":checked");

        if(!$agree1 || !$agree2 || !$agree3 || !$agree4){
            alert("필수 약관을 선택해주세요.");
            return;
        }        

        // 위 모든 조건에서 문제가 발생하지 않는다면, 전송
        $("#join_form").submit();
    }

    // 체크박스
    $("#join_agreement #checkAll").click(function(){
        const $checked = $(this).is(":checked");

        if($checked){ //전체 동의 클릭하면 전체 선택
            $(this).closest("#join_agreement").find("input").attr("checked", true);
        }else{ //전체 동의 해제하면 전체 해제
            $(this).closest("#join_agreement").find("input").attr("checked", false)
        }
    });



    function check_change(){    
        const $agree1 = $(".part input#checkAgree1").is(":checked");
        const $agree2 = $(".part input#checkAgree2").is(":checked");
        const $agree3 = $(".part input#checkAgree3").is(":checked");
        const $agree4 = $(".part input#checkAgree4").is(":checked");
        const $agree5 = $(".part input#checkAgree5").is(":checked");
        const $agree6 = $(".part input#checkAgree6").is(":checked");  

        if($agree1 && $agree2 && $agree3 && $agree4 && $agree5 && $agree6){
            console.log("체크");  

            $("#join_agreement #checkAll").attr("checked", true);
        }else{
            $("#join_agreement #checkAll").attr("checked", false);
        }
    }

    $("#join_agreement .part input").on("change", () => {
        check_change();
    });


    // 취소 버튼 클릭시 입력값들 리셋
    function reset_form(){
        $("#join_form input[name='id']").val()="";  
        $("#join_form input[name='pw']").val()="";
        $("#join_form input[name='pw_confirm']").val()="";
        $("#join_form input[name='name']").val()="";
        $("#join_form input[name='name']").val()="";
        $("#join_form input[name='email']").val()=""
        $("#join_form input[name='id']").focus();
    }


    $("button.ok").click(function(){
        check_input();
    })
    $("button.reset").click(function(){
        reset_form();
    })
    

    

    
});
/*
function check_input(){
    // 아이디 작성여부
    if(!document.join_form.id.value){
        $("#join_box .id_form span").text("아이디를 입력해주세요.").css("color", "red");
        document.join_form.id.focus();
        return;
    }

    // 비밀번호 작성여부
    if(!document.join_form.pw.value){
        $("#join_box .pw_form span").text("비밀번호를 입력해주세요.").css("color", "red");
        document.join_form.pw.focus();
        return;
    }

    // 비밀번호 확인 작성여부
    if(!document.join_form.pw_confirm.value || document.join_form.pw.value != document.join_form.pw_confirm.value){
        $("#join_box .pwConfirm_form span").text("비밀번호 정보가 일치 하지 않습니다.").css("color", "red");
        // document.join_form.pw.value = ""
        document.join_form.pw_confirm.value = ""
        document.join_form.pw_confirm.focus();
        return;
    }
    
    // 이름 작성여부
    if(!document.join_form.name.value){
        $("#join_box .name_form span").text("이름을 입력해주세요.").css("color", "red");
        document.join_form.name.focus();
        return;
    }
    
    // 이메일 작성여부
    if(document.join_form.email.value.match("@") == null){
        $("#join_box .email_form span").text("이메일 형식이 올바르지 않습니다.").css("color", "red");
        document.join_form.email.focus();
        return;
    }

    document.join_form.submit();

}

// 취소 버튼 클릭시 입력값들 리셋
function reset_form(){
    document.join_form.id.value="";  
    document.join_form.pw.value="";
    document.join_form.pw_confirm.value="";
    document.join_form.name.value="";
    document.join_form.email.value="";
    document.join_form.id.focus();
}
*/
