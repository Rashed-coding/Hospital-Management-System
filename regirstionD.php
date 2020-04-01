<html>
	<head>
	<link rel="stylesheet" href="StyleD.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	
	</head>
	<body>
	<?php
		$err_fname="";
		$fname="";
		$err_lname="";
		$lname="";
		$err_uname="";
		$uname="";
		$err_pass="";
		$pass="";
		$err_rpass="";
		$rpass="";
		$err_address="";
		$address="";
		$err_details="";
		$details="";
		$err_contact="";
		$contact="";
		$err_age="";
		$age="";
		$err_nid="";
		$nid="";
		
		if(isset($_POST['submit']))
		{
			
			if(empty($_POST['fname']))
			{
				$err_fname="* Frist Name Required";
			}
			else
			{			
				$name=htmlspecialchars($_POST['fname']);
				echo $fname;
			}
			
			if(empty($_POST['lname']))
			{
				$err_lname="* Last  Name Required";
			}
			else
			{			
				$name=htmlspecialchars($_POST['lname']);
				echo $lname;
			}
			if (empty($_POST['uname']))
			{
				$err_uname="*Usename Required";
			}
			else
			{
				$uname=$_POST['uname'];
			}
			if (empty($_POST['pass']))
			{
				$err_pass="*Password Required";
			}
			else
			{
				$pass=$_POST['pass'];
			}
			
			if (empty($_POST['rpass']))
			{
				$err_rpass="*Please re-type the password ";
			}
			else
			{
				$rpass=$_POST['rpass'];
			}
			
			if (empty($_POST['address']))
			{
				$err_address="*Please enter the address ";
			}
			else
			{
				$address=$_POST['address'];
			}
			
			if (empty($_POST['details']))
			{
				$err_details="*Please enter the details";
			}
			else
			{
				$details=$_POST['details'];
			}
			
			
			if (empty($_POST['contact']))
			{
			$err_contact="*Please enter the phone number ";
			}
			else
			{
				$contact=$_POST['contact'];
			}
			
			if (empty($_POST['age']))
			{
				$err_age="*Please re-type the age";
			}
			else
			{
				$age=$_POST['age'];
			}
			
			if (empty($_POST['nid']))
			{
				$err_nid="*Please type your NID Number";
			}
			else
			{
				$nid=$_POST['nid'];
			}
			
			
			
		}
	?>
	<h1>American Hospital,Dubai</h1>
	<div class="menu-bar">
   <ul>
   <li class="active"><a href=index.html><i class="fa fa-home"></i>Home</a></li>
   </ul>
   </div>
	<div class="registrationP">
		<form method="post" action="">
		<h2> Dectors's Registration Form</h2>
		
			<table id="table">
			
				<tr>
					<td> Frist Name:</td>
					<td><input type="text" name="fname" value="<?php echo $fname;?>" id="name"  >
						<br><span style="color:red"><?php echo $err_fname;?></span></td> 
					
				</tr>
				<tr>
					<td> Last Name:</td>
					<td><input type="text" name="lname" value="<?php echo $lname;?>" id="name">
						<br><span style="color:red"><?php echo $err_lname;?></span></td> 
					
				</tr>
				
				
				<tr>
					<td>Username: </td>
					<td><input type="text" name="uname" value="<?php echo $uname;?>" id="name">
					<br><span style="color:red"><?php echo $err_uname;?></span></td>
					
				</tr>
				<tr>
					<td>Password:</td>
					<td> <input type="password" name="pass" value="<?php echo $pass;?>" id="name">
					<br><span style="color:red"><?php echo $err_pass;?></span></td>
					
				</tr>
				<tr>
					<td>Re-Type Password:</td>
					<td> <input type="password" name="rpass" value="<?php echo $rpass;?>" id="name">
					<br><span style="color:red"><?php echo $err_rpass;?></span></td>
					
				</tr>
				
				
				
				<tr>
					<td>Gender: </td>
					<td><input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female</td>
				</tr>
				
				<tr>
					<td>Address: </td>
					<td><input type="text" name="address" style="height:75px" style="width:400px" value="<?php echo $address;?>"  placeholder="Enter the addess" id="address">
					<br><span style="color:red"><?php echo $err_address;?></span></td>
					
				</tr>
				
				
				<tr>
					<td>Employee Details: </td>
					<td><input type="text" name="details" style="height:75px" style="width:400px"  value="<?php echo $details;?>" placeholder="Enter The Details problem" id="details">
					<br><span style="color:red"><?php echo $err_details;?></span></td>
					
				</tr>
				
				<tr>
					<td>Contact Number: </td>
					<td><input type="text" name="contact" value="<?php echo $contact;?>" placeholder="Enter The Phone Number" id="phone" >
					<br><span style="color:red"><?php echo $err_contact;?></span></td>
					
				</tr>
				
				<tr>
					<td>Email Addess: </td>
					<td><input type="email" name="email"  placeholder="Please enter a vaild Email addess" id="email">
					
					
				</tr>
				
				<tr>
					<td>Age: </td>
					<td><input type="number" name="age" value="<?php echo $age;?>" id="age">
					<br><span style="color:red"><?php echo $err_age;?></span></td>
					
				</tr>
				<tr>
					<td>NID: </td>
					<td><input type="text" name="age" value="<?php echo $nid;?>" id="nid">
					<br><span style="color:red"><?php echo $err_nid;?></span></td>
					
				</tr>
				
				<tr>
					<td>Doctor Types: </td>
					<td>
						<select name="profession" id="job">
							<option>Medicine</option>
							<option selected="selected">Arthopedic</option>
							<option>Sergon</option>
							<option>Dentist</option>
							<option>Radiologist</option>
							<option>Cardiologist</option>
							<option>Eye Speacialist</option>
							<option>Child S</option>
						</select>
					</td>
				</tr>
				
                 <tr>
				
					<td>
						<input type="submit" name="submit" value="Submit" id="submit">
					</td>
					 <td></td>
					  
					<td>
					<input type="reset" id="reset"></td>
				</tr>
				 
				
				
				
				
				
				
				
			</table>
		</form>
		</div>
	</body>
</html>