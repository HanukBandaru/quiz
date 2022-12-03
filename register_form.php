<!DOCTYPE html>
<html>
	<head>
		<title>REGISTRATION FORM</title>
		<style>
			body{

				border: 3px solid black;
				width: 400px;
				text-align: left;
				color: blue;
				padding-left: 10px;
				margin:  20px 20px 450px 450px;
			}
			.head{
				text-align: center;
				font-size: 40px;
				padding: 10px;
			}
			 
			
		</style>
	</head>
	<body>
			<div class="head">Registration Form</div>
			<form action="submit.php" method="post">
	
				Firstname:<input type="text"  placeholder="first name" name="firstname" required ><br/><br/>
				 
				Lastname:<input type="text"   placeholder="last name" name="lastname" required/><br/><br/>
			
				Email:<input type="text"   placeholder="email" name="email" required /><br/></br>
				 
				Password:<input type="password"  placeholder="min 8 characters" name="password"   required/><br/></br>
				
					Phone number:<input type="number"  name="phone"  required/></br></br>
                    <input type="reset">
				<input type="submit">
				</form>
			
			</div>

	</body>
</html>
