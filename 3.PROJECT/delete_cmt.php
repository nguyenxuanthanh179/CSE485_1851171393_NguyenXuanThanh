<?php 

        $ma = $_GET['cmt'];
        $conn = mysqli_connect('localhost','root','','webkhoa');
        if(!$conn){
            die('Khong the ket noi');
        }
         $sql = "DELETE FROM comment WHERE cmt = '$ma'";
        if(mysqli_query($conn,$sql)){
         header("Location:article.php");
        exit();
        }
        else{
        echo "co loi";
        }
         mysqli_close($conn);

?>