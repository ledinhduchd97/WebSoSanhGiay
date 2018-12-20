<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>So sánh và tư vấn giày</title>
<!--

Template 2102 Constructive

http://www.tooplate.com/view/2102-constructive

-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
	<link rel="stylesheet" href="{{asset('user/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('user/slick/slick.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('user/slick/slick-theme.css')}}"/>
	<link rel="stylesheet" href="{{asset('user/css/tooplate-style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
	<script>
		var renderPage = true;

	if(navigator.userAgent.indexOf('MSIE')!==-1
		|| navigator.appVersion.indexOf('Trident/') > 0){
   		/* Microsoft Internet Explorer detected in. */
   		alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   		renderPage = false;
	}
	</script>
</head>

<body>
	<!-- Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
	
	<!-- Page Content -->
	<div class="container-fluid tm-main">
		<div class="row tm-main-row">

			<!-- Sidebar -->
			<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar" style="position: fixed; height: 100vh;">

				<button id="tmMainNavToggle" class="menu-icon">&#9776;</button>

				<div class="inner">
					<nav id="tmMainNav" class="tm-main-nav">
						<ul>
							<li>
								<a href="#intro" id="tmNavLink1" class="scrolly active" data-bg-img="{{asset('user/img/constructive_bg_01.jpg')}}" data-page="#tm-section-1">
									<i class="fas fa-home tm-nav-fa-icon"></i>
									<span>Giới thiệu</span>
								</a>
							</li>
							<li>
								<a href="#products" id="tmNavLink2" class="scrolly" data-bg-img="{{asset('user/img/constructive_bg_03.jpg')}}" data-page="#tm-section-2" data-page-type="carousel">
									<i class="fab fa-product-hunt tm-nav-fa-icon"></i>
									<span>Sản phẩm</span>
								</a>
							</li>							
							<li>
								<a href="#company" id="tmNavLink3"  class="scrolly" data-bg-img="{{asset('user/img/constructive_bg_02.jpg')}}" data-page="#tm-section-3">
									<i class="fas fa-balance-scale tm-nav-fa-icon"></i>
									<span>So sánh</span>
								</a>
							</li>
							<li>
								<a href="#contact" id="tmNavLink4"  class="scrolly" data-bg-img="{{asset('user/img/constructive_bg_04.jpg')}}" data-page="#tm-section-4">
									<i class="fas fa-comments tm-nav-fa-icon"></i>
									<span>Tư Vấn</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content" style="margin: 0px 25% 0px; ">

					<!-- section 1 -->
					<section id="tm-section-1" class="tm-section col-md-12">
						<div class="ml-auto">
							<header class="mb-4"><h1 class="tm-text-shadow">Giới thiệu</h1></header>
							<p class="mb-5 tm-font-big">Đây là một website cung cấp tới bạn một dịch vụ hết sức hoàn hảo. Giúp bạn đưa ra những lựa chọn sáng suốt và điều quan trọng nhất là chúng tôi tiết kiệm thời gian và công sức cho bạn mỗi khi bạn chuẩn bị đi shopping.</p>
							<a href="#" class="btn tm-btn tm-font-big" data-nav-link="#tmNavLink2">Bắt đầu nhé...</a> 
							<!-- data-nav-link holds the ID of nav item, which means this link should behave the same as that nav item  -->
						</div>
					</section>

					<!-- section 2 -->
					<section id="tm-section-2" class="tm-section col-md-12">
						<div>
							<header class="mb-12"><h2 class="tm-text-shadow">Sản phẩm</h2></header>
							<div class="brands col-md-12 col-sm-1">
								<div class="triangular"><i class="fas fa-angle-down"></i></div>
								<!-- brand -->
								<ul>

									<li>
										<div class="adidas imgbrand" idbrand="1" style="background-image:url({{url('user/./img/logoadidas.jpg')}});"></div>
									</li>
									<li>
										<div class="nike imgbrand" idbrand="2" style="background-image: url({{url('user/./img/logonike.jpg')}});"></div>
									</li>
									<li>
										<div class="converse imgbrand" idbrand="3" style="background-image: url({{url('user/./img/logoconverse.jpg')}});"></div>
									</li>
									<li>
										<div class="vans imgbrand" idbrand="4" style="background-image: url({{url('user/./img/logovans.jpg')}});"></div>
									</li>
								</ul>
								<i class="btn-plus fas fa-plus-square"></i>
								<i class="btn-minus fas fa-minus-square"></i>
							</div>
							<!-- search session 2 -->
							<div class="searh_filter search_filter_product">
								<div class="search_input"><input class="form-control" type="text" placeholder="Nhập thông tin tìm kiếm sản phẩm" id="search_input_product"><i class="icon fas fa-search"></i></div>
								<div class="range-slider">
								  <p>Giá: </p>
								  <input class="range-slider__range" type="range" min="0" max="500" id="search_price_product">
								  <span class="range-slider__value" id="price_product">300</span><span>$</span>
								</div>
								<div class="clearfix"></div>
							</div>
							<!-- end search session 2 -->
							<div class="clearfix"></div>            
							<div class="tm-img-container">
								<!-- product brand -->
								<div class="product_sosanh col-md-12">
									<!-- item -->
									@if(isset($products))
									@foreach($products as $product)
									<div class="product product_session2">
										<div class="gl-product-card carousel">
											<div class="gl-product-card__media">
												<a class="sosanh" title="">
													<img src="{{asset($product->product_image_total)}}" alt="" class="gl-product-card__image">
													<div class="changepage">
														<button class="btn-shoe btn tm-btn-submit tm-btn ml-auto" data-bg-img="{{asset('user/img/constructive_bg_03.jpg')}}" data-page="#tm-section-3" idproduct="{{$product->id}}">So Sánh</button>
													</div>	
												</a>
												<div class="gl-product-card__wishlist">
													<div class="toggle_wishlist_button___1dG52">
														<svg class="gl-icon">
															<use xlink:href="#wishlist-inactive">
																#shadow-root (closed)
																<svg viewBox="0 0 20 24" id="wishlist-inactive" width="100%" height="100%">
																	<path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M7.38 6H4.42L2 10l8 8 8-8-2.41-4h-2.98L10 9 7.38 6z"></path>
																</svg>
															</use>
														</svg>
													</div>
												</div>
											</div>
											<div class="gl-product-card__details">
												<a title="" class="sosanh">
													<div class="gl-product-card__details-top">
														<div class="gl-product-card__category gl-label--medium">
															Performance
														</div>
														<div class="gl-product-card__details-icons"></div>
													</div>
													<div class="gl-product-card__details-main">
														<div class="gl-product-card__name gl-label gl-label--medium">
															{{$product->product_name}}
														</div>
														<div class="gl-product-card__name gl-label gl-label--medium brand_of_product" id_brand="{{$product->product_id_brand}}">
															{{$product->brand->brand_name}}
														</div>
														<div class="gl-price-container">
															<span class="gl-price">$180</span>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
									<!-- enditem -->
									@endforeach
									@endif
								</div>
								<!-- product brand -->
								<!-- product brand -->
								<!-- product brand -->
							</div>		            		          
						</div>       		          	
					</section>

					<!-- section 3 -->
					<section id="tm-section-3" class="tm-section col-md-12">						
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-12">
								<h1>So sánh</h1>
									<i class="btn-plus fas fa-plus-square"></i>
									<i class="btn-minus fas fa-minus-square"></i>
									<!-- search session 3 -->
									<div class="searh_filter">
										<div class="search_input"><input class="form-control" type="text" placeholder="Nhập thông tin tìm kiếm sản phẩm" id="search_input_text"><i class="icon fas fa-search" ></i></div>
										<div class="range-slider">
										  <p>Giá: </p>
										  <input class="range-slider__range" type="range" min="0" max="500" id="search_input_price">
										  <span class="range-slider__value" id="search_price">300</span><span>$</span>
										</div>
										<div class="clearfix"></div>
									</div>
									<!-- end search session 3 -->
									<div class="ss-left product1">
											@if(isset($products_new))
												<div class="img-pro">
													<img src="{{asset($products_new->product_image_total)}}" alt="">
												</div>
												<div class="line"></div>
												<p class="line_1 product_id_brand">Hãng: {{$products_new->brand->brand_name}}</p>
												<p class="line_2 product_name">{{$products_new->product_name}}</p>
												<p class="line_1 product_price">Giá: {{$products_new->product_price}}</p>
												<p class="line_2 product_weight">Khối lượng: {{$products_new->product_weight}}</p>
												<p class="line_1 product_outsole">Outsole: {{$products_new->product_outsole}}</p>
												<p class="line_2 product_insole">Insole: {{$products_new->product_insole}}</p>
												<p class="line_1 product_toe">Mũi giày: {{$products_new->product_toe}}</p>
												<p class="line_2 product_tongue">Lưỡi gà: {{$products_new->product_tongue}}</p>
												<p class="line_1 product_vamp">Thân trước: {{$products_new->product_vamp}}</p>
												<p class="line_2 product_quater">Thân giày sau: {{$products_new->product_quater}}</p>
												<p class="line_1 product_lacing">Mui giày: {{$products_new->product_lacing}}</p>
												<p class="line_2 product_shoelace">Dây giày: {{$products_new->product_shoelace}}</p>
												<p class="line_1 product_lining">Lớp lót: {{$products_new->product_lining}}</p>
												<p class="line_2 product_technology">Công nghệ: {{$products_new->product_technology}}</p>
											@endif	
									</div>
									<div class="ss-left ss-left-2 product2" style="display: none">
										
									</div>
									<div class="ss-right">
										<!-- item -->
										@if(isset($products))
										@foreach($products as $product)
										<div class="product product-ss">
											<div class="gl-product-card carousel">
												<div class="gl-product-card__media">
													<a class="itemss" title="">
														<img src="{{asset($product->product_image_total)}}" alt="" class="gl-product-card__image">
														<button class="btn-shoe btn tm-btn-submit tm-btn ml-auto" idproduct="{{$product->id}}">So Sánh</button>
													</a>
													<div class="gl-product-card__wishlist">
														<div class="toggle_wishlist_button___1dG52">
															<svg class="gl-icon">
																<use xlink:href="#wishlist-inactive">
																	#shadow-root (closed)
																	<svg viewBox="0 0 20 24" id="wishlist-inactive" width="100%" height="100%">
																		<path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M7.38 6H4.42L2 10l8 8 8-8-2.41-4h-2.98L10 9 7.38 6z"></path>
																	</svg>
																</use>
															</svg>
														</div>
													</div>
												</div>
												<div class="gl-product-card__details">
													<a title="" class="itemss">
														<div class="gl-product-card__details-top">
															<div class="gl-product-card__category gl-label--medium">
																Performance
															</div>
															<div class="gl-product-card__details-icons"></div>
														</div>
														<div class="gl-product-card__details-main">
															<div class="gl-product-card__name gl-label gl-label--medium">
																{{$product->product_name}}
															</div>
															<div class="gl-price-container">
																<span class="gl-price">{{$product->product_price}}</span>
															</div>
														</div>
													</a>
												</div>
											</div>
										</div>
										<!-- enditem -->
										@endforeach
										@endif
									</div>
									<dir style="clear: both;"></dir>
									<button class="back btn tm-btn-submit tm-btn ml-auto" style="display: none" >Quay lại</button>
							</div>			          						               
					</section>

					<!-- section 4 -->
					<section id="tm-section-4" class="tm-section col-md-12">
						<div class="tm-bg-transparent-black tm-contact-box-pad" style="background-color: rgba(56, 56, 56, 0.8);">
							<div class="row mb-4">
								<div class="col-sm-12">
									<header><h2 class="tm-text-shadow">Tư vấn</h2></header>
								</div>
							</div>
							<div class="row tm-page-4-content">
								<div class="col-md-8 col-sm-12 tm-contact-col">
									<div class="contact_message">
										<div class="talkbox" id="message_box">
											<div class="message_box">
												<div class="message_bot">
													Xin chào bạn! Mình là nhân viên tư vấn mình có thể giúp được gì cho bạn ạ...
												</div>
											</div>
										</div>
										<form action="" method="" class="contact-form">
											<div class="form-group">
												<textarea id="contact_message" name="contact_message" class="form-control" rows="0" placeholder="Message" required=""></textarea>
												<button class="btn tm-btn-submit tm-btn ml-auto" id="btn-chatbox" style="margin-top: 10px;">Gửi</button>

											</div>
										</form>
									</div>
								</div>
								<div class="col-md-4 col-sm-12 tm-contact-col">
									<h3>Sản phẩm gợi ý</h3>
									<!-- sản phẩm gợi ý -->
									<div class="gl-product-card carousel">
											<div class="gl-product-card__media">
												<a class="sosanh" >
													<img src="img/BB6167_00_plp_standard.jpg" alt="" class="gl-product-card__image">
													<button class="btn-shoe btn tm-btn-submit tm-btn ml-auto">So Sánh</button>
												</a>
												<div class="gl-product-card__wishlist">
													<div class="toggle_wishlist_button___1dG52">
														<svg class="gl-icon">
															<use xlink:href="#wishlist-inactive">
																#shadow-root (closed)
																<svg viewBox="0 0 20 24" id="wishlist-inactive" width="100%" height="100%">
    																<path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M7.38 6H4.42L2 10l8 8 8-8-2.41-4h-2.98L10 9 7.38 6z"></path>
																</svg>
															</use>
														</svg>
													</div>
												</div>
											</div>
											<div class="gl-product-card__details">
												<a href="" title="">
													 <div class="gl-product-card__details-top">
													 	<div class="gl-product-card__category gl-label--medium">
													 		Performance
													 	</div>
													 	<div class="gl-product-card__details-icons"></div>
													 </div>
													 <div class="gl-product-card__details-main">
													 	<div class="gl-product-card__name gl-label gl-label--medium">
													 		Ultraboost Shoes
													 	</div>
													 	<div class="gl-price-container">
													 		<span class="gl-price">$180</span>
													 	</div>
													 </div>
												</a>
											</div>
									</div>
								</div>
							</div>
						</div>
					</section>					
				</div>	<!-- .tm-content -->							
				<footer class="footer-link">
					<p class="tm-copyright-text">Copyright &copy; Nhóm 14 - Lê Đình Đức - Nguyễn Minh Quang - Lê Thị Thúy Hiền - <a href="https://www.facebook.com/that.su.anh.ko.iu" target="_parent">Phần mềm hướng dịch vụ</a></p>
				</footer>
			</div>	<!-- row -->			
		</div>
		<div id="preload-01"></div>
		<div id="preload-02"></div>
		<div id="preload-03"></div>
		<div id="preload-04"></div>

		<script type="text/javascript" src="{{asset('user/js/jquery-3.2.1.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('user/js/jquery.backstretch.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('user/slick/slick.min.js')}}"></script> <!-- Slick Carousel -->

		<script>

		var sidebarVisible = false;
		var currentPageID = "#tm-section-1";

		// Setup Carousel
		function setupCarousel() {

			// If current page isn't Carousel page, don't do anything.
			if($('#tm-section-2').css('display') == "none") {
			}
			else {	// If current page is Carousel page, set up the Carousel.

				var slider = $('.tm-img-slider');
				var windowWidth = $(window).width();

				if (slider.hasClass('slick-initialized')) {
					slider.slick('destroy');
				}

				if(windowWidth < 640) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 1,
	              		slidesToScroll: 1
	              	});
				}
				else if(windowWidth < 992) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 2,
	              		slidesToScroll: 1
	              	});
				}
				else {
					// Slick carousel
	              	slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 3,
	              		slidesToScroll: 2
	              	});
				}
				// Init Magnific Popup
				$('.tm-img-slider').magnificPopup({
				  delegate: 'a', // child items selector, by clicking on it popup will open
				  type: 'image',
				  gallery: {enabled:true}
				  // other options
				});
      		}
  		}

  		// Setup Nav
  		function setupNav() {
  			// Add Event Listener to each Nav item
	     	$(".tm-main-nav a").click(function(e){
	     		e.preventDefault();
		    	
		    	var currentNavItem = $(this);
		    	changePage(currentNavItem);
		    	
		    	setupCarousel();
		    	setupFooter();

		    	// Hide the nav on mobile
		    	$("#tmSideBar").removeClass("show");
		    });	    
  		}

  		function changePage(currentNavItem) {
  			// Update Nav items
  			$(".tm-main-nav a").removeClass("active");
			
	    	$(currentPageID).hide();

	    	// Show current page
	    	currentPageID = currentNavItem.data("page");
	    	$(currentPageID).fadeIn(1000);

	    	// Change background image
	    	var bgImg = currentNavItem.data("bgImg");	    	
	    	$.backstretch(bgImg);	
  		}
  		// ----------
  		// Setup Nav
  		function setupNavbtn() {
  			// Add Event Listener to each Nav item
	     	$(".changepage button").click(function(e){
	     		e.preventDefault();
		    	
		    	var currentNavItem = $(this);
		    	changePage(currentNavItem);
		    	
		    	setupCarousel();
		    	setupFooter();

		    	// Hide the nav on mobile
		    	$("#tmSideBar").removeClass("show");
		    });	    
  		}

  		function changePagebtn(currentNavItem) {
  			// Update Nav items
  			// $(".changepage button").removeClass("active");
			
	    	$(currentPageID).hide();

	    	// Show current page
	    	currentPageID = currentNavItem.data("page");
	    	$(currentPageID).fadeIn(1000);

	    	// Change background image
	    	var bgImg = currentNavItem.data("bgImg");	    	
	    	$.backstretch(bgImg);	
  		}
  		// ----------


  		// Setup Nav Toggle Button
  		function setupNavToggle() {

			$("#tmMainNavToggle").on("click", function(){
				$(".sidebar").toggleClass("show");
			});
  		}

  		// If there is enough room, stick the footer at the bottom of page content.
  		// If not, place it after the page content
  		function setupFooter() {
  			
  			var padding = 100;
  			var footerPadding = 40;
  			var mainContent = $("section"+currentPageID);
  			var mainContentHeight = mainContent.outerHeight(true);
  			var footer = $(".footer-link");
  			var footerHeight = footer.outerHeight(true);
  			var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
  			var windowHeight = $(window).height();		

  			if(totalPageHeight > windowHeight){
  				$(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
  				footer.css("bottom", footerHeight + "px");  			
  			}
  			else {
  				$(".tm-content").css("margin-bottom", "0");
  				footer.css("bottom", "20px");  				
  			}  			
  		}

  		// Everything is loaded including images.
      	$(window).on("load", function(){

      		// Render the page on modern browser only.
      		if(renderPage) {
				// Remove loader
		      	$('body').addClass('loaded');

		      	// Page transition
		      	var allPages = $(".tm-section");

		      	// Handle click of "Continue", which changes to next page
		      	// The link contains data-nav-link attribute, which holds the nav item ID
		      	// Nav item ID is then used to access and trigger click on the corresponding nav item
		      	var linkToAnotherPage = $("a.tm-btn[data-nav-link]");
			    
			    if(linkToAnotherPage != null) {
			    	
			    	linkToAnotherPage.on("click", function(){
			    		var navItemToHighlight = linkToAnotherPage.data("navLink");
			    		$("a" + navItemToHighlight).click();
			    	});
			    }
		      	
		      	// Hide all pages
		      	allPages.hide();

		      	$("#tm-section-1").fadeIn();

		     	// Set up background first page
		     	var bgImg = $("#tmNavLink1").data("bgImg");
		     	
		     	// $.backstretch("img/" + bgImg, {fade: 500});
		     	$.backstretch(bgImg, {fade: 500});

		     	// Setup Carousel, Nav, and Nav Toggle
			    setupCarousel();
			    setupNav();
			    setupNavToggle();
			    setupFooter();
			    setupNavbtn();
			    changePagebtn();

			    // Resize Carousel upon window resize
			    $(window).resize(function() {
			    	setupCarousel();
			    	setupFooter();
			    });
      		}	      	
		});
		$("#btn-chatbox").click(function(event) {
			event.preventDefault();
			var message = $("#contact_message").val();
			if (message != "") 
			{
				console.log(message);
				$(".message_box").append(`
					<div class="message_user">
						`+message+`
					</div>
					<div class="clearfix">
						
					</div>
					`);
				$("#contact_message").val("");
			}
			else
			{
				alert("Vui lòng nhập tin nhắn");
			}
		});
		$(".adidas").click(function(event) {
			$(".triangular").css({
				left: '-18%',
				transition: '1s',
			});
			$(".product_adidas").css('display', 'block');
			$(".product_nike").css('display', 'none');
			$(".product_converse").css('display', 'none');
			$(".product_vans").css('display', 'none');
		});
		$(".nike").click(function(event) {
			$(".triangular").css({
				left: '-4%',
				transition: '1s',

			});
			$(".product_nike").css('display', 'block');
			$(".product_adidas").css('display', 'none');
			$(".product_converse").css('display', 'none');
			$(".product_vans").css('display', 'none');

		});
		$(".converse").click(function(event) {
			$(".triangular").css({
				left: '10%',
				transition: '1s'
			});
			$(".product_adidas").css('display', 'none');
			$(".product_nike").css('display', 'none');
			$(".product_vans").css('display', 'none');
			$(".product_converse").css('display', 'block');
		});
		$(".vans").click(function(event) {
			$(".triangular").css({
				left: '25%',
				transition: '1s'
			});
			$(".product_adidas").css('display', 'none');
			$(".product_nike").css('display', 'none');
			$(".product_converse").css('display', 'none');
			$(".product_vans").css('display', 'block');
		});
		// hover img
		$(".gl-product-card__image").hover(function() {
			$(this).css('filter', 'blur(4px)');
			$(this).closest('.sosanh').find('.btn-shoe').css({
				display: 'block',
				opacity: '1',
				border: '2px solid #000',
    			color: '#000',
			});
		}, function() {
			$(this).css('filter', 'blur(0px)');
			$(this).closest('.sosanh').find('.btn-shoe').css({
				display: 'none',
				opacity: '0',
			});
		});
		// hover img
		$(".gl-product-card__image").hover(function() {
			$(this).css('filter', 'blur(4px)');
			$(this).closest('.itemss').find('.btn-shoe').css({
				display: 'block',
				opacity: '1',
				border: '2px solid #000',
    			color: '#000',
    			width: '89px',
    			height: '42px',
    			'font-size':'14px',
			});
		}, function() {
			$(this).css('filter', 'blur(0px)');
			$(this).closest('.itemss').find('.btn-shoe').css({
				display: 'none',
				opacity: '0',
			});
		});
		//hover button
		$(".btn-shoe").hover(function() {
			$(this).css({
				display: 'block',
				opacity: '1',
				border: '2px solid #000',
    			color: '#000',
			});
			$(this).closest('.sosanh').find('.gl-product-card__image').css('filter', 'blur(4px)');
		}, function() {
			$(this).css({
				display: 'none',
				opacity: '0',
			});
			$(this).closest('.sosanh').find('.gl-product-card__image').css('filter', 'blur(0px)');
		});
		//hover button
		$(".itemss .btn-shoe").hover(function() {
			$(this).css({
				display: 'block',
				opacity: '1',
				border: '2px solid #000',
    			color: '#000',
    			width: '89px',
    			height: '42px',
    			'font-size':'14px',
			});
			$(this).closest('.itemss').find('.gl-product-card__image').css('filter', 'blur(4px)');
		}, function() {
			$(this).css({
				display: 'none',
				opacity: '0',
			});
			$(this).closest('.itemss').find('.gl-product-card__image').css('filter', 'blur(0px)');
		});
		// btn itemss
		$(".sosanh").click(function(event){
			var allPages = $(".tm-section");
			allPages.hide();
			$(".products").removeClass( "active" );
			$(".company").addClass("active");
		    $("#tm-section-3").fadeIn();	
		});
		$(".itemss").click(function(event){
			
		    $(".ss-right").css("display", "none");
			$(".ss-left").css("display", "block");
			$(".back").css("display", "block");
		});
		$(".back").click(function(event){
			
		    $(".ss-right").css("display", "block");
			$(".ss-left-2").css("display", "none");
			$(".back").css("display", "none");
		});
		// sản phẩm thứ 2 (trong so sánh)
		$(".itemss .btn-shoe").click(function(event) {
			var data = $(this).attr('idproduct');
			console.log(data);
			$.ajax({
					url: '{{route('post.getProduct.compare')}}',
					type: 'POST',
					dataType: 'JSON',
					data: {data:data},
					success: function (data){
	                    if(typeof data != "object"){
	                        data = JSON.parse(data);
	                    }
	                    $(".product2").html("");
	                    console.log(data);
	                    $.each(data, function(index, val) {
	                    	console.log(data[index].id);
	                    	$(".product2").append(`
								<div  class="img-pro">
									<img src="${data[index].product_image_total}" alt="">
								</div>
								<div class="line"></div>
								<p class="line_1 product_id_brand">Hãng: ${data[index].brand}</p>
								<p class="line_2 product_name">${data[index].product_name}</p>
								<p class="line_1 product_price">Giá: ${data[index].product_price}</p>
								<p class="line_2 product_weight">Khối lượng: ${data[index].product_weight}</p>
								<p class="line_1 product_outsole">Outsole: ${data[index].product_outsole}</p>
								<p class="line_2 product_insole">Insole: ${data[index].product_insole}</p>
								<p class="line_1 product_toe">Mũi giày: ${data[index].product_toe}</p>
								<p class="line_2 product_tongue">Lưỡi gà: ${data[index].product_tongue}</p>
								<p class="line_1 product_vamp">Thân trước: ${data[index].product_vamp}</p>
								<p class="line_2 product_quater">Thân giày sau: ${data[index].product_quater}</p>
								<p class="line_1 product_lacing">Mui giày: ${data[index].product_lacing}</p>
								<p class="line_2 product_shoelace">Dây giày: ${data[index].product_shoelace}</p>
								<p class="line_1 product_lining">Lớp lót: ${data[index].product_shoelace}</p>
								<p class="line_2 product_technology">Công nghệ: ${data[index].product_technology}</p>
	                    	`)
	                    });  
            		}
				});
		});
		// call function trong ajax cho sản phẩm 2
		var product2 = function() {
			// btn itemss
			$(".sosanh").click(function(event){
				var allPages = $(".tm-section");
				allPages.hide();
				$(".products").removeClass( "active" );
				$(".company").addClass("active");
			    $("#tm-section-3").fadeIn();	
			});
			$(".itemss").click(function(event){
				
			    $(".ss-right").css("display", "none");
				$(".ss-left").css("display", "block");
				$(".back").css("display", "block");
			});
			$(".back").click(function(event){
				
			    $(".ss-right").css("display", "block");
				$(".ss-left-2").css("display", "none");
				$(".back").css("display", "none");
			});
			$(".itemss .btn-shoe").click(function(event) {
			var data = $(this).attr('idproduct');
			console.log(data);
			$.ajax({
					url: '{{route('post.getProduct.compare')}}',
					type: 'POST',
					dataType: 'JSON',
					data: {data:data},
					success: function (data){
	                    if(typeof data != "object"){
	                        data = JSON.parse(data);
	                    }
	                    $(".product2").html("");
	                    console.log(data);
	                    $.each(data, function(index, val) {
	                    	console.log(data[index].id);
	                    	$(".product2").append(`
								<div  class="img-pro">
									<img src="${data[index].product_image_total}" alt="">
								</div>
								<div class="line"></div>
								<p class="line_1 product_id_brand">Hãng: ${data[index].brand}</p>
								<p class="line_2 product_name">${data[index].product_name}</p>
								<p class="line_1 product_price">Giá: ${data[index].product_price}</p>
								<p class="line_2 product_weight">Khối lượng: ${data[index].product_weight}</p>
								<p class="line_1 product_outsole">Outsole: ${data[index].product_outsole}</p>
								<p class="line_2 product_insole">Insole: ${data[index].product_insole}</p>
								<p class="line_1 product_toe">Mũi giày: ${data[index].product_toe}</p>
								<p class="line_2 product_tongue">Lưỡi gà: ${data[index].product_tongue}</p>
								<p class="line_1 product_vamp">Thân trước: ${data[index].product_vamp}</p>
								<p class="line_2 product_quater">Thân giày sau: ${data[index].product_quater}</p>
								<p class="line_1 product_lacing">Mui giày: ${data[index].product_lacing}</p>
								<p class="line_2 product_shoelace">Dây giày: ${data[index].product_shoelace}</p>
								<p class="line_1 product_lining">Lớp lót: ${data[index].product_shoelace}</p>
								<p class="line_2 product_technology">Công nghệ: ${data[index].product_technology}</p>
	                    	`)
	                    });  
	        		}
				});
			});
		}
		// sản phẩm thứ 1 (trong so sánh)
		$(".changepage .btn-shoe").click(function(event) {
			var data = $(this).attr('idproduct');
			console.log(data);
			$.ajax({
					url: '{{route('post.getProduct.compare')}}',
					type: 'POST',
					dataType: 'JSON',
					data: {data:data},
					success: function (data){
	                    if(typeof data != "object"){
	                        data = JSON.parse(data);
	                    }
	                    $(".product1").html("");
	                    console.log(data);
	                    $.each(data, function(index, val) {
	                    	console.log(data[index].id);
	                    	$(".product1").append(`
								<div  class="img-pro">
									<img src="${data[index].product_image_total}" alt="">
								</div>
								<div class="line"></div>
								<p class="line_1 product_id_brand">Hãng: ${data[index].brand}</p>
								<p class="line_2 product_name">${data[index].product_name}</p>
								<p class="line_1 product_price">Giá: ${data[index].product_price}</p>
								<p class="line_2 product_weight">Khối lượng: ${data[index].product_weight}</p>
								<p class="line_1 product_outsole">Outsole: ${data[index].product_outsole}</p>
								<p class="line_2 product_insole">Insole: ${data[index].product_insole}</p>
								<p class="line_1 product_toe">Mũi giày: ${data[index].product_toe}</p>
								<p class="line_2 product_tongue">Lưỡi gà: ${data[index].product_tongue}</p>
								<p class="line_1 product_vamp">Thân trước: ${data[index].product_vamp}</p>
								<p class="line_2 product_quater">Thân giày sau: ${data[index].product_quater}</p>
								<p class="line_1 product_lacing">Mui giày: ${data[index].product_lacing}</p>
								<p class="line_2 product_shoelace">Dây giày: ${data[index].product_shoelace}</p>
								<p class="line_1 product_lining">Lớp lót: ${data[index].product_shoelace}</p>
								<p class="line_2 product_technology">Công nghệ: ${data[index].product_technology}</p>
	                    	`)
	                    });  
            		}
				});
			});
		// call function trong ajax cho sản phẩm 1
		var btn_compare = function() {
			$(".changepage .btn-shoe").click(function(event) {
			var data = $(this).attr('idproduct');
			console.log(data);
			$.ajax({
					url: '{{route('post.getProduct.compare')}}',
					type: 'POST',
					dataType: 'JSON',
					data: {data:data},
					success: function (data){
	                    if(typeof data != "object"){
	                        data = JSON.parse(data);
	                    }
	                    $(".product1").html("");
	                    console.log(data);
	                    $.each(data, function(index, val) {
	                    	console.log(data[index].id);
	                    	$(".product1").append(`
								<div  class="img-pro">
									<img src="${data[index].product_image_total}" alt="">
								</div>
								<div class="line"></div>
								<p class="line_1 product_id_brand">Hãng: ${data[index].brand}</p>
								<p class="line_2 product_name">${data[index].product_name}</p>
								<p class="line_1 product_price">Giá: ${data[index].product_price}</p>
								<p class="line_2 product_weight">Khối lượng: ${data[index].product_weight}</p>
								<p class="line_1 product_outsole">Outsole: ${data[index].product_outsole}</p>
								<p class="line_2 product_insole">Insole: ${data[index].product_insole}</p>
								<p class="line_1 product_toe">Mũi giày: ${data[index].product_toe}</p>
								<p class="line_2 product_tongue">Lưỡi gà: ${data[index].product_tongue}</p>
								<p class="line_1 product_vamp">Thân trước: ${data[index].product_vamp}</p>
								<p class="line_2 product_quater">Thân giày sau: ${data[index].product_quater}</p>
								<p class="line_1 product_lacing">Mui giày: ${data[index].product_lacing}</p>
								<p class="line_2 product_shoelace">Dây giày: ${data[index].product_shoelace}</p>
								<p class="line_1 product_lining">Lớp lót: ${data[index].product_shoelace}</p>
								<p class="line_2 product_technology">Công nghệ: ${data[index].product_technology}</p>
	                    	`)
	                    });  
            		}
				});
			});
		}
		var rangeSlider = function(){
		var slider = $('.range-slider'),
		      range = $('.range-slider__range'),
		      value = $('.range-slider__value');
		    
		  slider.each(function(){

		    value.each(function(){
		      var value = $(this).prev().attr('value');
		      $(this).html(value);
		    });

		    range.on('input', function(){
		      $(this).next(value).html(this.value);
		    });
		  });
		};
		rangeSlider();
		$(".btn-plus").click(function(event) {
			$(this).closest('#tm-section-3').find('.searh_filter').css('display', 'block');
			$(this).css('display', 'none');
			$(this).closest('#tm-section-3').find('.btn-minus').css('display', 'block');
		});
		$(".btn-minus").click(function(event) {
			$(this).closest('#tm-section-3').find('.searh_filter').css('display', 'none');
			$(this).css('display', 'none');
			$(this).closest('#tm-section-3').find('.btn-plus').css('display', 'block');
		});
		$(".btn-plus").click(function(event) {
			$(this).closest('#tm-section-2').find('.searh_filter').css('display', 'block');
			$(this).css('display', 'none');
			$(this).closest('#tm-section-2').find('.btn-minus').css('display', 'block');
		});
		$(".btn-minus").click(function(event) {
			$(this).closest('#tm-section-2').find('.searh_filter').css('display', 'none');
			$(this).css('display', 'none');
			$(this).closest('#tm-section-2').find('.btn-plus').css('display', 'block');
		});
		// Callback lại js cho các product được append
		var callFunction= function(){
			// hover img
			$(".gl-product-card__image").hover(function() {
				$(this).css('filter', 'blur(4px)');
				$(this).closest('.sosanh').find('.btn-shoe').css({
					display: 'block',
					opacity: '1',
					border: '2px solid #000',
	    			color: '#000',
				});
			}, function() {
				$(this).css('filter', 'blur(0px)');
				$(this).closest('.sosanh').find('.btn-shoe').css({
					display: 'none',
					opacity: '0',
				});
			});
			//hover img làm mở ảnh 
			$(".gl-product-card__image").hover(function() {
				$(this).css('filter', 'blur(4px)');
				$(this).closest('.itemss').find('.btn-shoe').css({
					display: 'block',
					opacity: '1',
					border: '2px solid #000',
	    			color: '#000',
	    			width: '89px',
	    			height: '42px',
	    			'font-size':'14px',
				});
			}, function() {
				$(this).css('filter', 'blur(0px)');
				$(this).closest('.itemss').find('.btn-shoe').css({
					display: 'none',
					opacity: '0',
				});
			});
			//hover button hiển thị nút so sánh
			$(".btn-shoe").hover(function() {
				$(this).css({
					display: 'block',
					opacity: '1',
					border: '2px solid #000',
	    			color: '#000',
				});
				$(this).closest('.sosanh').find('.gl-product-card__image').css('filter', 'blur(4px)');
			}, function() {
				$(this).css({
					display: 'none',
					opacity: '0',
				});
				$(this).closest('.sosanh').find('.gl-product-card__image').css('filter', 'blur(0px)');
			});
		}
		</script>
		<!-- ajax -->
		<script type="text/javascript">
			$.ajaxSetup({
            	headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            	}
        	});
        	// search theo hãng
			$(".imgbrand").click(function(event) {
				var data = $(this).attr('idbrand');
				// console.log(data);
				$.ajax({
					url: '{{route('post.search.brand')}}',
					type: 'POST',
					dataType: 'JSON',
					data: {data:data},
					success: function (data){
	                    if(typeof data != "object"){
	                        data = JSON.parse(data);
	                    }
	                    $(".product_sosanh").html("");
	                    /*console.log(data);*/
	                    $.each(data, function(index, val) {
	                    	console.log(data[index].id);
	                    	$(".product_sosanh").append(`
	                    		<!-- item -->
									<div class="product">
										<div class="gl-product-card carousel">
											<div class="gl-product-card__media">
												<a class="sosanh" title="" >
													<img src="${data[index].product_image_total}" alt="" class="gl-product-card__image">
													<div class="changepage">
														<button class="btn-shoe btn tm-btn-submit tm-btn ml-auto" data-bg-img="{{asset('user/img/constructive_bg_03.jpg')}}" data-page="#tm-section-3" idproduct="${data[index].id}" >So Sánh</button>
													</div>	
												</a>
												<div class="gl-product-card__wishlist">
													<div class="toggle_wishlist_button___1dG52">
														<svg class="gl-icon">
															<use xlink:href="#wishlist-inactive">
																#shadow-root (closed)
																<svg viewBox="0 0 20 24" id="wishlist-inactive" width="100%" height="100%">
																	<path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M7.38 6H4.42L2 10l8 8 8-8-2.41-4h-2.98L10 9 7.38 6z"></path>
																</svg>
															</use>
														</svg>
													</div>
												</div>
											</div>
											<div class="gl-product-card__details">
												<a title="" class="sosanh">
													<div class="gl-product-card__details-top">
														<div class="gl-product-card__category gl-label--medium">
															Performance
														</div>
														<div class="gl-product-card__details-icons"></div>
													</div>
													<div class="gl-product-card__details-main">
														<div class="gl-product-card__name gl-label gl-label--medium">
															${data[index].product_name}
														</div>
														<div class="gl-product-card__name gl-label gl-label--medium brand_of_product" id_brand="${data[index].product_id_brand}">
															${data[index].brand_name}
														</div>
														<div class="gl-price-container">
															<span class="gl-price">$${data[index].product_price}</span>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
								<!-- enditem -->
	                    	`)
	                    }); 
	                    callFunction();
	                    setupNavbtn();
	                    btn_compare();  
            		}
				});
			});
			//search sản phẩm bên màn sản phẩm (session 2) với cả input và giá
			$("#search_input_product").keyup(function(event) {
				var id_brand = $(this).closest('#tm-section-2').find('.brand_of_product').first().attr('id_brand');
				var keyword = $(this).val();
				var price = $("#price_product").text();
				console.log(keyword);
				console.log(price);
				console.log(id_brand);
				$.ajax({
					url: '{{route('post.search.product')}}',
					type: 'POST',
					dataType: 'JSON',
					data: {
						keyword:keyword,
						price:price,
						id_brand:id_brand
					},
					success: function (data){
                    if(typeof data != "object"){
                        data = JSON.parse(data);
                    }
                    $(".product_sosanh").html("");
                    /*console.log(data);*/
                    $.each(data, function(index, val) {
                    	console.log(data[index].id);
                    	$(".product_sosanh").append(`
                    		<!-- item -->
								<div class="product">
									<div class="gl-product-card carousel">
										<div class="gl-product-card__media">
											<a class="sosanh" title="" >
												<img src="${data[index].product_image_total}" alt="" class="gl-product-card__image">
												<div class="changepage">
													<button class="btn-shoe btn tm-btn-submit tm-btn ml-auto" data-bg-img="{{asset('user/img/constructive_bg_03.jpg')}}" data-page="#tm-section-3" idproduct="${data[index].id}" >So Sánh</button>
												</div>	
											</a>
											<div class="gl-product-card__wishlist">
												<div class="toggle_wishlist_button___1dG52">
													<svg class="gl-icon">
														<use xlink:href="#wishlist-inactive">
															#shadow-root (closed)
															<svg viewBox="0 0 20 24" id="wishlist-inactive" width="100%" height="100%">
																<path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M7.38 6H4.42L2 10l8 8 8-8-2.41-4h-2.98L10 9 7.38 6z"></path>
															</svg>
														</use>
													</svg>
												</div>
											</div>
										</div>
										<div class="gl-product-card__details">
											<a title="" class="sosanh">
												<div class="gl-product-card__details-top">
													<div class="gl-product-card__category gl-label--medium">
														Performance
													</div>
													<div class="gl-product-card__details-icons"></div>
												</div>
												<div class="gl-product-card__details-main">
													<div class="gl-product-card__name gl-label gl-label--medium">
														${data[index].product_name}
													</div>
													<div class="gl-product-card__name gl-label gl-label--medium brand_of_product" id_brand="${data[index].product_id_brand}">
														${data[index].brand_name}
													</div>
													<div class="gl-price-container">
														<span class="gl-price">$${data[index].product_price}</span>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							<!-- enditem -->
                    	`)
                    }); 
                    callFunction();
                    setupNavbtn();
                    btn_compare();  
            		}
				});	
			});
			//search sản phẩm bên màn sản phẩm (session 2) với giá
			$("#search_price_product").change(function(event) {
				var id_brand = $(this).closest('#tm-section-2').find('.brand_of_product').first().attr('id_brand');
				var keyword = $("#search_input_product").val();
				if(keyword != "")
				{
					var price = $("#price_product").text();
					console.log(keyword);
					console.log(price);
					console.log(id_brand);
					$.ajax({
						url: '{{route('post.search.product')}}',
						type: 'POST',
						dataType: 'JSON',
						data: {
							keyword:keyword,
							price:price,
							id_brand:id_brand
						},
						success: function (data){
	                    if(typeof data != "object"){
	                        data = JSON.parse(data);
	                    }
	                    $(".product_sosanh").html("");
	                    /*console.log(data);*/
	                    $.each(data, function(index, val) {
	                    	console.log(data[index].id);
	                    	$(".product_sosanh").append(`
	                    		<!-- item -->
									<div class="product">
										<div class="gl-product-card carousel">
											<div class="gl-product-card__media">
												<a class="sosanh" title="" >
													<img src="${data[index].product_image_total}" alt="" class="gl-product-card__image">
													<div class="changepage">
														<button class="btn-shoe btn tm-btn-submit tm-btn ml-auto" data-bg-img="{{asset('user/img/constructive_bg_03.jpg')}}" data-page="#tm-section-3" idproduct="${data[index].id}" >So Sánh</button>
													</div>	
												</a>
												<div class="gl-product-card__wishlist">
													<div class="toggle_wishlist_button___1dG52">
														<svg class="gl-icon">
															<use xlink:href="#wishlist-inactive">
																#shadow-root (closed)
																<svg viewBox="0 0 20 24" id="wishlist-inactive" width="100%" height="100%">
																	<path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M7.38 6H4.42L2 10l8 8 8-8-2.41-4h-2.98L10 9 7.38 6z"></path>
																</svg>
															</use>
														</svg>
													</div>
												</div>
											</div>
											<div class="gl-product-card__details">
												<a title="" class="sosanh">
													<div class="gl-product-card__details-top">
														<div class="gl-product-card__category gl-label--medium">
															Performance
														</div>
														<div class="gl-product-card__details-icons"></div>
													</div>
													<div class="gl-product-card__details-main">
														<div class="gl-product-card__name gl-label gl-label--medium">
															${data[index].product_name}
														</div>
														<div class="gl-product-card__name gl-label gl-label--medium brand_of_product" id_brand="${data[index].product_id_brand}">
															${data[index].brand_name}
														</div>
														<div class="gl-price-container">
															<span class="gl-price">$${data[index].product_price}</span>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
								<!-- enditem -->
	                    	`)
	                    }); 
	                    callFunction();
	                    setupNavbtn();
	                    btn_compare();  
	            		}
					});	
				}
				else
				{
					var price = $("#price_product").text();
					console.log(price);
					console.log(id_brand);
					$.ajax({
						url: '{{route('post.search.product')}}',
						type: 'POST',
						dataType: 'JSON',
						data: {
							price:price,
							id_brand:id_brand
						},
						success: function (data){
	                    if(typeof data != "object"){
	                        data = JSON.parse(data);
	                    }
	                    $(".product_sosanh").html("");
	                    /*console.log(data);*/
	                    $.each(data, function(index, val) {
	                    	console.log(data[index].id);
	                    	$(".product_sosanh").append(`
	                    		<!-- item -->
									<div class="product">
										<div class="gl-product-card carousel">
											<div class="gl-product-card__media">
												<a class="sosanh" title="" >
													<img src="${data[index].product_image_total}" alt="" class="gl-product-card__image">
													<div class="changepage">
														<button class="btn-shoe btn tm-btn-submit tm-btn ml-auto" data-bg-img="{{asset('user/img/constructive_bg_03.jpg')}}" data-page="#tm-section-3" idproduct="${data[index].id}" >So Sánh</button>
													</div>	
												</a>
												<div class="gl-product-card__wishlist">
													<div class="toggle_wishlist_button___1dG52">
														<svg class="gl-icon">
															<use xlink:href="#wishlist-inactive">
																#shadow-root (closed)
																<svg viewBox="0 0 20 24" id="wishlist-inactive" width="100%" height="100%">
																	<path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M7.38 6H4.42L2 10l8 8 8-8-2.41-4h-2.98L10 9 7.38 6z"></path>
																</svg>
															</use>
														</svg>
													</div>
												</div>
											</div>
											<div class="gl-product-card__details">
												<a title="" class="sosanh">
													<div class="gl-product-card__details-top">
														<div class="gl-product-card__category gl-label--medium">
															Performance
														</div>
														<div class="gl-product-card__details-icons"></div>
													</div>
													<div class="gl-product-card__details-main">
														<div class="gl-product-card__name gl-label gl-label--medium">
															${data[index].product_name}
														</div>
														<div class="gl-product-card__name gl-label gl-label--medium brand_of_product" id_brand="${data[index].product_id_brand}">
															${data[index].brand_name}
														</div>
														<div class="gl-price-container">
															<span class="gl-price">$${data[index].product_price}</span>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
								<!-- enditem -->
	                    	`)
	                    }); 
	                    callFunction();
	                    setupNavbtn();
	                    btn_compare();  
	            		}
					});	
				}
				
			});
			// search sản phẩm bên màn so sánh (session 3) với cả input và giá
			$("#search_input_text").keyup(function(event) {
				var keyword = $(this).val();
				var price = $("#search_price").text();
				console.log(keyword);
				console.log(price);
				$.ajax({
					url: '{{route('post.search.compare')}}',
					type: 'POST',
					dataType: 'JSON',
					data: {
						keyword:keyword,
						price:price
					},
					success: function (data){
	                    if(typeof data != "object"){
	                        data = JSON.parse(data);
	                    }
	                    $(".ss-right").html("");
	                    /*console.log(data);*/
	                    $.each(data, function(index, val) {
	                    	console.log(data[index].id);
	                    	$(".ss-right").append(`
							<!-- item -->
							<div class="product product-ss">
								<div class="gl-product-card carousel">
									<div class="gl-product-card__media">
										<a class="itemss" title="">
											<img src="${data[index].product_image_total}" alt="" class="gl-product-card__image">
											<button class="btn-shoe btn tm-btn-submit tm-btn ml-auto" idproduct="${data[index].id}">So Sánh</button>
										</a>
										<div class="gl-product-card__wishlist">
											<div class="toggle_wishlist_button___1dG52">
												<svg class="gl-icon">
													<use xlink:href="#wishlist-inactive">
														#shadow-root (closed)
														<svg viewBox="0 0 20 24" id="wishlist-inactive" width="100%" height="100%">
															<path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M7.38 6H4.42L2 10l8 8 8-8-2.41-4h-2.98L10 9 7.38 6z"></path>
														</svg>
													</use>
												</svg>
											</div>
										</div>
									</div>
									<div class="gl-product-card__details">
										<a title="" class="itemss">
											<div class="gl-product-card__details-top">
												<div class="gl-product-card__category gl-label--medium">
													Performance
												</div>
												<div class="gl-product-card__details-icons"></div>
											</div>
											<div class="gl-product-card__details-main">
												<div class="gl-product-card__name gl-label gl-label--medium">
													${data[index].product_name}
												</div>
												<div class="gl-price-container">
													<span class="gl-price">$${data[index].product_price}</span>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<!-- enditem -->
	                    	`)
	                    }); 
	                    callFunction();
	                    product2();
            		}
				});
				
			});
			// search sản phẩm bên màn so sánh (session 3) chỉ với giá
			$("#search_input_price").change(function(event) {
				var keyword = $("#search_input_text").val();
				if(keyword != "")
				{
					var price = $(this).text();
					console.log(keyword);
					console.log(price);
					$.ajax({
						url: '{{route('post.search.compare')}}',
						type: 'POST',
						dataType: 'JSON',
						data: {
							keyword:keyword,
							price:price
						},
						success: function (data){
		                    if(typeof data != "object"){
		                        data = JSON.parse(data);
		                    }
		                    $(".ss-right").html("");
		                    /*console.log(data);*/
		                    $.each(data, function(index, val) {
		                    	console.log(data[index].id);
		                    	$(".ss-right").append(`
								<!-- item -->
								<div class="product product-ss">
									<div class="gl-product-card carousel">
										<div class="gl-product-card__media">
											<a class="itemss" title="">
												<img src="${data[index].product_image_total}" alt="" class="gl-product-card__image">
												<button class="btn-shoe btn tm-btn-submit tm-btn ml-auto" idproduct="${data[index].id}">So Sánh</button>
											</a>
											<div class="gl-product-card__wishlist">
												<div class="toggle_wishlist_button___1dG52">
													<svg class="gl-icon">
														<use xlink:href="#wishlist-inactive">
															#shadow-root (closed)
															<svg viewBox="0 0 20 24" id="wishlist-inactive" width="100%" height="100%">
																<path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M7.38 6H4.42L2 10l8 8 8-8-2.41-4h-2.98L10 9 7.38 6z"></path>
															</svg>
														</use>
													</svg>
												</div>
											</div>
										</div>
										<div class="gl-product-card__details">
											<a title="" class="itemss">
												<div class="gl-product-card__details-top">
													<div class="gl-product-card__category gl-label--medium">
														Performance
													</div>
													<div class="gl-product-card__details-icons"></div>
												</div>
												<div class="gl-product-card__details-main">
													<div class="gl-product-card__name gl-label gl-label--medium">
														${data[index].product_name}
													</div>
													<div class="gl-price-container">
														<span class="gl-price">$${data[index].product_price}</span>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!-- enditem -->
		                    	`)
		                    }); 
		                    callFunction();
		                    product2();
	            		}
					});
				}
				else
				{
					var price = $("#search_price").text();
					console.log(price);
					$.ajax({
						url: '{{route('post.search.compare')}}',
						type: 'POST',
						dataType: 'JSON',
						data: {
							price:price
						},
						success: function (data){
		                    if(typeof data != "object"){
		                        data = JSON.parse(data);
		                    }
		                    $(".ss-right").html("");
		                    /*console.log(data);*/
		                    $.each(data, function(index, val) {
		                    	console.log(data[index].id);
		                    	$(".ss-right").append(`
								<!-- item -->
								<div class="product product-ss">
									<div class="gl-product-card carousel">
										<div class="gl-product-card__media">
											<a class="itemss" title="">
												<img src="${data[index].product_image_total}" alt="" class="gl-product-card__image">
												<button class="btn-shoe btn tm-btn-submit tm-btn ml-auto" idproduct="${data[index].id}">So Sánh</button>
											</a>
											<div class="gl-product-card__wishlist">
												<div class="toggle_wishlist_button___1dG52">
													<svg class="gl-icon">
														<use xlink:href="#wishlist-inactive">
															#shadow-root (closed)
															<svg viewBox="0 0 20 24" id="wishlist-inactive" width="100%" height="100%">
																<path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M7.38 6H4.42L2 10l8 8 8-8-2.41-4h-2.98L10 9 7.38 6z"></path>
															</svg>
														</use>
													</svg>
												</div>
											</div>
										</div>
										<div class="gl-product-card__details">
											<a title="" class="itemss">
												<div class="gl-product-card__details-top">
													<div class="gl-product-card__category gl-label--medium">
														Performance
													</div>
													<div class="gl-product-card__details-icons"></div>
												</div>
												<div class="gl-product-card__details-main">
													<div class="gl-product-card__name gl-label gl-label--medium">
														${data[index].product_name}
													</div>
													<div class="gl-price-container">
														<span class="gl-price">$${data[index].product_price}</span>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
								<!-- enditem -->
		                    	`)
		                    }); 
		                    callFunction();
		                    product2();
	            		}
					});
				}
				
			});
		</script>
		<!-- end ajax -->
		
	</body>
</html>

