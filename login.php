<!DOCTYPE html>
<html>
<head>
	<title>Welcome to P-DOC</title>
	   <body style="margin:0px;font-family: 'Open Sans',sans-serif;width:100%;overflow-x:hidden;">

<div id="backgroundImage" style="position:absolute;top:0px;z-index:-1;width:100%">

<img src="back2.jpg" style="z-index:-10;position:fixed;width:100%;height:1000px;">
	<style>
		body {
			background-color: #f8f8f8;
			font-family: sans-serif;
		}
	
		.login_main1 {
			width: 40%;
			border:1px solid #d8d8d8;
			border-radius: 8px;
			height: 40%;
			background-color: white;
			color: #333;
			margin: 20px; 
			box-shadow: 0 4px 8px 0 #a8a8a8;
			
		}
		
		h1:hover {
			background-color: #ADD8E6;

		}
		.login_main1:hover{
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
			width: 83%;
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
			width: 50%;
			text-align: center;
			background-color: red;
			color: white;
			border:0;
			padding: 15px 20px;
			box-shadow: 0 4px 8px 0 #a8a8a8;
			width: 30%;
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
	</style>
	<script>
		function fun()
		{
			var n=document.getElementById("regmail").value;
			var re=/\S+@\S+\.\S+/;
			if(!re.test(n)){
				alert("Enter a valid email id");
				return false;
			}
		}
	</script>
</head>
<body>
<h2 align="center"><img src="logo.png" align="center"></h2>
<hr color="#e8e8e8">
<center>
	<div class="login_main1">
	<p>
	<form name="loginform" action="log.php" method="post" onsubmit="return fun()">
	<h2 align="center">Login</h2>
		<input type="text" class="txt" id="regmail" name="regmail" placeholder="Enter email id"><br>
		<input type="password" class="txt" id="regpass" name="regpass" placeholder="Enter your password"><br>
		<input type="submit" class="btn" value="Submit">
		<p><center><a href="Register.php" style="text-decoration:none;font-size:20px;color:black">New User?</a></center></p>

	</form>
	</div>
</center>
</body>
</html>