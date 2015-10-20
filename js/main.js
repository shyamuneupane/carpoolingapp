$(document).ready(function() {
    
    var uid=$('#uid').val();
    window.onload=trip_load(uid)
   
    $("#share").click(function(){
        var comment= $('#commenttext').val();
        if(comment.length==0){
            alert("please write you complete ride");
        }
        else{
            
            var uid=$('#uid').val();
            
           
            $.post('../controller/trip_submit.php', {'trip_text': comment});
            
            $('#commenttext').val(null);  
            trip_load(uid);
           
        }
    }); 
});


function trip_load(uid){

        $('<p>')
			.text("hello world")
			.appendTo('#trip_head');

}

