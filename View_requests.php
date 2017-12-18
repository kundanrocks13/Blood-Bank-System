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
          <p><h4><u>Request blood samples by Patient</u></h4></p>
          <form id="reg-form" method="post">
			<table><tr>
                <?php
                    $con = new mysqli("localhost","root","","blood");
                    $sql = "SELECT Receiver_Name,request_Blood_group FROM request_samples";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) > 0) 
					{
                        while($row = mysqli_fetch_assoc($result))
		                    {
		                        echo '<tr>';
                                echo '<td>'. "<u>Request Blood Samples : </u>  ". '</td>'.'<td>' .$row["request_Blood_group"] .'</td>'.'<td>'."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".'</td>'.'<td>'. "<u>Blood Bank Name : </u> " .'</td>'.'<td>'. $row["Receiver_Name"].'</td>'.'<td>'."<br>".'</td>';
		                        echo '</tr>';
                            }
                    }
                    mysqli_close($con);
                ?>

                   </tr>
            </table>
            <pre>
	
	
	
            </pre>
            </div>
        </div>
    </div>
</body>
</html>