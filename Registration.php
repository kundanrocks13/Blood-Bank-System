 <?php
if(isset($_POST["mysubmit"]))
{
    $nm=$_POST["name1"];
    $email=$_POST["email1"];
    $age=$_POST["age1"];
    $mob=$_POST["mobile1"];
    $add=$_POST["add1"];
    $gender=$_POST["gender1"];
    $blood=$_POST["bloodgroup1"];
    $pass1=$_POST["password"];
	
    if(empty($nm)||empty($email)||empty($age)||empty($mob)||empty($add)||empty($gender)||empty($blood)||empty($pass1))
    {
	    $msg1= "Fill up all field";
    }
    else if(filter_var($email,FILTER_VALIDATE_EMAIL)!=true)
    {
        $msg2="Invalid Email Address";
    }
    else if(!preg_match("/^[0-9]{2}$/",$age))
    {
	    $msg3="Invalid Age";
    } 
    else if(!preg_match("/^[0-9]{10}$/",$mob))
    {
	    $msg4="Invalid mobile number";
    }
    else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$pass1)) 
    {
        $msg5="Invalid format of password";
    }
    else
    {
        $con=mysqli_connect("localhost","root","","blood");
        if(isset($_POST["mysubmit"]))
            {
	            $nm=$_POST["name1"];
                $email=$_POST["email1"];
                $age=$_POST["age1"];
                $mob=$_POST["mobile1"];
                $add=$_POST["add1"];
                $gender=$_POST["gender1"];
                $blood=$_POST["bloodgroup1"];
                $pass1=$_POST["password"];
	            $sql="insert into user_resitration(Name,Email,Age,mobile,Address,Gender,Blood,pass1) VALUES('".$nm."','".$email."','".$age."','".$mob."','".$add."','".$gender."','".$blood."','".$pass1."')";
	            if (mysqli_query($con, $sql))
		        {
			        $_SESSION["username"]=$nm;
                    echo "<script type='text/javascript'>window.location.href = 'Available_blood_samples.php';</script>";
                }
                else  
	            {
                    echo "Error: " . $sql . "<br>" . mysqli_error($con);
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
       margin-top: 50px;
       margin-Right: 600px;
    }
    .register 
    {
  	   width: 500px;
  	   padding: 10px;
  	   border-radius: 10px;
  	   font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	   color: #444;
       background-image: url("images/blood-donation-6.jpg");
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
<body background="images/blood-donation.jpg" style="height: 100%; background-position: center;background-size: cover;">
<center>
<div class="main">
      <div class="one">
        <div class="register">
        <p><h4><u>Registration Form</u></h4></p>
        <form id="reg-form" method="post">
		<table>
		<tr>
            <div>
              <td><label for="name">Name</label></td>
              <td> <input type="text" id="name" spellcheck="false" name="name1" placeholder="Enter Name"/></td>
            </div>
		  </tr>
		  <tr>
            <div>
              <td><label for="name">Email</label></td>
              <td><input type="email" id="name" spellcheck="false" name="email1" title="Enter Email Address"/></td>
            </div>
		  </tr>
		<tr>
            <div>
              <td><label for="name">Age</label></td>
             <td> <input type="text" id="name" spellcheck="false" name="age1"/></td>
            </div>
		</tr>
		<tr>
            <div>
                <td><label for="name">Mobile</label></td>
                <td><input type="text" id="name" spellcheck="false" name="mobile1" title="Enter 10 Digit Mobile Number"/></td>
            </div>
		</tr>
		<tr>
            <div>
                <td><label for="name">Address</label></td>
                <td> <input type="text" id="name" spellcheck="false"  name="add1"/></td>
            </div>
		</tr>
		<tr>
			<div>
			    <td><label for="name">Gender</label></td>
			    <td>
				<select id="name" name="gender1" size="1">
                <option value="" selected>SELECT</option>
                <option value = "Male">Male</option>
                <option value = "Female">Female</option>
                </select>
				</td>
			</div>
	    </tr>
	    <tr>
		    <div>
			    <td><label for="name">Blood Group</label></td>
			    <td>
				<select id="name" name="bloodgroup1" size="1">
                <option value="" selected>SELECT</option>
                <option value = "A-">A-</option>
                <option value = "A+">A+</option>
			    <option value = "AB-">AB-</option>
                <option value = "AB+">AB+</option>
			    <option value = "O-">O-</option>
                <option value = "O+">O+</option>
                </select>
				</td>
			<div>
	    </tr>
		<tr>
            <div>
                <td><label for="name">Password</label></td>
                <td><input type="password" id="name" name="password" placeholder="At Least 8-12 length, One Char,digit,special char" title="Password Format like A-Z,a-z,0-9,!@#$%"/></td>
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
			<tr><div><td>Already Registerd,<a href="login.php"> <i><b>Click Here</b></i></a></td></div></tr>
		</table>
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