 <!-- Footer
        ============================================= -->
        <a class="button button-full center tright footer-stick">
            <div class="content-wrap"
                <div class="container clearfix">
                        Canvas comes with Unlimited Customizations &amp; Options. <strong>Check Out</strong> <i class="icon-caret-right" style="top:4px;"></i>
                </div>
            </div>
        </a>



        <footer id="footer" class="dark">

            <div class="container">


                <!-- Footer Widgets
                ============================================= -->
                <div class="footer-widgets-wrap clearfix">

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <img src="images/footer-widget-logo.png" alt="" class="footer-logo">

                            <p>Brands can now use whichbox® to easily build interactive community storytelling destinations.</p>

                        </div>
                        <div class="widget clearfix">

                            <a href="#" class="social-icon si-small si-rounded si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-rounded si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-rounded si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-rounded si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-rounded si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>

                        </div>

                    </div>

                    <div class="col_one_third">

                        <div class="widget clearfix">
                          <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                            <h4>GET IN TOUCH</h4>
                              <address>
                            <strong>WhichBox Media</strong><br>
                            211 N. Ervay<br>
                            9th Floor<br>
                            Dallas, Texas 75201 USA<br>
                        </address>
                        <address>
                            <strong>Mailing Address</strong><br>
                            P.O BOX 4350 Dallas, Texas<br>
                            75208 USA<br>
                        </address>
                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> 214.350.6649<br>
                        <abbr title="Fax"><strong>Fax:</strong></abbr> 214.350.6320<br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="widget quick-contact-widget clearfix">

                            <h4>Send Message</h4>

                            <div id="quick-contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

                            <form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">

                                <div class="form-process"></div>

                                <div class="input-group divcenter">
                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                    <input type="text" class="required form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                                </div>
                                <div class="input-group divcenter">
                                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                                    <input type="text" class="required form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                                </div>
                                <textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                                <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                                <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-danger nomargin" value="submit">Send Email</button>

                            </form>

                            <script type="text/javascript">

                                $("#quick-contact-form").validate({
                                    submitHandler: function(form) {
                                        $(form).animate({ opacity: 0.4 });
                                        $(form).find('.form-process').fadeIn();
                                        $(form).ajaxSubmit({
                                            target: '#quick-contact-form-result',
                                            success: function() {
                                                $(form).animate({ opacity: 1 });
                                                $(form).find('.form-process').fadeOut();
                                                $(form).find('.form-control').val('');
                                                $('#quick-contact-form-result').attr('data-notify-msg', $('#quick-contact-form-result').html()).html('');
                                                SEMICOLON.widget.notifications($('#quick-contact-form-result'));
                                            }
                                        });
                                    }
                                });

                            </script>

                        </div>

                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half">
                        Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.
                    </div>

                    <div class="col_half col_last tright">
                        <div class="fright clearfix">
                            <div class="copyrights-menu copyright-links nobottommargin">
                                <a href="#">Home</a>/<a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>

</body>
</html>