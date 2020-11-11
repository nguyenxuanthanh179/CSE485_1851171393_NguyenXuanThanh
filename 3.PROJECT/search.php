<?php

include('includes/config.php');
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "SELECT * FROM forum WHERE  title LIKE '%".$search."%' 
                                            OR catalogue LIKE '%".$search."%' 
                                            OR tag LIKE '%".$search."%'
                                            ";
}
else
{
	$query = "SELECT * FROM forum ORDER BY id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
            

                    <div class="content d-flex">
                        <div class="row content1">
                            <div class="col-md-4 left">
                                <div class="d-flex">
                                    <button id="like" class="btn btn-primary">
                                        <div id="qlt1">0</div>
                                        <div><i class="fas fa-thumbs-up"></i></div>
                                    </button>

                                    <button id="unlike" class="btn btn-danger mr-1 ml-1">
                                        <div id="qlt2">0</div>
                                        <div><i class="fas fa-thumbs-down"></i></div>
                                    </button>
                                        
                                    <button id="answer" class="btn btn-success">
                                        <div>0</div>
                                        <div>Trả lời</div>
                                    </button>
                                </div>
                            </div>
                        </div>
                                 
                    
                         <div class="col-md-8 right">
                            <div id="table">
                                <div class="title">
                                    <a href="edit.php?title= '. $row['title']. ' style="color: black;">'.
                                $row['title'].'</a>
                                </div>
                                <div>đã hỏi lúc <span>'. $row['date'].'</span> trong 
                                    <a href="#" class="">'.$row['catalogue'].'</a> 
                                    bởi <span>'.$row['user'].'</span> (560 điểm)
                                </div>
                                <div class="d-flex tag">
                                    <div class="col-md-4">
                                        <div style="background: orange;">'. $row['tag'].'</div>
                                    </div>   
                                    <div class="col-md-8" style="padding-left: 30%">
                                        <a type="submit" href="delete.php?title='. $row['title'].'" ><i class="fas fa-trash-alt"></i></a>
                                        <a style="padding-left:20px;" href="edit.php?title='. $row['title'].'"> <i class="fas fa-edit"></i></a>
                                    </div> 
                                </div>     
                            </div>
                        </div>
			        </div>
		';
	}
	echo $output;
}
else
{
	echo 'không có dữ liệu tìm kiếm';
}
?>
<script src="js/diendan.js"></script>