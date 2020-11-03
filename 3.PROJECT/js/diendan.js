$(document).ready(function(){
    $('#like').click(function(){
        $('#qlt1').html(function(i, val) { 
            return +val+1 ;
        })
    })

    $('#unlike').click(function(){
        $('#qlt2').html(function(i, val) { 
            return val*1+1 ;
        })
    })
})