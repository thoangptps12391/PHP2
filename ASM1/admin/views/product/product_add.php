<!-- $tendt, $gia, $giakm, $urlhinh, $thoidiemnhap, $mota, $idnsx, $anhien, $soluongtonkho -->
<form method="post" action="" class="form-group">
	<div class="mb-3">
		<label for="exampleFormControlInput" class="form-label">Tên điện thoại</label>
		<input type="text" class="form-control" id="exampleFormControlInput" placeholder="nhập tên điện thoại" name="tendt">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Giá góc</label>
		<input type="number" class="form-control" id="exampleFormControlInput1" placeholder="nhập giá góc" name="gia">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlInput2" class="form-label">Giá Khuyến mãi</label>
		<input type="number" class="form-control" id="exampleFormControlInput2" placeholder="Nhập giá khuyến mãi" name="giakm">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlInput3" class="form-label">Hình ảnh</label>
		<input type="file" class="form-control" id="exampleFormControlInput3" placeholder="chọn hình" name="urlhinh">
	</div>
	<div class="mb-3">
        <label for="">Mo tả</label><br>
        <script src="ckeditor/ckeditor.js"></script>
        <textarea placeholder="Nhập nội dung tại đây" name="ten" id="ten"
            style="width: 100%;height: 100vh;" maxlength="6000"></textarea>
        <script>
        CKEDITOR.replace('ten');
        </script>
    </div>
	<div class="mb-3">
		<label for="exampleFormControlTextarea4" class="form-label">Nhà sản xuất</label>
		<select class="form-control" id="exampleFormControlInput2" name="idnsx">
			<?php 
				foreach ($listNXS as $key) {
					echo '
						<option value="'.$key['idnsx'].'">'.$key['tennsx'].'</option>
					';
				}
			?>
		</select>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="anhien">
		<label class="form-check-label" for="flexCheckDefault">
			Ẩn hiện
		</label>
	</div>
	<div class="mb-3">
		<label for="exampleFormControlInput5" class="form-label">Số lượng tồn kho</label>
		<input type="number" class="form-control" id="exampleFormControlInput5" maxlength="99999" placeholder="Nhấp số lượng tồn kho" name="soluongtonkho">
	</div>
	<div class="btn-group" role="group" aria-label="Basic mixed styles example">
		<button type="submit" name="submit" class="btn btn-primary">Thêm</button>
	</div>
</form>