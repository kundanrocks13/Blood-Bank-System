<?php session_start(); ?>
<?php
if(isset($_POST["mysubmit"]))
{
	if(isset($_SESSION["hospital"]))
	{
	    $Hospital=$_POST["Hospital_name"];
        $Mob=$_POST["Mobile"];
	    if(isset($_POST["mysubmit"]))
	    {
		    $b1=" ";
            foreach($_POST["blood1"] as $value) 
		    {
                $b1=$value.$b1." ";
            }
        }
        $Blood_Bank1=$_POST["Blood_Bank1"];
        $Address1=$_POST["Address1"];
	    if(isset($_POST["mysubmit"]))
	    {
		    $b2=" ";
            foreach($_POST["blood2"] as $value) 
		    {
                $b2=$value.$b2." ";
            }
	    }
	    $Blood_Bank2=$_POST["Blood_Bank2"];
        $Address2=$_POST["Address2"];
		
	    $con=mysqli_connect("localhost","root","","blood");

	    $sql="insert into AddBloodinfo(Hospital_Name,Mob,Blood_Group1,BloodBank1,Address1,Blood_Group2,BloodBank2,Address2) VALUES('".$Hospital."','".$Mob."','".$b1."','".$Blood_Bank1."','".$Address1."','".$b2."','".$Blood_Bank2."','".$Address2."')";
	
	    if (mysqli_query($con, $sql)) 
	    {
   
        }
        else 
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        mysqli_close($con);
    }
	else
	{
		echo "<script type='text/javascript'>window.location.href = 'Hospital_login.php';</script>";
	}
}

?>
<html>
<head>
<style type="text/css">
.main > div 
{
    width: 80%;
    margin-top: 50px;
    margin-right: 100px;
}
.register  
{
  	width: 1200px;
  	padding: 10px;
  	border-radius: 10px;
  	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	color: #444;
  	background-color: #AEB6BF ;
  //background-image: url("images/blood-17.jpg");
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
<body background="images/blood-18.jpg" style="height: 50%; background-position: center;background-size: cover;">
<center>
<div class="main">
    <div class="one">
        <div class="register">
            <p><h4><u>Add Blood Information</u></h4></p>
            <form id="reg-form" method="post">
		    <table>
		    <tr>
            <div>
                <td><label for="name">Hospital Name</label></td>
                <td> 
				<?php if(isset($_SESSION["hospital"])): ?>
	            <td><li><a href="#"><span></span><?php echo $_SESSION['hospital'];?></a></li></td>
	            <td><li><a href="logout.php"><span></span> Logout</a></li></td>
                <?php else:?>      	 
                <td><li><a href="Hospital_Registration.php"><span></span> Sign Up</a></li></td>
                <td><li><a href="Hospital_Login.php"><span></span> Login</a></li></td>
	            <?php endif;?>
			    </td>
            </div>
			</tr>
			</table>
			
			<table>
			<tr><div>
			<td><label for="name">Available Blood Sample</label></td></table>
			<table><tr>
            <td>A+ </td><td><input type="checkbox" name="blood1[]" value="A+"  /></td>
            <td>A-</td><td> <input type="checkbox" name="blood1[]" value="A-"  /></td>
            <td>AB+</td><td><input type="checkbox" name="blood1[]" value="AB+"  /></td>
            <td>AB-</td><td><input type="checkbox" name="blood1[]" value="AB-"  /></td>
            <td>B+ </td><td><input type="checkbox" name="blood1[]" value="B+"  /></td>
            <td>B-</td><td> <input type="checkbox" name="blood1[]" value="B-"  /></td>
            <td>O+ </td><td><input type="checkbox" name="blood1[]" value="O+"  /></td>
            <td>O-</td><td> <input type="checkbox" name="blood1[]" value="O+"  /></td>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td>Blood Bank1</td>
            <td><input type="text" id="name" spellcheck="false" name="Blood_Bank1"/></td>
            <td>Address</td>
            <td><input type="text" id="name" spellcheck="false" name="Address1"/></td>
            </tr>
	        </table>
			
	        <table><tr>
			<td>A+ </td><td><input type="checkbox" name="blood[]" value="A+"/></td>
            <td>A-</td><td> <input type="checkbox" name="blood2[]" value="A-"  /></td>
            <td>AB+</td><td><input type="checkbox" name="blood2[]" value="AB+"  /></td> 
            <td>AB-</td><td><input type="checkbox" name="blood2[]" value="AB-"  /></td>
            <td>B+ </td><td><input type="checkbox" name="blood2[]" value="B+"  /></td>   
            <td>B-</td><td> <input type="checkbox" name="blood2[]" value="B-"  /></td>
            <td>O+ </td><td><input type="checkbox" name="blood2[]" value="O+"  /></td>
            <td>O-</td><td> <input type="checkbox" name="blood2[]" value="O+"  /></td>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td>Blood Bank2</td>
            <td><input type="text" id="name" spellcheck="false" name="Blood_Bank2"/></td>
            <td>Address</td>
            <td><input type="text" id="name" spellcheck="false" name="Address2"/></td>
            </tr>
	        </table>
	
			<table>
			<tr>
            <div class="buttons">
              <td><label></label>
              <input type="submit" value="Save Information" class="btn col" name="mysubmit"/></td>
            </div>
			</tr>
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
					               ?></p>