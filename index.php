<?php

session_start();
include("conn.php");
if(!isset($_SESSION['user'])){
    echo "<script>window.open('login.php','_self')</script>";
}
else{

    $username = $_SESSION['user'];

?>
<html>
<head>
  <title>Welcome Page</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="register_form">
    <h1>Welcome <?php echo $username;?></h1>
    <hr>
    <p id="para">Thanks!! Builder need for giving me an opportunity to present
        present myself. I developed this small portal as per the guidelines
        and the requirements listed in the task. I know this is not my 100% 
        but did try to make something out of the task assgined. At last I want
        to thank Builder need again that gave me such a task that helped me to explore my skills to the full potential.
    </p>
    <hr>
    <div>
	 	<a href="logout.php"><button type="submit" name="logout" id="reg_btn">Logout</button></a>
	  </div>
    </div>
</body>
</html>

<?php } ?>