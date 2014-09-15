
<?php

include("head.php");
?>



<script type='text/javascript'>
// Stop carousel
    $('.carousel').carousel({
        interval: false
    });
</script>


<div class='container-fluid'>
    <h1>Photo Gallery</h1>

    IMD Specializes in a number of production processes for the Orthopaedic Industry. Below is a gallery
    of products we have manufactured for various clients.
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 carousel slide article-slide" id="article-photo-carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner cont-slider">

                <div class="item active">
                    <img alt="" title="" src="images/gallery/1765-02.jpg">
                </div>
                <div class="item">
                    <img alt="" title="" src="images/gallery/1878.jpg">
                </div>
                <div class="item">
                    <img alt="" title="" src="images/gallery/4240.jpg">
                </div>
                <div class="item">
                    <img alt="" title="" src="images/gallery/5201_gold.jpg">
                </div>
                <div class="item">
                    <img alt="" title="" src="images/gallery/5211_gold.jpg">
                </div>
                <div class="item">
                    <img alt="" title="" src="images/gallery/5220_gold.jpg">
                </div>
                <div class="item">
                    <img alt="" title="" src="images/gallery/5230_gold.jpg">
                </div>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
                    <img alt="" src="images/gallery/1765-02.jpg">
                </li>
                <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                    <img alt="" title="" src="images/gallery/1878.jpg">
                </li>
                <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                    <img alt="" title="" src="images/gallery/4240.jpg">
                </li>
                <li class="" data-slide-to="3" data-target="#article-photo-carousel">
                    <img alt="" title="" src="images/gallery/5201_gold.jpg">
                </li>
            </ol>
        </div>
    </div>
</div>


<?php

include("foot.php");

