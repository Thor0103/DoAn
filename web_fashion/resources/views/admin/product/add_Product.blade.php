<div class="modal fade" id="modal-add">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<form autocomplete="off" action="" data-url="{{ route('product.store') }}" id="form-add" method="POST" role="form">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">Thêm loại sản phẩm</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" style="display:flex;">
					<div class="form-group" style="width:60%" >

						<div style="display:flex;margin-top: 15px;">
							<p style="">Tên sản phẩm:</p>
							<input id="test" name="type" type="text" class="form-control"  placeholder="Tên sản phẩm.....">
						</div>

						<div style="display:flex;margin-top: 15px;">
							<p style="margin-right: 53px;">Giá:</p>
							<input name="type" type="number" class="form-control" id="hoten-add" placeholder="Giá.....">
						</div>

						<div style="display:flex;margin-top: 15px;">
							<p style="margin-right: 45px;">Loại:</p>
							<select id="selectbrand" class="form-select" aria-label="Default select example">								
									<option selected>Open this select menu</option>
									<option value="1">Dmm</option>								
							</select>
						</div>						

						<div class="form-check" style="display:flex;margin-top: 15px;">
							<div style="margin-left: -21px;">
								<p style="">Size :</p>
							</div>
							<div style="margin-left: 62px;">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
								<label class="form-check-label" for="flexCheckChecked">M</label>
							</div>
							<div style="margin-left: 62px;">
								<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
								<label class="form-check-label" for="flexCheckChecked">S</label>
							</div>
						</div>

						<div style="display:flex;margin-top: 15px;">
							<p style="margin-right: 8px;">Thương hiệu:</p>
							<select id="selectbrand" class="form-select" aria-label="Default select example">
								<option selected>Open this select menu</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>
						
						<div style="display:flex;margin-top: 15px;">
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
							img
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
