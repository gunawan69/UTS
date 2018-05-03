<?php
$db_host	= 'localhost'; 
$db_usn		= 'id4892684_uts'; //nama username
$db_pwd		= 'gunawan098'; //password jika tadak ada bisa di kosongi seperti contoh 
$db_name	= 'id4892684_uts'; //nama database

$db_link	= mysqli_connect($db_host,$db_usn,$db_pwd,$db_name);
if (!$db_link){
	echo 'Tidak dapat terhubung ke database';
}
?>