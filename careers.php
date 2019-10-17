<!DOCTYPE html>
<html>

<head>
<?php include('includes/head.php') ?>
    </head>

    <body>        
        <div class="header-wrapper header-transparent">
            <!-- .header.header-style01 start -->
            <?php include('includes/header.php') ?>
        </div><!-- .header-wrapper.header-transparent end -->

        <!-- .page-title start -->
        <div class="page-title-style01 page-title-negative-top pt-bkg16">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Trucking - Careers</h1>

                        <div class="breadcrumb-container">
                            <ul class="breadcrumb clearfix">
                                <li>You are here:</li>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="about03.html">About</a>
                                </li>

                                <li>
                                    <a href="#">Careers</a>
                                </li>
                            </ul><!-- .breadcrumb end -->
                        </div><!-- .breadcrumb-container end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-title-style01.page-title-negative-top end -->


        <div class="page-content">
            <div class="container">
                <div class="row">

                    <div style="margin:0 auto;" class="col-md-12">                        
                        <div class="custom-heading">
                            <h2>Pick a Career with us</h2>
                        </div>
                        <p>
                        Looking to work with a trucking company that’s constantly working towards higher achievements? If so, we’re the trucking company for you. We’re not just looking for any CDL licensed driver; we’re wanting a truck driver who’s driven! We offer great opportunities for those who feel they’re fit for the job.
                        </p>

                        <br />

                        <div class="custom-heading">
                            <h3>Job openings</h3>
                        </div><!-- .custom-heading end -->
                        <a class="btn btn-big btn-yellow btn-centered" style="margin:1px;" id="showrequire" href="#">
                                    <span>
                                        Show requirements
                                    </span>
                                </a><br/>
                                <div id="requirediv" style="height: 0px; padding: 0px; box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px, rgba(0, 0, 0, 0) 0px 10px 10px;"><strong>
                                <ul id="requirelist" style="display: none;">
                                    <li class="indent"> Social Security Number</li>
                                    <li class="indent"> Home address history for the past 3 years</li>
                                    <li class="indent"> Current driver license number and driver license history for the past 3 years</li>
                                    <li class="indent"> Employment history up to 10 years</li>
                                    <li class="indent"> History of traffic accidents, violations and/or convictions from the last 3 years (including DUI or reckless driving conviction and license suspension)</li>
                                    <li class="indent"> Criminal history</li>
                                    <li class="indent"> Military history (if applicable)</li>
                                    <li class="indent"> Focused on SAFETY</li>
                                    <li class="indent"> Committed to Protecting Others</li>
                                    <li class="indent"> Detailed Oriented</li>
                                    <li class="indent"> Communicates Well with Management</li>
                                    <li class="indent"> Motivated &amp; a Self-Starter</li>
                                    <li class="indent"> We offer great pay</li>
                                    <li class="indent"> 25 years or older</li>
                                    <li class="indent"> Speaks English well</li>
                                    <li class="indent"> Must test negative to controlled substances</li>
                                    <li style="list-style: none;"><a class="btn btn-big btn-yellow btn-centered" href="application/">
                                        <span>
                                        Click here to get Started
                                        </span>
                                    </a></li>
                                </ul>
                            </strong></div>
                            </div><!-- .content end -->
                        </div><!-- .accordion.careers end -->
                    </div><!-- .col-md-9 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->       
        <div style="height:135px;"></div>
        <?php include('includes/footer.php') ?>

        <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  
        <script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
        <script src="style-switcher/styleSwitcher.js"></script><!-- styleswitcher script -->
        <script src="js/include.js"></script><!-- custom js functions -->
        <script>

            var showed = false;
        jQuery('#employ').addClass('icemega_active');
        jQuery(document).ready(function() {
            jQuery( "#showrequire" ).click(function() {
                if(!showed){

                    jQuery("#requirediv").animate({height: 600, padding: 20}, 500, function(){
                        jQuery("#requirediv").css({boxShadow: "0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22)", height: "auto"})
                        jQuery("#requirelist").fadeIn()
                        jQuery("#showrequire").html('Hide requirements')
                        showed = true;
                    });

                }
                else{
                    jQuery("#requirelist").fadeOut()
                    jQuery("#requirediv").animate({height: 0, padding: 0}, 500, function(){
                        jQuery("#requirediv").css({boxShadow: "0 0px 0px rgba(0,0,0,0.0), 0 10px 10px rgba(0,0,0,0.0)", height: "0"})
                        jQuery("#showrequire").html('Show requirements')
                        showed = false;
                    });
                }
            });
            jQuery( "#uploadshow" ).click(function() {
                jQuery("#uploadform").fadeIn();
            });
    });
        </script>
    </body>

<!-- Mirrored from pixel-industry.com/html/trucking/careers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Dec 2017 14:15:46 GMT -->
</html>
