<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body {
	background-image: url("img/winepix.jpg");
	background-size: cover;
	opacity: 100%;
	mix-blend-mode: darken;
	
}

.day {
	position: absolute;
	margin-top: 70vh;
	margin-left: 100px;
	font-size: 2em;
	align-content: rtl;
}

.date {
	position: absolute;
	margin-top: 80vh;
	margin-left: 100px;
	font-size: 2em;
	align-content: rtl;
}

.slash {
	position: absolute;
	width: 4px;
	height: 100px;
	background-color: black;
	margin-top: 70vh;
	margin-left: 300px;
}

.time {
	position: absolute;
	margin-top: 66vh;
	margin-left: 350px;
	font-size: 8.5em;
	text-align: right;
}
</style>

</head>
<body>
	<div class="case">
		<div class="day">
			<p><?php
				echo date("l");
				?></p>
		</div>
		<div class="date">
			<p><?php
				echo date("M d, Y.");
				?></p>
		</div>
		<div class="slash">
			
		</div>
		<div class="time">
			<p><?php
				echo date("h:ia");
				?></p>
		</div>
	</div>
</body>
</html>