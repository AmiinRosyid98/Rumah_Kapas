@extends('welcome')

@section('title','Desain')
@section('isi')
    	<div id="main-container" style="margin-top: 130px;">
          	<h4 id="clothing"><b>Desain Pakaianmu Sekarang</b></h4>
          	<div id="clothing-designer" class="fpd-container fpd-shadow-2 fpd-topbar fpd-tabs fpd-tabs-side fpd-top-actions-centered fpd-bottom-actions-centered fpd-views-inside-left" >
          		<div class="fpd-product" title="Shirt Front" data-thumbnail="{{ asset('assets/desain/images/yellow_shirt/front/preview.png') }}">
	    			<img src="{{ asset('assets/desain/images/yellow_shirt/front/base.png') }}" title="Base" data-parameters='{"left": 325, "top": 329, "colors": "#d59211", "price": 20, "colorLinkGroup": "Base"}' />
			  		<img src="{{ asset('assets/desain/images/yellow_shirt/front/shadows.png') }}" title="Shadow" data-parameters='{"left": 325, "top": 329}' />
			  		<img src="{{ asset('assets/desain/images/yellow_shirt/front/body.png') }}" title="Hightlights" data-parameters='{"left": 322, "top": 137}' />
			  		<span title="Any Text" data-parameters='{"boundingBox": "Base", "left": 326, "top": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span>
			  		<div class="fpd-product" title="Shirt Back" data-thumbnail="{{ asset('assets/desain/images/yellow_shirt/back/preview.png') }}">
		    			<img src="{{ asset('assets/desain/images/yellow_shirt/back/base.png') }}" title="Base" data-parameters='{"left": 317, "top": 329, "colorLinkGroup": "Base", "price": 20}' />
		    			<img src="{{ asset('assets/desain/images/yellow_shirt/back/body.png') }}" title="Hightlights" data-parameters='{"left": 333, "top": 119}' />
				  		<img src="{{ asset('assets/desain/images/yellow_shirt/back/shadows.png') }}" title="Shadow" data-parameters='{"left": 318, "top": 329}' />
					</div>
				</div>

				<!-- Kemeja -->
				<div class="fpd-product" title="Kemeja Depan" data-thumbnail="{{ asset('assets/desain/images/kemeja/depan/basic.png') }}">
	    			<img src="{{ asset('assets/desain/images/kemeja/depan/basic.png') }}" title="Base" data-parameters='{"left": 325, "top": 329, "colors": "#d59211", "price": 20, "colorLinkGroup": "Base"}' />
			  		<!--<img src="{{ asset('assets/desain/images/yellow_shirt/front/shadows.png') }}" title="Shadow" data-parameters='{"left": 325, "top": 329}' />
			  		<img src="{{ asset('assets/desain/images/yellow_shirt/front/body.png') }}" title="Hightlights" data-parameters='{"left": 322, "top": 137}' />-->
			  		<span title="Any Text" data-parameters='{"boundingBox": "Base", "left": 326, "top": 232, "zChangeable": true, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span>
			  		<div class="fpd-product" title="Kemeja Belakang" data-thumbnail="{{ asset('assets/desain/images/kemeja/belakang/basic.png') }}">
		    			<img src="{{ asset('assets/desain/images/kemeja/belakang/basic.png') }}" title="Base" data-parameters='{"left": 317, "top": 329, "colorLinkGroup": "Base", "price": 20}' />
		    			<!--<img src="{{ asset('assets/desain/images/yellow_shirt/back/body.png') }}" title="Hightlights" data-parameters='{"left": 333, "top": 119}' />
				  		<img src="{{ asset('assets/desain/images/yellow_shirt/back/shadows.png') }}" title="Shadow" data-parameters='{"left": 318, "top": 329}' />-->
					</div>
				</div>
				<!-- -->
          		<div class="fpd-product" title="Sweater" data-thumbnail="{{ asset('assets/desain/images/sweater/preview.png') }}">
	    			<img src="{{ asset('assets/desain/images/sweater/basic.png') }}" title="Base" data-parameters='{"left": 332, "top": 311, "colors": "#D5D5D5,#990000,#cccccc", "price": 20}' />
			  		<img src="{{ asset('assets/desain/images/sweater/highlights.png') }}" title="Hightlights" data-parameters='{"left": 332, "top": 311}' />
			  		<img src="{{ asset('assets/desain/images/sweater/shadow.png') }}" title="Shadow" data-parameters='{"left": 332, "top": 309}' />

				</div>
				<div class="fpd-product" title="Scoop Tee" data-thumbnail="{{ asset('assets/desain/images/scoop_tee/preview.png') }}">
	    			<img src="{{ asset('assets/desain/images/scoop_tee/basic.png') }}" title="Base" data-parameters='{"left": 314, "top": 323, "colors": "#98937f, #000000, #ffffff", "price": 15}' />
			  		<img src="{{ asset('assets/desain/images/scoop_tee/highlights.png') }}" title="Hightlights" data-parameters='{"left":308, "top": 316}' />
			  		<img src="{{ asset('assets/desain/images/scoop_tee/shadows.png') }}" title="Shadow" data-parameters='{"left": 308, "top": 316}' />
			  		<img src="{{ asset('assets/desain/images/scoop_tee/label.png') }}" title="Label" data-parameters='{"left": 314, "top": 140}' />
				</div>
				<div class="fpd-product" title="Hoodie" data-thumbnail="{{ asset('assets/desain/images/hoodie/preview.png') }}">
	    			<img src="{{ asset('assets/desain/images/hoodie/basic.png') }}" title="Base" data-parameters='{"left": 313, "top": 322, "colors": "#850b0b", "price": 40}' />
			  		<img src="{{ asset('assets/desain/images/hoodie/highlights.png') }}" title="Hightlights" data-parameters='{"left": 311, "top": 318}' />
			  		<img src="{{ asset('assets/desain/images/hoodie/shadows.png') }}" title="Shadow" data-parameters='{"left": 311, "top": 321}' />
			  		<img src="{{ asset('assets/desain/images/hoodie/zip.png') }}" title="Zip" data-parameters='{"left": 303, "top": 216}' />
				</div>
				<div class="fpd-product" title="Shirt" data-thumbnail="{{ asset('assets/desain/images/shirt/preview.png') }}">
	    			<img src="{{ asset('assets/desain/images/shirt/basic.png') }}" title="Base" data-parameters='{"left": 327, "top": 313, "colors": "#6ebed5", "price": 10}' />
	    			<img src="{{ asset('assets/desain/images/shirt/collar_arms.png') }}" title="Collars & Arms" data-parameters='{"left": 326, "top": 217, "colors": "#000000"}' />
			  		<img src="{{ asset('assets/desain/images/shirt/highlights.png') }}" title="Hightlights" data-parameters='{"left": 330, "top": 313}' />
			  		<img src="{{ asset('assets/desain/images/shirt/shadow.png') }}" title="Shadow" data-parameters='{"left": 327, "top": 312}' />
			  		<span title="Any Text" data-parameters='{"boundingBox": "Base", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span>
				</div>
				<div class="fpd-product" title="Short" data-thumbnail="{{ asset('assets/desain/images/shorts/preview.png') }}">
	    			<img src="{{ asset('assets/desain/images/shorts/basic.png') }}" title="Base" data-parameters='{"left": 317, "top": 332, "colors": "#81b5eb", "price": 15}' />
			  		<img src="{{ asset('assets/desain/images/shorts/highlights.png') }}" title="Hightlights" data-parameters='{"left": 318, "top": 331}' />
			  		<img src="{{ asset('assets/desain/images/shorts/pullstrings.png') }}" title="Pullstrings" data-parameters='{"left": 307, "top": 195, "colors": "#ffffff"}' />
			  		<img src="{{ asset('assets/desain/images/shorts/midtones.png') }}" title="Midtones" data-parameters='{"left": 317, "top": 332}' />
			  		<img src="{{ asset('assets/desain/images/shorts/shadows.png') }}" title="Shadow" data-parameters='{"left": 320, "top": 331}' />
				</div>
				<div class="fpd-product" title="Basecap" data-thumbnail="{{ asset('assets/desain/images/cap/preview.png') }}">
	    			<img src="{{ asset('assets/desain/images/cap/basic.png') }}" title="Base" data-parameters='{"left": 318, "top": 311, "colors": "#ededed", "price": 5}' />
			  		<img src="{{ asset('assets/desain/images/cap/highlights.png') }}" title="Hightlights" data-parameters='{"left": 309, "top": 300}' />
			  		<img src="{{ asset('assets/desain/images/cap/shadows.png') }}" title="Shadows" data-parameters='{"left": 306, "top": 299}' />
				</div>
		  		<div class="fpd-design">
		  			<div class="fpd-category" title="Swirls">
			  			<img src="{{ asset('assets/desain/images/designs/swirl.png') }}" title="Swirl" data-parameters='{"zChangeable": true, "left": 215, "top": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 10, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="{{ asset('assets/desain/images/designs/swirl2.png') }}" title="Swirl 2" data-parameters='{"left": 215, "top": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="{{ asset('assets/desain/images/designs/swirl3.png') }}" title="Swirl 3" data-parameters='{"left": 215, "top": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "autoCenter": true}' />
				  		<img src="{{ asset('assets/desain/images/designs/heart_blur.png') }}" title="Heart Blur" data-parameters='{"left": 215, "top": 200, "colors": "#bf0200", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="{{ asset('assets/desain/images/designs/converse.png') }}" title="Converse" data-parameters='{"left": 215, "top": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "autoCenter": true}' />
				  		<img src="{{ asset('assets/desain/images/designs/crown.png') }}" title="Crown" data-parameters='{"left": 215, "top": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "autoCenter": true}' />
				  		<img src="{{ asset('assets/desain/images/designs/men_women.png') }}" title="Men hits Women" data-parameters='{"left": 215, "top": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "boundingBox": "Base", "autoCenter": true}' />
		  			</div>
		  			<div class="fpd-category" title="Retro">
			  			<img src="{{ asset('assets/desain/images/designs/retro_1.png') }}" title="Retro One" data-parameters='{"left": 210, "top": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 7, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="{{ asset('assets/desain/images/designs/retro_2.png') }}" title="Retro Two" data-parameters='{"left": 193, "top": 180, "colors": "#ffffff", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.46, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="{{ asset('assets/desain/images/designs/retro_3.png') }}" title="Retro Three" data-parameters='{"left": 240, "top": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.25, "price": 8, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="{{ asset('assets/desain/images/designs/heart_circle.png') }}" title="Heart Circle" data-parameters='{"left": 240, "top": 200, "colors": "#007D41", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "scale": 0.4, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="{{ asset('assets/desain/images/designs/swirl.png') }}" title="Swirl" data-parameters='{"left": 215, "top": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 10, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="{{ asset('assets/desain/images/designs/swirl2.png') }}" title="Swirl 2" data-parameters='{"left": 215, "top": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true, "price": 5, "boundingBox": "Base", "autoCenter": true}' />
				  		<img src="{{ asset('assets/desain/images/designs/swirl3.png') }}" title="Swirl 3" data-parameters='{"left": 215, "top": 200, "colors": "#000000", "removable": true, "draggable": true, "rotatable": true, "resizable": true}' />
				  	</div>
		  		</div>
		  	</div>
		  	<br />

		  	<div class="fpd-clearfix" style="margin-top: 30px;">
			  	<div class="api-buttons fpd-container ">
			  		<center>
				  	<a href="#" id="print-button" class="fpd-btn">Print</a>
				  	<a href="#" id="image-button" class="fpd-btn">Create Image</a>
				  	<a href="#" id="checkout-button" class="fpd-btn">Checkout</a>
				  	<a href="#" id="recreation-button" class="fpd-btn">Recreate product</a>
				  	</center>
			  	</div>
			  	 
		  	</div>
		  	<center>
		  	<p class="fpd-container">
			  	Only working on a webserver:<br />
			  	<span class="fpd-btn" id="save-image-php">Save image with php</span>
			  	<span class="fpd-btn" id="send-image-mail-php">Send image to mail</span>
			  	<a href="/shipping_info/{{$id_bahan}}"><span class="fpd-btn" >Next</span></a>
		  	</p>
		  </center>

    	</div>
   @endsection
