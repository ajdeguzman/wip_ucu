<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Urdaneta City University</title>
        <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //for-mobile-apps -->
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Metamorphous' rel='stylesheet' type='text/css'>
                <!--//fonts-->
                <script language="JavaScript" src="{{ URL::asset('/') }}js/jquery.min.js"></script>
                <!-- Bootstrap core JavaScript
                ================================================== -->
                <!-- Placed at the end of the document so the pages load faster -->
                <!-- js -->
                <script language="JavaScript" src="{{ URL::asset('/') }}js/bootstrap.js"></script>
                <script language="JavaScript" src="{{ URL::asset('/') }}js/easing.js"></script>
                <script language="JavaScript" src="{{ URL::asset('/') }}js/move-top.js"></script>
                <!--/script-->
                <script type="text/javascript">
                jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                });
                });
                </script>
            </head>
            <body>
                <!--header-->
                <div class="header">
                    <div class="header-top">
                        <div class="container">
                            <div class="header-right-text">
                                <h3>&nbsp;</h3>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="header-nav">
                        <div class="container">
                            <div class="logo">
                                <a href="index.html"><img src="{{ URL::asset('/') }}images/ucu_logo.png"></a>
                            </div>
                            <div class="navigation">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"> </span>
                                        <span class="icon-bar"> </span>
                                        <span class="icon-bar"> </span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="services.html">Admissions</a></li>
                                            <li><a href="blog.html">Academics</a></li>
                                            <li><a href="gallery.html">Campus Life</a></li>
                                        </ul>
                                        <div class="clearfix"> </div>
                                        </div><!-- /.navbar-collapse -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!-- script-for-menu -->
                    <script>
                    $("span.menu").click(function(){
                    $(".top-nav ul").slideToggle("slow" , function(){
                    });
                    });
                    </script>
                    <!-- script-for-menu -->
                    <!-- banner-text Slider starts Here -->
                    <script language="JavaScript" src="{{ URL::asset('/') }}js/responsiveslides.min.js"></script>
                    <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                    // Slideshow 4
                    $("#slider3").responsiveSlides({
                    auto: true,
                    pager:false,
                    nav:true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                    $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                    $('.events').append("<li>after event fired.</li>");
                    }
                    });
                    });
                    </script>
                    <!--//End-slider-script -->
                    <div class="banner">
                        <div  id="top" class="callbacks_container">
                            <ul class="rslides" id="slider3">
                                <li>
                                    <div class="banner-slide">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner1">
                                    </div>
                                </li>
                                <li>
                                    <div class="banner2">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!--/header-->
                    <!-- <div class="welcome">
                        <div class="container">
                            <div class="col-md-4 welcome-img">
                                <img src="images/weelcome.jpg" alt="" />
                            </div>
                            <div class="col-md-8 welcome-text">
                                <h4>Welcome To Urdaneta City University</h4>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur aut odit aut fugit.</p>
                            </div>
                        </div>
                    </div> -->
                    <div class="index-about">
                        <div class="container">
                            <h3>ABOUT</h3>
                            <p>Dolor nunc vule putateulr ips dol consec.Donec sem ertet laciniate ultricie upie disse utes comete dolo lectus. fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore condime netus lullam utlacus adipiscing ipsum molestie euismod lore estibulum vel libero ipsum sit
                            amet sollicitudin ante. Aenean imperdiet aliquet hendreritunc interdum ullamcorper lec tuset pellentesqu enim interdum atuspendisse malesuada dignissim.</p>
                        </div>
                    </div>
                    <div class="latest-designs">
                        <div class="container">
                            <h3>UCU News</h3>
                            <div class="gallery-info">
                                <ul class="demo-1 effect">
                                    <li>
                                        <h2>Latest Furnished</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                    </li>

                                    <li><img class="top" src="images/11.jpg" alt=""/></li>
                                </ul>
                                <li>
                                    <ul class="demo-1 effect">
                                        <li>
                                            <h2>Latest Furnished</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                        </li>

                                        <li><img class="top" src="images/15.jpg" alt=""/></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="demo-1 effect">
                                        <li>
                                            <h2>Latest Furnished</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                        </li>

                                        <li><img class="top" src="images/13.jpg" alt=""/></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="demo-1 effect">
                                        <li>
                                            <h2>Latest Furnished</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                        </li>
                                        <br>
                                        <li><img class="top" src="images/14.jpg" alt=""/></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="demo-1 effect">
                                        <li>
                                            <h2>Latest Furnished</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                        </li>

                                        <li><img class="top" src="images/12.jpg" alt=""/></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="demo-1 effect">
                                        <li>
                                            <h2>Latest Furnished</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                                        </li>

                                        <li><img class="top" src="images/17.jpg" alt=""/></li>
                                    </ul>
                                </li>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials">
                        <div class="testimonials-info">
                            <div class="col-md-6 testimonials-text">
                                <h5>The silverware needed polishing and the furniture could use a good dusting.</h5>
                            </div>
                        </div>
                    </div>
                    <link href="{{ URL::asset('css/swipebox.css') }}" rel="stylesheet" type="text/css" media="all" />
                    <script language="JavaScript" src="{{ URL::asset('/') }}js/jquery.swipebox.min.js"></script>
                    <script type="text/javascript">
                    jQuery(function($) {
                    $(".swipebox").swipebox();
                    });
                    </script>
                    <div class="services">
                        <div class="container">
                            <h3>Services</h3>
                            <div class="services-top-info">
                                <div class="port-folio-bottom">
                                    <div id="portfoliolist">
                                        <div class="col-md-3 portfolio-wrapper">
                                            <h4>01/<span>Normal</span></h4>
                                            <a href="images/b-w1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Chaise longue">
                                            <img src="images/w1.jpg" alt="" class="img-responsive"><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03"><img src="images/Dumbbell.png" alt=""></h2>
                                            </div></a>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque laudantium, totam rem aperiam.</p>
                                            <label> </label>
                                            <span><a href="single.html">Read More</a></span>
                                        </div>
                                        <div class="col-md-3 portfolio-wrapper">
                                            <h4>04/<span>Commercial</span></h4>
                                            <a href="images/b-w2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Fauteuil">
                                            <img src="images/w2.jpg" alt="" class="img-responsive"><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03"><img src="images/Dumbbell.png" alt=""></h2>
                                            </div></a>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque laudantium, totam rem aperiam.</p>
                                            <label> </label>
                                            <span><a href="single.html">Read More</a></span>
                                        </div>
                                        <div class="col-md-3 portfolio-wrapper">
                                            <h4>06/<span>Residential</span></h4>
                                            <a href="images/b-w3.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Fainting couch">
                                            <img src="images/w3.jpg" alt="" class="img-responsive"><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03"><img src="images/Dumbbell.png" alt=""></h2>
                                            </div></a>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque laudantium, totam rem aperiam.</p>
                                            <label> </label>
                                            <span><a href="single.html">Read More</a></span>
                                        </div>
                                        <div class="col-md-3 portfolio-wrapper">
                                            <h4>08/<span>Luxury</span></h4>
                                            <a href="images/b-w4.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Mattress Brands">
                                            <img src="images/w4.jpg" alt="" class="img-responsive"><div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03"><img src="images/Dumbbell.png" alt=""></h2>
                                            </div></a>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque laudantium, totam rem aperiam.</p>
                                            <label> </label>
                                            <span><a href="single.html">Read More</a></span>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--footer-starts-->
                    <div class="footer">
                        <div class="container">
                            <div class="footer-main">
                                <div class="col-md-3 footet-left">
                                    <h3>INFORMATION</h3>
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 footet-left">
                                    <h3>CATEGORIES</h3>
                                    <ul>
                                        <li><a href="#">Nam tempus bibendum </a></li>
                                        <li><a href="#">Ut vulputate nibh eget</a></li>
                                        <li><a href="#">In vehicula mattis</a></li>
                                        <li><a href="#">Integer sed sagittis ante</a></li>
                                        <li><a href="#">Ut fringilla et quam nec</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 footet-left">
                                    <h3>MY ACCOUNT</h3>
                                    <ul>
                                        <li><a href="#">My account</a></li>
                                        <li><a href="#">My addresses</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3 footet-left">
                                    <h3>NEWSLETTER</h3>
                                    <div class="sub-text">
                                        <input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}"/>
                                        <input type="submit" value="" >
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="copy-rights">
                                <p>&copy; 2015 Urdaneta City University. All Rights Reserved.</p>
                            </div>
                        </div>
                        <!---->
                        <script type="text/javascript">
                        $(document).ready(function() {
                        /*
                        var defaults = {
                        containerID: 'toTop', // fading element id
                        containerHoverID: 'toTopHover', // fading element hover id
                        scrollSpeed: 1200,
                        easingType: 'linear'
                        };
                        */
                        $().UItoTop({ easingType: 'easeOutQuart' });
                        });
                        </script>
                        <a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
                        <!---->
                    </div>
                    <!--footer-starts-->
                </body>
            </html>