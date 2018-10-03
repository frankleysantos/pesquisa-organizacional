<?php  
try {
	global $intra;
	$intra = new PDO("mysql:dbname=intranet; host=localhost", "root", "");
} catch (Exception $e) {
	echo "Erro".$e->getMessage();
}

?>