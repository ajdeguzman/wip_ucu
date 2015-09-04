@extends('../layouts.default')
@section('title')
Campus Map
@stop
@section('content')
<div id="content" role="main">
    <section class="page-header">
        <div class="container"><h1>Campus Map</h1></div>
    </section>
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-sm-8">
                   <article>
                    <h3>Main Campus</h3>
                    <div class="pancontainer" data-orient="center" data-canzoom="yes" style="position: relative; overflow: hidden; cursor: move;">
                        <img alt="Main Campus" src="{{ URL::asset('/') }}images/ucu_map.png" class="image-responsive">
                    <div style="position: absolute; color: white; padding: 2px 10px; font-size: 12px; left: 0px; top: 0px; display: none; visibility: visible; background: rgb(53, 53, 53);">1x Magnify</div><img src="/resources/js/images/zoomin.png" title="Zoom In" style="width: 64px; height: 64px; cursor: pointer; position: absolute; top: 5px; right: 61px; opacity: 1;"><img src="/resources/js/images/zoomout.png" title="Zoom Out" style="width: 64px; height: 64px; cursor: pointer; position: absolute; top: 5px; right: 0px; opacity: 0.1;"></div>
<!-- 
                     <h3>Vicinity Map</h3>
                       <iframe width="100%" height="480px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Polytechnic+University+of+The+Philippines,+Manila,+Metro+Manila,+Philippines&amp;aq=0&amp;oq=polytechnic+university+of+the+philippines+&amp;sll=14.599319,121.011364&amp;sspn=0.007673,0.009828&amp;ie=UTF8&amp;hq=Polytechnic+University+of+The+Philippines,+Manila,+Metro+Manila,+Philippines&amp;ll=14.599324,121.011368&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe><br><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Polytechnic+University+of+The+Philippines,+Manila,+Metro+Manila,+Philippines&amp;aq=0&amp;oq=polytechnic+university+of+the+philippines+&amp;sll=14.599319,121.011364&amp;sspn=0.007673,0.009828&amp;ie=UTF8&amp;hq=Polytechnic+University+of+The+Philippines,+Manila,+Metro+Manila,+Philippines&amp;ll=14.599324,121.011368&amp;spn=0.006295,0.006295&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small> -->
                    </article>
                </div>
                <div class="col-sm-4">
                        <div id="sidebar">
                            <!-- Sidebar -->
                            <section>
                                <h2>Contents</h2>
                                <ul class="sidebar-list">
                                    <li><a href="history">History</a></li>
                                    <li><a href="vmgo">Vision and Mission</a></li>
                                    <li><a href="administration">Administration</a></li>
                                    <li><a href="hymn">UCU Hymn</a></li>
                                    <li><a href="highlights">UCU Highlights</a></li>
                                    <li><a href="maps">Campus Map</a></li>
                                    <li><a href="seal">UCU Seal and Symbols</a></li>
                                    <li><a href="contact-us">Contact Us</a></li>
                                </ul>
                            </section>
                        </div>
            </div>
        </div>
    </div>
</div>
@stop