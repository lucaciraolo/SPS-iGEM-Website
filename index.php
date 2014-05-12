<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>SPS iGEM Page</title>
        <?php require_once 'php/header_includes.php'; ?>
        <style>
            .carousel {
                /*height: 500px;*/
                margin-bottom: 10px;
                margin-top: 10px;
            }
            .carousel-control.left, .carousel-control.right {
                background-image: none
            }
            .carousel-inner > .item > img {
                margin: 0 auto;
                /*width:100%;*/
                max-height:500px;
            }
            glyphicon-chevron-left, glyphicon-chevron-right {
                color:gray;
            }

        </style>
    </head>
    <body>
        <!--Start Navigation Bar-->
        <?php require_once 'php/navigation_bar.php'; ?>
        <!--End Navigation Bar-->

        <!--Start Main Content-->

        <div class="container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/Newbuilding.png">
                    </div>
                    <div class="item">
                        <img src="images/Colet.png">
                    </div>
                    <div class="item">
                        <img src="images/Newbuilding2.png">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" style="color:gray"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" style="color:gray"></span>
                </a>
            </div>

        </div>
        <div class="container">
            <p>Hi! We are a team of five 17 year olds from St Paul’s School, the first team from our school, and indeed the first ever UK school team to enter iGEM. St Paul’s is a day school in South West London, UK and was founded over 500 years ago by John Colet, dean of St Paul’s. The school was originally established in St Paul’s Cathedral in the city centre (hence the name) but has since expanded from Colet’s original 153 boys to accommodate over 800 boys between the ages of 13-18 and consequently the school now sits in Barnes on the River Thames.</p>
            <p>We are aiming to produce a lactose sensor, a project which you can read more about in the project section of this page, but promises to be both a challenging and stimulating one. The fiver of us were inspired to compete in the competition after the school hosted a speaker from the scientific work who introduced us to some the exciting work that past high-school and university teams has completed. </p>
        </div>
        <!--End Main Content-->

        <!--Start Scripts-->
        <?php require_once 'php/script_includes.php'; ?>
        <!--End Scripts-->

    </body>
</html>
