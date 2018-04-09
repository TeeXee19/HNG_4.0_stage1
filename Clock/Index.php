<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>First HTML</title>
		<link rel="stylesheet" href="main.css">
		
		
	</head>
	<body class="bg"> 
	<!-- Image and text -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HNG INTERNSHIP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
  </div>
</nav>
		
		
		<p class="hng">HNG INTERNSHIP</p>

		<div id="clock"> </div>
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
