<?php
    $errors = array();

    $first_name = $_POST['yourname'];
	if (empty($first_name)) {
		$errors[] = 'You forgot to enter your name.';
    }
    
    $last_name = $_POST['username'];
	if (empty($last_name)) {
		$errors[] = 'You forgot to enter your username.';
    }
    
    $email = $_POST['email'];
	if (empty($email)) {
		$errors[] = 'You forgot to enter your email.';
	}

    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    if (!empty($password1)) {
    if ($password1 !== $password2) { 
        $errors[] = 'Your two password did not match.';
    } 
    } else {
    $errors[] = 'You forgot to enter your password.';
    }

    if (empty($errors)) {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db   = 'webkhoa';
        // B1: Ket noi DB
        $conn = mysqli_connect($host, $user, $pass, $db);
        if(!$conn){
            die("Ko the ket noi");
        }
        // B2: Khai bao truy van
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
        // B3: Kiem tra ban ghi co ton tai
        if(mysqli_num_rows($result)>0){
            echo "Nguoi dung voi Email da ton  tai";
        }else{
            $hashed_passcode = password_hash($password1, PASSWORD_DEFAULT);
            $activation_code = substr(md5(uniqid(rand(), true)), 16, 16);
            $sql = "INSERT INTO users (your_name, username, email, password, registration_date, activation_code) 
                    VALUES ('$first_name', '$last_name', '$email', '$hashed_passcode', NOW(), '$activation_code')";
            if(mysqli_query($conn, $sql)){
                require_once "contact.php";
                $m = new sendMail();
                $to = $email;
                $tieudethu = "[Đăng ký] Please verify your email address";           
                $noidungthu = "Bạn đã đăng kí tài khoản tại Khoa CNTT - ĐH Thủy Lợi, để sử dụng tài khoản, vui lòng nhấp vào liên kết
                sau đây: <a href='http://localhost/CSE485_1851171393_NguyenXuanThanh/3.PROJECT/active.php?code=".$activation_code."'>Click Here</a>";
                
                //dùng mail test, đừng dùng mail chính thức
                $from = "mintuan1103@gmail.com";
                
                //pass email gmail
                $p = "nigosmckbdkvpgdo";
                $m -> sendMailFromLocalhost($to, $from, $tennguoigui="CNTT-ĐH Thủy Lợi", $tieudethu, $noidungthu, $from, $p, $error);
                header("Location: register-thanks.php");
                exit();
            }else{
                echo "Loi. Kiem tra lai cau truy van: ".$sql;
            }
        }
    }else{
        echo "Hien thi loi";
    }
?>