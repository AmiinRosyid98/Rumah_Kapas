<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

  <!-- Main Stylesheet File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="assets/desain/css/main.css">

    <!-- The CSS for the plugin itself - required -->
  <link rel="stylesheet" type="text/css" href="assets/desain/css/FancyProductDesigner-all.min.css" />

    <!-- Include js files -->
 <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/desain/js/jquery-ui.min.js" type="text/javascript"></script>

  <!-- HTML5 canvas library - required -->
  <script src="assets/desain/js/fabric.min.js" type="text/javascript"></script>
  <!-- The plugin itself - required -->
  <script src="assets/desain/js/plugins.js" type="text/javascript"></script>
    <script src="assets/desain/js/FancyProductDesigner.js" type="text/javascript"></script>


    <script type="text/javascript">
      jQuery(document).ready(function(){

        var $yourDesigner = $('#clothing-designer'),
          pluginOpts = {
            stageWidth: 1200,
            editorMode: false,
            smartGuides: true,
            fonts: [
              {name: 'Helvetica'},
              {name: 'Times New Roman'},
              {name: 'Pacifico', url: 'Enter_URL_To_Pacifico'},
              {name: 'Arial'},
              {name: 'Lobster', url: 'google'}
            ],
            customTextParameters: {
              colors: true,
              removable: true,
              resizable: true,
              draggable: true,
              rotatable: true,
              autoCenter: true,
              boundingBox: "Base"
            },
            customImageParameters: {
              draggable: true,
              removable: true,
              resizable: true,
              rotatable: true,
              colors: '#000',
              autoCenter: true,
              boundingBox: "Base"
            },
            actions:  {
            'top': ['download','print', 'snap', 'preview-lightbox'],
            'right': ['magnify-glass', 'zoom', 'reset-product', 'qr-code', 'ruler'],
            'bottom': ['undo','redo'],
            'left': ['manage-layers','info','save','load']
          }
          },

        yourDesigner = new FancyProductDesigner($yourDesigner, pluginOpts);

        //print button
      $('#print-button').click(function(){
        yourDesigner.print();
        return false;
      });

      //create an image
      $('#image-button').click(function(){

        var image = yourDesigner.createImage();
        return false;
      });

      //checkout button with getProduct()
      $('#checkout-button').click(function(){
        var product = yourDesigner.getProduct();
        console.log(product);
        return false;
      });

      //event handler when the price is changing
      $yourDesigner.on('priceChange', function(evt, price, currentPrice) {
        $('#thsirt-price').text(currentPrice);
      });

      //save image on webserver
      $('#save-image-php').click(function() {

        yourDesigner.getProductDataURL(function(dataURL) {
          $.post( "assets/desain/php/save_image.php", { base64_image: dataURL} );
          
        });

      });

      //send image via mail
      $('#send-image-mail-php').click(function() {

        yourDesigner.getProductDataURL(function(dataURL) {
          $.post( "php/send_image_via_mail.php", { base64_image: dataURL} );
        });

      });

      });
    </script>

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#why-us">Produk</a></li>
          <li><a href="#team">Partner</a></li>
          <!--
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
      -->
          <li><a href="#contact">Kontak</a></li>
          

        
            <?php $id_cust = Session::get('id_vendor');
            $order = DB::table('pesan')->where('id_cust',$id_cust);
            $jum_order = $order->count(); ?>
            <li class="drop-down"><a href="#">{{Session::get('name')}}</a>
               <ul>
                <li><a href="#">My Profil</a></li>
                <li><a href="#" onclick="myorder()">My Bid <span class="label label-primary" style="float: right; background-color: red;color: white;padding:0px 7px; border-radius: 50%;">{{$jum_order}}</span></a></li>
                <li><a href="#" onclick="logout()">Keluar</a></li>
              </ul>
              <script>
                  function logout(){
                    location.href="logout";
                  }

                  function myorder(){
                    location.href="myorder";
                  }
              </script>
            </li>
          
            
          
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  
  @yield('isi')

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>NewBiz</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>NewBiz</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  
  <script src="assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/mobile-nav/mobile-nav.js"></script>
  <script src="assets/lib/wow/wow.min.js"></script>
  <script src="assets/lib/waypoints/waypoints.min.js"></script>
  <script src="assets/lib/counterup/counterup.min.js"></script>
  <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="assets/contactform/contactform.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
    $('.select2').select2();
});
  </script>


  <!-- Template Main Javascript File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
