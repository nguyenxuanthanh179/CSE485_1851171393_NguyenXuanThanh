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

        <div class="header" style="position:static">
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


      <main class="container m-5"  >
        <div class="row">
            <div class="col-md-12">
                <h3>Bạn đã đăng kí thành công. Vui lòng kiểm tra Email để kích hoạt tài khoản.</h3>
            </div>
        </div>
      </main>
<footer class="page-footer font-small pt-4" style="position:absolute; width: 100%; bottom:0">
  
  <div class="container text-center text-md-left">
    <!-- Grid row -->
    <div class="row">
   <!-- Grid column -->
      <div class="col-md-5 mx-auto">
  
        <img src="images/img-01.png">
        
              <p>Địa chỉ: nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội. Điện thoại: (+84)-024 3 5632211.
              Email: <a href="#">vpkcntt@tlu.edu.vn</a>
 
      </div>

      <hr class="clearfix w-100 d-md-none">

      
      <div class="col-md-2.5 mx-auto">

        <ul class="list-unstyled">
          <li>
            <a href="#!">Đào tạo đại học</a>
          </li>
          <li>
            <a href="#!">Mô hình đào tạo</a>
          </li>
          <li>
            <a href="#!">Định hướng ngành nghề</a>
          </li>
          <li>
            <a href="#!">Đào tạo sau đại học</a>
          </li>
        </ul>

      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-2.5 mx-auto">

        <ul class="list-unstyled">
          <li>
            <a href="#!">Thông tin seminar</a>
          </li>
          <li>
            <a href="#!">Các đề tài dự án</a>
          </li>
          <li>
            <a href="#!">Công trình công bố</a>
          </li>
          <li>
            <a href="#!">Các phòng thí nghiệm</a>
          </li>
        </ul>

      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-2.5 mx-auto">

        <ul class="list-unstyled">
          <li>
            <a href="#!">Công nghệ phần mềm</a>
          </li>
          <li>
            <a href="#!">Hệ thống thông tin</a>
          </li>
          <li>
            <a href="#!">Khoa học máy tính</a>
          </li>
          <li>
            <a href="#!">Kỹ thuật máy tính và mạng</a>
          </li>
        </ul>

      </div>
      
    </div>
 
  </div>
 
  <hr>
  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center" style="font-size: 30px;">
    <li class="list-inline-item">
      <a href="#" class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f" style="color: #3B5998;"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a href="#" class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter" style="color: #1DA1F2;"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a href="#" class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g" style="color: #EA4335;"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a href="#" class="btn-floating btn-ins mx-1">
        <i class="fab fa-instagram" style="color: #4267B2 ;"> </i>
      </a>
    </li>
    
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background: rgb(97,117,126);
    background: linear-gradient(180deg, rgba(97,117,126,0.6362920168067228) 0%, rgba(55,86,96,0.9051995798319328) 44%, rgba(57,83,97,1) 100%);
">&copy 2017 Khoa Công nghệ thông tin - Đại học Thủy lợi
    
  </div>
</footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- slick carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>