<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Khoa Công nghệ thông tin - Trường Đại học Thủy Lợi</title>
    <link rel="shortcut icon" href="/images/CSE logo.jpg" type="images/jpg">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/tintuc&thongbao.css">
   <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Dancing+Script&family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f58278cdb0.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <div class="wrapper">
        <!-- start header -->

        <div class="header">
        <div class="header__menu">
                <div class="header__logo " style="padding-bottom: 15px">
                    <img src="http://localhost/CSE485_1851171393_NguyenXuanThanh/3.PROJECT/images/logo.jpg">
                </div>
                <div class="humbeger" >
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <ul class="temp" >
                    <li class="hover">
                        <a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
                    </li>
                    <li class="hover">
                        <a href="gioithieu.php">Giới thiệu</a>
                    </li>
                    <li class="hover">
                        <a href="diendan.php">Diễn đàn</a>
                    </li>
                    <li class="hover">
                        <a href="sinhvien.php">Sinh viên</a>
                    </li>
                    <li class="hover">
                        <a href="#">Tin tức & Thông báo</a>
                        <ul class="cardd cardd1">
                            <li><a href="#">Sự kiện</a></li>
                            <li><a href="#">Nghiên cứu khoa học</a></li>
                            <li><a href="#">Tuyển dụng</a></li>
                        </ul>
                    </li>
                    
                    <?php
                        if(!isset($_SESSION['username'])){
                    ?>
                        <li class="hover">
                            <a href=""#>(+)</a>
                            <ul class="cardd cardd2">
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>
                            </ul>
                        </li>
                    <?php } else{ ?>
                        <li class="hover">
                            <a href="#"><?php echo "Welcome: ".$_SESSION['username']; ?><i class="fas fa-angle-down ml-1"></i></a>
                            <ul class="cardd cardd2">
                                 <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </li> 
                    <?php } ?>                    
                </ul>
            </div>
        </div>

