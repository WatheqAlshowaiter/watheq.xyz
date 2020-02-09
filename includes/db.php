<?php 

//  prevent error reporting 
// usefull for production code 
error_reporting(0);
ini_set('display_errors', 0);
?> 
<?php 
	
	$db['db_host'] = "localhost"; 
	$db['db_user'] = "watheqxy_1"; 
	$db['db_pass'] = "";
	$db['db_name'] = "";

	foreach ($db as $key => $value) {
		define(strtoupper($key), $value); 
	}

	$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS , DB_NAME); 

	if (!$connection) {
		die( "
			شيء غير متوقع حدث للتو ... 
			ابق على تواصل معي 
			<p><a href='https://facebook.com/watheq.show'>فيسبوك</a> </p>
			<p><a href='https://twitter.com/watheq_show'>تويتر</a> </p>
			<p><a href='mailto://watheq.alshowiter@gmail.com'>إيميل</a> </p>
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

 ?>