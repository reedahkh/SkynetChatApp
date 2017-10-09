
<?php
header('Cache-Control: none');
header('Pragma: no-cache');


var_dump(explode('.', $_SERVER['HTTP_HOST']));
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freakpixels.com/portfolio/brio/forms-validation.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 06 Feb 2015 13:59:34 GMT -->
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Chat</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.css" /> 
    
    
    <!-- Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
  

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	
    
    <section class="content">
        
        <div class="warper container-fluid">
            
            <div class="row" style="width: 900px; margin: 0 auto; margin-top: 80px;">
            
            	<div class="col-lg-6">
                
                    <div class="panel panel-default">
                        <div class="panel-heading">chat</div>
                        
                             <h3>Messages</h3>
                        
                              <ul class="messages-list">
                        
                              </ul>
                        <div class="panel-body">
                        
                        
                        	<form method="post" class="chatform" action="">
                              <!--
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Username</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" name="username" />
                                    </div>
                                </div>
                            -->
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Message</label>
                                    <div class="col-lg-9">
                                        <textarea type="text" id="message" id="messagebox"></textarea>
                                    </div>
                                </div>
                                
                                <input type="hidden" id="to" value="33" />
                                
                                <select id="receivers">
                                    <option>Select Reciever</option>
                                </select>
                
                
                                <div class="form-group">
                                    <div class="col-lg-9 col-lg-offset-3">
                                        <button type="submit" class="btn btn-primary" id="send">Send</button>
                                        <button type="submit" class="btn btn-primary" id="join">Join</button>
                                    </div>
                                </div>
                            </form>
                        
                            
                        
                        </div>
                  </div>
             </div>     
         </div>        
      </div>
    
    </section>
     
    </body>
       <script src="assets/jquery/jquery-3.2.1.js"></script>
       <script src="assets/jquery/jquerycookie/jquery.cookie.js"></script>
	   <script src="assets/js/main.js"></script> 

</html>
