<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
      <div class="row">
      <!-- <h1 class="text-center">Các sản phẩm</h1> -->
        <div class="col-md-6 border border-dark">
            <!-- Hien thi san pham -->
            
            <?php for($i=1;$i<6;$i++):?>
            <div class="product" style="display:inline-block">
                <div id="imgP"><img src="images/sp<?php echo $i; ?>.jpg" alt=""></div>
                <div id="tensp">Tensp<?php echo $i;?></div>
                <div id="gia">10000</div>
                <button type="button" class="btn-add btn btn-primary">Add</button>
            </div>
            <?php endfor; ?>
        </div>

        <div class="col-md-6 border border-dark">
            <!-- Hien thi san pham da chon -->
            <h1 class="text-center">Giỏ hàng</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Ảnh sp</th>
                        <th>Tên sp</th>
                        <th>Số lượng</th>
                        <th>Giá sp</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div class="Tong">0</div>
        </div>  
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>