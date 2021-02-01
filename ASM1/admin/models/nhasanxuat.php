<?php
 require_once '../system/model_system.php';
 class model_nhasanxuat extends model_system {
      function store($ten,$tt,$ah){ 
          $sql = "INSERT INTO `nhasanxuat` (`idnsx`, `tennsx`, `thutu`, `anhien`) VALUES (NULL, '$ten', '$tt', '$ah');";
          $kq= $this->execute($sql);
          return $kq;
      }
      function update($id,$ten,$tt,$ah){ 
          $sql = "UPDATE `nhasanxuat` SET `tennsx` = '$ten', `thutu` = '$tt', `anhien` = '$ah' WHERE `nhasanxuat`.`idnsx` = $id;";
          $kq= $this->execute($sql);
          return $kq;
      }
      function delete($id){  
          $sql = " DELETE FROM `nhasanxuat` WHERE `nhasanxuat`.`idnsx` = $id";
          $kq= $this->execute($sql);
          return $kq;
         
      }
      function listrecords(){ 
          $sql = "SELECT * FROM nhasanxuat";
          $kq= $this->query($sql);
          return $kq;
      }
      function detailrecord($id){ 
          $sql = "SELECT * FROM nhasanxuat where idnsx='$id'";
          $kq= $this->queryOne($sql);
          return $kq;
      }
      function idNameCata($id){ 
          $sql = "SELECT `tennsx` FROM nhasanxuat where idnsx='$id'";
          $kq= $this->queryOne($sql);
          return $kq;
      }
 }?>