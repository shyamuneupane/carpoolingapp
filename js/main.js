$(document).ready(function() {
    
    
    var userId = $("#uid").val();
    var username = $("#username").val();
    var baseUrl = "http://localhost/carpoling/"
    window.onload=trip_load(uid)
   
    $("#share").click(function(){
        var trip_text= $('#triptext').val();
        
        if(trip_text.length==0){
            alert("please write you complete ride");
        }
        else{
            
            
             
                
                $.ajax({ url: baseUrl + "controller/carpooling.php",
                    data: {action: 'addTrip', trip_text:trip_text},
                    type: 'post',
                    dataType: "json",
                    success: function (output) {
                    var itemId = output;
                        
                    }
                });
            
           
           // $.post('../controller/trip_submit.php', {'trip_text': trip_text});
            
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

