@extends('../layouts.default')
@section('title')
UCU Seal and Symbols
@stop
@section('content')
<div id="content" role="main">
    <section class="page-header">
        <div class="container"><h1>Seal and Symbols</h1></div>
    </section>
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-sm-8">
                    <article>
                        <h3>The UCU Logo</h3>
                        <img alt="The UCU Logo" src="{{ URL::asset('/') }}images/ucu_seal.png"  class="img-responsive center-block">
                        
                        <p>Composed of an open book and a torch from which sunrays emanate, the University seal is a fitting embodiment of the strength and endurance that the institution has maintained since its inception in 1966 as the first community college in the country.</p>
                        <p>The book's yellow border signifies UCU's pledge to its students of providing transformative education, inculcating in them the golden ideals of character building. This is made manifest in the university's emphasis of valuing hard work, of perfecting one's chosen craft, of continuing one's quest for knowledge and wisdom, and of practicing one's service-orientedness.</p>
                        <p>Encased in this gilded edge, the open book echoes the founder's philosophy of ensuring that high quality education is equitable and accessible to people from all walks of life. The different gradations of blue and red represent the synergistic fusion of the efforts of various individuals—from the non-teaching staff, the faculty, and up to the administrators—who work for the continuous improvement of UCU.</p>
                        <p>The torch with its red flame symbolizes the students of the university who are passionately committed to enhancing and tapping their full potentials—in the academic field, in technical and skills training, and in cultural and social enrichment.</p>
                        <p>This intense zeal is further passed to the sun's golden rays, bursting out of the university's dedication to banish the cobwebs of ignorance through education. UCU believes that like gold which will never be tarnished with rust, quality education is a gift that the school will forever endow to humanity. Hence, the sun's rays move outwards, following the university's desire to reach out, as an institution and through its students, especially in promoting community development, nation-building, and global brotherhood.</p>

                        <h3>The Orata Monument</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro reiciendis qui, sint sequi dolores dolorum sed temporibus provident impedit, natus amet sit, nisi sunt deserunt vero iusto ipsa explicabo! Doloribus!</p>
                        
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