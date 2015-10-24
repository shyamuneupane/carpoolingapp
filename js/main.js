$(document).ready(function() {
    
    
    var userId = $("#uid").val();
    var username = $("#username").val();
    var baseUrl = "http://localhost/carpooling/";
    window.onload= trip_load(uid);
   
    
    
    $("#share").click(function(){
        var trip_text= $('#triptext').val();
        
        if(trip_text.length==0){
            alert("please write you complete ride");
        }
        else{
                $.ajax({ url: baseUrl + "controller/carpooling.php",
                    data: {action: 'addTrip', trip_text:trip_text},
                    type: 'post',
                    dataType: "text",
                    success: function (output) {
                    var itemId = output;
                        $('#triptext').val(null);  
                        trip_load(uid);
                        
                    }
                });
        }
    })
    
    
  
    $("#trip_head").on('click','.deleteimage',function(){
         
    var tripid=$(this).attr('id');
        var userid=$(this).parent(".tripheader").attr('id');
        if(userid===userId){
            
             if(confirm("Are you sure you want to delete this?")){
         $.ajax({ url: baseUrl + "controller/carpooling.php",
                    data: {action: 'deleteTrip', trip_id:tripid},
                    type: 'post',
                    dataType: "json",
                    success: function (output) {
                        $('#trip_head').empty();
                        trip_load(uid);
                        
        
                    }
                });
        
        
    }
    else{
        return false;
    }
        }
        else{
        alert("you cannot delete this post");
        
        }
        
   
    });
    
   $("#trip_head").on('click','.favicon > img',function(){
       
       var tripid=$(this).parent().attr('id');
       
        var imagetype=$(".favicon img").attr('src');
         
        var index = imagetype.lastIndexOf("/") + 1;
          
        var filename = imagetype.substr(index);
   
    
       
       if(filename==="favorite_add.png"){
        
        $(this).attr("src","../images/favourite_accept.png");
        
         $.ajax({ url: baseUrl + "controller/carpooling.php",
                    data: {action: 'addFavTrip', trip_id:tripid},
                    type: 'post',
                    dataType: "text",
                    success: function (output) {
                        
                        alert("favourite added!!!");
                    }
                }); 
            }
        else{
        $(".favicon img").attr("src","../images/favorite_add.png");
        
        $.ajax({ url: baseUrl + "controller/carpooling.php",
                    data: {action: 'deleteFavTrip', trip_id:tripid},
                    type: 'post',
                    dataType: "text",
                    success: function (output) {
                        alert("favourite deleted!!!");
                        
                    }
                });
        
        
    }
       
   
   });

    
    
    $("#trip_head").on('click','.comment-btn',function(){
        
        var tripid=this.id;

        var content=$("#comment-textarea-"+tripid).val();
        
         $.ajax({ url: baseUrl + "controller/carpooling.php",
                    data: {action: 'addComment', trip_id:tripid, comment:content},
                    type: 'post',
                    dataType: "text",
                    success: function (output) {
                        createComment(content, tripid, output);
                    }
                });
    });
    
   
    
    

});  //end of document ready function 







function trip_load(uid){
     var baseUrl = "http://localhost/carpooling/";
        
            $.ajax({ 
                url: baseUrl + "controller/carpooling.php",
                data: {action: 'trip_post'}, 
                type: 'post',
                dataType: "json",
                success: function(output){
                    $('#trip_head').empty();
                  var array = JSON.parse(JSON.stringify(output));
                    array.forEach(function(obj) {
                        
				        createtrip(obj.trip_text, obj.user_id, obj.username,obj.trip_id);
			});
        }
                  
    });   
  }

         
            
            
            
            
            
            
function createtrip(text, uid, uname, tripid) {
        
        var markup = 
            '<div id="main-trip-content-'+tripid+'">' +
            '<div class="tripheader" id="'+uid+'">'+
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
            '<div><textarea rows="2" cols="50" id="comment-textarea-'+tripid+'"></textarea></div>' +
            '<div><button class="comment-btn btn-sm btn-success"  id="'+tripid+'" >Comment</button></div>'+
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

