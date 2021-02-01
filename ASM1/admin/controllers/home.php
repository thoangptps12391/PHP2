<?php  //nạp model để có các hàm tương tác db
class home {
     function __construct()   {
             $this->index();
        }
        //$this->$act;
     function index(){
     $page_title ="Trang chu";
     //$page_file="vie ws/nhasanxuat_index.php";
    require_once "layout.php";
     }
 }	
?>