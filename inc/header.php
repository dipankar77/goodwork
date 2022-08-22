<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="js/jquery.flipcountdown.js"></script>
	<link href="css/jquery.flipcountdown.css" rel="stylesheet"/>
	<link href="css/quiz.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Dipankar Sarkar - Skills Portfolio</title>
</head>
<body>
    <div class="container" style="width:700px;">  
        <?php if(isset($_SESSION['username'])) { ?>  
        <div align="center">  
             <h1>Welcome - <?php echo $_SESSION['username']; ?></h1><br />  
             <a href="#" id="logout">Logout</a>  
        </div>  
        <?php } else { ?>  
        <div align="center">  
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button> 
        </div>  
        <?php } ?>  
    </div>
    <div id="loginModal" class="modal fade" role="dialog">  
          <div class="modal-dialog">  
       <!-- Modal content-->  
               <div class="modal-content">  
                    <div class="modal-header">  
                         <button type="button" class="close" data-dismiss="modal">&times;</button>  
                         <h4 class="modal-title">Login</h4>  
                    </div>  
                    <div class="modal-body">  
                         <label>Username</label>  
                         <input type="text" name="username" id="username" class="form-control" />  
                         <br />  
                         <label>Password</label>  
                         <input type="password" name="password" id="password" class="form-control" />  
                         <br />  
                         <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>  
                    </div>  
               </div>  
          </div>  
     </div>  
     <script>  
     $(document).ready(function(){  
          $('#login_button').click(function(){  
               var username = $('#username').val();  
               var password = $('#password').val();  
               if(username != '' && password != '')  
               {  
                    $.ajax({  
                         url:"action.php",  
                         method:"POST",  
                         data: {username:username, password:password},  
                         success:function(data)  
                         {  
                              //alert(data);  
                              if(data == 'No')  
                              {  
                                   alert("Wrong Data");  
                              }  
                              else  
                              {  
                                   $('#loginModal').hide();  
                                   location.href="admin.php";
                              }  
                         }  
                    });  
               }  
               else  
               {  
                    alert("Both Fields are required");  
               }  
          });  
          $('#logout').click(function(){  
               var action = "logout";  
               $.ajax({  
                    url:"action.php",  
                    method:"POST",  
                    data:{action:action},  
                    success:function()  
                    {  
                         location.href="index.php";
                    }  
               });  
          });  
     });  
     </script>         
    <div class="container border mt-5">