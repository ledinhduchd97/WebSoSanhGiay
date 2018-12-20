
	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	}
	});
	$(".imgbrand").click(function(event) {
		var data = $(this).attr('idbrand');
		console.log(data);
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
                console.log(data);
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