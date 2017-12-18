<?php session_start(); ?>
<?php

if(isset($_POST["mysubmit"]))
{
	if(!empty($_SESSION['username']))
		{
			$blood=$_POST["Blood1"];
	        $bank=$_POST["BloodBank1"];
			
			$con=mysqli_connect("localhost","root","","blood");

	        $sql="insert into Request_Samples(Receiver_Name,request_Blood_group) VALUES('".$bank."','".$blood."')";
			
			mysqli_query($con, $sql);
			mysqli_close($con);
		}
		else
		{
			echo "<script type='text/javascript'>window.location.href = 'login.php';</script>";
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
  //background-image: url("blood-17.jpg");
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
          <p><h4><u>Available blood samples</u></h4></p>
          <form id="reg-form" method="post">
		  <table><tr>
		  
		    <?php if(isset($_SESSION["username"])): ?>
	            <td><li><a href="#"><span></span><?php echo $_SESSION['username'];?></a></li></td>
	            <td><li><a href="logout.php"><span></span> Logout</a></li></td>
            <?php else:?>      	 
                <td><li><a href="Registration.php"><span></span> Sign Up</a></li></td>
                <td><li><a href="login.php"><span></span> Login</a></li></td>
	        <?php endif;?>
		  
		  </tr>
		  </table>
		<table><tr>
		
            <?php
			
                $conn = new mysqli("localhost","root","","blood");
                $sql = "SELECT BloodBank1,BloodBank2,Blood_Group1,Blood_Group2 FROM addbloodinfo";
                $result = mysqli_query($conn, $sql);
				
                if (mysqli_num_rows($result) > 0) 
				{
			
                    while($row = mysqli_fetch_assoc($result))
		            {
		                echo '<tr>';
						
                        echo '<td>'. "<u>Blood Samples : </u>  ". '</td>'.'<td>' .$row["Blood_Group1"]. '</td>'.'<td>'. "<u>Blood Bank-Name : </u> " .'</td>'.'<td>'. $row["BloodBank1"].'</td>'.'<td>'."<br>".'</td>'.'<td>'."&nbsp;&nbsp;&nbsp;&nbsp;".'</td>'.'<td>'. "<u>Blood Samples : </u>  ". '</td>'.'<td>' .$row["Blood_Group2"]. '</td>'.'<td>'. "<u>Blood Bank-Name : </u> " .'</td>'.'<td>'. $row["BloodBank2"].'</td>'.'<td>'."<br>".'</td>';
		                echo '</tr>';
                    }
                } 
            mysqli_close($conn);
			
            ?>

    </tr>
	</table>
		
	<pre>
	</pre>
	<table>
	
	
	
	<tr>
	<td><label for="name">Enter Blood Group</label></td>
             <td> <input type="text" id="name" spellcheck="false" placeholder="Enter Blood Group" name="Blood1"/></td>
			 
			 <td><label for="name">Blood Bank Name</label></td>
             <td> <input type="text" id="name" spellcheck="false" placeholder="Blood Bank Name" name="BloodBank1"/></td>
	</tr>
		
	</table>
			<table>
			<tr>
            <div class="buttons">
              <td><label></label>
              <input type="submit" value="Request Sample" class="btn col" name="mysubmit"/></td>
            </div></tr></table>
          <table>
			</table>
          </div>
        </div>
      </div>
	</body>
</html>