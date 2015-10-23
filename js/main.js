$(document).ready(function() {
    
    
    var userId = $("#uid").val();
    var username = $("#username").val();
    var baseUrl = "http://localhost/carpooling/";
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
                        $('#triptext').val(null);  
                        trip_load(uid);
                        
                    }
                });
        }
    }); 
});


function trip_load(uid){
     var baseUrl = "http://localhost/carpooling/";
        $.ajax({
                url:baseUrl + "controller/carpooling.php",
                data:{ action: 'trip_post'},
                type: 'post',
                dataType: "json",
                success: function (output) {
                    createtrip("hello world", '98', "shyamu", '45');
                    createtrip("hello world", '98', "shyamu", '45');
                    
                }
        
        });
}



function createtrip(text, uid, uname, tripid) {
        
        var markup = 
            '<div id="main-trip-content-'+tripid+'">' +
            '<div class="tripheader">'+
            '<div class="deleteimage" id="'+tripid+'">'+
                '<img src="../images/delete.png">'+
               '</div>'+
            '<div class="favicon" id="'+tripid+'">'+
                '<img src="../images/favorite_add.png">'+
               '</div>'+
            '<div class="update-task" id="'+tripid+'"><img src="../images/edit.png"></div>'+
            '<div class="userinfo"> Trip added by: '+uname+'</div><div>'+
                '<div id="trip-'+tripid+'">' +
                        text +
            '</div></div>'+
            '<div id="comment-textarea-'+tripid+'"><textarea rows="2" cols="50"></textarea></div>' +
            '<div><button class="comment-btn btn-sm btn-success"  id="'+tripid+'">Comment</button></div>'+
            '<div id="comments-'+tripid+'"></div>'+
        '</div>';

        

        $('#trip_head').append(markup);
        
        
    }


function createComment(text, tripid, commentid) {
        var comment = '<div class="delete-comment-container" id="delete-comment-'+commentid+'">' +
            '<div class="comment-image">'+
            '<img src="images/user.png">' +
            '</div>'+
            '<div class="comment-text-main">'+
            '<div class="userinfo"> Commented by: '+username+'</div>'+
            '<div class="comment-text">' + text + '</div>' +
            '</div>'+
            '<div class="comment-delete-img" id="'+commentid+'">' +
            '<img src="images/delete.png">' +
            '</div>' +
            '<div class="update-comment" id="'+commentid+'"><img src="images/edit.png"></div>'+
            '</div>';
        $("#comments-"+tripid).append(comment);
        $("#comment-textarea-"+tripid+" textarea").val('');
    }

