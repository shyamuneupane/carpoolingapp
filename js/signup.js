$(document).ready(function() {
    $('#register').click(function(event){
    
//        data = $('#password').val();
//        confirm = $('#confirmpassword').val();
//        
//        if(data!=confirm) {
//            alert('password mismatch');
//            event.preventDefault();
//        }
//        
        
        //ajax call
        
        $.ajax({
            url: '../controller/comment_submit.php',
            data:'{"comment_text":"hhhhhh",                                         "user_id":"1","trip_id":"2","task":"insert"}',          
   error: function() {
     alert('error'); 
   },
   dataType: 'json',
   success: function(data) {
      if(data['success'] == true){
          alert(data['msg']);
//          val = data['val'];
      } else {
          //TODO
      }
   },
   type: 'POST'
});
           
    });
});

