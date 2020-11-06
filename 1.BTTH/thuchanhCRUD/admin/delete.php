<?php
    $id_monhoc = $_GET['id'];
    require("include/config.php");
    include("include/function.php");
    if(deleteEmp($id_monhoc)){
        header("Location:index.php");
        exit();
    }else{
        echo "sai cái gì đó";
    }
    mysqli_close($conn);
?>
