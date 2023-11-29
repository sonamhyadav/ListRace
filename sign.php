<?php

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Nunito:600,700,900" rel="stylesheet">

 <script>
 #body {
    font-family: 'Nunito';
    background-color:  #5d8fc9;
    }
    #login-card{
        width:350px;
        border-radius: 25px;
        margin:150px auto;
      
    }
    
    #email{
        border-radius:30px;
        background-color: #ebf0fc;
        border-color: #ebf0fc;
        color: #9da3b0;
    }
    
    #button{
        border-radius:30px;
    
    }
    
    #btn{
       position: absolute; 
       bottom: -35px; 
       padding: 5px;
       margin: 0px 55px;
       align-items: center;
       border-radius: 5px"
    }
    #container{
        margin-top:25px;
    }
    
    .btn-circle.btn-sm { 
                width: 40px; 
                height: 40px; 
                padding: 2px 0px; 
                border-radius: 25px; 
                font-size: 14px; 
                text-align: center;
                
                margin: 8px;
            }
 </script>
</head>
<body id="body">

<div id="login-card" class="card">
<div class="card-body">
  <h2 class="text-center">Login form</h2>
  <br>
  <form action="/action_page.php">
    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="email" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Submit</button>
<br>
    <br>
   
    <div id="btn" class="text-center">
   <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
   <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-google"></i></button>
   <button type="button" class="btn btn-info btn-circle btn-sm"><i class="fa fa-twitter"></i></button>
   </div>

  </form>
</div>
<div>

?>