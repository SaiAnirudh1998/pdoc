<!DOCTYPE html>
<html>
<head>
	<title>Welcome to P-DOC</title>
	<style>
		body {
			background-color: #f8f8f8;
			font-family: sans-serif;
		}
	
		.login_main1 {
			height: 50%;
			color: #333;
			margin: 25px;
			
		}
		
		h1:hover {
			background-color: #ADD8E6;

		}
		.login_main1 h2 {
			background-color: #0057e5;
			color: white;
			margin: 0; 
			padding: 15px 20px;
			border-radius: 8px 8px 0 0;
			text-shadow: 3px 3px #000000;
		}
		.login_main1 .txt {
			width: 93%;
			/*border:0;*/
			/*border-bottom: 1px;*/
			border:1px solid #d8d8d8;
			border-radius: 5px;
			padding: 15px 15px;
			margin: 10px; 
			font-size: 20px;
			background-color: #f8f8f8;
		}
		.login_main1 input:focus {
			background-color: white;
			color: blue;
		}
		.login_main1 .btn {
			text-align: center;
			background-color: blue;
			color: white;
			border:0;
			padding: 15px 20px;
			box-shadow: 0 4px 8px 0 #a8a8a8;
			font-size: 20px;
			cursor: pointer;
			text-shadow: 2px 2px #000000;

		}
		.login_main1 .btn:hover {
			background-color: #0061ff;
		}
		.login_main1 .btn:focus {
			background-color: #0057e5;
			color: white;
		}
		.login_main1 p .link1 {
			text-decoration: none;
			font-weight: bold;
			color: #0057e5;
		}
		table { table-layout: fixed; }
		td { width: 33%; text-align: center }
	</style>
	<script>
	</script>
</head>
<body>
	<div class="login_main1">
	<h3 align="center"><img src="logo.png" align="center">
	<hr color="#e8e8e8">
	<p><h3 align="center">
		Welcome to P-doc, your personal assistant<br>
		To continue, please login if you are an existing user, or register if you are a new user.
	</h3></p>
	<table align="center" cellspacing="25%" cellpadding="25%" width="30%">
	<tr>
	<td><a href="register.php"><input type="button" class="btn" value="Register here"></a>
	<td><a href="login.php"><input type="button" class="btn" value=" Login here "></a>
</body>
</html>