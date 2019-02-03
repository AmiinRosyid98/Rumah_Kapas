@extends('welcome')

@section('title','My Order')

@section('isi')

<section  id="contact"  style="margin-top: 50px;">
	<div class="container">

		<div class="section-header">
		  <h3>My Order</h3>
		</div>
		<div class="row">
			<div class="col-lg-5">

	            <div class="map mb-4 mb-lg-0">
	              <img src="assets/img/portfolio/kemeja.jpg" class="img-fluid" alt="">
	            </div>
	  	        <div style="margin-top: 15px">
	  	        	<center><b>Nama Pakaian</b></center>
	  	        </div>

	  	        <br>
	            <div class="row">
	            	<div class="col-sm-4">
	            		<b>Order Quantity</b>
	            	</div>
	            	<div class="col-sm-8">
	            		<div class="row">
							<div class="form-group col-sm-4 ">
								<label>XS</label>
								<input type="text" disabled="" class="form-control" name="xs" id="xs" placeholder=""   data-msg="Please enter a valid email" value="345" />
								<div class="validation"></div>
							</div>
							<div class="form-group col-sm-4">
								<label>S</label>
								<input type="text" disabled="" class="form-control" name="s" id="s" placeholder="" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group col-sm-4">
								<label>M</label>
							  <input type="text" disabled="" class="form-control" name="m" id="m" placeholder=""   data-msg="Please enter a valid email" />
							  <div class="validation"></div>
							</div>
			            </div>
						<div class="row">
						  <div class="form-group col-sm-4">
						    	<label>L</label>
						      <input type="text" disabled="" class="form-control" name="l" id="l" placeholder=""   data-msg="Please enter a valid email" />
						      <div class="validation"></div>
						  </div>
						  <div class="form-group col-sm-4">
						    	<label>XL</label>
						      <input type="text" disabled="" class="form-control" name="xl" id="xl" placeholder=""   data-msg="Please enter a valid email" />
						      <div class="validation"></div>
						  </div>
						  <div class="form-group col-sm-4">
						    	<label>XXL</label>
						      <input type="text" disabled="" class="form-control" name="xxl" id="xxl" placeholder=""   data-msg="Please enter a valid email" />
						      <div class="validation"></div>
						  </div>
						</div>
					</div>
	              
	            </div>
	            <div class="row">
	            	<div class="col-sm-4">
	            		<b>Tanggal Jadi</b>
	            	</div>
	            	<div class="col-sm-8">
	            		 
						 22 Desember 2020
					</div>
	              
	            </div>
	             <div class="row">
	            	<div class="col-sm-4">
	            		<b>Alamat</b>
	            	</div>
	            	<div class="col-sm-8">
	            		Alamat
					</div>
	              
	            </div>
          </div>
			<div class="col-lg-7">
				<div >
				  <center><h3>Pilih Vendor</h3></center>
				</div>
				<div class="row" style="border:1px solid #dce0e5; padding: 5px 17px; border-radius: 7px; background: #edf0f4 ">
					<div class="col-md-9">
						<span style="font-size: 20px;">Vendor A</span>
						<p><b>Alamat</b> : Jl. Alamat No. 5<br>
							<b>Kontak</b> : 0988978<br>
						</p>
					</div>
					<div  class="col-md-3">
						<p>
							Harga yg ditawarkan : <br><b>Rp. 2.000.000</b>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection