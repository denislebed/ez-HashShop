
<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Electronic Store</title>
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <!-- Custom Theme files -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 
        <link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
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
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        </script>
        <!-- //end-smooth-scrolling --> 
    </head> 
    <body> 
        <!-- header modal -->
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
                            <li><a href="mail.blade.php">Контакты</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- //navigation -->
        <!-- banner -->
        <div class="banner banner1">
            <div class="container">
                <h2>Большой выбор<span>Смартфонов</span></h2> 
            </div>
        </div> 
        <!-- breadcrumbs -->
        
        <!-- //breadcrumbs --> 
        <!-- mobiles -->
        <div class="mobiles">
            <div class="container">
                <div class="w3ls_mobiles_grids">
                    <div class="col-md-4 w3ls_mobiles_grid_left">
                        <div class="w3ls_mobiles_grid_left_grid">
                            <h3>Производители</h3>
                            <div class="w3ls_mobiles_grid_left_grid_sub">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title asd">
                                                <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Производители
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body panel_text">
                                                <ul>
                                                    <li><a href="#">LG</a></li>
                                                    <li><a href="#">iPhone</a></li>
                                                    <li><a href="#">Asus</a></li>
                                                    <li><a href="#">Lenovo</a></li>
                                                    <li><a href="#">Sony</a></li>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">Nokia</a></li>
                                                    <li><a href="#">Meizu</a></li>
                                                    <li><a href="#">HTC</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w3ls_mobiles_grid_left_grid">
                            <h3>Цена</h3>
                            <div class="w3ls_mobiles_grid_left_grid_sub">
                                <div class="ecommerce_color ecommerce_size">
                                    <ul>
                                        <li><a href="#">Меньше 1500 грн</a></li>
                                        <li><a href="#"> 1500-3000 грн</a></li>
                                        <li><a href="#"> 3000грн-7000 грн</a></li>
                                        <li><a href="#"> 10 000-20 000 грн</a></li>
                                        <li><a href="#"> Больше 20 000 грн</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 w3ls_mobiles_grid_right">
                        <div class="col-md-6 w3ls_mobiles_grid_right_left">
                        </div>
                        <div class="clearfix"> </div>
                        <div class="w3ls_mobiles_grid_right_grid3">
                            <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                                <div class="agile_ecommerce_tab_left mobiles_grid">
                                    <div class="hs-wrapper hs-wrapper2">
                                        <img src="images/lgq6.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                            <ul>
                                                <li style="color: white">
<!--												<a href="#" data-toggle="modal" data-target="#myModal9"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>-->

                                                    <p class="descview" style="margin-top: -90px">
                                                        Основные характеристики<br>
                                                        5,5" FullVision¹ дисплей² FullHD+³
                                                        Компактный корпус: удобно держать одной рукой
                                                        Надежная алюминиевая рамка
                                                        Широкоформатная селфи-камера
                                                        Режим камеры «Квадрат»
                                                    </p>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="single.html">LG Q6</a></h5> 
                                    <div class="simpleCart_shelfItem">
                                        <p><i class="item_price">9999 грн</i></p>
                                        <form action="basket.blade.php" method="post">
<!--										<input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" /> 
                                                <input type="hidden" name="w3ls_item" value="Smart Phone" /> 
                                                <input type="hidden" name="amount" value="245.00"/>   -->
                                            <button type="submit" class="w3ls-cart">В Корзину</button>
                                        </form>
                                    </div> 
                                    <div class="mobiles_grid_pos">
                                        <h6>New</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                                <div class="agile_ecommerce_tab_left mobiles_grid">
                                    <div class="hs-wrapper hs-wrapper2">
                                        <img src="images/iphone2.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                            <ul>
                                                <li style="color: white">
<!--												<a href="#" data-toggle="modal" data-target="#myModal9"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>-->

                                                    <p class="descview" style="margin-top: -90px">
                                                        Основные характеристики<br>
                                                        Дисплей Super Retina: диагональ 5,8
                                                        Камера TrueDepth
                                                        Face ID
                                                        App Pay
                                                        Процессор A11 Bionic
                                                        Беспроводная зарядка
                                                        iOS 11
                                                        
                                                    </p>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="single.html">iPhone X</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><i class="item_price">35 999 грн</i></p>
                                        <form action="basket.blade.php" method="post">
<!--										<input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" /> 
                                                <input type="hidden" name="w3ls_item" value="Audio-speaker" /> 
                                                <input type="hidden" name="amount" value="45.00"/>   -->
                                            <button type="submit" class="w3ls-cart">В Корзину</button>
                                        </form>
                                    </div> 
                                    <div class="mobiles_grid_pos">
                                        <h6>New</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                                <div class="agile_ecommerce_tab_left mobiles_grid">
                                    <div class="hs-wrapper hs-wrapper2">
                                        <img src="images/sonyXA.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                            <ul>
                                                <li style="color: white">
<!--												<a href="#" data-toggle="modal" data-target="#myModal9"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>-->

                                                    <p class="descview" style="margin-top: -90px">
                                                        Основные характеристики<br>
                                                        Диагональ экрана: 5"; 
                                                        Разрешение экрана: 1280x720;
                                                        Камера: 13 Мп; Количество ядер: 8;
                                                        Оперативная память: 2 Гб; 
                                                        Внутренняя память: 16 Гб;
                                                        
                                                    </p>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="single.html">Sony Xperia XA</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>14 999 грн</span> <i class="item_price">13599 грн</i></p>
                                        <form action="basket.blade.php" method="post">
<!--										<input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" /> 
                                                <input type="hidden" name="w3ls_item" value="Red Mobile" /> 
                                                <input type="hidden" name="amount" value="65.00"/>   -->
                                            <button type="submit" class="w3ls-cart">В Корзину</button>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3ls_mobiles_grid_right_grid3">
                            <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                                <div class="agile_ecommerce_tab_left mobiles_grid">
                                    <div class="hs-wrapper hs-wrapper2">
                                        <img src="images/asus.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                            <ul>
                                                <li style="color: white">
                                                <p class="descview" style="margin-top: -90px">
                                                Основные характеристики<br>
                                                        Диагональ экрана: 5.5"; 
                                                        Разрешение экрана:Full HD Super AMOLED;
                                                        Полностью металлический корпус;
                                                        Камера: 23 Мп;
                                                        Процессор: Snapdragon 821 ;
                                                        Оперативная память: 6 Гб; 
                                                        Внутренняя память: 256 Гб;
                                                </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="single.html">Asus Zenfone 3 Deluxe</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><i class="item_price">11 299 грн</i></p>
                                        <form action="basket.blade.php" method="post">
<!--										<input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" /> 
                                                <input type="hidden" name="w3ls_item" value="Headphone"/> 
                                                <input type="hidden" name="amount" value="245.00"/>   -->
                                            <button type="submit" class="w3ls-cart">В Корзину</button>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                                <div class="agile_ecommerce_tab_left mobiles_grid">
                                    <div class="hs-wrapper hs-wrapper2">
                                        <img src="images/lenovo.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                            <ul>
                                                <li style="color: white">
                                                <p class="descview" style="margin-top: -90px">
                                                Основные характеристики<br>
                                                        Диагональ дисплея:6.4 FullHD;
                                                        Камера:13 МП;
                                                        Процессор:8 ядер(а), 1.3 ГГц;
                                                        Видеосъемка:ultraHD (4K);
                                                        Встроенная память:32Г;
                                                        БЁмкость батареи:4050 мАч;
                                                </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="single.html">Lenovo Phab 2 Plus</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><i class="item_price">2899 грн</i></p>
                                        <form action="basket.blade.php" method="post">
<!--										<input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" /> 
                                                <input type="hidden" name="w3ls_item" value="Wireless Speaker" /> 
                                                <input type="hidden" name="amount" value="86.00"/>   -->
                                            <button type="submit" class="w3ls-cart">В Корзину</button>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                                <div class="agile_ecommerce_tab_left mobiles_grid">
                                    <div class="hs-wrapper hs-wrapper2">
                                        <img src="images/SamsungGalaxyA5-2017.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                            <ul>
                                                <li style="color: white">
                                                <p class="descview" style="margin-top: -90px">
                                                Основные характеристики<br>
                                                        Экран 5.7", Super AMOLED, 1920x1080)
                                                        Процессор:Samsung Exynos 7880 (1.9 ГГц);
                                                        Kамера: 16 Мп, фронтальная камера: 16 Мп
                                                        Оперативная памятьRAM 3 ГБ;
                                                        Встроенной памяти 32 ГБ + microSD/SDHC (до 256 ГБ); 
                                                        Поддержка 2х SIM-карт (Nano-SIM); 
                                                        Android 7.0; 
                                                        Батарея:3600 мА*ч;
                                                </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="single.html">Samsung Galaxy A7 2017</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><i class="item_price">12 000 грн</i></p>
                                        <form action="basket.blade.php" method="post">
<!--										<input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" /> 
                                                <input type="hidden" name="w3ls_item" value="Asus Tablet" /> 
                                                <input type="hidden" name="amount" value="425.00"/>   -->
                                            <button type="submit" class="w3ls-cart">В Корзину</button>
                                        </form>
                                    </div> 
                                    <!--								<div class="mobiles_grid_pos">
                                                                                                            <h6>New</h6>
                                                                                                    </div>-->
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="w3ls_mobiles_grid_right_grid3">
                            <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                                <div class="agile_ecommerce_tab_left mobiles_grid">
                                    <div class="hs-wrapper hs-wrapper2">
                                        <img src="images/nokia.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                            <ul>
                                                <li style="color: white">
                                                <p class="descview" style="margin-top: -90px">
                                                Основные характеристики<br>
                                                        Экран 5.2" Full HD
                                                        Процессор:Snapdragon 835;
                                                        Kамера: 23 Мп;
                                                        Оперативная память:6 ГБ;
                                                        Встроенной памяти:256 ГБ; 
                                                        Android 7.0; 
                                                        Батарея:3500 мА*ч;
                                                </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="single.html">Nokia P1</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><span>$60</span> <i class="item_price">$58</i></p>
                                        <form action="basket.blade.php" method="post">
<!--										<input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" /> 
                                                <input type="hidden" name="w3ls_item" value="Ultra MP3 Player" /> 
                                                <input type="hidden" name="amount" value="58.00"/>   -->
                                            <button type="submit" class="w3ls-cart">В Корзину</button>
                                        </form>
                                    </div> 
                                    <!--								<div class="mobiles_grid_pos">
                                                                                                            <h6>New</h6>
                                                                                                    </div>-->
                                </div>
                            </div>
                            <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                                <div class="agile_ecommerce_tab_left mobiles_grid">
                                    <div class="hs-wrapper hs-wrapper2">
                                        <img src="images/meizu.jpg" alt=" " class="img-responsive" />

                                        <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                            <ul>
                                                <li style="color: white">
                                                <p class="descview" style="margin-top: -90px">
                                                Основные характеристики<br>
                                                        Экран 5.2" Full HD
                                                        Процессор:MediaTek MT6750;
                                                        Kамера: 13 Мп;
                                                        Оперативная память:3 ГБ;
                                                        Встроенной памяти:32 ГБ; 
                                                        Android 6.0; 
                                                        Батарея:3070 мА*ч;
                                                </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="single.html">Meizu M5</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><i class="item_price">3999 грн</i></p>
                                        <form action="basket.blade.php" method="post">
<!--										<input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" /> 
                                                <input type="hidden" name="w3ls_item" value="Golden Tablet" /> 
                                                <input type="hidden" name="amount" value="550.00"/>   -->
                                            <button type="submit" class="w3ls-cart">В Корзину</button>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                                <div class="agile_ecommerce_tab_left mobiles_grid">
                                    <div class="hs-wrapper hs-wrapper2">
                                        <img src="images/htc.jpg" alt=" " class="img-responsive" />
                                        <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                            <ul>
                                                <li style="color: white">
                                                <p class="descview" style="margin-top: -90px">
                                                Основные характеристики<br>
                                                        Экран 5.2" Full HD
                                                        Процессор:Snapdragon 652;
                                                        Kамера: 12 Мп;
                                                        Оперативная память:3 ГБ;
                                                        Встроенной памяти:32 ГБ; 
                                                        Android 6.0; 
                                                        Батарея:3000 мА*ч;
                                                </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <h5><a href="single.html">HTC 10</a></h5>
                                    <div class="simpleCart_shelfItem">
                                        <p><i class="item_price">17 499 грн</i></p>
                                        <form action="basket.blade.php" method="post">
<!--										<input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" /> 
                                                <input type="hidden" name="w3ls_item" value="Wireless Phone" /> 
                                                <input type="hidden" name="amount" value="210.00"/>   -->
                                            <button type="submit" class="w3ls-cart">В Корзину</button>
                                        </form>
                                    </div> 
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>  

        <!-- Related Products -->
        <!-- //Related Products -->
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
                            <li><a href="products2.blade.php">Бытовая Техника</a></li>

                        </ul>
                    </div>
                    <div class="col-md-3 w3_footer_grid">
                        <h3>Профиль</h3>
                        <ul class="info"> 
                            <li><a href="index.blade.php">Домой</a></li>
                            <li><a href="#">SALE</a></li>
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
        <script type="text/javascript">
            $(window).load(function () {
                $("#flexiselDemo2").flexisel({
                    visibleItems: 4,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 568,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 667,
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