<?php  
require "inc/config.intranet.php";
require "classes/user.class.php";
$user = new User($intra);

$sql = $user->listaUser();

foreach ($sql as $user) {
	echo $user['value'];
}
?>