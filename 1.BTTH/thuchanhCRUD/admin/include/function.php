<?php  
    function getAllEmps(){
        global $conn;
        $sql="SELECT* FROM tb_monhoc";
        $result = mysqli_query($conn,$sql);
        $monhoc = mysqli_fetch_all($result);
        return $monhoc;
    }
    function deleteEmp($id){
        global $conn;
        $sql = "DELETE FROM tb_monhoc WHERE id =' $id '";
        if(mysqli_query($conn,$sql)){
            return true;
        }else{
            return false;
        }
    }
    function getOneEmp($id){
		global $conn;
		$sql="SELECT * FROM tb_monhoc WHERE id='$id'";
		$result= mysqli_query($conn,$sql);
		$tenmon= mysqli_fetch_assoc($result);
		return $tenmon;
    }
    function updateEmp($id, $mamon, $tenmonhoc, $mota){
        global $conn;
        $sql = "UPDATE tb_monhoc SET mamon='$mamon', tenmonhoc='$tenmonhoc', mota='$mota' WHERE id='$id'";
        mysqli_query($conn, $sql);
    }
?>
