<?php
    include ("includes/config.php");
    $post_array=array();

    if(isset($_POST['post_title'])){ 
        $sql="SELECT * FROM forum WHERE title='".$_POST['post_title']."'";
        $result=mysqli_query($conn,$sql);
        $rs=mysqli_fetch_all($result,MYSQLI_ASSOC);

        foreach($rs as $us){
            array_push($user_array,$us);
        }
    }
   
    echo json_encode($user_array);
   
?>