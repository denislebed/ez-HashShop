@extends('layouts.user_app')

@section('user_content')
<div class="banner">
    <div class="container" style="color: red">
	<h3 style="color: white">Добро пожаловать в <span style="color: red">#Shop</span></h3>
    </div>
</div>
<!-- //clas --> 
<!-- modal-video -->

<!-- //banner-bottom1 --> 
<!-- new-products -->
<div class="new-products">
    <div class="container">
	<h3>{{$category_id->name}}</h3>

	<div class="agileinfo_new_products_grids">
	    @foreach ($goods as $good)
	    <div class="col-md-3 agileinfo_new_products_grid">

		<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
		    <div class="hs-wrapper hs-wrapper1">
			<img src="images/dell.jpg" alt=" " class="img-responsive" />
		    </div>
		    <h5><a href="">{{$good->name}}</a></h5>
		</div>
	    </div>
	    @endforeach

	    <div class="clearfix"> </div>
	</div>
    </div>
</div>

<!-- //new-products -->
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
	<h3>Наши Партнеры</h3>
	<div class="sliderfig">
	    <ul id="flexiselDemo1">			
		<li>
		    <img src="images/tb1.jpg" alt=" " class="img-responsive" />
		</li>
		<li>
		    <img src="images/tb2.jpg" alt=" " class="img-responsive" />
		</li>
		<li>
		    <img src="images/tb3.jpg" alt=" " class="img-responsive" />
		</li>
		<li>
		    <img src="images/tb4.jpg" alt=" " class="img-responsive" />
		</li>
		<li>
		    <img src="images/tb5.jpg" alt=" " class="img-responsive" />
		</li>
	    </ul>
	</div>
	<script type="text/javascript">
	    $(window).load(function () {
		$("#flexiselDemo1").flexisel({
		    visibleItems: 4,
		    animationSpeed: 1000,
		    autoPlay: true,
		    autoPlaySpeed: 3000,
		    pauseOnHover: true,
		    enableResponsiveBreakpoints: true,
		    responsiveBreakpoints: {
			portrait: {
			    changePoint: 480,
			    visibleItems: 1
			},
			landscape: {
			    changePoint: 640,
			    visibleItems: 2
			},
			tablet: {
			    changePoint: 768,
			    visibleItems: 3
			}
		    }
		});

	    });
	</script>
	<script src="js/jquery.flexisel.js" type="text/javascript"></script>
    </div>
</div>
<!-- //top-brands --> 
<!-- newsletter -->
<div class="newsletter">
    <div class="container">
	<div class="col-md-6 w3agile_newsletter_left">
	    <h3>Новости</h3>
	    <p></p>
	</div>
	<div class="col-md-7 w3agile_newsletter_right">
	    <form action="#" method="post">
		<input type="email" name="Email" placeholder="Email" required="">
		<input type="submit" value="" />
	    </form>
	</div>
	<div class="clearfix"> </div>
    </div>
</div>
@endsection
