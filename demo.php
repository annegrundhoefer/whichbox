 <?php include('partials/header.php'); ?>  

  <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Request a Demo</h1>
                <span>Get in Touch with Us</span>
            </div>

        </section><!-- #page-title end -->

        <!-- Contact Form & Map Overlay Section
        ============================================= -->
        <section id="map-overlay">

            <div class="container clearfix">

                <!-- Contact Form Overlay
                ============================================= -->
                <div id="contact-form-overlay" class="clearfix">


                    <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

                    <!-- Contact Form
                    ============================================= -->
                    <form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

                        <div class="col_half">
                            <label for="template-contactform-name">Name <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                        </div>

                        <div class="col_half col_last">
                            <label for="template-contactform-email">Email <small>*</small></label>
                            <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                        </div>

                        <div class="clear"></div>

                        <div class="col_half">
                            <label for="template-contactform-phone">Phone</label>
                            <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                        </div>

                        <div class="col_half col_last">
                            <label for="template-contactform-service">Services</label>
                            <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                <option value="">-- Select One --</option>
                                <option value="Wordpress">Wordpress</option>
                                <option value="PHP / MySQL">PHP / MySQL</option>
                                <option value="HTML5 / CSS3">HTML5 / CSS3</option>
                                <option value="Graphic Design">Graphic Design</option>
                            </select>
                        </div>

                        <div class="clear"></div>

                        <div class="col_full">
                            <label for="template-contactform-subject">Subject <small>*</small></label>
                            <input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
                        </div>

                        <div class="col_full">
                            <label for="template-contactform-message">Message <small>*</small></label>
                            <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col_full hidden">
                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                        </div>

                        <div class="col_full">
                            <button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                        </div>

                    </form>

                    <script type="text/javascript">
                        $("#template-contactform").validate({
                            submitHandler: function(form) {
                                $('.form-process').fadeIn();
                                $(form).ajaxSubmit({
                                    target: '#contact-form-result',
                                    success: function() {
                                        $('.form-process').fadeOut();
                                        $('#template-contactform').find('.sm-form-control').val('');
                                        $('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
                                        SEMICOLON.widget.notifications($('#contact-form-result'));
                                    }
                                });
                            }
                        });
                    </script>

                    <div class="line"></div>

                    <!-- Contact Info
                    ============================================= -->
                    <div class="col_one_third nobottommargin">

                        <address>
                            <strong>WhichBox Media</strong><br>
                            211 N. Ervay<br>
                            9th Floor<br>
                            Dallas, Texas 75201 USA<br>
                        </address>
                    </div>
                    <div class="col_one_third nobottommargin">
                        <address>
                            <strong>Mailing Address</strong><br>
                            P.O BOX 4350 Dallas, Texas<br>
                            75208 USA<br>
                    </address>
                        </div>
                    <div class="col_one_third  col_last nobottommargin">
                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> 214.350.6649<br>
                        <abbr title="Fax"><strong>Fax:</strong></abbr> 214.350.6320<br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                        </div>

                 

                    <!-- Testimonails
                    ============================================= -->
                    

                </div><!-- Contact Form Overlay End -->

            </div>

            <!-- Google Map
            ============================================= -->
            <section id="google-map" class="gmap"></section>

            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
            <script type="text/javascript" src="js/jquery.gmap.js"></script>

            <script type="text/javascript">

                $('#google-map').gMap({

                    address: 'Melbourne, Australia',
                    maptype: 'ROADMAP',
                    zoom: 14,
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

            </script><!-- Google Map End -->

        </section><!-- Contact Form & Map Overlay Section End -->

<?php include('partials/footer.php'); ?>
