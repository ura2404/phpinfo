<?php
	$version = phpversion();

	print '	<html>
	<head>
		<title>phpinfo &bull; '.$version.'</title>
	</head>
	<div style="display:flex">
		<div style="margin:auto">
			<a href="opcache">Opcache</a>
			<span style="color:lightgrey">|</span>
			<a href="bench.php">Bench</a>
		</div>
	</div>
	<hr/>
</html>	';

	phpinfo();
?>