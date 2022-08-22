<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.min.css" rel="stylesheet">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Dipankar Sarkar - Skills Portfolio</title>
</head>
<body>
    <div class="container" style="width:700px;">  
        <?php if(isset($_SESSION['username'])) { ?>  
        <div align="center">  
             <a href="#" id="logout">Logout</a>  
        </div>  
        <?php } ?>  
    </div>
     <script>  
     $(document).ready(function(){  
          $('#logout').click(function(){  
               var action = "logout";  
               $.ajax({  
                    url:"action.php",  
                    method:"POST",  
                    data:{action:action},  
                    success:function()  
                    {  
                         //location.reload();
                         location.href="index.php";
                    }  
               });  
          });  
     });  
     </script>    	
    <div class="container border mt-5">