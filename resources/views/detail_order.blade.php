@extends('welcome')

@section('title','Detail Order')

@section('isi')



<section  id="contact"  style="margin-top: 50px;">
    <div class="container">

		<div class="section-header">
		  <h3>Detail Order</h3>
		</div>
		
        @foreach ($myorder as $m)
		
		<div class="row" style="border-radius:5px; border:1px solid #c7c8c9;   margin-bottom:25px;padding:20px 15px; -webkit-box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);
-moz-box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);
box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);">
			<div class="col-lg-5">
            <div style="border:1px solid #accaf9; border-radius : 4px; padding:5px;">
	            <div class="map mb-4 mb-lg-0">
	              <img src="{{ asset('assets/img/portfolio/kemeja.jpg') }}" class="img-fluid" alt="">
	            </div>

                <div style="margin-top: 15px">
	  	        	<center><h5><b>{{$m->nama_jenis." ".$m->nama_tipe." ".$m->nama_bahan}}</b></h5></center>
	  	        </div>
	  	        <br>

                <div style="padding : 15px;">

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
                </div>
	  	        
            </div>
			<div class="col-lg-7" >  
          <div >
            <center><h3>Pilih Vendor</h3></center>
          </div>

          @if ($status_2)
          <style>
          .label-success{
            background-color:green; 
            color: white;
            padding : 1px 4px;
            border-radius:2px;
            font-size:19px;
          }

          .label-danger{
            background-color:red; 
            color: white;
            padding : 1px 4px;
            border-radius:2px;
          }
        </style>

          <center><span class="label label-success ">Anda Sudah merekrut</span></center>
          @else 

         
                <div style="overflow: scroll; overflow-x:hidden;  height:670px; padding:10px;">
				<?php 
					$vendor = DB::table('bid')
										->join('vendor', 'bid.id_vendor', '=', 'vendor.id_vendor')
										->select('bid.*','vendor.id_vendor','vendor.nama_vendor','vendor.alamat_vendor','vendor.hp_vendor')										
										->where('bid.id_pesan',$m->id_pesan)->get();
					foreach($vendor as $v){
				?>
                    <div class="row" style="border:1px solid #dce0e5; margin-bottom:10px; padding: 5px 17px; border-radius: 7px; background-image: linear-gradient( 135deg, #FAD7A1 10%, #E96D71 100%); ">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/vendor.png')}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-8">
                            <span style="font-size: 20px;"><b><?php echo $v->nama_vendor ?></b></span><hr>
                            <div>
                            <div style="float:left; font-size: 14px;">
                              <p><b>Alamat</b> : <?php echo $v->alamat_vendor ?><br>
                                  <b>Kontak</b> : <?php echo $v->hp_vendor ?><br>

                              </p>
                            </div>
                            <div style="float:right; font-size: 14px;">
                              <p>
                                  Harga yg ditawarkan : <br><b>Rp. <?php echo $v->nominal_bid ?></b>
                                  
                              </p>
                            </div>
                            </div>
                        </div>
                        <div  class="col-md-12">
                            
                            <center><a href="/myorder/rekrut_vendor/{{$v->id_bid}}"><button class="btn btn-primary btn-sm konfirmasi">Rekrut</button></a></center>
                            
                        </div>
                    </div>
				<?php } ?>
                </div>

                @endif

                <script>
                  $(".konfirmasi").on("click",function(){
                    return confirm("Apakah Anda yakin ?")
                  })
                </script>
				
			</div>
            <style>
                .card{
                    border-radius:5px; 
                    margin-bottom:15px; 
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

            <div class="col-lg-12" style="margin-top:25px;">
                <div class=" " style="border:1px solid #accaf9; border-radius : 4px;">
                    <div style="padding-top: 30px; border:1px solid #accaf9; background-color:#508ff4" >
                        <center><h4 style="color:white"><b>Disetujui</b></h4></center>
                    </div>
                    <div class="row" style="padding:9px;">
                    <!--<div class="row" style="border:1px solid #dce0e5; margin-bottom:10px; padding: 5px 17px; border-radius: 7px; background-image: linear-gradient( 135deg, #FAD7A1 10%, #E96D71 100%); ">-->
                        <?php 
                            $vendor = DB::table('bid')
                                                ->join('vendor', 'bid.id_vendor', '=', 'vendor.id_vendor')
                                                ->select('bid.*','vendor.nama_vendor','vendor.alamat_vendor','vendor.hp_vendor')										
                                                ->where('bid.id_pesan',$m->id_pesan)
                                                ->where('bid.status_bid',2)->get();
                            foreach($vendor as $v){
                        ?>
                         
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('assets/img/vendor.png')}}" class="img-fluid" alt="">
                                <div class="card-content" style="padding:10px;">
                                    <center><?php echo $v->nama_vendor ?></center>
                                    <p>
                                    <span>Alamat : <?php echo $v->alamat_vendor ?></span> <br>
                                    <span>No. Hp : <?php echo $v->hp_vendor ?></span><br>
                                    <span>Harga : <b>Rp. <?php echo $v->nominal_bid ?></b></span>
                                    </p>
                                    
                                    
                                </div>
                            </div>
                        </div>

						<div class="col col-md-9">
						<style>
							.progressbar {
              margin: 0;
              padding: 0;
              counter-reset: step;
            }
                .progressbar li {
                list-style-type: none;
                width: 25%;
                float: left;
                font-size: 12px;
                position: relative;
                text-align: center;
                text-transform: uppercase;
                color: #7d7d7d;
                }
                .progressbar li:before {
                width: 30px;
                height: 30px;
                content: counter(step);
                counter-increment: step;
                line-height: 30px;
                border: 2px solid #7d7d7d;
                display: block;
                text-align: center;
                margin: 0 auto 10px auto;
                border-radius: 50%;
                background-color: white;
                }
                .progressbar li:after {
                width: 100%;
                height: 2px;
                content: '';
                position: absolute;
                background-color: #7d7d7d;
                top: 15px;
                left: -50%;
                z-index: -1;
                }
                .progressbar li:first-child:after {
                content: none;
                }
                .progressbar li.active {
                color: green;
                }
                .progressbar li.active:before {
                border-color: #55b776;
                }
                .progressbar li.active + li:after {
                background-color: #55b776;
                }
						</style>

							<div class="container" style="margin-bottom:160px;">
								<center><h5><u>Progress Pengerjaan</u></h5></center>
								<ul class="progressbar" style="margin-top : 30px;">
									<li class="active">Diproses</li>
									<li>Dijahit</li>
									<li>Dikirim</li>
									<li>Selesai</li>
								</ul>
							</div>
              <div >
              <center><a href="/myorder/cancel_bid/{{$id_pesan}}"  style="margin-bottom:40px;" class="btn btn-danger btn-sm cancel_bid">Cancel</a></center>
              </div>
						</div>
            <script>
                  $(".cancel_bid").on("click",function(){
                    return confirm("Apakah Anda yakin ?")
              })
            </script>
                         
                             
                        <?php } ?>
                    </div>
                </div>
            </div>

             
		</div>        
		@endforeach
		 
	</div>
</section>


@endsection