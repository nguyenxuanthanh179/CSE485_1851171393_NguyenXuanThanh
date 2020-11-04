<?php 

        $ma = $_GET['title'];
        $conn = mysqli_connect('localhost','root','','webkhoa');
        if(!$conn){
            die('Khong the ket noi');
        }
         $sql = "DELETE FROM forum WHERE title = '$ma'";
        if(mysqli_query($conn,$sql)){
         header("Location:diendan.php");
        exit();
        }
        else{
        echo "co loi";
        }
         mysqli_close($conn);
?>