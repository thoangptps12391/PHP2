<?php 
	require_once "connect.php";
	try {
	  $sql = "SELECT TieuDe, TomTat,Ngay,urlHinh FROM tin WHERE lang='vi' ORDER BY Ngay DESC LIMIT 0,12";
	  $kq = $conn->query($sql); 
	}
	catch (Exception $e){
	   die("Lỗi thực thi sql: " . $e->getMessage() ) ;
	}
?>
<div id="tinmoinhat" class="data ">
<h1>Tin Mới Nhất</h1>   
<?php foreach ($kq as $tin) { ?>
    <div class="col">
		<h4> <a href="#"><?=$tin['TieuDe']?> </a></h4>
		<em> Ngày đăng : <?=date('d/m/Y',strtotime($tin['Ngay'])); ?></em><br>
		<img src="Lab1-PHP2/<?=$tin['urlHinh']?>" height="180" width="100%">
		<div class="tomtat"> <?=$tin['TomTat']?></div>
    </div>
<?php }?>
</div>