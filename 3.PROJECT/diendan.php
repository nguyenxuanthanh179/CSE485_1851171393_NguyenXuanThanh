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
                        <a class="nav-link" href="#" style="color: #10ad03 !important; font-weight: 500">
                        <i class="fas fa-question" style="margin-left:45%;"></i> 
                            <br>   
                        Tạo câu hỏi</a>
                    </li>
                    
                </ul>
                <ul  class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item mr-auto">
                      <a class="nav-link" href="login.php">
                      <i class="fas fa-key" style="margin-left:40%;"></i> <br>
                          Đăng nhập</a>
                  </li>
                </ul>
  
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
                <div class="content">
                    <div class="content1 row">
                        <div class="col-md-3">
                            <div class="d-flex">
                                <div>
                                    <div>0</div>
                                    <div>k thích</div>
                                </div>
                                <div>
                                    <div>0</div>
                                    <div>trả lời</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div>
                                <div>10 sai lầm của sinh viên năm Nhất</div>
                                <div>đã hỏi <span>2 ngày</span> trước trong . <span>3.1-Các vấn đề chung</span> bởi <span> admin </span> (560 điểm)</div>
                                <div class="d-flex">
                                    <div>năm nhất</div>
                                    <div>sai lầm</div>
                                    <div>tư vấn</div>
                                </div>
                            </div>
                        </div>
                    </div>
 
                    <!-- <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="col-md-3">
                                        
                                    </div>
                                </td>
                                <td>
                                    <div class="col-md-9">
                                        10 sai lầm của sinh viên năm nhất
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table> -->
                    <div id=question>
                        Hãy bắt đầu mọi thứ bằng <a href="#">một câu hỏi</a>
                    </div>
                </div>
          </div>
          <div class="col-md-4 col-12 right">
               <div class="d-flex search">
                    <div>
                        <input type="text" name="" id="" placeholder="tìm kiếm">
                    </div>
                    <div>
                        <input type="submit" id="tim" value="Tìm">
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
                           <li><a href="#" title="">Tất cả chuyên mục </a></li>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>