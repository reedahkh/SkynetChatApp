$(document).ready(function (){
    
    var connected=[];
    var id = -1;
    
     var conn = new WebSocket('ws://127.0.0.1:8080');
     var chatform = $('.chatform');
     var sendbtn = $('#send');
     var joinbtn = $('#join');
     messageInputField = chatform.find("#message");
     messagelist       = $(".messages-list");

    conn.onopen = function (e){
        console.log(e, ":::Connection established");
    };

       joinbtn.on("click", function(e){
          e.preventDefault();
            // 
            conn.send(JSON.stringify({
                action: 'user_join'
            }));
       });
           

       sendbtn.on("click", function(e)
       {
          e.preventDefault();
           var to = $('#receivers').val();
           
           console.log(to);
           
           var message = messageInputField.val();
           var data = JSON.stringify({
               'action': 'send_message',
               'msg' : message,
                'to' : to
           });
          conn.send(data);
          messagelist.prepend('<p>'+message+'</p>');
       });
        
        conn.onmessage = function (e){
            console.log(e.data);
            
            data = JSON.parse(e.data);
            action = data.action;
            
            switch (action) {
                case 'user_join':
                    connected = data.connected;
                    id = data.id;
                    
                    
                    $(connected).each(function(key, value) {
                        $('#receivers').append('<option value="' + value + '">User ' + value + '</option>');
                    });
                    break;
                case 'receive_message':
                    messagelist.prepend('<p>'+ data.msg+'</p>');
                    break;
                default:
                    
            }
        };
    
});