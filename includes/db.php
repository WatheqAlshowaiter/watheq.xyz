<?php

//  prevent error reporting 
// usefull for production code 
error_reporting(0);
ini_set('display_errors', 0);

ob_start(); // output buffering
?> 
<?php


define('DB_HOST', "localhost");
define('DB_USER', "watheqxy_1");
define('DB_PASS', "DXw9SkMQX4weEzK");
define('DB_NAME', "watheqxy_watheq");


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$connection) {
	die("
			شيء غير متوقع حدث للتو ... قد يكون بسبب سوء الاستضافة
			ابق على تواصل معي 
			<p><a href='https://facebook.com/watheq.show'>فيسبوك</a> </p>
			<p><a href='https://twitter.com/watheq_show'>تويتر</a> </p>
			<p><a href='watheq[dot]alshowiter[at]gmail[dot]com'>بريد إلكتروني</a> </p>
			<p><a href='https://github.com/WatheqAlshowaiter'>جت هب</a> </p>

		<pre>
		________████████
		_________ ███████
		__________████████
		…______██████████████
		_____███▒▒░░░░░░░░▒
		_______▒░░░░░ ⓤ░░ⓤ░▒
		_______▒░░░░░░░░ >░░ ▒
		_______██▒░░░░░·︾·░░▒
		_______████▒░░░░░░░▒
		______▒▒███████████▒▒
		____▒░░░░░▒▒▒▒███░░░▒
		___▒░░░▒░░░░░░████░░ ▒
		___▒░░░░▒░░░░░█████░░▒
		___▒░░░░░▒░░░░███████░▒
		____▒░░░░▒░░░░██████▒▒
		____▒#▒▒▒▒▒░##░██████
		__▒#▒░░░░░░░░░░░░░▒░▒
		_▒░░░░░░░░░░░░░░Ѻ░░░▒
		▒░░░░░░░░░░░░░░░░░░░ ▒
		▒░░░░░░░░░░░░░░░Ѻ░░░ ▒
		▒░░░░░░░░░░░░░░░░░░░ ▒
		#▒░░░░░░░░░░░░░Ѻ░░░░▒
		##▒░░░░░░░░░░░░░░░░##
		</pre>");
}

if (!function_exists('StringInputCleaner')) {
	//To SANITIZE String value use
	function StringInputCleaner($data)
	{
		//remove space bfore and after
		$data = trim($data);
		//remove slashes
		$data = stripslashes($data);
		$data = (filter_var($data, FILTER_SANITIZE_STRING));
		return $data;
	}
}

if (!function_exists('mysqlCleaner')) {
	//To SANITIZE Sql query value use
	function mysqlCleaner($data)
	{
		global $connection;

		$data = mysqli_real_escape_string($connection, $data);
		$data = stripslashes($data);
		return $data;
		//or in one line code 
		//return(stripslashes(mysql_real_escape_string($data)));
	}
}

?>