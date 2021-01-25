

<?php
require_once "models/users.php"; //nạp model để có các hàm tương tác db
class users {
     function __construct()   {
        $this->model = new model_users();
        $act = "index";//chức năng mặc định
        if(isset($_GET["act"])==true) $act=$_GET["act"];//tiếp nhận chức năng users request
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
     $page_title ="Danh sách users";
     $page_file="views/usres/users_index.php";
    require_once "layout.php";
     }
     function addnew(){
        $page_title ="Thêm users";
        $page_file="views/usres/users_add.php";
       require_once "layout.php";
        if (isset($_POST['submit'])) {
            $this->store();
            echo '
                <script>
                    alert("thanh công!!");
                    window.location="?ctrl=users";
                </script>;';
        }
     }
     function store(){
        $username=$_POST['kh'];
        $pass1=$_POST['pass1'];
        $pass2=$_POST['pass2'];
        $hoten=$_POST['hoten'];
        $email=$_POST['email'];
        $today = date("j-m-y");
        $kichhoat=$_POST['kichhoat'];
        //$hinh=$_FILES["urlhinh"]["name"];
        $hinh=$_POST['urlhinh'];
        $urlhinh='../images/'.$hinh;
        if (isset($_POST['anhien'])) {
            $anhien='0';
        } else {
            $anhien='1';
        }
        if ($pass1==$pass2) {
            $pass=password_hash($pass1, PASSWORD_BCRYPT,["cost" => 12]);
            $list = $this->model->store($username,$pass,$hoten,$kichhoat,$urlhinh,$email,$anhien,$today);
        }
        else{
            echo 'mat khau khong trung';
        }
     }
     function edit(){
     $iduser=$_GET['iduser'];
     settype($iduser,"int");
     $row=$this->model->detailrecord($iduser);
     $page_title="Cập nhật khách hàng";
     $page_file="views/usres/users_edit.php";
     require_once "layout.php";
     if (isset($_POST['submit'])) {
        if (isset($_GET['iduser'])) {
            $iduser=$_GET['iduser'];
        }
        $this->update($iduser);
            echo '
                <script>
                    alert("thanh công!!");
                    window.location="?ctrl=users";
                </script>;';
        }
    }
    function update($iduser){   
            $pass1=$_POST['pass1'];
            $pass2=$_POST['pass2'];
            $hoten=$_POST['hoten'];
            $email=$_POST['email'];
            $kichhoat=$_POST['kichhoat'];
            //$hinh=$_FILES["urlhinh"]["name"];
            $hinh=$_POST['urlhinh'];
            $urlhinh='../images/'.$hinh;
            if (isset($_POST['anhien'])) {
                $anhien='0';
            } else {
                $anhien='1';
            }
            if ($pass1==$pass2) {
                $pass=password_hash($pass1, PASSWORD_BCRYPT,["cost" => 12]);
                $list = $this->model->update($iduser,$pass,$hoten,$kichhoat,$urlhinh,$email,$anhien);
            }
            else{
                echo 'mat khau khong trung';
            }
            //header("location:?ctrl=users");
        // $list = $this->model->update($iduser,$pass,$hoten,$kichhoat,$urlhinh,$email);
        // header("location: ?ctrl=users");
     }
     function delete(){
      $id=$_GET['iduser'];
      $list = $this->model->delete($id);
      header("location: ?ctrl=users");
     }
 }?>