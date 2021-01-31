<!DOCTYPE html>

<html lang="pt-br">

<head>

    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head() ?>

</head>

<body class="<?php body_class(); ?>"> 

    <!-- Header -->
    <header>

        <!-- Pre-header start -->
        <div class="pre-header">

            <!-- Header Top -->
            <div class="container-fluid header-top">

                <!-- Social and Info div -->
                <div class="d-flex flex-wrap justify-content-between">

                    <!-- Info Div -->
                    <div class="ml-auto">

                        <!-- Contact Info -->
                        <ul class="d-flex flex-wrap justify-content-center upperheader">

                            <li class="upperheader-item info-item">

                                <span> <i class="fas fa-location-arrow"></i> </span> R.Santos André, 453 - Curitiba - PR, 82900-300. Próximo à rua paralela ao shopping Jardim das Américas

                            </li>

                            <li class="upperheader-item info-item">

                                <span> <i class="fas fa-phone-alt"></i> </span> +55 (41) 3366-3662

                            </li>

                            <li class="upperheader-item info-item">

                                <span> <i class="fas fa-phone-alt"></i> </span> Horario de antendimento 8:00 às 12:00 - 13:15 às 18:00 seg-sex

                            </li>

                        </ul>

                    </div>

                    <!-- Social -->
                    <div class="social mr-auto">

                        <ul class="d-flex flex-wrap upperheader">

                            <!-- WPPPP -->
                            <li class="upperheader-item"> <span> <a class="wp-icon" href="https://api.whatsapp.com/send?phone=554198174100&text=Ol%C3%A1%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es!"> <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> </a> </span> </li>

                        </ul>

                    </div>

                </div>

            </div>
            <!-- Header Top End-->

        </div>
        <!-- Pre-header end -->

        <!-- Navbar -->
        <nav>

            <div class="container d-flex">

                <input type="checkbox" name="" id="check">

                <div class="logo-container">

                    <div class="navbar-brand">

                        <a href=" <?php echo home_url()  ?> "> <img src=" <?php echo get_theme_file_uri('/images/Logos/logoComplete.png') ?>" alt="Navbar logo"> </a>

                    </div>

                </div>

                <div class="nav-btn">
                
                    <?php 
                    
                        wp_nav_menu(array(

                            'theme_location' => 'HeaderMenuLocation'

                        ))
                    
                    ?>
                    
                </div>

                <div class="nav-search">

                    <i class="fas fa-search js-search-trigger"></i>

                </div>

                <div class="hamburger-menu-container">

                    <div class="hamburger-menu-container">

                        <div class="hamburger-menu">

                            <div></div>

                        </div>

                    </div>

                </div>

            </div>

        </nav>

    </header>
    <!-- Header End -->