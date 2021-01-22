<?php
   session_start();
   require_once 'connect.php';
   if (isset($_GET['page']))  
        $page = trim(strip_tags($_GET['page']));
   else $page="";
?>
<!DOCTYPE html>
<html lang="en">
<head> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet" >
<meta charset="utf-8"/>
<title>Tin tức online</title>
<style>
   header.row { height: 180px; background-color:darkcyan}
   nav.row { height: 45px; background-color: darkgreen}
   .col-9, .col-3 { min-height: 500px }
   .col-9 { background-color: azure }
   .col-3 { background-color:cadetblue}
   footer.row { height: 120px; background-color: darkblue; }
		h2,span {
			text-align: left;
		}
		#tinmoinhat { 
			width: 100%; 
			font-size: 1.2em}
		#tinmoinhat h4 { height: 60px; 
			font-size: 1.3em; 
			overflow: hidden; margin-top:0}
		#tinmoinhat .col { 
			width: 48%; 
			float: left; 
			height: 430px; 
			border: solid 1px brown;
		margin: 5px; 
		overflow: hidden;  
		box-sizing: border-box; 
		padding: 20px}
		#tinmoinhat .col img { 
			margin: auto; 
			width: 100%; }
		#tinmoinhat .tomtat { height: 120px; 
			overflow: hidden; 
			line-height: 150%}
		.pd{
			padding: 15px;
		}
		.tite{
			text-align: center;
		}
</style>
</head>
<body>
	<div class="container">
	    <header class="row">
	    </header>
	    <nav class="row"> <?php include 'menu.php';?></nav>
	    <div class="row ">
	        <main class="col-9">
	        	<?php
					switch ($page){
						case "lienhe" : require_once 'lienhe.php'; break;
						case "gioithieu" : require_once 'gioithieu.php'; break;
						case "tin" : require_once 'tinchitiet.php'; break;
						case "loaitin" : require_once 'tintrongloai.php'; break;
						case "theloai" : require_once 'tintrongtheloai.php'; break;
						default: require_once 'home.php'; 
					}
				?>
	        </main>
	        <aside class="col-3"><?php include 'topview.php' ?></aside>
	    </div>
	    <footer class="row"> </footer>
	</div>
	
</body>
</html>