<?php
    $conn = mysqli_connect('localhost','root','','webkhoa');
    if(!$conn){
        die('Khong the ket noi');
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/diendan.css">
    <script src="https://kit.fontawesome.com/591c492c07.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <style>
        .right input,
        .right select,
        .right textarea{
            width: 100%;
            outline: none;
        }

        .right textarea{
            height: 10rem;
        }

        .content{
            width: 50% !important;
        }

        @media only screen and (max-width:768px){
            .right input,
            .right select,
            .right textarea{
                margin-top: 0rem !important;
            }

            .content{
                width: 100% !important;
            }

            h6{
                font-size: 15px !important;
            }
        }
    </style>
</head>
  <body>

        <div class="container content">
                <div class="row">
                    <div class="col-md-12 mt-4">
                        <h4>Tạo câu hỏi </h4>
                     </div>
                </div>
            <form action="" method="post">
                <div class="row mt-5">
                    <div class="col-md-4 left">
                        <label>Tiêu đề</label>
                    </div>
                    <div class="col-md-8 right">
                        <input type="text" name="title">
                    </div>

                    <div class="col-md-4 left">
                        <label class="mt-4">Nội dung</label>
                    </div>
                    <div class="col-md-8 right">
                        <textarea name="content" class="mt-4"></textarea>
                    </div>

                    <div class="col-md-4 left">
                        <label class="mt-4">Chủ đề</label>
                    </div>
                    <div class="col-md-8 right">
                        <select  name="catalogue" class="mt-4">
                            <option value="0">-- Chọn --</option>
                            <option value="CSE Forum">CSE Forum</option>
                            <option value="Tin tức - thông báo">Tin tức - thông báo</option>
                            <option value="Tư vấn tuyển sinh">Tư vấn tuyển sinh</option>
                            <option value="Đào tạo - hướng nghiệp">Đào tạo - hướng nghiệp</option>
                        </select>
                    </div>

                    <div class="col-md-4 left">
                        <label class="mt-4">Tag</label>
                    </div>
                    <div class="col-md-8 right">
                        <input type="text" name="tag" class="mt-4">
                    </div>
                

                    <div class="col-md-12 mt-4">
                    <button type="submit" class="btn btn-success" name="add">Đăng</button>
                        <a class="btn btn-danger" href="diendan.php">Hủy bỏ</a>
                    </div>
                </div>
            </form>
        </div>

        <?php
            if(isset($_POST['add'])){
                $title = $_POST['title'];
                $content = $_POST['content'];
                $ctl = $_POST['catalogue'];
                $tag = $_POST['tag'];

                $query = "INSERT INTO forum (title, content, catalogue, tag)
                VALUES ('$title', '$content', '$ctl', '$tag')";
                
                mysqli_query($conn, $query);

                header('location: diendan.php');
            }
        ?>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>