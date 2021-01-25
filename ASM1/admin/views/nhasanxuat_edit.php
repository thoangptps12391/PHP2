<form method="post" action="<?=ADMIN_URL?>/?ctrl=nhasanxuat&act=update" class="col-6">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tên loại</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tên loại" name="ten" value="<?=$row['tennsx']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Thứ tự</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Thứ tự" name="tt" value="<?=$row['thutu']?>">
</div>
<?php
if ($row['anhien']==0) {
    $r='checked';
} else {
    $r='';
}

?>
<input type="hidden" name="idnsx" value="<?=$idnsx?>">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value=""<?=$r?> id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Ẩn hiện
  </label>
</div>
<div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <button type="submit" class="btn btn-primary">Thêm</button>
</div>
</form>