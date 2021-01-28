<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
    
        // 세션 생성
        $_SESSION['userID'] = 'parksanghyun';
    
        if(isset($_SESSION['userID'])){
            echo "세션 생성 성공.";
            echo "{$_SESSION['userID']}";
        } else {
            echo "세션 생성 실패.";
        }
    ?>
</body>
</html>