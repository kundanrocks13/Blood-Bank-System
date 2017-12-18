<html>
<head>
    <title>Blood Bank System</title>
	<meta name="kk" content="Kundan kumar" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<style type="text/css">
	
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
       color: blue;
       border: 2px blue solid;
    }
    .col:hover 
    {
       color: #fff;
       background-color: red;
    }
    </style>
</head>
<body background="images/blood-21.jpg" style="height: 100%; background-position: center;background-size: cover;">
	<div id="page">
		<h1><a href="/" >Blood Bank System</a></h1>
		<div id="nav">
			<ul>
				<li><a href="Hospital_Registration.php">Hospitals Registration</a></li>
				<li><a href="Hospital_Login.php">Hospitals Login</a></li>
				<li><a href="Registration.php">Receivers Registration</a></li>
				<li><a href="login.php">Receivers Login</a></li>
			</ul>	
		</div>
		<div id="content">
			<h2>Blood Bank System</h2>
			<p>
				'Blood' is recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions.Once in every 2- seconds, someone, somewhere is desperately in need of blood.</p>
				<p> More than 29 million units of blood components are transfused every year.</p><p> The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. </p><p>Each year, we could meet only up to 1% (approx) of our nation’s demand for blood transfusion.
			</p>
			<p> 
				A healthy diet helps ensure a successful blood donation, and also makes you feel better!	Check out the following recommended foods to eat prior to your donation.
			</p>
		</div>
		
		<table>
			<tr>
               <div class="buttons">
               <td><label></label>
               <a href="Available_Blood_Samples.php"><input type="submit" value="Available blood samples" class="btn col" name="mysubmit"/></td>
               </div>
			</tr>
		</table>
		<!--<table>
			<tr>
               <div class="buttons">
               <td><label></label>
               <a href="View_requests.php"><input type="submit" value="Patient Request blood samples" class="btn col" name="mysubmit"/></td>
               </div>
			</tr>
		</table>-->
		<div id="footer">
			<p>
				Webpages made by <a href="#" target="_new">[kundan kumar]</a>
			</p>
		</div>
	</div>
</body>
</html>