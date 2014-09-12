
<?php
include("head.php");
?>


<div class="container"
     <div class="row">
        <!-- The carousel -->
        <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
                <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img  src="/slider/slider1.jpg" />
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header"></h1>

                    </div>
                </div>

                <div class="item">
                    <img src="/slider/slider1.jpg" />
                    <div class="carousel-caption">
                        <p class="carousel-caption-text hidden-sm hidden-xs">

                        </p>
                    </div>
                </div>

                <div class="item">
                    <img src="/images/home_building.jpg" />
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">Slide 3</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">


                        </p>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>

            <!-- Timer "progress bar" -->
            <hr class="transition-timer-carousel-progress-bar animate" />
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-9">

        </div>
        <div class='col-lg-3' >
            <a href='history.php'><img src='images/company-history.jpg'></a>
        </div>
    </div>
</div>
<?php
include("foot.php");
?>



