$(document).ready(function() {
    $('#register').click(function(event){
    
        data = $('#password').val();
        confirm = $('#confirmpassword').val();
        
        if(data!=confirm) {
            alert('password mismatch');
            event.preventDefault();
        }
       
        
      
