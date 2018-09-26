<?php
	$data = '{"token":"72c12e87882500af80aaae59e71c81a782ff0093","start_date":"2018-07-01 00:00:00","end_date":"2018-07-29 23:59:59","src":"","dst":"601301,601302,601303,601304,601305,601306","calltype":"inbound"}';
	$data_base64_encode =  base64_encode($data);
	$cmd = 'https://61.91.4.237:22243/api/cdr.json/?data='.$data_base64_encode;
	$result = file_get_contents($cmd);
	echo $result;
	
?>