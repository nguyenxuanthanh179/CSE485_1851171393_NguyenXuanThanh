$(document).ready(function(){
    var Tong=0;
    $('.btn-add').click(function(){
        var sl=1;
        var img=$(this).parent().children('#imgP').html();
        var ten=$(this).parent().children('#tensp').html();
        var gia=$(this).parent().children('#gia').html();
        Tong=parseInt(Tong)+parseInt(gia);
        sl=$('#'+ten).parent().children('#sl').text();
        if(parseInt(sl)){
            var sl2=parseInt(sl)+1;
        }
        else sl2=1;
        
        console.log(sl);
        $('#'+ten).parent().empty();
        $('.table').append("<tr> <td scope='row' id="+ten+">"+img+"</td> <td>"+ten+"</td> <td id='sl'>"+sl2+"</td> <td>"+gia+"</td>");
        $('.Tong').text(Tong);
    });
})