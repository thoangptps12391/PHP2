<?php
 require_once '../system/model_system.php';
 class model_product extends model_system {
      function store($tendt, $gia, $giakm, $urlhinh, $thoidiemnhap, $mota, $idnsx, $anhien, $soluongtonkho){ 
          //$sql = "INSERT INTO `nhasanxuat` (`idnsx`, `tennsx`, `thutu`, `anhien`) VALUES (NULL, '$ten', '$tt', '$ah');";
          $sql="INSERT INTO `dienthoai` (`iddt`, `tendt`, `gia`, `giakm`, `urlhinh`, `thoidiemnhap`, `mota`, `solanxem`, `solanmua`, `hot`, `idnsx`, `anhien`, `soluongtonkho`) VALUES (NULL, '$tendt', '$gia', '$giakm', '$urlhinh', '$thoidiemnhap', '$mota', '0', '0', '0', '$idnsx', '$anhien', '$soluongtonkho');";
          $kq= $this->execute($sql);
          return $kq;
      }
      function update($tendt, $gia, $giakm, $urlhinh, $mota, $hot, $idnsx, $anhien, $soluongtonkho){ 
          //$sql = "UPDATE `nhasanxuat` SET `tennsx` = '$ten', `thutu` = '$tt', `anhien` = '$ah' WHERE `nhasanxuat`.`idnsx` = $id;";
          $sql="UPDATE `dienthoai` SET `tendt`='$tendt',`gia`='$gia',`giakm`='$giakm',`urlhinh`='$urlhinh',`mota`='$mota',`hot`='$hot',`idnsx`='$idnsx',`anhien`='$anhien',`soluongtonkho`='$soluongtonkho' WHERE `dienthoai`.`iddt`='$iddt';";
          $kq= $this->execute($sql);
          return $kq;
      }
      function delete($iddt){  
          $sql = "DELETE FROM `dienthoai` WHERE `dienthoai`.`iddt` = $iddt";
          $kq= $this->execute($sql);
          return $kq;
         
      }
      function listrecords(){ 
          $sql = "SELECT * FROM dienthoai";
          $kq= $this->query($sql);
          return $kq;
      }
      function detailrecord($iduser){ 
          $sql = "SELECT * FROM dienthoai where iddt='$iddt'";
          $kq= $this->queryOne($sql);
          return $kq;
      }
 }?>