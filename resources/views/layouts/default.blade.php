<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') | Urdaneta City University</title>
        <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('css/yamm.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('css/font.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('css/timeline.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/favicon.ico') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
                <script language="JavaScript" src="{{ URL::asset('/') }}js/jquery.min.js"></script>
                <script language="JavaScript" src="{{ URL::asset('/') }}js/bootstrap.js"></script>
                <script language="JavaScript" src="{{ URL::asset('/') }}js/modernizr.js"></script>
                <script language="JavaScript" src="{{ URL::asset('/') }}js/easing.js"></script>
                <script language="JavaScript" src="{{ URL::asset('/') }}js/move-top.js"></script>
                <script language="JavaScript" src="{{ URL::asset('/') }}js/main.js"></script>
                <script type="text/javascript">
                        jQuery(document).ready(function($) {
                            $(".scroll").click(function(event) {
                                event.preventDefault();
                                $('html,body').animate({
                                    scrollTop: $(this.hash).offset().top
                                }, 900);
                            });
                        });
                </script>
            </head>
            <body>
                <!-- <nav class="navbar yamm navbar-default navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <div>
                                <a href="#" class = "pull-left"><img class="img-responsive" src="{{ URL::asset('/') }}images/ucu_logo.png" alt="UCU Logo" title="A University where character is utmost"></a>
                            </div>
                             <button class="menu-button navbar-toggle" id="menuButton" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="burger-icon"></span>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="{{ Config::get('app.url')  }}/#">Home</a>
                                </li>

                                
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                    </nav> -->
                    <header id="site-header" class="light">
                            <div class="navbar navbar-default navbar-static-top yamm">
                                <div class="container">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <h1>
                                        <a href="{{ Config::get('app.url')  }}" class="navbar-brand" title="UCU" rel="home">
                                        <span class="navbar-brand-blue"><img alt="UCU" src="{{ URL::asset('/') }}images/ucu_logo.png"></span>
                                        <span class="navbar-brand-white"><img alt="UCU" src="{{ URL::asset('/') }}images/ucu_logo_white_text.png"></span>
                                        </a>
                                        </h1>
                             <button class="menu-button navbar-toggle" id="menuButton" data-toggle="collapse" data-target="#main-nav">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="burger-icon"></span>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="main-nav">
                                        <nav id="primary-nav" role="navigation">
                                            <ul class="nav navbar-nav">
                                                    <li>
                                                        <a href="{{ Config::get('app.url')  }}" data-toggle="dropdown" class="dropdown-toggle">Home</a>
                                                    </li>
                                                    <li class="dropdown yamm-fw">
                                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About <b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                           <li>
                                                                <div class="yamm-content">
                                                                    <div class="row">
                                                                        <div class="col-sm-7">
                                                                            <div class="caption hidden-xs">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <img src="http://placehold.it/249x166" alt="">
                                                                                    </div>
                                                                                    <div class="col-sm-6"><div class="description"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vel, sit eligendi. Consectetur enim accusamus dolores architecto sed itaque illum laudantium, aspernatur a iste temporibus, aliquid dicta amet, consequatur praesentium!</p></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="subnav">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6"><ul class="list-unstyled">
                                                                                        <li><a href="{{ Config::get('app.url')  }}/about/history" class="">History</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/about/vmgo" class="">Vision &amp; Mission</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/about/administration" class="">Administration</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/about/hymn" class="">University Hymn</a></li>
                                                                                    </ul></div>
                                                                                    <div class="col-sm-6"><ul class="list-unstyled">
                                                                                        <li><a href="{{ Config::get('app.url')  }}/about/highlights" class="">UCU Highlights</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/about/maps" class="">Campus Map</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/about/seal" class="">UCU Seal & Symbols</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/about/contact-us" class="">Contact Us</a></li>
                                                                                    </ul></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                           </li>
                                                         </ul>
                                                    </li>
                                                    <li class="dropdown yamm-fw">
                                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admissions <b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                           <li>
                                                                <div class="yamm-content">
                                                                    <div class="row">
                                                                        <div class="col-sm-7">
                                                                            <div class="caption hidden-xs">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <img src="http://placehold.it/249x166" alt="">
                                                                                    </div>
                                                                                    <div class="col-sm-6"><div class="description"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vel, sit eligendi. Consectetur enim accusamus dolores architecto sed itaque illum laudantium, aspernatur a iste temporibus, aliquid dicta amet, consequatur praesentium!</p></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="subnav">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6"><ul class="list-unstyled">
                                                                                        <li><a href="{{ Config::get('app.url')  }}/admission/application-procedures" aria-describedby="campus-life" class="">Application and Enrolment Procedures</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/admission/scholarships" class="">Scholarship Grants</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/admission/graduates" class="">Graduate</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/admission/undergraduates" class="">Undergraduate</a></li>
                                                                                    </ul></div>
                                                                                    <div class="col-sm-6"><ul class="list-unstyled">
                                                                                        <li><a href="{{ Config::get('app.url')  }}/admission/law" class="">Law</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/admission/entrance-examination" class="">Entrance Examination</a></li>
                                                                                    </ul></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                           </li>
                                                         </ul>
                                                    </li>
                                                    <li class="dropdown yamm-fw">
                                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Academics <b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                           <li>
                                                                <div class="yamm-content">
                                                                    <div class="row">
                                                                        <div class="col-sm-7">
                                                                            <div class="caption hidden-xs">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <img src="http://placehold.it/249x166" alt="">
                                                                                    </div>
                                                                                    <div class="col-sm-6"><div class="description"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vel, sit eligendi. Consectetur enim accusamus dolores architecto sed itaque illum laudantium, aspernatur a iste temporibus, aliquid dicta amet, consequatur praesentium!</p></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="subnav">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6"><ul class="list-unstyled">
                                                                                        <li><a href="{{ Config::get('app.url')  }}/academics/graduate-school" aria-describedby="campus-life" class="">Graduate School</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/academics/colleges" class="">Colleges</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/academics/cpd" class="">Center for Continuing and Professional Development</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/academics/research-extensions" class="">Research &amp; Extensions</a></li>
                                                                                    </ul></div>
                                                                                    <div class="col-sm-6"><ul class="list-unstyled">
                                                                                        <li><a href="{{ Config::get('app.url')  }}/academics/student-portal" class="">UCU Student Portal</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/academics/faculty-profile" class="">Faculty Profile</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/academics/academic-calendar" class="">Academic Calendar</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/academics/opac" class="">UCU OPAC</a></li>
                                                                                    </ul></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                           </li>
                                                         </ul>
                                                    </li>
                                                    <li class="dropdown yamm-fw">
                                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Campus Life <b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                           <li>
                                                                <div class="yamm-content">
                                                                    <div class="row">
                                                                        <div class="col-sm-7">
                                                                            <div class="caption hidden-xs">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6">
                                                                                        <img src="http://placehold.it/249x166" alt="">
                                                                                    </div>
                                                                                    <div class="col-sm-6"><div class="description"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima vel, sit eligendi. Consectetur enim accusamus dolores architecto sed itaque illum laudantium, aspernatur a iste temporibus, aliquid dicta amet, consequatur praesentium!</p></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-5">
                                                                            <div class="subnav">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6"><ul class="list-unstyled">
                                                                                        <li><a href="{{ Config::get('app.url')  }}/campus-life/student-development" aria-describedby="campus-life" class="">Student Development</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/campus-life/guidance-counseling" class="">Guidance and Counseling</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/campus-life/student-organizations" class="">Student Organizations</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/campus-life/library" class="">Library</a></li>
                                                                                    </ul></div>
                                                                                    <div class="col-sm-6"><ul class="list-unstyled">
                                                                                        <li><a href="{{ Config::get('app.url')  }}/campus-life/arts-culture" class="">Arts &amp; Culture</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/campus-life/civic-welfare" class="">Civil Welfare</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/campus-life/athletics" class="">Athletics</a></li>
                                                                                        <li><a href="{{ Config::get('app.url')  }}/campus-life/publications" class="">Publications</a></li>
                                                                                    </ul></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                           </li>
                                                         </ul>
                                                    </li>

                                            </ul>
                                            </nav><!-- /.primary-nav -->
                                            <div id="audience-nav">
                                                <div class="">
                                                    <h3 class="visible-xs">More</h3>
                                                    <ul class="nav navbar-nav">
                                                        <li><a href="#">Students</a></li>
                                                        <li><a href="#">Faculty &amp; Staff</a></li>
                                                        <li><a href="http://alumni.ucu.edu/">Alumni</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            </div><!-- /.navbar-collapse -->
                                            </div><!-- /.container -->
                                        </div>
                                    </header>
                @yield('content')
            </body>
            <div class="footer">
                <div class="container">
                        <div class="row">
                            <div class="col-sm-6 cold-md-6">
                                                <div class = "block">
                                                    <a href="/" class = "pull-left"><img class="img-responsive" src="{{ URL::asset('/') }}images/ucu_logo_white_text.png" alt=""></a>
                                                </div>
                                                <div class="block social" role="complementary">
                                                    <ul class="nav nav-pills" style="display: inline-block;">
                                                          <li><a href="http://www.facebook.com/UrdanetaCityUniversityPage" target="_blank" class="ficon-facebook" title="Facebook"><span class="icon-facebook"></span><span class="screen-reader">Facebook</span></a></li>
                                                          <li><a href="https://twitter.com/UCUOfficial" target="_blank" class="ficon-twitter" title="Twitter"><span class="icon-twitter"></span><span class="screen-reader">Twitter</span></a></li>
                                                          <li><a href="http://www.youtube.com/user/UrdanetaCityUniversityPage" target="_blank" class="ficon-youtube" title="Youtube"><span class="icon-youtube"></span><span class="screen-reader">YouTube</span></a></li>
                                                          <li><a href="https://instagram.com/ucuofficial/" target="_blank" class="ficon-rss" title="Instagram"><span class="icon-instagram"></span></span><span class="screen-reader">Instagram</span></a></li>
                                                    </ul>
                                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                        <div class="row">
                        <div class="col-sm-12">
                            <ul class="nav nav-pills nav-primary">
                                <li><a href="/visit">Visit</a></li>
                                <li><a href="/careers">Careers</a></li>
                                <li><a href="http://news.ucu.edu.ph/">UCU News</a></li>
                                <li><a href="http://scribe.ucu.edu.ph/">UCU Scribe</a></li>
                            </ul>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-6">
                            <ul class="nav">
                            <li><a href="administration">Administration</a></li>
                            <li><a href="/highlights">UCU Highlights</a></li>               
                            <li><a href="/activities">Calendar of Activities</a></li>
                            <li><a href="/accreditation">Accreditation</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="nav">
                            <li><a href="{{ Config::get('app.url') }}/contact">Websites A-Z</a></li>
                            <li><a href="{{ Config::get('app.url') }}/directory">Directory</a></li>
                            <li><a href="{{ Config::get('app.url') }}/maps">Campus Map</a></li>
                            <li><a href="{{ Config::get('app.url') }}/contact-us">Contact us</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                        </div>
                        <div class="clearfix"> </div>
                    <div class="copy-rights">
                        <p>&copy; 2016 Urdaneta City University. All Rights Reserved.</p>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $().UItoTop({ easingType: 'easeOutQuart' });
                    });
                </script>

                <script>
                var menuButton = document.getElementById('menuButton');
                menuButton.addEventListener('click', function (e) {
                    menuButton.classList.toggle('is-active');
                    e.preventDefault();
                });
                </script>
                <div class = "scrollToTop">
                    <a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
                </div>
            </div>
        </html>