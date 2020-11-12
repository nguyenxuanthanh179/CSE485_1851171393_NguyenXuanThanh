<?php
    include('includes/config.php');
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Diễn đàn - CSE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/diendan.css">
    <script src="https://kit.fontawesome.com/591c492c07.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php" style="font-weight:600;">CSE.TLU</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
                    <li class="nav-item">
                      <a class="nav-link" href="diendan.php">
                      <i class="fas fa-align-left" style="margin-left:50%;"></i> <br>
                            Danh sách câu hỏi</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">
                          <i class="far fa-clone" style="margin-left:45%;"></i> <br>  
                            Chưa trả lời</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">
                          <i class="fas fa-tags" style="margin-left:40%;"></i> <br> 
                            Từ khóa</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">
                          <i class="fas fa-users"style="margin-left:40%;"></i> <br>  
                            Thành viên</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php" style="color: #10ad03 !important; font-weight: 500">
                        <i class="fas fa-question" style="margin-left:45%;"></i> 
                            <br>   
                        Tạo câu hỏi</a>
                    </li>
                    
                </ul> 
                <?php
                        if(!isset($_SESSION['username'])){
                    ?>
                        <ul  class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item mr-auto">
                            <a class="nav-link" href="login.php">
                            <i class="fas fa-key" style="margin-left:40%;"></i> <br>
                                Đăng nhập</a>
                        </li>
                        </ul>
               <?php } else{ ?>
                        <ul  class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item mr-auto position-relative">
                                <a href="#"><?php echo "Welcome: ".$_SESSION['username']; ?><i class="fas fa-angle-down ml-1"></i></a>
                                <ul class="position-absolute">
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    <?php } ?>  
  
            </div>
        </nav>
      </header>

    <div class="container content">
        <div class="row" >
            <div class="col-md-12 mt-4">
                <?php
                    
                    $query = "SELECT * FROM forum";
                    $result = mysqli_query($conn,$query);
                    $row = mysqli_fetch_assoc($result)
                ?>

                <h3 style="text-align:center;"><?php echo $row['title'] ?></h3>
                <div class="content">
                    <?php echo $row['content'] ?>
                </div>
            </div>   
        </div>    
        <hr style="margin-top: 50px;">    
        <div class="row">
            <div class="col-md-12">
                <h5>Bình luận</h5>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-9">
                            <input type="text" name="cmt" placeholder="Viết bình luận" style="width:100%;">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" name="post">Đăng</button>
                        </div>
                    </div>    
                </form>
            </div>   
        </div>
        <?php 
         if(isset($_POST['post'])){
             $cmt = $_POST['cmt'];
             $query = "INSERT INTO comment (cmt)
             VALUES ('$cmt')";
             mysqli_query($conn, $query);
            }
        ?>

        <div class="row">
                <div class="col-md-12 mt-4">
                        <?php
                             
                             $sql = "SELECT * FROM comment";
                             $result = mysqli_query($conn,$sql);
                             while($row = mysqli_fetch_assoc($result))
                                {
                        ?>
                    <div class="row">
                        <div class="col-md-9">
                            <div> <i class="fas fa-user"></i><?php echo $row['user']; ?> - <?php echo $row['date']; ?></div>
                            <h6 class="mt-2"><?php echo $row['cmt']; ?> </h6>
                            
                        </div>
                        <div class="col-md-3 mt-3">
                            <button id="like" class="btn btn-classic">
                                <i class="fas fa-thumbs-up"></i>
                                <label id="qlt1">0</label>
                            </button>
                            <button id="unlike" class="btn btn-classic">
                                <i class="fas fa-thumbs-down"></i>
                                <label id="qlt2">0</label>
                            </button>
                            <a class="btn btn-classic" type="submit" onclick="if (!confirm('Bạn có chắc muốn xóa?')) { return false }" href="delete_cmt.php?cmt=<?php echo $row['cmt']?>"><i class="fas fa-trash-alt"></i></a>
                        </div>                      
                    </div> 
                    <hr>   
                        <?php }
                        ?>
                </div>
        </div>
    </div>

    
    

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/diendan.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.1.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>  
  </body>
</html>
