<?php
// B1: Ket noi database Server;
$conn = mysqli_connect('localhost','root','','webkhoa');
if(!$conn){
    die('Khong the ket noi');
}
if (isset($_POST['button'])) {
    // Kiem tra
    $errors = array();
    $username = $_POST['username'];
	if (empty($username)) {
		$errors[] = 'You forgot to enter your email address.';
    }

    $password = $_POST['password'];
	
	if (empty($password)) {	
			$errors[] = 'Your two password did not match.';
	} 
    // Kiem tra Error:
    if (empty($errors)){
        
        // B2: Khai bao cau truy van
        $sql = "SELECT * FROM users WHERE username='$username'";
        // echo $sql;
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $row =mysqli_fetch_assoc($result);


            // print_r($row);
            $password_hash = $row['password'];
            // echo $password_hash;
            if(password_verify($password,$password_hash)){
                header("Location: index.php");
            }else{
                echo "Chưa khớp";
            }
        }else{
            echo ".....";
        }

    }else{
        // Co loi, hien thi lai loi cho nguoi dung biet
        echo "Co loi nhap lieu ...";
    }
}
?>