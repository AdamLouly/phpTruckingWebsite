<!DOCTYPE html>
<html>
    

<head>
    <?php include('includes/head.php') ?>
    </head>

    <body>
        
        <div class="header-wrapper header-transparent">
            
            <?php include('includes/header.php') ?>
        </div>

        
       

        <div class="page-content marg-fix">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-heading">
                            <h3>your inquiry</h3>
                        </div>

                        <p>
                        Want to know more? For additional questions/inquiries, please complete the form, and someone at Soly Landline will respond asap. <br/>Thank you for taking the time to explore our website.
                        </p>

                        <br />

                        <div class="custom-heading">
                            <h4>company information</h4>
                        </div>

                        <address>
                            800 Kipling Dr, <br />
                            Allen TX 75002
                        </address>

                        <span class="text-big colored">
                            Phone : 469-656-9301<br/>
                        </span>
                        <span class="text-big colored">
                            Fax : 469-5190-414
                        
                        <br />

                        <a href="mailto:">info@trucking.com</a></span>
                    </div>

                    <div class="col-md-6 clearfix">
                        
                        <form class="wpcf7"  method="POST" action="submit.php">
                            <fieldset>
                                <label>
                                    <span class="required">*</span> Your request:
                                </label>

                                <select class="wpcf7-form-control-wrap wpcf7-select" name="contact-inquiry" id="contact-inquiry">
                                    <option value="I need an offer for contract logistics">I need an offer for contract logistics</option>
                                    <option value="I need an offer for air freight">I need an offer for air freight</option>
                                    <option value="I want to become your partner">I want to become your partner</option>
                                    <option value="I have some other request">I have some other request</option>
                                </select>
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> First Name:
                                </label>

                                <input type="text" class="wpcf7-text" name="contact-name" id="contact-name">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Last Name:
                                </label>

                                <input type="text" class="wpcf7-text" name="contact-last-name" id="contact-last-name">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Email:
                                </label>

                                <input type="email" class="wpcf7-text" name="contact-email" id="contact-email">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Message:
                                </label>

                                <textarea rows="8" class="wpcf7-textarea" name="contact-message" id="contact-message"></textarea>
                            </fieldset>

                            <input type="submit" class="wpcf7-submit" value="send" />
                        </form>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="page-title-map page-title-negative-top" style="padding-top:0px;">
            
            <div class="container-fluid">
                <div class="row marg-rst">
                    <div id="map"></div>
                </div>          
            </div>
        </div>




        <?php include('includes/footer.php') ?>

        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.srcipts.min.js"></script>  
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&key=AIzaSyBuKfXk6ELMscpaXC_YT3nLXVjl7eNuzrI"></script> 
        <script src="js/jquery.ui.map.full.min.js"></script>
        <script src="js/jquery.dlmenu.min.js"></script>
        <script src="style-switcher/styleSwitcher.js"></script>
        <script src="js/include.js"></script>

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                // GOOGLE MAPS START
                var locations = [
                    ['London Trucking Headquarters', 51.50013, -0, 126305, 4],
                    ['Trucking Headquarters Paris', 48.8566667, 2.3509871, 5],
                    ['Trucking Warehouse, Oslo', 59.9138204, 10.7387413, 3],
                    ['Trucking Vehicle Fleet, Rome', 41.8954656, 12.4823243, 2],
                    ['Trucking Support Center, Madrid', 40.4166909, -3.7003454, 1],
                    ['Trucking airport, Moscow', 55.755786, 37.617633, 6],
                    ['Trucking Warehouse, Prague', 50.0878114, 14.4204598, 7],
                    ['Trucking Warehouse, Quebec', 52.9399159, -73.5491361, 8],
                    ['Trucking Headquarters, Ontario', 51.590723, -86.396484, 9],
                    ['Trucking Vehicle Fleet, Montana', 46.860191, -109.599609, 10],
                    ['Trucking Support Center, Alberta', 56.46249, -114.960937, 11],
                    ['Trucking Vehicle Fleet, Yukon', 63.332413, -136.098633, 12],
                    ['Trucking Headquarters Minesota', 46.729553, -94.6858998, 13],
                    ['Trucking Headquarters Virginia Beach', 36.8529263, -75.977985, 14],
                    ['Trucking Headquarters Chicago', 41.850033, -87.6500523, 15],
                    ['Trucking Headquarters Athens', 37.926868, 23.730469, 16],
                    ['Trucking Headquarters New Delhi', 28.574874, 77.299805, 17]
                ];


                var style = [
                    {"featureType": "road",
                        "elementType":
                                "labels.icon",
                        "stylers": [
                            {"saturation": 1},
                            {"gamma": 1},
                            {"visibility": "on"},
                            {"hue": "#e6ff00"}
                        ]
                    },
                    {"elementType": "geometry", "stylers": [
                            {"saturation": -85}
                        ]
                    }
                ];

                var map = new google.maps.Map(document.getElementById('map'), {
                    // SET THE CENTER
                    center: new google.maps.LatLng(50.0878114, 14.4204598),
                    // SET THE MAP STYLE & ZOOM LEVEL
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    zoom: 3,
                    // SET THE BACKGROUND COLOUR
                    backgroundColor: "#eeeeee",
                    // REMOVE ALL THE CONTROLS EXCEPT ZOOM
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true,
                    scrollwheel: false,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.SMALL
                    }
                });

                var mapType = new google.maps.StyledMapType(style, {name: "Grayscale"});
                map.mapTypes.set('grey', mapType);
                map.setMapTypeId('grey');

                var infowindow = new google.maps.InfoWindow();

                //CREATE A CUSTOM PIN ICON
                var marker_image = 'img/pin.png';
                var pinIcon = new google.maps.MarkerImage(marker_image, null, null, null, new google.maps.Size(21, 34));

                var marker, i;

                for (i = 0; i < locations.length; i++) {
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                        map: map,
                        icon: pinIcon
                    });

                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            infowindow.setContent(locations[i][0]);
                            infowindow.open(map, marker);
                        };
                    })(marker, i));
                }
                ;


            });
            /* ]]> */
        </script>
    </body>
</html>
