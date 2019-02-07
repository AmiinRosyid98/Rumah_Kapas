@extends('welcome')

@section('title','Shipping Information ')
@section('isi')

<section  id="contact"  style="margin-top: 50px;">
      <div class="container">

        <div class="section-header">
          <h3>Shipping Information</h3>
        </div>
        <form action="/shipping_info/tambah_pesanan" method="post" >
          @foreach($customer as $c)
          {{ csrf_field() }}
        <div class="row wow fadeInUp">

          <div class="col-lg-5">

            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>

            <div class="row">
              
              <div class="col-lg-3">
              </div>

              <div class="form-group col-lg-6">
              	<center><label><b>Tanggal Jadi</b></label></center>
                <input type="text" class="form-control" name="tanggal_jadi" id="email" placeholder="YYYY-MM-DD"  data-msg="Please enter a valid email" />
                <input type="hidden" class="form-control" name="id_cust" id="" value="{{Session::get('id_cust')}}" />
                <input type="hidden" class="form-control" name="id_bahan" id="" value="{{ $id_bahan }}" />
                <div class="validation"></div>
              </div>

            </div>
  	        <div>
  	        	<center><b>Order Quantity</b></center>
  	        </div>
            <div class="row">
            	<div class="form-group col-sm-4">
                	<label>XS</label>
                  <input type="number" class="form-control" name="xs" id="xs" placeholder=""   data-msg="Please enter a valid email" />
                  <div class="validation"></div>
              </div>
                <div class="form-group col-sm-4">
                	<label>S</label>
                  <input type="number" class="form-control" name="s" id="s" placeholder="" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
              </div>
              <div class="form-group col-sm-4">
                	<label>M</label>
                  <input type="number" class="form-control" name="m" id="m" placeholder=""   data-msg="Please enter a valid email" />
                  <div class="validation"></div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-4">
                	<label>L</label>
                  <input type="number" class="form-control" name="l" id="l" placeholder=""   data-msg="Please enter a valid email" />
                  <div class="validation"></div>
              </div>
              <div class="form-group col-sm-4">
                	<label>XL</label>
                  <input type="number" class="form-control" name="xl" id="xl" placeholder=""   data-msg="Please enter a valid email" />
                  <div class="validation"></div>
              </div>
              <div class="form-group col-sm-4">
                	<label>XXL</label>
                  <input type="number" class="form-control" name="xxl" id="xxl" placeholder=""   data-msg="Please enter a valid email" />
                  <div class="validation"></div>
              </div>
              
            </div>
          </div>

          <div class="col-lg-7">
          	<!--
            <div class="row">
              <div class="col-md-5 info">
                <i class="ion-ios-location-outline"></i>
                <p>A108 Adam Street, NY 535022</p>
              </div>
              <div class="col-md-4 info">
                <i class="ion-ios-email-outline"></i>
                <p>info@example.com</p>
              </div>
              <div class="col-md-3 info">
                <i class="ion-ios-telephone-outline"></i>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
			-->
            <div class="form">
              
                
                <div class="form-row">
                  <div class="form-group col-lg-12">
                  	<label>Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="{{ $c->nama_cust }}" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-12">
                  	<label>Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $c->mail_cust }}" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                	<label>No. Telepon</label>
                  <input type="text" class="form-control" name="no_telp" id="subject" placeholder="No. Telepon" value="{{ $c->no_cust }}"  data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                	<label>Alamat</label>
                  <textarea class="form-control" name="alamat" rows="4" data-rule="required" value=""  data-msg="Alamat harus jelas" placeholder="Message">{{ $c->alamat_cust }}</textarea>
                  <div class="validation"></div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-6">
                  	<label>Propinsi</label>
                    <select class="form-control select2" name="provinsi" id="provinsi" data-dependent="state">
                      @foreach ($provinsi as $prov)
                    	<option value="{{$prov->id}}">{{ $prov->name }}</option>
                      @endforeach
                    </select>
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                  	<label>Kota/Kabupaten</label>
                    <select class="form-control select2" name="kota" id="kota">
                    	<option>Kota/Kabupaten</option>
                    </select>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-4">
                    <label>Kecamatan</label>
                    <select class="form-control select2" name="kecamatan" id="kecamatan">
                      <option>Kota/Kabupaten</option>
                    </select>
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Kelurahan</label>
                    <select class="form-control select2" name="id_kelurahan" id="kelurahan">
                      <option>Kota/Kabupaten</option>
                    </select>
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-4">
                  	<label>Kode Pos</label>
                    <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos" data-rule="minlen:4"  data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                
                <div class="text-center"><button type="submit" class="btn btn-primary" title="Send Message">Checkout</button></div>
                <div style="margin-bottom: 30px;">
                  
                </div>
             
            </div>
          </div>

        </div>
        @endforeach
         </form>
      </div>
    </section><!-- #contact -->

    <script>  
      $(document).ready(function(){ 
      // Ketika halaman sudah siap (sudah selesai di load)    
      // Kita sembunyikan dulu untuk loadingnya    
        //$("#loading").hide();        
        $("#provinsi").change(function(){ 
          // Ketika user mengganti atau memilih data provinsi      
          $("#kota").hide(); // Sembunyikan dulu combobox kota nya      
          //$("#loading").show(); // Tampilkan loadingnya          
          $.ajax({        
            type: "POST", // Method pengiriman data bisa dengan GET atau POST        
            url: "/shipping_info/select_kota", // Isi dengan url/path file php yang dituju        
            data: {id_provinsi : $("#provinsi").val(),
            "_token": "{{ csrf_token() }}",}, // data yang akan dikirim ke file yang dituju        
            dataType: "json",        
            beforeSend: function(e) {          
              if(e && e.overrideMimeType) {            
                e.overrideMimeType("application/json;charset=UTF-8");          
              }        
            },        
            success: function(response){ // Ketika proses pengiriman berhasil          
              //$("#loading").hide(); // Sembunyikan loadingnya          
              // set isi dari combobox kota          
              // lalu munculkan kembali combobox kotanya          
              $("#kota").html(response.kota).show();        
            },        
            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error          
              alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error        
            }      
          });    
        });  
      });  

      $(document).ready(function(){ 
      // Ketika halaman sudah siap (sudah selesai di load)    
      // Kita sembunyikan dulu untuk loadingnya    
        //$("#loading").hide();        
        $("#kota").change(function(){ 
          // Ketika user mengganti atau memilih data provinsi      
          $("#kecamatan").hide(); // Sembunyikan dulu combobox kota nya      
          //$("#loading").show(); // Tampilkan loadingnya          
          $.ajax({        
            type: "POST", // Method pengiriman data bisa dengan GET atau POST        
            url: "/shipping_info/select_kecamatan", // Isi dengan url/path file php yang dituju        
            data: {id_kota : $("#kota").val(),
            "_token": "{{ csrf_token() }}",}, // data yang akan dikirim ke file yang dituju        
            dataType: "json",        
            beforeSend: function(e) {          
              if(e && e.overrideMimeType) {            
                e.overrideMimeType("application/json;charset=UTF-8");          
              }        
            },        
            success: function(response){ // Ketika proses pengiriman berhasil          
              //$("#loading").hide(); // Sembunyikan loadingnya          
              // set isi dari combobox kota          
              // lalu munculkan kembali combobox kotanya          
              $("#kecamatan").html(response.kecamatan).show();        
            },        
            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error          
              alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error        
            }      
          });    
        });  
      });  


      $(document).ready(function(){ 
      // Ketika halaman sudah siap (sudah selesai di load)    
      // Kita sembunyikan dulu untuk loadingnya    
        //$("#loading").hide();        
        $("#kecamatan").change(function(){ 
          // Ketika user mengganti atau memilih data provinsi      
          $("#kelurahan").hide(); // Sembunyikan dulu combobox kota nya      
          //$("#loading").show(); // Tampilkan loadingnya          
          $.ajax({        
            type: "POST", // Method pengiriman data bisa dengan GET atau POST        
            url: "/shipping_info/select_kelurahan", // Isi dengan url/path file php yang dituju        
            data: {id_kecamatan : $("#kecamatan").val(),
            "_token": "{{ csrf_token() }}",}, // data yang akan dikirim ke file yang dituju        
            dataType: "json",        
            beforeSend: function(e) {          
              if(e && e.overrideMimeType) {            
                e.overrideMimeType("application/json;charset=UTF-8");          
              }        
            },        
            success: function(response){ // Ketika proses pengiriman berhasil          
              //$("#loading").hide(); // Sembunyikan loadingnya          
              // set isi dari combobox kota          
              // lalu munculkan kembali combobox kotanya          
              $("#kelurahan").html(response.kelurahan).show();        
            },        
            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error          
              alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error        
            }      
          });    
        });  
      });  
    </script>


  



@endsection