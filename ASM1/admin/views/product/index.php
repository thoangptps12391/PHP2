<table class="table">
  <thead>
    <tr>
      <th scope="col">Tên điện thoại</th>
      <th scope="col">Gia</th>
      <th scope="col">Gia khuyến mãi</th>
      <th scope="col">Hinh ảnh</th>
      <th scope="col">Ngày nhập</th>
      <th scope="col">Số lược xem</th>
      <th scope="col">Số lược mua</th>
      <th scope="col">tên nhà san xuất</th>
      <th scope="col">Số lượng tồn kho</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
      
    </tr>
  </thead>
  <tbody>
  
    <?php
if ($list==NULL) echo "Chưa có dữ liệu";
else foreach ($list as $row) {
    $listCata=$this->model1->idNameCata($row['idnsx']);
    if ($row['anhien']==null) {
    $ah='null';
    } else if ($row['anhien']==1) {
        $ah="Ẩn";
    } else {
        $ah="Hiện";
    }
    echo '  <tr>
    <th scope="row">'.$row['tendt'].'</th>
    <td>'.$row['gia'].'</td>
    <td>'.$row['giakm'].'</td>
    <td><img width="150px" src="'.$row['urlhinh'].'"></td>
    <td>'.$row['thoidiemnhap'].'</td>
    <td>'.$row['solanxem'].'</td>
    <td>'.$row['solanmua'].'</td>
    <td>'.$listCata['tennsx'].'</td>
    
    <td>'.$row['soluongtonkho'].'</td>
    <td><a href="?ctrl=dienthoai&act=edit&iddt='.$row['iddt'].'">Sửa</a></td>
    <td><a href="?ctrl=dienthoai&act=delete&iddt='.$row['iddt'].'">Xóa</a></td>
  </tr>';
}
?>

  </tbody>
</table>
