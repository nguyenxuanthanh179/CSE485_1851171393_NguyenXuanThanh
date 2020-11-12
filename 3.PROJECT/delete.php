<?php 

        $ma = $_GET['title'];
        include('includes/config.php');
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

