<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    Session_Start();
    if(isset($_SESSION['k'])==false)
    {
       echo"<script>
       window.location='teacher student.php';
       </script>";
    }
    ?>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      
      <li><a href='branch.php'>search by branch</a></li>
      <li><a href='topic.php'>search by topic</a></li>
     
    </ul>
    <!--<button class="btn btn-danger navbar-btn">Button</button>-->
    <a href='logout student.php'><input type='submit' value='log out' class="btn btn-danger navbar-btn"></a>
  </div>
</nav>
    
    
    
</body>
</html>