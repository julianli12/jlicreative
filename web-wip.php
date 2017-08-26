<html>
<head>

  <?php include_once('_links.php'); ?>
  <title>JLi Site Designs</title>

</head>
<body>

  <?php
  include_once('_navbar.php');
   ?>

<div id="work" class="row">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>My Work</h2>
                <hr class="primary">
                <ul class="list-inline hidden-xs" id="filters">
                    <li>
                        <button data-filter="*" type="button" class="btn btn-primary btn-square btn-raised">All</button>
                    </li>
                    <li>
                        <button data-filter=".prototype" type="button" class="btn btn-primary btn-square btn-raised">Prototype</button>
                    </li>
                    <li>
                        <button data-filter=".mock" type="button" class="btn btn-primary btn-square btn-raised">Mock Ups</button>
                    </li>
                    <li>
                        <button data-filter=".graphics" type="button" class="btn btn-primary btn-square btn-raised">Sketches</button>
                    </li>
                    <li>
                        <button data-filter=".photography" type="button" class="btn btn-primary btn-square btn-raised">Photography</button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row" data-scrollreveal="enter bottom over 1.5s">
            <div class="isotope">
                <div class="col-sm-4 portfolio-item prototype">
                    <a href="#portfolio-queturn" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h3><i class="fa fa-search fa-2x"></i>
                                </h3>
                            </div>
                        </div>
                        <img src="img/icons/queturn.jpg" class="img-centered" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item mock">
                    <a href="#portfolio-up" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h3><i class="fa fa-search fa-2x"></i>
                                </h3>
                            </div>
                        </div>
                        <img src="img/icons/up.jpg" class="img-centered" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item graphics">
                    <a href="#portfolio-worlds" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h3><i class="fa fa-search fa-2x"></i>
                                </h3>
                            </div>
                        </div>
                        <img src="img/icons/worlds.jpg" class="img-centered" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item prototype">
                    <a href="#portfolio-bcp" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h3><i class="fa fa-search fa-2x"></i>
                                </h3>
                            </div>
                        </div>
                        <img src="img/icons/bcp.jpg" class="img-centered" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item photography">
                    <a href="#portfolio-p1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h3><i class="fa fa-search fa-2x"></i>
                                </h3>
                            </div>
                        </div>
                        <img src="img/icons/g1.jpg" class="img-centered" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item mock">
                    <a href="#portfolio-zazzle" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h3><i class="fa fa-search fa-2x"></i>
                                </h3>
                            </div>
                        </div>
                        <img src="img/icons/zazzle.jpg" class="img-centered" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item photography">
                    <a href="#portfolio-p2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h3><i class="fa fa-search fa-2x"></i>
                                </h3>
                            </div>
                        </div>
                        <img src="img/icons/ben.jpg" class="img-centered" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item photography">
                    <a href="#portfolio-rage" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h3><i class="fa fa-search fa-2x"></i>
                                </h3>
                            </div>
                        </div>
                        <img src="img/icons/g2.jpg" class="img-centered" alt="">
                    </a>
                </div>

                <div class="col-sm-4 portfolio-item photography">
                    <a href="#portfolio-murray" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <h3><i class="fa fa-search fa-2x"></i>
                                </h3>
                            </div>
                        </div>
                        <img src="img/icons/g4.jpg" class="img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('_footer.php'); ?>

</html>
