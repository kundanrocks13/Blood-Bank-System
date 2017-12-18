<?php session_start(); ?>
<?php
 if(isset($_POST["mysubmit"]))
{
    $hospital_name=$_POST["hospital1"];
    $email=$_POST["email1"];
    $gst=$_POST["gst1"];
    $mobile=$_POST["telephone1"];
    $address=$_POST["address1"];
    $bed=$_POST["bed1"];
    $web=$_POST["web1"];
    $reg=$_POST["reg1"];
	$password=$_POST["pass"];
    if(empty($hospital_name)||empty($email)||empty($gst)||empty($mobile)||empty($address)||empty($bed)||empty($web)||empty($password))
    {
    	$msg1= "Fill up all field";
    }
    else if(filter_var($email,FILTER_VALIDATE_EMAIL)!=true)
    {
        $msg2="Invalid Email Address";
    } 
    else if(!preg_match("/^[0-9]{10}$/",$mobile))
    {
		$msg3="Invalid mobile number";
    }
    else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$password)) 
    {
        $msg4="Invalid format of password";
    }
    else if(empty($reg))
    {
        $msg5="Invalid Registration Number";
    } 
    else
	{
        $con=mysqli_connect("localhost","root","","blood"); 
        if(isset($_POST["mysubmit"]))
            {
	            $hospital_name=$_POST["hospital1"];
                $email=$_POST["email1"];
                $gst=$_POST["gst1"];
                $mobile=$_POST["telephone1"];
                $address=$_POST["address1"];
                $bed=$_POST["bed1"];
                $web=$_POST["web1"];
                $reg=$_POST["reg1"];
	            $password=$_POST["pass"];
	            $con=mysqli_connect("localhost","root","","blood");

	            $sql="insert into Hospital_Registration(Hospital_Name,Email,gst,Mobile,Address,Bed,Web,Registration,Password) VALUES('".$hospital_name."','".$email."','".$gst."','".$mobile."','".$address."','".$bed."','".$web."','".$reg."','".$password."')";
   
	            if(mysqli_query($con,$sql))
                {
					$_SESSION["hospital"]=$hospital_name;
	                echo "<script type='text/javascript'>window.location.href = 'Add_Blood_info.php';</script>";
                }
	            mysqli_close($con);	
	        }
    }
}

?>
 <html>
 <head>
 <style type="text/css">
 
.main > div 
{
    width: 49%;
    margin-top: 100px;
    margin-left: 710px;
}
.register 
{
  	width: 500px;
  	padding: 10px;
  	border-radius: 10px;
  	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: #444;
    background-image: url("images/blood-15.jpg");
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
<body background="images/blood-14.jpg" style="height: 60%; background-position: center;background-size: cover;">
<center>
<div class="main">
    <div class="one">
        <div class="register">
            <p><h4><u>Hospital Registration Form</u></h4></p>
            <form id="reg-form" method="post">
		    <table>
		    <tr>
            <div>
                <td><label for="name">Hospital Name</label></td>
                <td> <input type="text" id="name" spellcheck="false" placeholder="Enter Hospital Name" name="hospital1" value="<?=(isset($name) ?$name: "")?>"/></td>
            </div>
			</tr>
			<tr>
            <div>
                <td><label for="name">Email</label></td>
                <td><input type="email" id="name" spellcheck="false" name="email1" title="Enter Hospital Email Address" value="<?=(isset($email) ?$email: "")?>"/></td>
            </div>
			</tr>
			<tr>
            <div>
                <td><label for="name">GST Reg.Number</label></td>
                <td> <input type="text" id="name" spellcheck="false" name="gst1"/></td>
            </div>
			</tr>
			<tr>
            <div>
                <td><label for="name">Tele./Mob.</label></td>
                <td><input type="text" id="name" spellcheck="false" name="telephone1" title="Enter Hospital 10 Digit Mobile Number" value="<?=(isset($mobile) ?$mobile: "")?>"/></td>
            </div>
			</tr>
			
			<tr>
            <div>
                <td><label for="name">Address</label></td>
                <td> <input type="text" id="name" spellcheck="false"  name="address1"/></td>
            </div>
			</tr>
	        <tr>
			<div>
			    <td><label for="name">Total No.of Bed</label></td>
			    <td>
				<select id="name" name="bed1" size="1">
                <option value="" selected>SELECT</option>
                <option value = "20+">20+</option>
                <option value = "40+">40+</option>
			    <option value = "50+">50+</option>
                <option value = "60+">60+</option>
			    <option value = "80+">80+</option>
                </select>
				</td>
			<div>
	        </tr>
			<tr>
            <div>
                <td><label for="name">Website Link</label></td>
                <td><input type="url" id="name" name="web1"/></td>
            </div>
			</tr>
			<tr>
            <div>
                <td><label for="name">Hospital Reg.Certificate</label></td>
                <td><input id="name" type="file" name="reg1"/></td>
            </div>
			</tr>
			<tr>
            <div>
                <td><label for="name">Password</label></td>
                <td><input id="name" type="password" name="pass"/></td>
            </div>
			</tr>
			</table>
			<table>
			<tr>
            <div class="buttons">
                <td><label></label>
                <input type="submit" value="Create Account" class="btn col" name="mysubmit"/></td>
            </div>
			</tr>
			</table>
			<table>
			<tr><div>
			<td>Already Registerd,<a href="Hospital_login.php"> <i><b>Click Here</b></i></a></td>
			</div></tr>
			</table>
            </div>
        </div>
       </div>
	  </div>
	 </div>
</body>
</html>
<p style="color:col;font-size:20px;text-align: left;">
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
								   if(isset($msg5))
								   {
									   echo $msg5;
								   }
					               ?></p>