<?php 
	function lucNayLa()
	{
		$anh= array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun', 'am', 'pm',':');
		$viet= array('thứ hai', 'thứ ba', 'thứ tư', 'thứ năm', 'thứ sáu', 'thứ bay', 'chủ nhật', 'phút, sáng', 'phút, chiều', 'giờ' );
		$timenow= gmdate("D, d/m/y - g:i a.", time()+7*3600);
		$t = str_replace( $anh, $viet, $timenow);
		return $t;
	}
	echo lucNayLa();
?>
