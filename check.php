<?php  
	
    
    // session开始  
    session_start();  
	
    $name = $_POST['name'];   
    $password = $_POST['password'];  
	
	$_SESSION['name'] = "xss";
	$_SESSION['password'] = "xss";

    if ($password != $_SESSION['password'] && $name != $_SESSION['name']){
                echo "<script>alert('what do you want to do?!!'); history.go(-1);</script>";
		}
    else if ($password == $_SESSION['password'] && $name == $_SESSION['name']){
		$page="index.php";   
  		echo "<script>window.location = \"".$page."\";</script>";  
		}  


?> 