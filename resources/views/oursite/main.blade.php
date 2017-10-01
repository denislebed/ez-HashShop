<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Electronic Store </title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
                SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />-->
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <!-- Custom Theme files -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
        <!-- //Custom Theme files -->
        <!-- font-awesome icons -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons -->
        <!-- js -->
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
        <!-- //js -->  
        <!-- web fonts --> 
        <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        <!-- //web fonts -->  
        <!-- start-smooth-scrolling -->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- //end-smooth-scrolling --> 
    </head> 
    <body link="red" vlink="#cecece" alink="#ff0000" bgcolor="black">
        <!-- for bootstrap working -->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
        <!-- //for bootstrap working -->
        <!-- header modal -->
        <!-- header -->
        <div class="header" id="home1">
            <div class="container">			
                <div class="w3l_logo">
                    <h1><a href="main.blade.php">#Shop<span>Наши товары.Ваши деньги</span></a></h1>
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
<!--                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="display" value="1" />-->
                        <a href="basket.blade.php"<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>
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
                            <li><a href="main.blade.php" class="act">Домой</a></li>	
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
        <h3>Новые Товары</h3>
        <div class="agileinfo_new_products_grids">
            <div class="col-md-3 agileinfo_new_products_grid">
                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                    <div class="hs-wrapper hs-wrapper1">
                        <img src="images/dell.jpg" alt=" " class="img-responsive" />
                        <img src="images/23.jpg" alt=" " class="img-responsive" />
                        <img src="images/24.jpg" alt=" " class="img-responsive" />
                        <img src="images/22.jpg" alt=" " class="img-responsive" />
                        <img src="images/26.jpg" alt=" " class="img-responsive" /> 
                   
                    </div>
                    <h5><a href="products1.blade.php">Dell A250</a></h5>
                    <div class="simpleCart_shelfItem">
                        <p><i class="item_price">14999 грн</i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 agileinfo_new_products_grid">
                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                    <div class="hs-wrapper hs-wrapper1">
                        <img src="images/iphone1.jpg" alt=" " class="img-responsive" />
                        <img src="images/iphone2.jpg" alt=" " class="img-responsive" />
                        <img src="images/iphone3.jpg" alt=" " class="img-responsive" />
                        <img src="images/iphone4.jpg" alt=" " class="img-responsive" />
                        <img src="images/iphone5.jpg" alt=" " class="img-responsive" /> 
                    </div>
                    <h5><a href="products.blade.php>iPhone X</a></h5>
                    <div class="simpleCart_shelfItem">
                        <p><i class="item_price">35999 грн + Золотой чехол</i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 agileinfo_new_products_grid">
                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                    <div class="hs-wrapper hs-wrapper1">
                        <img src="images/daewoo.jpg" alt=" " class="img-responsive" />
                    </div>
                    <h5><a href="products2.blade.php">Daewoo</a></h5>
                    <div class="simpleCart_shelfItem">
                        <p><i class="item_price">9999 грн</i></p>                       
                    </div>  
                </div>
            </div>
            <div class="col-md-3 agileinfo_new_products_grid">
                <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                    <div class="hs-wrapper hs-wrapper1">
                        <img src="images/bosch.jpg" alt=" " class="img-responsive" />                       
                    </div>
                    <h5><a href="products2.blade.php">Утюг</a></h5>
                    <div class="simpleCart_shelfItem">
                        <p><i class="item_price">3200 грн</i></p>                      
                    </div>
                </div>
            </div>
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
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
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
                    <li><a href="main.blade.php">Домой</a></li>
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
            <p>&copy;Denys Ruslan Vadim Victor group. 2017 #Shop.</p>
        </div>
    </div>
</div>
<!-- //footer --> 
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
</body>
</html>