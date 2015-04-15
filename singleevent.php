<?php include('partials/header.php'); ?>


 <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Ibiza: Full Moon Beach Party</h1>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="postcontent nobottommargin clearfix">

                        <div class="single-event">

                            <div class="col_three_fourth">
                                <div class="entry-image nobottommargin">
                                    <a href="#"><img src="images/events/2.jpg" alt="Event Single"></a>
                                </div>
                            </div>
                            <div class="col_one_fourth col_last">
                                <div class="panel panel-default events-meta">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Event Info:</h3>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="iconlist nobottommargin">
                                            <li><i class="icon-calendar3"></i> 31st March, 2015</li>
                                            <li><i class="icon-time"></i> 20:00 - 02:00</li>
                                            <li><i class="icon-map-marker2"></i> Ibiza, Spain</li>
                                            <li><i class="icon-dollar"></i> <strong>99.99</strong></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-success btn-block btn-lg">Buy Tickets</a>
                                <a href="#" class="btn btn-success btn-block btn-lg">Add to Calendar</a>
                            </div>

                            <div class="clear"></div>

                            <div class="col_three_fourth">

                                <h3>Details</h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, voluptatum, amet, eius esse sit praesentium similique tenetur accusamus deserunt modi dignissimos debitis consequatur facere unde sint quasi quae architecto eum!</p>

                                <p>Obcaecati dolores perspiciatis eveniet adipisci repellendus consequatur ab officiis ipsa laudantium! Provident expedita odio iste corporis nam natus illum. Cupiditate, quis libero distinctio reiciendis quos adipisci eius animi.</p>
                                
                                <ul class="iconlist">
                                            <li><i class="icon-tag"></i> Enter Code FREETICKETS for 10% off!</li>
                                            <li><i class="icon-link"></i>www.mywebsite.com</li>
                                            <li><i class="icon-call"></i> 214.123.1234</li>
                                            
                                        </ul>

                                <h4>Location</h4>


                                <section id="event-location" class="gmap" style="height: 300px;"></section>

                                <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                                <script type="text/javascript" src="js/jquery.gmap.js"></script>
                                
                                <script type="text/javascript">

                                    jQuery('#event-location').gMap({
                                        
                                        address: 'Ibiza, Spain',
                                        maptype: 'ROADMAP',
                                        zoom: 15,
                                        markers: [
                                            {
                                                address: "Ibiza, Spain"
                                            }
                                        ],
                                        doubleclickzoom: false,
                                        controls: {
                                            panControl: true,
                                            zoomControl: true,
                                            mapTypeControl: true,
                                            scaleControl: false,
                                            streetViewControl: false,
                                            overviewMapControl: false
                                        }
                                    
                                    });
                                
                                </script>

                            </div>

                            <div class="clear"></div>

                 

                        </div>

                    </div>

                    <div class="sidebar nobottommargin col_last clearfix">
                        <div class="sidebar-widgets-wrap">
                            
                            <div class="widget clearfix">

                                <h4>Upcoming Events</h4>
                                <div id="post-list-footer">

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img src="images/events/thumbs/1.jpg" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img src="images/events/thumbs/2.jpg" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#" class="nobg"><img src="images/events/thumbs/3.jpg" alt=""></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>10th July 2014</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="widget clearfix">

                                <h4>Events</h4>
                                <div id="oc-portfolio-sidebar" class="owl-carousel portfolio-5">

                                    <div class="oc-item">
                                        <div class="iportfolio">
                                            <div class="portfolio-image">
                                                <a href="#">
                                                    <img src="images/events/thumbs/3.jpg" alt="Mac Sunglasses">
                                                </a>
                                                <div class="portfolio-overlay">
                                                    <a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc center nobottompadding">
                                                <h3><a href="portfolio-single-video.html">Inventore voluptates velit totam ipsa tenetur</a></h3>
                                                <span><a href="#">Melbourne, Australia</a></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="oc-item">
                                        <div class="iportfolio">
                                            <div class="portfolio-image">
                                                <a href="portfolio-single.html">
                                                    <img src="images/events/thumbs/1.jpg" alt="Open Imagination">
                                                </a>
                                                <div class="portfolio-overlay">
                                                    <a href="images/portfolio/full/1.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="portfolio-desc center nobottompadding">
                                                <h3><a href="portfolio-single.html">Nisi officia adipisci molestiae aliquam</a></h3>
                                                <span><a href="#">Perth, Australia</a></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <script type="text/javascript">

                                    jQuery(document).ready(function($) {

                                        var ocClients = $("#oc-portfolio-sidebar");

                                        ocClients.owlCarousel({
                                            items: 1,
                                            margin: 10,
                                            loop: true,
                                            nav: false,
                                            autoplay: true,
                                            dots: true,
                                            autoplayHoverPause: true
                                        });

                                    });

                                </script>

                           

                            

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- #content end -->

<?php include('partials/footer.php'); ?>