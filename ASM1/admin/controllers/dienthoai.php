<?php
require_once "models/dienthoai.php"; //nạp model để có các hàm tương tác db
require_once "models/nhasanxuat.php"; //nạp model để có các hàm tương tác db
class dienthoai {
	function __construct()   {
		$this->model = new model_product();
		$this->model1 = new model_nhasanxuat();
        $act = "index";//chức năng mặc định
        if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng user request
        switch ($act) {    
        	case "index": $this->index(); break;
        	case "addnew": $this->addnew(); break;
        	case "store": $this->store(); break;
        	case "edit": $this->edit(); break;
        	case "update": $this->update(); break;
        	case "delete": $this->delete(); break;
        }
        //$this->$act;
    }
    function index(){
    	$list = $this->model->listrecords();
    	$page_title ="Danh sách Điện thoại";
    	$page_file="views/product/product_index.php";
    	require_once "layout.php";
    }
    function addnew(){
    	$page_title ="Thêm Điện thoại";
    	$listNXS = $this->model1->listrecords();
    	$page_file="views/product/product_add.php";
    	require_once "layout.php";
    }
    function store(){
     	// $tendt, $gia, $giakm, $urlhinh, $thoidiemnhap, $mota, $idnsx, $anhien, $soluongtonkho
    	$tendt=$_POST['tendt'];
    	$gia=$_POST['gia'];
    	$giakm=$_POST['giakm'];
    	$hinh=$_POST['urlhinh'];
    	$thoidiemnhap= date('j-m-y');
    	$urlhinh='../images/'.$hinh;
    	$mota=$_POST['ten'];
    	if (isset($_POST['anhien'])) {
    		$anhien='0';
    	} else {
    		$anhien='1';
    	}
    	$idnsx=$post['idnsx'];
    	$soluongtonkho=$_POST['soluongtonkho'];
    	$list = $this->model->store($tendt, $gia, $giakm, $urlhinh, $thoidiemnhap, $mota, $idnsx, $anhien, $soluongtonkho);
    	header("location: ?ctrl=product");
    }
    function edit(){
    	$idnsx=$_GET['idnsx'];
    	settype($idnsx,"int");
    	$row=$this->model->detailrecord($idnsx);
    	$page_title="Cập nhật Điện thoại";
    	$page_file="views/product/product_edit.php";
    	require_once "layout.php";
    }
    function update(){
    	$ten=$_POST['ten'];
    	$tt=$_POST['tt'];
    	if (isset($_POST['ah'])) {
    		$ah='0';
    	} else {
    		$ah='1';
    	}
    	$id=$_POST['idnsx'];

    	$list = $this->model->update($id,$ten,$tt,$ah);
    	header("location: ?ctrl=product");
    }
    function delete(){
    	$id=$_GET['idnsx'];
    	$list = $this->model->delete($id);
    	header("location: ?ctrl=product");
    }
}?>