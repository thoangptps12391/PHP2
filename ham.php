<?php 
  function stripUnicode($str){
    if(!$str) return false;
    $unicode = array(
      'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
      'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
      'd'=>'đ',
      'D'=>'Đ',
      'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
      'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
      'i'=>'í|ì|ỉ|ĩ|ị',
      'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
      'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
      'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
      'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
      'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
      'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
      'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
    );
    foreach($unicode as $khongdau=>$codau) {
      $arr=explode("|",$codau);
      $str = str_replace($arr,$khongdau,$str);
      // //không dấu

      $strDB=array('%','$','*','&','?','!','#','@');
      $str = str_replace($strDB,'',$str);
      // //ký tự đặt biệt

      //$str = str_replace(' ','',$str);
      //khoản tráng đầu và cuối chuổi

      $str = preg_replace('/\s+/', ' ', $str);
    }
    return $str;
  }
?>
<?php
  function slug($str)
    {
      //echo 'chữ không dấu<br>'.stripUnicode($str);
      echo stripUnicode($str);
    }
    $str='    thoảng    *    đẹp #           & trai     a';
    slug($str);
?>
<!-- lỏi hàm slug -->