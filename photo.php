
<?php

include("head.php");
?>

<script type='text/javascript'>
    jQuery(document).ready(function($) {

        $('#myCarousel').carousel({
            interval: 5000
        });

        $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function() {
            var id_selector = $(this).attr("id");
            var id = id_selector.substr(id_selector.length - 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function(e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });
    });
</script>

<div class='container-fluid'>
    <h1>Photo Gallery</h1>
</div>

<div class='container-fluid'>
    <h3>IMD Specializes in a number of production processes for the Orthopaedic Industry. Below is a gallery
        of products we have manufactured for various clients.</h3>
</div>
<!--####
1OK) Add jQuery library "<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>"
2) Download fancybox (https://github.com/fancyapps/fancyBox)
3) Add jquery.fancybox.css and jquery.fancybox.js
4) Add fancybox images
####--!>

<!-- References: https://github.com/fancyapps/fancyBox -->
<link rel="stylesheet" href="/css/jquery.fancybox.css" media="screen">
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/fancybox.js"></script>


<div class="container-fluid">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-xs-12" id="slider">
                <!-- Top part of the slider -->
                <div class="row">
                    <div class="col-sm-12" id="carousel-bounding-box">
                        <div class="carousel slide" id="myCarousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item" data-slide-number="0">
                                    <img src="images/gallery/1765-02.jpg"></div>

                                <div class="item" data-slide-number="1">
                                    <img src="images/gallery/1878.jpg"></div>

                                <div class="item" data-slide-number="2">
                                    <img src="images/gallery/4240.jpg"></div>

                                <div class="item" data-slide-number="3">
                                    <img src="images/gallery/5201_gold.jpg"></div>

                                <div class="item" data-slide-number="4">
                                    <img src="images/gallery/5211_gold.jpg"></div>

                                <div class="item" data-slide-number="5">
                                    <img src="images/gallery/5220_gold.jpg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/Slider-->

        <div class="row hidden-xs" id="slider-thumbs">
            <!-- Bottom switcher of slider -->
            <ul class="hide-bullets">
                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-0"><img src="images/gallery/1765-02.jpg" alt=""/></a>

                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-1"> <img src="images/gallery/1878.jpg" alt=""/></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-2"><img src="images/gallery/4240.jpg" alt=""/></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-3"><img src="images/gallery/5201_gold.jpg" alt=""/></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-4"><img src="images/gallery/5211_gold.jpg" alt=""/></a>
                </li>

                <li class="col-sm-2">
                    <a class="thumbnail" id="carousel-selector-5"><img src="images/gallery/5220_gold.jpg" alt=""/></a>
                </li>
            </ul>
        </div>
    </div>
</div>


<!--<img src="images/gallery/5230_gold.jpg" alt=""/>
<img src="images/gallery/6620.jpg" alt=""/>
<img src="images/gallery/6865-04_gold.jpg" alt=""/>
<img src="images/gallery/7400_handle.jpg" alt=""/>
<img src="images/gallery/9125.jpg" alt=""/>
<img src="images/gallery/T1006.jpg" alt=""/>
<img src="images/gallery/Tools-11.jpg" alt=""/>
<img src="images/gallery/Tools-15.jpg" alt=""/>
<img src="images/gallery/aluminum_remnants.jpg" alt=""/>-->

<!--
<div class="container">
    <div class="row">
        <div class='list-group gallery'>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3 thumb-table'>
                <div class='thumb-wrap'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/1765-02.jpg">
                        <img class="img-responsive" alt="" src="/images/gallery/1765-02.jpg" />
                    </a>
                </div>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <div class='thumb-wrap'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/1878.jpg">
                        <img class="img-responsive" alt="" src="/images/gallery/1878.jpg" />
                    </a>
                </div>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/4240.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/4240.jpg" />
                </a>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/5201_gold.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/5201_gold.jpg" />
                </a>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/5211_gold.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/5211_gold.jpg" />
                </a>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/5220_gold.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/5220_gold.jpg" />
                </a>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/5230_gold.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/5230_gold.jpg" />
                </a>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/6620.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/6620.jpg" />
                </a>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/6865-04_gold.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/6865-04_gold.jpg" />
                </a>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/7400_handle.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/7400_handle.jpg" />
                </a>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/9125.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/9125.jpg" />
                </a>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/T1006.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/T1006.jpg" />
                </a>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/Tools-11.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/Tools-11.jpg" />
                </a>
            </div>  col-6 / end

            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/Tools-15.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/Tools-15.jpg" />
                </a>
            </div>  col-6 / end
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="/images/gallery/aluminum_remnants.jpg">
                    <img class="img-responsive" alt="" src="/images/gallery/aluminum_remnants.jpg" />
                </a>
            </div>  col-6 / end
        </div>  list-group / end
    </div>  row / end
</div>  container / end
-->

<?php

include("foot.php");
?>
