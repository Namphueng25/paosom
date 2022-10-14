<?php 

    session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login For Internship System </title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
if(isset($_GET['controller']) && isset($_GET['action'])) 
{  
     $controller = $_GET['controller'];
    $action = $_GET['action'];

}else

{   
    $controller= 'user'; 
    $action = 'newregister';

} 
?>
<?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>


	
	<img class="wave" src="img/wave1.png">
	<div class="container">
		<div class="img">
			<img src="img/paosom.png">
		</div>
		<div class="login-content">
			<form action="login.php" method="post">
		
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
				  
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name = 'username' class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name = 'password' class="input">
            	   </div>
            	</div>
				<input type="hidden" name="controller" value="user">
				<a  href="newregister.php">Go to register</a>
            	<input type="submit" class="btn" name = 'submit ' value="LOGIN">
				
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
	
</body>
</html>
<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>
