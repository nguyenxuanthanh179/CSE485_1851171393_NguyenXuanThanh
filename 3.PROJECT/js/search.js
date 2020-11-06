$(document).ready(function(){

    $('#search').change(function(){
        var name=$(this).val();
        $.ajax({
            url:'getPost.php',
            type:'post',
            data:{
                post_title:name 
            },
            dataType:'json',
            success:function(response){
      
                $('#table').empty();

                var len=response.length;
                for(var i=0;i<len;i++){
                    var title=response[i]['title'];
                    var content=response[i]['content'];
                    var ctg=response[i]['catalogue'];
                    var tag=response[i]['tag'];
                    var date=response[i]['date'];
                   
                    $('#table').append("<div>"+
                    "<div>"+title+"</div>"+
                    "<div>"+content+"</div>"+
                    "<div>"+date+ "trong" +ctg+ "</div>"+
                    "<div>"+tag+"</div>"+
                    "</div>")
                }
                
            }
        })
    })
});
