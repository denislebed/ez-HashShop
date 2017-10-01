
<!DOCTYPE html>
<php lang="ru">
<head>
<title>Electronic Store a Ecommerce Online Shopping Category Bootstrap Responsive Website Template | About :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('php,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body> 
	<!-- header modal -->
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>

	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
            <div class="container">			
                <div class="w3l_logo">
                    <h1><a href="index.blade.php">#Shop<span>Наши товары.Ваши деньги</span></a></h1>
                </div>
                <div class="search">
                    <input class="search_box" type="checkbox" id="search_box">
                    <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                    <div class="search_form">
                        <form action="#" method="post">
                            <input type="text" name="Search" placeholder="Поиск...">
                            <input type="submit" value="Ок">
                        </form>
                    </div>
                </div>
                <div class="cart cart box_1"> 
                    <form action="#" method="post" class="last"> 
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="display" value="1" />
                        <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                    </form>   
                </div>  
            </div>
        </div>
        <!-- //header -->
        <!-- navigation -->
        <div class="navigation">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li><a href="index.blade.php" class="act">Домой</a></li>	
                            <!-- Mega Menu -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Категории<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <ul class="multi-column-dropdown">
                                                <h6><a href="products.blade.php">Смартфоны</a></h6>
                                            </ul>								</div>
                                        <div class="col-sm-3">
                                            <ul class="multi-column-dropdown">
                                                <h6><a href="products1.blade.php">Компьютеры</a></h6>			
<!--											<li><a href="products1.blade.php">Wearables <span>New</span></a></li>-->
<!--											<li><a href="products1.blade.php"><i>Summer Store</i></a></li>-->
                                            </ul>
                                        </div>
                                        <div class="col-sm-2">
                                            <ul class="multi-column-dropdown">
                                                <h6><a href="products2.blade.php">Быт.Техника</a></h6>								
                                                <!--											<li><a href="products2.blade.php">AC</a></li>
                                                                                                                                        <li><a href="products2.blade.php">Grinders</a></li>-->
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="w3ls_products_pos">
                                                <h4>30%<i>SALE/-</i></h4>
                                                <img src="images/1.jpg" alt=" " class="img-responsive" />
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="about.blade.php">О Нас</a></li> 
<!--						<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                            <li><a href="icons.blade.php">Web Icons</a></li>
                                            <li><a href="codes.blade.php">Short Codes</a></li>     
                                    </ul>
                            </li>  -->
                            <li><a href="mail.blade.php">Контакты</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner10">
		<div class="container">
			<h2>О Нас</h2>
		</div>
	</div>
	<!-- //banner -->   
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.blade.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Домой</a> <i>/</i></li>
				<li>О Нас</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- about -->
	<div class="about">
		<div class="container">	
			<div class="w3ls_about_grids">
				<div class="col-md-6 w3ls_about_grid_left">
					<p>Мы предлагаем широкий ассортимент электроники, бытовой техники.</p>
					<div class="col-xs-2 w3ls_about_grid_left1">
						<span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 w3ls_about_grid_left2">
						<p>Наша задача состоит не только в том, чтобы просто продать нужный товар, но и в том, чтобы информировать и просвещать покупателя.Наш сайт в среднем посещает более 20 000 уникальных посетителей в день, и это число продолжает расти. Не останавливаясь на достигнутом, мы продолжаем наращивать обороты, стремясь стать лучшим в стране интернет-супермаркетом — местом, где вы сможете выбрать и приобрести любые товар — осознанно, недорого и удобно.</p>
					</div>
					<div class="clearfix"> </div>
					<div class="col-xs-2 w3ls_about_grid_left1">
						<span class="glyphicon glyphicon-flash" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 w3ls_about_grid_left2">
						<p>Все товары в нашем магазине сопровождаются гарантией. Подтверждением гарантии служит фирменный гарантийный талон.

Мы дорожим своей репутацией, и поэтому сознательно не продаём неофициальный или нелегальный товар без гарантии и сервисной поддержки в Украине. В конечном итоге покупка продуктов сомнительного происхождения доставляет головную боль и для продавца, и для покупателя.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3ls_about_grid_right">
                                    <img src="images/clientFunny.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about --> 
	<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Новости</h3>
				
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
                <h3>Контакты</h3>
                <ul class="address">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Карла Маркса,8Б<span>Днепр</span></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@gmail.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+380935469981</li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Информация</h3>
                <ul class="info"> 
                    <li><a href="about.blade.php">О Нас</a></li>
                    <li><a href="mail.blade.php">Контакты</a></li>
                    <li><a href="faq.blade.php">FAQ</a></li>

                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Категории</h3>
                <ul class="info"> 
                    <li><a href="products.blade.php">Смартфоны</a></li>
                    <li><a href="products1.blade.php">Компьютеры</a></li>
                    <li><a href="products1.blade.php">Бытовая Техника</a></li>
                    
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Профиль</h3>
                <ul class="info"> 
                    <li><a href="index.blade.php">Домой</a></li>
                    <li><a href="products.blade.php">SALE</a></li>
                </ul>
                <h4>Подпишись</h4>
                <div class="agileits_social_button">
                    <ul>
                        <li><a href="#" class="facebook"> </a></li>
                        <li><a href="#" class="twitter"> </a></li>
                        <li><a href="#" class="google"> </a></li>
                        <li><a href="#" class="pinterest"> </a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="footer-copy1">
            <div class="footer-copy-pos">
                <a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
            </div>
        </div>
        <div class="container">
            <p>&copy; 2017 #Shop.</p>
        </div>
    </div>
</div>
	<!-- //footer -->  
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js --> 
</body>
</html>