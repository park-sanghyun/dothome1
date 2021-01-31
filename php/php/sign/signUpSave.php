<?php
    include '../connect/connect.php';
    include '../connect/session.php';

    // echo $_POST['userEmail'], "<br>";
    // echo $_POST['userName'], "<br>";
    // echo $_POST['userNickName'], "<br>";
    // echo $_POST['userPW'], "<br>";
    // echo $_POST['birthYear'], "<br>";
    // echo $_POST['birthMonth'], "<br>";
    // echo $_POST['birthDay'], "<br>";

    $userEmail = $_POST['userEmail'];
    $userName = $_POST['userName'];
    $userNickName = $_POST['userNickName'];
    $userPW = $_POST['userPW'];
    $birthYear = $_POST['birthYear'];
    $birthMonth = $_POST['birthMonth'];
    $birthDay = $_POST['birthDay'];

    //이메일 검사
    if( !filter_Var($userEmail, FILTER_VALIDATE_EMAIL) ){
        echo "올바른 이메일이 아닙니다.";
        exit;
    }

    //이름이 한글로 구성되어 있는지 확인(정규식 표현법)
    $userNamePattern = '/^[가-힣]{1,}$/';
    if( !preg_match($userNamePattern, $userName, $matches )){
        echo "한글로 이루어진 이름이 아닙니다.";
        exit;
    }

    //유효성 검사
    if( $userName == null || $userName == '' ){
        echo "이름을 입력해주세요!!";
        exit;
    }
    if( $userNickName == null || $userNickName == '' ){
        echo "닉네임을 입력해주세요!!";
        exit;
    }
    if( $userPW == null || $userPW == '' ){
        echo "패스워드를 입력해주세요!!";
        exit;
    }
    if( $birthYear == 0 ){
        echo "생일 년도를 선택해 주세요";
        exit;
    }
    if( $birthMonth == 0 ){
        echo "생일 월을 선택해 주세요";
        exit;
    }
    if( $birthDay == 0 ){
        echo "생일 일을 선택해 주세요";
        exit;
    }
    $birth = $birthYear.'-'.$birthMonth.'-'.$birthDay;

    //이메일 중복 검사
    $userEmailCheck = false;
    $sql = "SELECT youEmail FROM myMember WHERE youEmail = '{$userEmail}'";
    $result = $dbConnect -> query($sql);
    if ( $result ){
        $count = $result -> num_rows;
        if( $count == 0 ){
            $userEmailCheck = true;
            echo "youEmail X";
        } else {
            echo "youEmail O";
            exit;
        }
    }
    
    //닉네임 중복 검사
    // $userNickNameCheck = false;
    // //sql 검사 부분
    // $userNickNameCheck = true;
    // //데이터 입력
    // if( $userEmailCheck = true && $userNickNameCheck = true ){
    // }
?>