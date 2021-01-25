<table class="table">
  <thead>
    <tr>
      <th scope="col">Tên nhà sản xuất</th>
      <th scope="col">Thứ tự </th>
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
    $ah='null';
    } else if ($row['anhien']==1) {
        $ah="Ẩn";
    } else {
        $ah="Hiện";
    }
    if ($row['thutu']==null) {
        $tt='null';
        } else {
        $tt=$row['thutu'];
        }
    
    echo '  <tr>
    <th scope="row">'.$row['tennsx'].'</th>
    <td>'.$tt.'</td>
    <td>'.$ah.'</td>
    <td><a href="?ctrl=nhasanxuat&act=edit&idnsx='.$row['idnsx'].'">Sửa</a></td>
    <td><a href="?ctrl=nhasanxuat&act=delete&idnsx='.$row['idnsx'].'">Xóa</a></td>
  </tr>';
}
?>

  </tbody>
</table>
