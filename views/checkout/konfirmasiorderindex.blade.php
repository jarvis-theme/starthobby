		<div class="tab-title-top center">
			<h1>Konfirmasi Order</h1>
		</div>

		<div class="register-page center">
			<div class="contact-form">
				<p>Silakan masukkan kode order yang mau anda cari!</p>
				{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
					<input type="text" class="form-control" placeholder=" Kode Order" name="kodeorder" required>
					<button type="submit" class="btn btn-success"><span> Cari Kode</span></button>
				{{Form::close()}}
				<hr>
			</div>
		</div>