@extends('vendor/welcome')

@section('title','Beranda | Welcome')

@section('isi')

<!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>Discover<br><span>your</span> CLIENT !</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        
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
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
          	<div>
          		<h4>New Projects</h4>
          	</div>
          	<hr>
            @foreach ($order as $o)
          	<div class="row" style="margin-bottom: 15px;">
      				<div class="col-md-3 col-sm-3 ">
      					<img class="img-responsive img-rounded img-thumbnail" width="100%" src="https://cdn.projects.co.id/upload/usr926e11/201812275c247b78887d0.jpg" />
      				</div>
      				<div class="col-md-9 col-sm-9 col-xs-9 " >
      					<a href="vendor/detail_order/{{$o->id_pesan}}"><b>{{$o->nama_jenis." ".$o->nama_tipe." ".$o->nama_bahan}}</b></a><br>
      					<div style=" font-size:13px;">
                  <b>Client</b> : {{$o->nama}}<br>
                  <b>Batas Penawaran</b> : 
                    @if (date("Y-m-d")>$o->duedate)
                    <span class="label label-danger">{{$o->duedate}}</span> <br>
                    @else 
                    <span class="label label-success">{{$o->duedate}}</span> <br>
                    @endif
                  <b>Deadline</b> : {{$o->tanggal_jadi}} <br>
                </div>
                    					
      				</div>
      			</div>
            @endforeach
          </div>

          <div class="col-lg-6 content order-lg-1 order-2">
          	<div>
          		<h4>Top Vendors</h4>
          	</div>
          	<hr>

           <div class="row">
				<div class="col-md-3 col-sm-3 ">
					<img class="img-responsive img-rounded img-thumbnail" width="100%" src="https://cdn.projects.co.id/upload/usr926e11/201812275c247b78887d0.jpg" />
				</div>
				<div class="col-md-9 col-sm-9 col-xs-9 " >
					<b>Project 1</b><br>
					Client : Ahmad<br>
					Due Date : tanggal <br>
				</div>
			</div>
          </div>

          

         
        </div>
        <!--
        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="assets/img/about-extra-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
            <p>
              Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
            </p>
            <p>
              Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
            </p>
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="assets/img/about-extra-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
            <p>
             Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt. 
            </p>
            <p>
              Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
            </p>
            <p>
              Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
            </p>
          </div>
          
        </div>-->

      </div>
    </section><!-- #about -->

    
@endsection