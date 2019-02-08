<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="100">
</head>
<style type="text/css">
	.show{
		height: 500px;
		width: 100%;
	}
</style>
<body>
<!-- <iframe id='dynamic-content' src = 'arduino.php' width = '1000px' height = '600px'/> -->
<div class="show">
<?php
 include 'arduino.php';
?>
</div>

<div>
<iframe id='dynamic-content' src = 'info.php' width = '80%' height = '100'></iframe>
</div>

</body>
</html>