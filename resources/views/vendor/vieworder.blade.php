@extends('welcome')

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
		<div class="row" style="border-radius:5px;   margin-bottom:25px;padding:20px 15px; -webkit-box-shadow: 3px 7px 9px -4px rgba(0,0,0,0.58);
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
          <input type="text" value="{{$id_pesan}}" name="id_pesan">

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

        <div class="row">
          <div class="col-sm-4">
              <b>Masukkan Harga</b>
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

			</div>
    </div>
</form>
		@endforeach
	</div>
</section>


@endsection