@extends('../layouts.default')
@section('title')
    Home
@stop
@section('content')
<!-- script-for-menu -->
<script>
                            $("span.menu").click(function(){
                                $(".top-nav ul").slideToggle("slow" , function(){
                                });
                            });
</script>
<!-- script-for-menu -->
<script language="JavaScript" src="{{ URL::asset('/') }}js/responsiveslides.min.js"></script>
<script>
                    $(function() {
                        $("#slider3").responsiveSlides({
                            auto: true,
                            pager: false,
                            nav: true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function() {
                                //$('.events').append("<li>before event fired.</li>");
                            },
                            after: function() {
                                //$('.events').append("<li>after event fired.</li>");
                            }
                        });
                    });
</script>
        <div class="banner">
            <div  id="top" class="callbacks_container col-sm-8">
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
            <div class = "col-sm-4 caption">
                <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
            </div>
            <div class="clearfix"> </div>
        </div>


        <div class="news-events">
            <div class="container">
                <section class="component-row"><div class="container"><div class="row outer">
                    <div class="col-sm-4">
                        <div class="block block-thumbnail">
                            <a href="http://news.ucu.edu/2015/" class="thumbnail">
                            <img src="{{ URL::asset('/') }}images/events_1.jpg"  alt="">
                            <div class="caption-news"><h4>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit.</h4></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="block block-thumbnail">
                            <a href="http://news.ucu.edu/2015/" class="thumbnail">
                            <img src="{{ URL::asset('/') }}images/events_1.jpg"  alt="">
                            <div class="caption-news"><h4>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit.</h4></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="block events-list">
                            <h3 class="block-header">Events</h3>
                            <ul class="media-list">
                                <li class="media">
                                    <div class="media-left">
                                        <div class="date">
                                            <span class="month">AUG</span> <span class="day">17</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4><a href="http://events.ucu.edu.ph/?event_ID=90096">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <div class="date">
                                            <span class="month">AUG</span> <span class="day">18</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4><a href="http://events.ucu.edu.ph/?event_ID=90096">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left">
                                        <div class="date">
                                            <span class="month">AUG</span> <span class="day">19</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4><a href="http://events.ucu.edu.ph/?event_ID=90096">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                    </div>
                                </li>
                            </ul>
                            <div class="more-link"><a href="http://events.ucu.edu.ph">More events</a></div>
                        </div>
                    </div>
                    </div><!-- /.row -->
                </div>
            </section>
        </div>
        </div>
        <div class="index-about">
            <div class="container">
                <h3>About</h3>
                <p>Dolor nunc vule putateulr ips dol consec.Donec sem ertet laciniate ultricie upie disse utes comete dolo lectus. fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore condime netus lullam utlacus adipiscing ipsum molestie euismod lore estibulum vel libero ipsum sit
                amet sollicitudin ante. Aenean imperdiet aliquet hendreritunc interdum ullamcorper lec tuset pellentesqu enim interdum atuspendisse malesuada dignissim.</p>
            </div>
        </div>
        <div class="testimonials">
            <div class="testimonials-info">
                <div class="col-md-6 testimonials-text">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque unde quis aperiam natus quam nemo dolorem impedit</h5>
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
    <h3>School Services</h3>
            <div class="services-top-info">
                    <div class="port-folio-bottom">
                        <div id="portfoliolist">
                            <div class="col-md-3 portfolio-wrapper">
                                <h4><span>Library</span></h4>
                                <a href="images/b-w1.jpg" class="b-link-stripe b-animate-go  swipebox">
                                <img src="http://placehold.it/248x249" alt="" class="img-responsive"><div class="b-wrapper">
                                    <h2 class="b-animate b-from-left    b-delay03">
                                    <!-- <img src="images/Dumbbell.png" alt=""> -->
                                    </h2>
                                </div></a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam.</p>
                                <label> </label>
                                <span><a href="single.html">Read More</a></span>
                            </div>
                            <div class="col-md-3 portfolio-wrapper">
                                <h4><span>Canteen</span></h4>
                                <a href="images/b-w2.jpg" class="b-link-stripe b-animate-go  swipebox">
                                <img src="http://placehold.it/248x249" alt="" class="img-responsive"><div class="b-wrapper">
                                    <h2 class="b-animate b-from-left    b-delay03">
                                    <!-- <img src="images/Dumbbell.png" alt=""> -->
                                    </h2>
                                </div></a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam.</p>
                                <label> </label>
                                <span><a href="single.html">Read More</a></span>
                            </div>
                            <div class="col-md-3 portfolio-wrapper">
                                <h4><span>Gym</span></h4>
                                <a href="images/b-w3.jpg" class="b-link-stripe b-animate-go  swipebox">
                                <img src="http://placehold.it/248x249" alt="" class="img-responsive"><div class="b-wrapper">
                                    <h2 class="b-animate b-from-left    b-delay03">
                                    <!-- <img src="images/Dumbbell.png" alt=""> -->
                                    </h2>
                                </div></a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque laudantium, totam rem aperiam.</p>
                                <label> </label>
                                <span><a href="single.html">Read More</a></span>
                            </div>
                            <div class="col-md-3 portfolio-wrapper">
                                <h4><span>Security</span></h4>
                                <a href="images/b-w4.jpg" class="b-link-stripe b-animate-go  swipebox">
                                <img src="http://placehold.it/248x249" alt="" class="img-responsive"><div class="b-wrapper">
                                    <h2 class="b-animate b-from-left    b-delay03">
                                    <!-- <img src="images/Dumbbell.png" alt=""> -->
                                    </h2>
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
@stop