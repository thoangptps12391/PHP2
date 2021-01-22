<?php 
	$str=file_get_contents('https://vnexpress.net');
	//echo '<xmp>'.$str.'</xmp>';
	$arr=preg_match_all('{ href="https://(.*)\.html" }',$str,$arr);

	foreach ($arr as $key) {
            echo $key;
		}
?>