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
                      <a class="nav-link" href="#">
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
      <main class="container">
          <div class="row">
            <div class="col-md-8 col-12 left">
                <div class="box1">
                    <div>
                        Câu hỏi và trả lời gần đây
                    </div>
                </div>
               
                <div id="result">
                
                    
                </div>
                <div id=question>
                        Hãy bắt đầu mọi thứ bằng <a href="add.php">một câu hỏi</a>
                </div>
          </div>
          <div class="col-md-4 col-12 right">
               <div class="d-flex search">
                    <div>
                        <input type="text" name="search_text" id="search_text" placeholder="tìm kiếm">
                    </div>
                    <div>
                        <a href="timkiem.php"><input type="submit" id="tim" value="Tìm"></a>
                    </div>
               </div>
               <div style="margin-top: 15px; font-size:20px;">
                   <div class="d-flex" >
                        <div class="col-md-6 question">
                            <i class="fa fa-question"></i>
                            4 câu hỏi
                        </div>
                        <div class="col-md-6 answer">
                        <i class="far fa-comment-alt"></i>
                            3 trả lời
                        </div>
                   </div>
                   <div class="d-flex">
                       <div class="col-md-6 cmt">
                       <i class="far fa-comment"></i>
                           0 bình luận
                       </div>
                       <div class="col-md-6 member">
                           <i class="fa fa-users"></i>
                           3 thành viên
                       </div>
                   </div>
               </div>
               <div class="chuyen-muc">
                   <div>
                       <h6>Chuyên mục</h6>
                   </div>
                   <div>
                       <ul>
                           <li><a href="categories.php" title="">Tất cả chuyên mục </a></li>
                           <li><a href="#" title="">0. CSE Forum </a><span>(0)</span></li>
                           <li><a href="#" title="">1.Tin tức - thông báo </a><span>(0)</span></li>
                           <li><a href="#" title="">2.Tư vấn Tuyển sinh</a> <span>(3)</span></li>
                           <li><a href="#" title="">3.Đào tạo- Hướng nghiệp</a> <span>(1)</span></li>
                       </ul>
                    </div>
               </div>
               <div class="bot">
                   <p>Chào mừng đến với CSE.TLU nơi bạn có thể đặt câu hỏi</p>
               </div>
          </div>
          </div>
      </main>
      
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
<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"search.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>