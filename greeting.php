<html>

<head>
	<style>



.wave {
  animation-name: wave-animation;  /* Refers to the name of your @keyframes element below */
  animation-duration: 2.5s;        /* Change to speed up or slow down */
  animation-iteration-count: infinite;  /* Never stop waving :) */
  transform-origin: 70% 70%;       /* Pivot around the bottom-left palm */
  display: inline-block;
}

@keyframes wave-animation {
    0% { transform: rotate( 0.0deg) }
   10% { transform: rotate(14.0deg) }  /* The following five values can be played with to make the waving more or less extreme */
   20% { transform: rotate(-8.0deg) }
   30% { transform: rotate(14.0deg) }
   40% { transform: rotate(-4.0deg) }
   50% { transform: rotate(10.0deg) }
   60% { transform: rotate( 0.0deg) }  /* Reset for the last half to pause */
  100% { transform: rotate( 0.0deg) }
}




/* For demonstration purposes only: */
body { font-size: 3.5em }
h1 { font-size: 0.5em }






		body{
			background:white;
			align-items: center;
			display: flex;
			
			font-size: 20px;
			
		}
		b{
color:lavender;
animation: hi 9s linear infinite;
		}
		@keyframes hi
		{
0%{
letter-spacing: 10px;
}
100%{
letter-spacing: 20px;
}
		}
	</style>
	</head>
<body>

<img src="hi.gif">
<span class="wave">👋</span>
<form method="get">

<?php
echo "<b>WELCOME </b>"
;
echo $_GET["name"];
echo "<b> TODAY IS </b>";

echo date("m/d/y");



?>

</form>
</body>
</html>