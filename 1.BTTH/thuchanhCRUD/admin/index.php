<!doctype html>
<html lang="en">
  <head>
    <title>index</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
    <center><h1>DANH SÁCH MÔN HỌC</h1></center>
    <form action="" style="margin:30px 0px">
      <label for="" style="font-size:23px; margin-right:10px">Tên môn</label>
      <input type="text" name="search" id="" placeholder="Tìm kiếm">
      <input type="submit" value="Tìm" class="btn btn-success mb-1" >
    </form>
      <table class="table table-striped table-bordered">
          <thead>
              <tr>
                  <th><input type="checkbox" name="" id=""></th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                  <th>Tên môn</th>
                  <th>Mô tả</th>
              </tr>
          </thead>
          <tbody>
            <?php
                require('include/config.php');
                include('include/function.php');
                $emps = getAllEmps();
                foreach($emps as $row){
            ?>
              <tr>
                  <td>
                    <input type="checkbox" name="" id="">
                  </td>
                  <td>
                    <a href="edit.php?id=<?php echo $row[0];?>"><i class="fas fa-edit"></i></a>
                  </td>
                  <td>
                  <a href="delete.php?id=<?php echo $row[0];?>"><i class="fas fa-trash-alt"></i></a>

                  </td>
                  <td><?php echo $row[2];?></td>
                  <td><?php echo $row[3];?></td>               
              </tr>
            <?php
                }
            ?>
          </tbody>
      </table>
      <div class="chucnang">
        <a href="add.php" class="btn btn-success">Thêm mới</a>
        <a href="delete.php" class="btn btn-success">Xóa</a>
        <a href="index.php" class="btn btn-success">Cập nhật</a>
      </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>