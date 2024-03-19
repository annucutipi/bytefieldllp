<html>
<head>
	<style>
		h1{
			color:white;
		}
		body{
			background: lavender;
		}
		input{
			width:550px;
			border-radius: 50px;
		}
		input{
			animation: hi 9s linear infinite;
		}
		label{

			margin-left: 40%;
			transform: translate(-50%,-50%);
		}
		@keyframes hi{
			0%{
letter-spacing: 10px;
			}
			100%{
letter-spacing: 20px;
			}
		}
		.byte{
						
			

			margin-left: 50%;
			margin-top: 20%;

			transform:translate(-50%,-50%);
		}
		
	</style>
	</head>
	<body>
		<form method="get" action="greeting.php">
			<div class=byte><h1>
			<b>BYTEFIELDS LLP</b></h1>
			<br>	
		<label><b>	ENTER YOUR NAME</b></label><br>
		<input type="text" name="name"><br>

		<input type="submit" name="submit">
	</div>
	
	</form>
		






	</body>
</html>