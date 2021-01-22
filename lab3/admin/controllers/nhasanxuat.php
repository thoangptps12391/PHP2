<?php
require_once "models/nhasanxuat.php"; //nạp model để có các hàm tương tác db
class nhasanxuat {
     function __construct()   {
        $this->model = new model_nhasanxuat();
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
     $page_title ="Danh sách nhà sản xuất";
     $page_file="views/nhasanxuat_index.php";
    require_once "layout.php";
     }
     function addnew(){
        $page_title ="Thêm nhà sản xuất";
        $page_file="views/nhasanxuat_add.php";
       require_once "layout.php";
     }
     function store(){
        $ten=$_POST['ten'];
        if (isset($_POST['tt'])){
        $tt=$_POST['tt'];}else{
            $tt='';
        }

        if (isset($_POST['ah'])) {
            $ah='0';
        } else {
            $ah='1';
        }
        
      
        $list = $this->model->store($ten,$tt,$ah);
        header("location: ?ctrl=nhasanxuat");
     }
     function edit(){
     $idnsx=$_GET['idnsx'];
     settype($idnsx,"int");
     $row=$this->model->detailrecord($idnsx);
     $page_title="Cập nhật nhà sản xuất";
     $page_file="views/nhasanxuat_edit.php";
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
        header("location: ?ctrl=nhasanxuat");
     }
     function delete(){
      $id=$_GET['idnsx'];
      $list = $this->model->delete($id);
      header("location: ?ctrl=nhasanxuat");
     }
 }?>