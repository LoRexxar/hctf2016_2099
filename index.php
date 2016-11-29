<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"></meta>
		<title>Welcome to HCTF2016</title>
	</head>
	<body>
		<div align="center" >
			<p>
				<li>only ios99 can get flag(Maybe you can easily get the flag in 2099 </li>

			</p>


<?php

$ua = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null;

//Mozilla/5.0 (iPhone; CPU iPhone OS 9_0 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13A344 Safari/601.1
if (preg_match('/iPhone;\ CPU\ iPhone\ OS\ 99\ like\ Mac\ OS\ X/i', $ua) && preg_match('/Mozilla\/5\.0/i', $ua) && 
	preg_match('/AppleWebKit/i', $ua) && preg_match('/Safari/i', $ua)) {

	echo '<!-- flag not in html... -->';
	header('flag: hctf{h77p_He4dEr_50_E4sy}');
}

?>

		</div>
	</body>
</html>

