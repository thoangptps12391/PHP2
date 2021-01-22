<?php 
	require_once "connect.php";
	try {
	  $sql = "SELECT TieuDe, SoLanXem FROM tin WHERE AnHien=1 ORDER BY SoLanXem DESC LIMIT 0,10";
	  $kq = $conn->query($sql); 
	}
	catch (Exception $e){
	   die("Lỗi thực thi sql: " . $e->getMessage() ) ;
	}
?>
<div id="txn" class="data pd">
	<h1 class="tite">Top View</h1>
	<?php foreach ($kq as $tin) { ?>
	<div class="row">
		<h2><a href="#"><?=$tin['TieuDe']?></a></h2> 
		<span> <?=$tin['SoLanXem']?> lượt xem</span>
	</div>
	<?php }?>
</div>