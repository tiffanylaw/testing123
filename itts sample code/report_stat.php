<?php
	$data = '{"token":"72c12e87882500af80aaae59e71c81a782ff0093","start_date":"2018-07-01 00:00:00","end_date":"2018-07-29 23:59:59","value":"9300,9301,9302,9400,9401,9402,9700,9701,9702,9800,9801,9802","calltype":"queue","reporttype":"inbound","interval":"daily"}';
	$data_base64_encode =  base64_encode($data);
	$cmd = 'https://61.91.4.237:22243/api/stat.json/?data='.$data_base64_encode;
	$result = file_get_contents($cmd);
	echo $result;


	echo "hahahah";
	echo "hahahah";
	echo "hahahah";
?>