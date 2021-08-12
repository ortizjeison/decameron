
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Decameron</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <!--Poner el tag y que tales -->
    </head>

    <body id="page-top">
        <?php

        include("../index.php");
           // PLANES
            //Le indicamos la entidad que vamos a consultar
            $query = new \Contentful\Delivery\Query();
            $query->setContentType('plan');

            //Las recibimos
            $Planes = $client->getEntries($query);
        ?>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#rooms">Rooms</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#plans">Plans</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="https://d1ddveogffq1qm.cloudfront.net/decameron-entrar%C3%ADa-a-cotizar-en-la-bolsa.jpg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Decameron</h1>
                <!-- Icon Divider-->
                
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>


                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Rooms and Plans</p>
            </div>
        </header>
        <!-- Rooms Section-->
        <section class="page-section portfolio" id="rooms">
            <div class="container">
                <!-- Rooms Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Rooms</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <?php $count = 0; ?>
                    <?php foreach ($Rooms as $room) { ?>
                    <!-- Portfolio Item 1-->        
                        <div class="col-md-6 col-lg-4 mb-5">
                        <?php echo $room['name'] ?>
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#RoomModal<?php echo $count; ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" <?php echo $room['name'] ?>src="<?php echo $room['photos']['photo1'] ?>" alt="..." />
                            </div>
                        </div>
        <div class="portfolio-modal modal fade" id="RoomModal<?php echo $count; ?>" tabindex="-1" aria-labelledby="RoomModal<?php echo $count; ?>" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $room['name'] ?></h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="<?php echo $room['photos']['photo1'] ?>" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"><?php echo $room['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                        <?php $count++; ?>
                    <?php  } ?>    
                </div>
            </div>
        </section>

        <!-- Plans Section-->
        <section class="page-section portfolio" id="plans">
            <div class="container">
                <!-- Plans Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Plans</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                <?php $count1 = 0; ?>
                <?php foreach ($Planes as $plan) { ?>
                    <!-- Portfolio Item 1-->        
                        <div class="col-md-6 col-lg-4 mb-5">
                            <?php echo $plan['name'] ?>
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#PlanModal<?php echo $count1; ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?php echo $plan['photos']['photo1'] ?>" alt="..." />
                            </div>
                        </div>
        <div class="portfolio-modal modal fade" id="PlanModal<?php echo $count1; ?>" tabindex="-1" aria-labelledby="PlanModal<?php echo $count1; ?>" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php echo $plan['name'] ?></h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="<?php echo $plan['photos']['photo1'] ?>" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"><?php echo $plan['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                <?php $count1++; ?>
                <?php  } ?>   
                </div>
            </div>
        </section>
        

        <!-- Login Section-->
        <section class="page-section" id="login">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Login</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
            </div>
        </section>


        <!-- Footer-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- Footer About Text-->
                    <div class="col-lg-4 text-center">
                        <h4 class="text-uppercase mb-4">About Us</h4>
                        <p class="lead mb-0">
                            Jeison Fernelix Ortiz López
                            <br>Juliana Londoño Noreña
                            <br>Juan Carlos Henao López
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Decameron 2021</small></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1--> 
        
        <!-- Portfolio Modal 2--> 
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Nombre de la vaina</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <!-- Portfolio Modal - Image-->
                                            <img class="img-fluid rounded mb-5" src="https://d1ddveogffq1qm.cloudfront.net/galeon-02.jpg" alt="..." />
                                            <!-- Portfolio Modal - Text-->
                                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
