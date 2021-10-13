<div class="modal fade" id="modal-add">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<form autocomplete="off" action="" data-url="{{ route('product.store') }}" id="form-add" method="POST" role="form" enctype="multipart/form-date">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">Thêm sản phẩm mới</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" style="display:flex;">
					<div class="form-group" style="width:80%" >

						<div style="display:flex;margin-top: 10px;">
							<p style="">Tên sản phẩm:</p>
							<input id="test" name="type" type="text" class="form-control"  placeholder="Tên sản phẩm.....">
						</div>

						<div style="display:flex;margin-top: 10px;">
							<p style="margin-right: 53px;">Giá:</p>
							<input name="type" type="number" class="form-control" id="hoten-add" placeholder="Giá.....">
						</div>

						<div style="display:flex;margin-top: 10px;">
							<p style="margin-right: 45px;">Loại:</p>
							<select id="selectbrand" class="form-select" aria-label="Default select example">								
									<option selected>Open this select menu</option>
									<option value="1">Dmm</option>								
							</select>
						</div>						

						<div class="form-check" style="display:flex;margin-top: 10px;">
							<div style="margin-left: -21px;">
								<p style="">Size :</p>
							</div>
							<div style="margin-left: 63px;">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
								<label class="form-check-label" for="flexCheckChecked">M</label>
							</div>
							<div style="margin-left: 62px;">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
								<label class="form-check-label" for="flexCheckChecked">S</label>
							</div>
						</div>

						<div style="display:flex;margin-top: 10px;">
							<p style="margin-right: 8px;">Thương hiệu:</p>
							<select id="selectbrand" class="form-select" aria-label="Default select example">
								<option selected>Open this select menu</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>
						
						<div style="display:flex;margin-top: 10px;">
							<p style="margin-right: 12px;">Khuyến mãi:</p>
							<select class="form-select" aria-label="Default select example">
								<option selected>Open this select menu</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>
					
					</div>

					<div>
							<div style="display:flex;margin-top: 10px;">
								<p style="text-align: right;margin:0px 10px 0px 10px">Chọn ảnh:</p>
								<input type="file" name="ImageUpload" onchange="ShowImagePreview(this, document.getElementById('previewImage'))" />
							</div>							
								<div style="display: block; margin-left: 72px;">
									<img  src="{{asset('admin/assets/images/avatar/imgs.jpg')}}" style="width: 75%; margin: 10px 0px 0px 2px;" id="previewImage" />
								</div>                        
					</div>
				</div>

				<div style="display:flex;margin:5px 33px">
					<p style="margin-right: 32px;">Mô tả:</p>
					<div class="form-group">
						<textarea  id="ckeditor_desc"  style="resize: none" rows="0" class="form-control"   placeholder="Mô tả sản phẩm..."></textarea>
					</div>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					<button type="submit" class="btn btn-primary">Thêm</button>
				</div>
			</form>
		</div>
	</div>
</div>
