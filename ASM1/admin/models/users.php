<?php
 require_once '../system/model_system.php';
 class model_users extends model_system {
      function store($username,$pass,$hoten,$kichhoat,$urlhinh,$email,$anhien,$today){ 
          //$sql = "INSERT INTO `nhasanxuat` (`idnsx`, `tennsx`, `thutu`, `anhien`) VALUES (NULL, '$ten', '$tt', '$ah');";
          $sql="INSERT INTO `user`(`iduser`, `username`, `pass`, `hoten`, `kichhoat`, `urlhinh`, `email`, `vaitro`, `anhien`,`ngaytao`) VALUES (NULL,'$username','$pass','$hoten','$kichhoat','$urlhinh','$email',0,'$anhien','$today');";
          $kq= $this->execute($sql);
          return $kq;
      }
      function update($iduser,$pass,$hoten,$kichhoat,$urlhinh,$email,$anhien){ 
          //$sql = "UPDATE `nhasanxuat` SET `tennsx` = '$ten', `thutu` = '$tt', `anhien` = '$ah' WHERE `nhasanxuat`.`idnsx` = $id;";
          $sql="UPDATE `user` SET `pass`='$pass',`hoten`='$hoten',`kichhoat`='$kichhoat',`urlhinh`='$urlhinh',`email`='$email',`anhien`='$anhien' WHERE `user`.`iduser`='$iduser';";
          $kq= $this->execute($sql);
          return $kq;
      }
      function delete($iduser){  
          $sql = "DELETE FROM `user` WHERE `user`.`iduser` = $iduser";
          $kq= $this->execute($sql);
          return $kq;
         
      }
      function listrecords(){ 
          $sql = "SELECT * FROM user";
          $kq= $this->query($sql);
          return $kq;
      }
      function detailrecord($iduser){ 
          $sql = "SELECT * FROM user where iduser='$iduser'";
          $kq= $this->queryOne($sql);
          return $kq;
      }
 }?>