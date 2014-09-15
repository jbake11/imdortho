
<?php
include("head.php");
?>

</div>
</div>
</div>
<div id='sliderWrite' class="container-fluid">
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
                    <img  src="/images/slider/panel_1.jpg" />
                </div>

                <div class="item">
                    <img src="/images/slider/panel_2.jpg" />
                </div>

                <div class="item">
                    <img src="/images/slider/panel_3.jpg" />
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

<div class="container indexContent">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9">
            <h1>Knowledge. Equipment. Experience.</h1>

            <h3>From single machining operations service to full manufacturing capabilities,
                you can count on Instrumental Machine & Development.</h3>

            Instrumental Machine & Development (IMD) a quality minded manufacturer of Orthopedic and
            Medical Instrumentation, supporting the Orthopedic community.

            IMD is committed to quality, on-time delivery and meeting the requirements of each and every customer.

            IMD specializes in Orthopedic Instrumentation, Sterilization Trays and accessories for the Operating Room.
            We have the knowledge and experience to serve our customers manufacturing and assembly needs.

        </div>
        <div class='col-lg-3 col-md-3 col-sm-3'>
            <a href='history.php'><img class='img-responsive' src='images/company-history.jpg'></a>
        </div>
    </div>
</div>

<div class='clearfix'></div>
<br /><br />

<div class='container indexContent'>
    <div class='row'>
        <div class='col-sm-4'>
            <ul>
                <li id='equipment'><a href='equip.php'>Equipment</a></li>
            </ul>
            IMD utilizes the latest technology for orthopedic tool production. We offer a full line of in-house production mills, lathes, metal markers, cutting equipment and finishers. If specialized tool applications are required, we have the resources to complete the job to your specifications and satisfaction.
        </div>
        <div class='col-sm-4'>
            <ul>
                <li id='products'><a href='photo.php'>Product Samples</a></li>
            </ul>
            We've been supplying the orthopedic industry with surgical instrumentation since 1991. Over the years the surgical procedures have advances and become less invasive thanks to the advancements in tool surgical instrument engineering and production processes. Visit our Gallery of view the various tools we have produced.
        </div>
        <div class='col-sm-4'>
            <ul>
                <li id='employment'><a href='employ.php'>Employment</a></li>
            </ul>
            IMD is an equal opportunity employer. We seek out candidates that share our vision for excellence and drive for customer satisfaction. If you would like to become part of the IMD family, please contact us for more information on available positions.
        </div>
    </div>
</div>

<div class='container'>
    <div class='row'>
        <div class='col-lg-12'>
            <?php
            include("foot.php");
            ?>



