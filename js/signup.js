$(document).ready(function() {
    $('#submit').click(function(event){
    
        data = $('.password').val();
        var len = data.length;
        
        if(len < 1) {
            alert("Password cannot be blank");
            // Prevent form submission
            event.preventDefault();
        }
         
        if($('.password').val() != $('.confpass').val()) {
            alert("Password and Confirm Password don't match");
            // Prevent form submission
            event.preventDefault();
        }
         
    });
});