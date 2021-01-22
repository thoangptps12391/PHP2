<?php 
	require_once "connect.php";
	try {
		$sql="SELECT TieuDe, SoLanXem FROM tin WHERE NoiBat=1 ORDER BY Ngay DESC LIMIT 0,8";
	  $kq = $conn->query($sql); 
	}
	catch (Exception $e){
	   die("Lỗi thực thi sql: " . $e->getMessage() ) ;
	}
?>
	<div id="txn" class="data">
		<h1>Tin Nổi Bật</h1>
		<?php foreach ($kq as $tin) { ?>
		<div class="row">
			<h2><a href="#"><?=$tin['TieuDe']?></a></h2> 
			<span> <?=$tin['SoLanXem']?> lượt xem</span>
		</div>
		<?php }?>
	</div>