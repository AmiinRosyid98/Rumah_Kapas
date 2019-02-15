@extends('vendor/welcome')

@section('title','Detail Order')

@section('isi')

<section  id="contact"  style="margin-top: 50px;">
	<div class="container">

		<div class="section-header">
		  <h3>Detail Order</h3>
		</div>
    @foreach ($myorder as $m)
    <form action="/vendor/bid" method="POST">
      {{csrf_field()}}
		<div class="row" style="border-radius:5px; border:1px solid #c7c8c9;   margin-bottom:25px;padding:20px 15px; -webkit-box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);
-moz-box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);
box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);">
      <div class="col-lg-5">

          <div class="map mb-4 mb-lg-0">
            <img src="{{ asset('assets/img/portfolio/kemeja.jpg')}}" class="img-fluid" alt="">
          </div>
          
      </div>
			<div class="col-lg-7">

        <div style="margin-top: 15px">
          <center><h5><b>{{$m->nama_jenis." ".$m->nama_tipe." ".$m->nama_bahan}}</b></h5></center>
        </div><br>

        <div class="row">
          <div class="col-sm-4">
            <b>Order Quantity</b>
          </div>
          <input type="hidden" value="{{$id_pesan}}" name="id_pesan">

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
	              
        </div><br>
        
        <div class="row">
          <div class="col-sm-4">
            <b>Alamat</b>
          </div>
          <div class="col-sm-8">
            {{$m->alamat." Desa ".$m->desa." Kecamatan ".$m->kecamatan." Kabupaten ".$m->kabupaten." Provinsi ".$m->propinsi.". Kode Pos : ".$m->kode_pos}}
          </div>
        </div><br>
        @if (date("Y-m-d")<$m->duedate)
        <div class="row">
          <div class="col-sm-4">
              <b>Masukkan Harga </b>
          </div>
          <div class="col-sm-8">
            <input type="number" name="tawaran" class="form-control">
          </div>
        </div>

       

        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-8">
            <input type="submit"  class="btn btn-primary" value="Bid">
          </div>
        </div>
        @else 
        <style>
          .label-success{
            background-color:green; 
            color: white;
            padding : 1px 4px;
            border-radius:2px;
          }

          .label-danger{
            background-color:red; 
            color: white;
            padding : 1px 4px;
            border-radius:2px;
          }
        </style>
        <div><center><span class="label label-danger">Batas Waktu Bid telah habis</span></center></div>
        @endif

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
                        <center><h4 style="color:white"><b>Penawaran</b></h4></center>
                    </div>
                    <div class="row" style="padding:9px;">
                    <!--<div class="row" style="border:1px solid #dce0e5; margin-bottom:10px; padding: 5px 17px; border-radius: 7px; background-image: linear-gradient( 135deg, #FAD7A1 10%, #E96D71 100%); ">-->
                        <?php 
                            $vendor = DB::table('bid')
                                                ->join('vendor', 'bid.id_vendor', '=', 'vendor.id_vendor')
                                                ->select('bid.*','vendor.nama_vendor','vendor.alamat_vendor','vendor.hp_vendor')										
                                                ->where('bid.id_pesan',$id_pesan)->get();
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
                         
                             
                        <?php } ?>
                    </div>
                </div>
            </div>
    </div>
</form>
		@endforeach
	</div>
</section>


@endsection