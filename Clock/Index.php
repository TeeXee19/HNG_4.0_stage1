<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>First HTML</title>
		<link rel="stylesheet" href="main.css">
		
		
	</head>
	<body class="bg"> 
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">HNG INTERNSHIP</a>
			</div>
		  </div> 
		</nav>
	  
		<div class="intro">
			<div class="intro-body">
				<div class="col-lg-8">
					<div class="hng col-md-8 col-md-offset-2">HNG INTERNSHIP 4.0	</div> 
					<p class="hng" style="color: #80476c; text-align:center" id="clock"> </p>
				</div>
			</div>
		</div>	
	</body>
</html>
<?php
date_default_timezone_set('UTC');
?>
<script>
var d = new Date(<?php echo time() * 1000 ?>);
function digitalClock() {
  d.setTime(d.getTime() + 1000);
  var hrs = d.getHours();
  var mins = d.getMinutes();
  var secs = d.getSeconds();
  mins = (mins < 10 ? "0" : "") + mins;
  secs = (secs < 10 ? "0" : "") + secs;
  var apm = (hrs < 12) ? "am" : "pm";
  hrs = (hrs > 12) ? hrs - 12 : hrs;
  hrs = (hrs == 0) ? 12 : hrs;
  var ctime = hrs + ":" + mins + ":" + secs + " " + apm;
  document.getElementById("clock").firstChild.nodeValue = ctime;
}
window.onload = function() {
  digitalClock();
  setInterval('digitalClock()', 1000);
}
</script>
