<?php session_start(); ?>
<?php
ob_start();
if(isset($_POST["mysubmit"]))
{
$email=$_POST["email1"];
$password=$_POST["pass1"];
    if(empty($email))
    {
	    $msg1="Enter your Email<br>";
    }
    else if(empty($password))
    {
	    $msg2="Enter password<br>";
    }
    if(!empty($email))
    {
	    $email1=$_POST["email1"];
        if(filter_var($email,FILTER_VALIDATE_EMAIL)==true)
    	{
            if(isset($_POST["mysubmit"]))
            {
	            $email=$_POST["email1"];
	            $password=$_POST["pass1"];
	            $con=mysqli_connect("localhost","root","","blood");
	            $sql="select * from user_resitration where Email='".$email."'and pass1='".$password."'";
	            $result=mysqli_query($con,$sql);
				if($row=mysqli_fetch_array($result))
                {
	                $_SESSION["username"]=$row["Name"];
	                echo "<script type='text/javascript'>window.location.href = 'Available_blood_samples.php';</script>";
                }
                else
                {
                $msg3="Wrong Username or Password";	
                }
            }	
    }
	else
	{
		$msg4="Invalid Email Address";
	}
    }
}
ob_end_flush();
?>
<html>
<head>
<style type="text/css">
 
.register 
{
  	width: 500px;
  	padding: 10px;
  	border-radius: 10px;
  	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: #444;
	background-color:#ff6666;
    //background-image: url("images/blood-16.jpg");
  	box-shadow: 0 0 20px 0 #000000;
    background-position: center;
    background-size: cover;
	.button 
	{
  		font-size: 1em;
  		border-radius: 8px;
  		padding: 10px;
  		border: 0;
  		box-shadow: 0 1px 0 0 #60BD49 inset;				
	}
}
#name 
{
	border: 1px solid #e0e0e0;
	height: 25px;
	width: 310px;
}
.btn 
{
    cursor: pointer;
    margin: 10px;
    border-radius: 5px;
    padding: 7px;
    font-size: 15px;
}
.col 
{
    color: red;
    border: 2px red solid;
}
.col:hover 
{
    color: #fff;
    background-color: red;
}
 
</style>
</head>
<body background="images/blood-11.jpg" style="height: 75%; background-position: center;background-size: cover; ">
<center>
    <div class="one">
        <div class="register">
          <p style="color:col;font-size:25px;text-align: left;"><h4>Receivers Login Here</h4></p>
          <form id="reg-form" method="post">
		  <table>
			<tr>
            <div>
              <td><label for="name">Email</label></td>
              <td><input type="text" id="name" spellcheck="false" placeholder="" name="email1" title="Enter Email" value="<?=(isset($email) ?$email: "")?>"/></td>
            </div>
			</tr>
			<tr>
            <div>
              <td><label for="name">Password</label></td>
              <td><input type="password" id="name" name="pass1" title="Enter Password"/></td>
            </div>
			</tr>
		  </table>
			<table>
			<tr>
            <div class="buttons">
              <td><label></label>
              <input type="submit" value="Click" class="btn col" name="mysubmit"/></td>
            </div>
			</tr>
			</table>
			<table>
			<tr>
			<span><td><a href="Registration.php"><input type="button" value="Register Here" id="create-account" class="btn col"/></a></td></span>
			</tr>
			</table>
        </div>
    </div>
</body>
</html>
<p style="color:col;font-size:25px">

	                               <?php
								   if(isset($msg1))
								   {
									   echo $msg1;
								   }
								   if(isset($msg2))
								   {
									   echo $msg2;
								   }
								   if(isset($msg3))
								   {
									   echo $msg3;
								   }
								   if(isset($msg4))
								   {
									   echo $msg4;
								   }
					               ?></p>