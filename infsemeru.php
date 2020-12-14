<?php  
include 'koneksi.php';
$id = $_GET['gunung'];
$query = mysqli_query($db,"SELECT * FROM gunungjatim where idgng = ".$id);
$row = mysqli_fetch_array($query);
$root = str_replace(' ', '_', $row['Namagng']);
?>
<!DOCTYPE HTML>
<html lang="en">
    
<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from townhub.kwst.net/listing-single.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 23 Feb 2020 01:33:43 GMT -->
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
        <!-- main start  -->
        <div id="main">
            <!-- header -->
                       <header class="main-header">
                          <div class="nav-button-wrap color-bg">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!--  navigation --> 
                <div class="nav-holder main-menu">
                    <nav>
                        <ul class="no-list-style">
                            <li>
                                <a href="index.php" class="act-link">Halaman Utama</i></a> 
                            </li>
                            <li>
                                <a href="#sec2">Informasi</a>
                            </li>
                            <li>
                                <a href="#sec3">Foto</a>
                            </li>
                            <li>
                                <a href="#sec4">Lokasi</a>
                            </li>

                        </ul>
                    </nav>
                </div>
               
                <!--  navigation --> 
               
                <!-- header-search_container -->                     
                <div class="header-search_container header-search vis-search">
                    <div class="container small-container">
                        <div class="header-search-input-wrap fl-wrap">
                            <!-- header-search-input --> 
                            
                            <!-- header-search-input end -->                                        
                         
                <!-- wishlist-wrap--> 
                
                    <!-- header-modal-container end--> 
                    <div class="header-modal-top fl-wrap">
                        <h4>Your Wishlist : <span><strong></strong> Locations</span></h4>
                        <div class="close-header-modal"><i class="far fa-times"></i></div>
                    </div>
                </div>
                <!--wishlist-wrap end --> 
            </header>
            <!-- header end-->
            <!-- wrapper-->
            <div id="wrapper">
 <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/gun.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <div class="container small-container">
                            <div class="intro-item fl-wrap">
                                <div class="bubbles">
                                <h1><span><?=$row['Namagng'];?></span></h1>
                                 <h3><span><?=$row['tggigng'];?></span></h3>
                                <span class="section-separator"></span>
                         </div>
                               
                                </ul>
                            </div>
                        </div>
                        
                        </div>
                    </section>
                <!--wishlist-wrap end --> 
            </header>
            <!-- header end-->
           
                    
                                    <!-- list-single-main-wrapper -->
                                    
                                        <div class="list-single-main-item fl-wrap block_box" id="sec2">
                                            <div class="list-single-main-item-title">
                                                <h3><i class="fal fa-info"></i>  Informasi</a></li></h3>
                                            </div>
                                            <div class="list-single-main-item_content fl-wrap">
                                                <p><?=$row['infogng'];?></p>
                                                <a href="semuagng.php" class="btn color2-bg    float-btn">Gunung Jawa Timur<i class="fal fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end -->                                               
                                                                            
                                        <!-- list-single-main-item-->   
                                        <div class="list-single-main-item fl-wrap block_box" id="sec3">
                                            <div class="list-single-main-item-title">
                                                <h3><i class="fal fa-image"></i> Gallery</a></h3>
                                            </div>
                                            <div class="list-single-main-item_content fl-wrap">
                                                <div class="single-carousel-wrap fl-wrap lightgallery">
                                                    <div class="sc-next sc-btn color2-bg"><i class="fas fa-caret-right"></i></div>
                                                    <div class="sc-prev sc-btn color2-bg"><i class="fas fa-caret-left"></i></div>
                                                    <div class="single-carousel fl-wrap full-height">
                                                        <div class="swiper-container">
                                                            <div class="swiper-wrapper">
                                                                <!-- swiper-slide-->   
                                                                <div class="swiper-slide">
                                                                    <div class="box-item">
                                                                        <img  src="gng/<?=$root;?>/1.jpg"   alt="">
                                                                        <a href="gng/<?=$root;?>/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                                    </div>
                                                                </div>
                                                                <!-- swiper-slide end-->   
                                                                <!-- swiper-slide-->   
                                                                <div class="swiper-slide">
                                                                    <div class="box-item">
                                                                        <img  src="gng/<?=$root;?>/2.jpg"   alt="">
                                                                        <a href="gng/<?=$root;?>/2.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                                    </div>
                                                                </div>
                                                                <!-- swiper-slide end-->                                                                  
                                                                <!-- swiper-slide-->   
                                                                <div class="swiper-slide">
                                                                    <div class="box-item">
                                                                        <img  src="gng/<?=$root;?>/3.jpg"   alt="">
                                                                        <a href="gng/<?=$root;?>/3.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                                    </div>
                                                                </div>
                                                                <!-- swiper-slide end-->                                                                 
                                                                <!-- swiper-slide-->   
                                                                <div class="swiper-slide">
                                                                    <div class="box-item">
                                                                        <img  src="gng/<?=$root;?>/4.jpg"   alt="">
                                                                        <a href="gng/<?=$root;?>/4.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                                                    </div>
                                                                </div>
                                                                <!-- swiper-slide end-->                                                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end -->          
                                        
                                        <!-- list-single-facts end -->       
                                        <!-- list-single-main-item-->   
                                        <div class="list-single-main-item fl-wrap block_box" id="sec4">
                                            <div class="list-single-main-item-title">
                                                <h3><i class="fas fa-map-marker-alt"></i> Lokasi</a></h3>
                                            </div>

                                            <div class="list-single-main-item_content fl-wrap">
                                                <!-- <div id="googleMap"></div> -->

                                                <div class="map-container  fw-map big_map">
                        <div id="map-main"></div><!-- 
                        <ul class="mapnavigation no-list-style">
                            <li><a href="#" class="prevmap-nav mapnavbtn"><span><i class="fas fa-caret-left"></i></span></a></li>
                            <li><a href="#" class="nextmap-nav mapnavbtn"><span><i class="fas fa-caret-right"></i></span></a></li>
                        </ul>
                        <div class="scrollContorl mapnavbtn tolt"   data-microtip-position="top-left" data-tooltip="Enable Scrolling"><span><i class="fal fa-unlock"></i></span></div>
                        <div class="location-btn geoLocation tolt" data-microtip-position="top-left" data-tooltip="Your location"><span><i class="fal fa-location"></i></span></div>
                        <div class="map-close"><i class="fas fa-times"></i></div> -->

                    </div>
                    <a href="semuagng.php" class="btn color2-bg    float-btn"><i class="fal fa-map-marker-alt"></i>Lihat lokasi</a>
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end -->                                     
                                        
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget-item end -->      
                                    
                </div>
                
            <!--chat-widget end -->            
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="js/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZXQCEdpI6CkS3IIZnAjAngRiNXgQDPJA&amp;libraries=places&amp;callback=initAutocomplete"></script> -->
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZXQCEdpI6CkS3IIZnAjAngRiNXgQDPJA&callback=initMap">
    </script>
        <script src="js/map-plugins.js"></script>
        <script src="js/map-listing.js"></script>                    
        <script>
            var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map-main'), {
          center: new google.maps.LatLng(<?php echo $row['Lat'];?>, <?php echo $row['Lng'];?>),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;
        // var markers = xml.documentElement.getElementsByTagName('marker');

        //data maps
        var id      = 1;
        var name    = '<?php echo $row['Namagng'];?>';
        var address = '<?php echo $row['Alamat'];?>';
        var type    = 'Warkop';
        var point   = new google.maps.LatLng(
                        parseFloat(<?php echo $row['Lat'];?>),
                        parseFloat(<?php echo $row['Lng'];?>)
                      );
        //data maps end

        var infowincontent = document.createElement('div');
        var strong = document.createElement('strong');
            strong.textContent = name
            infowincontent.appendChild(strong);
            infowincontent.appendChild(document.createElement('br'));

        var text = document.createElement('text');
            text.textContent = address
            infowincontent.appendChild(text);
        var icon = customLabel[type] || {};
        var marker = new google.maps.Marker({
            map: map,
            position: point,
            label: icon.label
        });
        marker.addListener('click', function() {
            infoWindow.setContent(infowincontent);
            infoWindow.open(map, marker);
        });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}

        </script>
    <!-- <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncX8rPrtuTLYhGz%2bZ05TXBf5cOywpnkzYumE6v0DMapYJGliWZ%2fbYHyriZHwF%2fBrcSaRpJWH0T4DUngAgAlu3MXbAdz4kxvGA2eeTGxJVqZn2Odq0DpDh5%2fFoiOLx1CCGpVHVO%2bJgfBfmce8u2RJO4jsAJ4HYNjgDrrSCIFFTGVTLWGjKvb8L1NmX3LThgIom0Ydj4XKruyvyYzYDKCARV%2fzbgpY94%2bI2mIh689X8xiszR7Shv0FRTlpu8IA%2bCiiY4x6B1fe42QW9z8UzEV4vONoM5ltlnOHA4JRl7MmLKuyGZWLbhYGdl7B%2baJeF76z%2flp%2bhTQuOXSIQW0IpafRiGs2rsOUA946nOCsIXDTIT3iksvJMc6iK1Cpqpe9Ipqoy9gRDqf32Qc4qmbO2wjss0usZyFQPqvqNr5TNm4W3lQmV2KQj%2bYxU%2f5%2bp%2fG68cEQnxVGt9mhBy5mP87%2fJjR6eMPIea89sSVTCgEQ7LiClgSr8o%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script> -->
    </body>

<!-- Mirrored from townhub.kwst.net/listing-single.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 23 Feb 2020 01:34:31 GMT -->
</html>