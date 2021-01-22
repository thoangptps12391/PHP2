<form method="post" action="<?=ADMIN_URL?>/?ctrl=users&act=store" class="col-6">
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Username</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username" name="username">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">password</label>
		<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="*******" name="$pass1">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">nhập lại password</label>
		<input type="password" class="form-control" id="exampleFormControlInput1" placeholder="*******" name="$pass2">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlTextarea1" class="form-label">Họ và tên</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="họ và tên" name="hoten">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlTextarea1" class="form-label">email</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="họ và tên" name="email">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlTextarea1" class="form-label">Kich hoat</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kich hoat" name="kichhoat">
	</div>
	<div class="mb-3">
		<label for="exampleFormControlTextarea1" class="form-label">Hinh</label>
		<input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Hình ảnh" name="urlhinh">
	</div>
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="anhien">
		<label class="form-check-label" for="flexCheckDefault">
			Ẩn hiện
		</label>
	</div>
	<div class="btn-group" role="group" aria-label="Basic mixed styles example">
		<button type="submit" class="btn btn-primary">Thêm</button>
	</div>
</form>