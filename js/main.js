$(document).ready(function() {
    $("#share").click(function(){
        var comment= $('#commenttext').val();
        if(comment.length==0){
            alert("please write you complete ride");
        }
        else{
            var username=$('#username').val();
            var uid=$('#uid').val();
            
           
            $.post('../controller/trip_submit.php', {'trip_text': comment});
            
            $('#commenttext').val(null);  
           
        }
    }); 
});



