@extends('welcome')

@section('title','My Order')

@section('isi')

<section  id="contact"  style="margin-top: 50px;">
	<div class="container">

		<div class="section-header">
		  <h3>My Order</h3>
		</div>
		<!--
		@foreach ($myorder as $m)
		
		<div class="row" style="border-radius:5px;   margin-bottom:25px;padding:20px 15px; -webkit-box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);
-moz-box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);
box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);">
			<div class="col-lg-5">

	            <div class="map mb-4 mb-lg-0">
	              <img src="assets/img/portfolio/kemeja.jpg" class="img-fluid" alt="">
	            </div>
	  	        <div style="margin-top: 15px">
	  	        	<center><b>{{$m->nama_jenis." ".$m->nama_tipe." ".$m->nama_bahan}}</b></center>
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
								<input type="text" disabled="" class="form-control" name="xs" id="xs" placeholder=""   data-msg="Please enter a valid email" value="{{$m->xs}}" />
								<div class="validation"></div>
							</div>
							<div class="form-group col-sm-4">
								<label>S</label>
								<input type="text" disabled="" class="form-control" name="s" id="s" placeholder="" data-msg="Please enter a valid email" value="{{$m->s}}" />
								<div class="validation"></div>
							</div>
							<div class="form-group col-sm-4">
								<label>M</label>
							  <input type="text" disabled="" class="form-control" name="m" id="m" placeholder=""   data-msg="Please enter a valid email" value="{{$m->m}}"/>
							  <div class="validation"></div>
							</div>
			            </div>
						<div class="row">
						  <div class="form-group col-sm-4">
						    	<label>L</label>
						      <input type="text" disabled="" class="form-control" name="l" id="l" placeholder=""   data-msg="Please enter a valid email" value="{{$m->l}}" />
						      <div class="validation"></div>
						  </div>
						  <div class="form-group col-sm-4">
						    	<label>XL</label>
						      <input type="text" disabled="" class="form-control" name="xl" id="xl" placeholder=""   data-msg="Please enter a valid email" value="{{$m->xl}}" />
						      <div class="validation"></div>
						  </div>
						  <div class="form-group col-sm-4">
						    	<label>XXL</label>
						      <input type="text" disabled="" class="form-control" name="xxl" id="xxl" placeholder=""   data-msg="Please enter a valid email" value="{{$m->xxl}}" />
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
	            		 
						 {{$m->tanggal_jadi}}
					</div>
	              
	            </div>
	             <div class="row">
	            	<div class="col-sm-4">
	            		<b>Alamat</b>
	            	</div>
	            	<div class="col-sm-8">
	            		{{$m->alamat." Desa ".$m->desa." Kecamatan ".$m->kecamatan." Kabupaten ".$m->kabupaten." Provinsi ".$m->propinsi.". Kode Pos : ".$m->kode_pos}}
					</div>
	              
	            </div>
          </div>
			<div class="col-lg-7">
				<div >
				  <center><h3>Pilih Vendor</h3></center>
				</div>
				<?php 
					$vendor = DB::table('bid')
										->join('vendor', 'bid.id_vendor', '=', 'vendor.id_vendor')
										->select('bid.*','vendor.nama_vendor','vendor.alamat_vendor','vendor.hp_vendor')										
										->where('bid.id_pesan',$m->id_pesan)->get();
					foreach($vendor as $v){
				?>
				<div class="row" style="border:1px solid #dce0e5; margin-bottom:10px; padding: 5px 17px; border-radius: 7px; background-image: linear-gradient( 135deg, #FAD7A1 10%, #E96D71 100%); ">
					<div class="col-md-9">
						<span style="font-size: 20px;"><?php echo $v->nama_vendor ?></span>
						<p><b>Alamat</b> : <?php echo $v->alamat_vendor ?><br>
							<b>Kontak</b> : <?php echo $v->hp_vendor ?><br>
						</p>
					</div>
					<div  class="col-md-3">
						<p>
							Harga yg ditawarkan : <br><b>Rp. <?php echo $v->nominal_bid ?></b>
						</p>
					</div>
				</div>
					<?php } ?>
			</div>
		</div>
		@endforeach-->
		<style>
			.card{
				border-radius:5px; 
				margin-bottom:25px; 
				-webkit-box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);
				-moz-box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);
				box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);
			}
			.card-content{
				padding : 10px;
				padding-bottom : 25px;
			}
			.card-content p span{
				font-size:14px;
			}
		</style>
		<div class="row">
			@foreach ($myorder as $m)
				<div class="col-md-3">
					<div class="card">
						<img src="{{ asset('assets/img/portfolio/kemeja.jpg')}}" class="img-fluid" alt="">
						<div class="card-content">
							<center><b>{{$m->nama_jenis." ".$m->nama_tipe." ".$m->nama_bahan}}</b></center>
							<p>
							<span>Pemesan : {{$m->nama}}</span> <br>
							<span>Tanggal jadi : {{$m->tanggal_jadi}}</span>
							</p>
							<center><a href="/myorder/detail_order/{{$m->id_pesan}}"><button class="btn btn-primary btn-sm">Detail</button></a></center>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>


@endsection