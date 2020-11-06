<?php 
     require('include/config.php');

    if (isset($_POST['add']) && $_POST['mamon'] != ""){
                                $mamon= $_POST['mamon'];
                                $tenmonhoc=$_POST['tenmonhoc'];
                                $mota= $_POST['mota'];
                                
                                $sql= "INSERT INTO tb_monhoc(mamon,tenmonhoc,mota) VALUES ('$mamon','$tenmonhoc','$mota')";
                                mysqli_query($conn,$sql);
                           }                            
                        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                   <div class="page-header">
                        <h2>Thêm môn học</h2>
                   </div>
                    <form action="" method="post">
                        <div class="form-group required control-label">
                            <label for="mamon" style="font-weight:bold;">Mã môn</label>
                            <input type="text" name="mamon" id="mamon" class="form-control" value="">
                       
                        </div>
                        <div class="form-group">
                            <label for="tenmonhoc" style="font-weight:bold;">Tên môn</label>
                            <input type="text" name="tenmonhoc" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="mota" style="font-weight:bold;">Mô tả</label>
                            <textarea type="text" name="mota" class="form-control"></textarea>
                        </div>
                       <input type="submit" name="add" class="btn btn-primary" value="Lưu lại" onclick="check()">
                       <a href="add.php" class="btn btn-default btn-primary" style="border:1px solid #ccc">Reset</a>
                        <a href="index.php" class="btn btn-default btn-primary" style="border:1px solid #ccc">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>