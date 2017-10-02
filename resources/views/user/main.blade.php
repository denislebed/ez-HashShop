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
                            <h5><a href="products.blade.php">iPhone X</a></h5>
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
@endsection
