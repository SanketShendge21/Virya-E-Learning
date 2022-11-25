<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
include('config.php');
include('../../Virya_Project/header_footer/header.php')
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noindex, nofollow">
      <title>Virya Chat</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	  <link href="style.css" rel="stylesheet">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <div class="row justify-content-md-center mb-4">
            <div class="col-md-6"><br><br>
            	<h3><center>Virya Chat</center></h3><br>
               <!--start code-->
               <div class="card">
                  <div class="card-body messages-box">
					 <ul class="list-unstyled messages-list">
							
								<li class="messages-you clearfix start_chat">
								   
								   	<span class="message-img"><img src="image/bot_avatar.png" class="avatar-sm rounded-circle"></span>
								   	<div class="message-body clearfix">
								   		<div class="message-header">
								   			<strong class="messages-title">Viru</strong><br> 
								   		</div>
								   		<?php 
                if (isset($_SESSION['uemail'])) {  ?>

                	<p class="messages-p">
								   			Welcome, <?php echo $_SESSION['name']; ?> 
								   			
								   		</p>


								   		<li class="messages-you clearfix start_chat">
								   
								   	<span class="message-img"><img src="image/download.jpg" class="avatar-sm rounded-circle"></span>
								   	<div class="message-body clearfix">
								   		
								   		<p class="messages-p">
								   			If you have any queries please ask
								   		</p>
								   		


								   	</div>
								</li>


                	 <?php 
                }else{ ?>
								   		<p class="messages-p">
								   			Hello there :)
								   			
								   		</p>

								   	</div>
								</li>

								<li class="messages-you clearfix start_chat">
								   
								   	<span class="message-img"><img src="image/download.jpg" class="avatar-sm rounded-circle"></span>
								   	<div class="message-body clearfix">
								   		
								   		<p class="messages-p">
								   			To get started with Virya, simply
								   			<a href="../../Virya_Project/user_login.php" target="_blank"> 
								   			log in 
								   		</a>
								   			and start learning your desired courses. 

								   			But if you have a question to ask you can stick around here!
								   		</p>
								   		


								   	</div>
								</li>
								
                    <?php } ?>
                     </ul>
                  </div>
                  <div class="card-header">
                    <div class="input-group">
					   <input id="input-me" type="text" name="messages" class="form-control input-sm" placeholder="Type your message here..." />
					   <span class="input-group-append">
					   <input type="button" class="btn btn-primary" value="Send" onclick="send_msg()">
					   </span>
					</div> 
                  </div>
               </div>
               <!--end code-->
            </div>
         </div>
      </div>
      <script type="text/javascript">
		 function getCurrentTime(){
			var now = new Date();
			var hh = now.getHours();
			var min = now.getMinutes();
			var ampm = (hh>=12)?'PM':'AM';
			hh = hh%12;
			hh = hh?hh:12;
			hh = hh<10?'0'+hh:hh;
			min = min<10?'0'+min:min;
			var time = hh+":"+min+" "+ampm;
			return time;
		 }
		 function send_msg(){
			jQuery('.start_chat').hide();
			var txt=jQuery('#input-me').val();
			var html='<li class="messages-me clearfix"><span class="message-img"><img src="image/user_avatar.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Me</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+txt+'</p></div></li>';
			jQuery('.messages-list').append(html);
			jQuery('#input-me').val('');
			if(txt){
				jQuery.ajax({
					url:'get_bot_message.php',
					type:'post',
					data:'txt='+txt,
					success:function(result){
						var html='<li class="messages-you clearfix"><span class="message-img"><img src="image/bot_avatar.png" class="avatar-sm rounded-circle"></span><div class="message-body clearfix"><div class="message-header"><strong class="messages-title">Viru</strong> <small class="time-messages text-muted"><span class="fas fa-time"></span> <span class="minutes">'+getCurrentTime()+'</span></small> </div><p class="messages-p">'+result+'</p></div></li>';
						jQuery('.messages-list').append(html);
						jQuery('.messages-box').scrollTop(jQuery('.messages-box')[0].scrollHeight);
					}
				});
			}
		 }
      </script>
	  <?php
	  include('../../Virya_Project/header_footer/footer.php')
		 ?>
	  </body>
</html>