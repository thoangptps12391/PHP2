<table class="table">
  <thead>
    <tr>
      <th scope="col">Họ và Tên</th>
      <th scope="col">Username</th>
      <th scope="col">Kích hoạt</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Ẩn hiện</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
      
    </tr>
  </thead>
  <tbody>
  
    <?php
if ($list==NULL) echo "Chưa có dữ liệu";
else foreach ($list as $row) {
    if ($row['anhien']==null) {
    $anhien='null';
    } else if ($row['anhien']==1) {
        $anhien="Ẩn";
    } else {
        $anhien="Hiện";
    }
    echo '  <tr>
    <th scope="row">'.$row['hoten'].'</th>
    <th scope="row">'.$row['username'].'</th>
    <th scope="row">'.$row['kichhoat'].'</th>
    <th scope="row"><img width="100px" src="'.$row['urlhinh'].'"</th>
    <td>'.$anhien.'</td>
    <td><a href="?ctrl=users&act=edit&iduser='.$row['iduser'].'">Sửa</a></td>
    <td><a href="?ctrl=users&act=delete&iduser='.$row['iduser'].'">Xóa</a></td>
  </tr>';
}
?>

  </tbody>
</table>
