// ajax function for displaying users
$(document).ready(function(){
        $("#post").click(function(){
           var message = $("#content").val();
          if(message.length>0)
        {
        	$.ajax({
              type: "POST",
              url: "database.php",
              data: {msg: message} ,            
              cache:false,
              success: function(data)
              { 
                $('#content').val('');;
              },
               error: function(jqXHR, textStatus, err) {
                //show error message
               alert('text status '+textStatus+', err '+err)
            }
        	});
        }return false;
   });
});
function users(){
   var request = new XMLHttpRequest();
   request.onreadystatechange = function(){
       if(request.readyState == 4 && request.status == 200){
           document.getElementById('users').innerHTML = request.responseText;
       }
   }
   request.open("POST", "users.php", true);
    request.send();
}    // for displaying users

// ajax function for chat_request send back on the html page
function chat_ajax()
{ 
    var req = new XMLHttpRequest();
    req.onreadystatechange = function() 
	{ 
		if(req.readyState == 4 && req.status == 200)
		{ 
			// document.getElementById('chats').innerHTML = req.responseText; 
		}
	}
	req.open('POST', "database.php", true);
    req.send();
} 


var chat = document.getElementById('chat_area');

setInterval(function(){ 
    chat_ajax(); 
    users();
    // chat.scrollTop = chat.scrollHeight;
}, 100);  
// function for sending the message to the database through php
