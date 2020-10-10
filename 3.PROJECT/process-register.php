<?php
    $errors = array();

    $first_name = $_POST['yourname'];
	if (empty($first_name)) {
		$errors[] = 'You forgot to enter your first name.';
    }
    
    $last_name = $_POST['username'];
	if (empty($last_name)) {
		$errors[] = 'You forgot to enter your last name.';
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
        $db   = 'project';
        // B1: Ket noi DS
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
                $tieudethu = "[Web2Code2Vn] Please verify your email address";           
                $noidungthu = "Bạn đã đăng kí tài khoản tại Web2Code2VN, để sử dụng tài khoản, vui lòng nhấp vào liên kết
                sau đây: <a href='http://localhost/prac04/active.php?code=".$activation_code."'>Click Here</a>";
                
                //dùng mail test, đừng dùng mail chính thức
                $from = "web2code2vn@gmail.com";
            
                //pass email gmail
                $p = "nigosmckbdkvpgdo"; //thay_mat_khau_cua_ban_vao_day
                $m -> sendMailFromLocalhost($to, $from, $tennguoigui="Web2Code2Vn", $tieudethu, $noidungthu, $from, $p, $error);
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