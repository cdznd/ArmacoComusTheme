<?php

    $thisId = get_the_ID();

    $page_list = get_pages(array(

        'title_li' => null,
        'parent' => 14

    ));

?>

<?php


    get_header();

?>


<!-- Hero section start -->
<section>

    <!-- Video Background -->
    <div class="video-background">

        <div class="video-wrap overlay-dark"></div>

        <video autoplay loop muted>

            <source src="<?php echo get_theme_file_uri('/images/videos/video.mp4') ?>" type="video/mp4">

        </video>

        <!-- Caption -->
        <div class="row">

            <div class="col-md-6">

                <div class="caption">

                    <h1 class="display-1">Aços especiais é na <span class="caption-word"> Armaço </span> </h1>

                    <p>Oferecemos uma enorme variedade de aços especiais para atender as suas necessidades.</p>

                    <!-- Buttons -->
                    <a class="btn btn-page hero" href="#history">Nossa História</a>
                    <a class="btn btn-page hero sec" href="/produtos">Produtos</a>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Hero section end-->

<!-- Quem somos/Historia -->
<section id="history" class="container-fluid" style="background-color:white">

    <div class="container cont-section">

        <h1 class="title">Quem somos?</h1>

        <div class="row cont-subsection">

            <div class="col-md-6">

                <h2 class="subtitle">Nossa História</h2>

                <p class="text-section">

                    Armaço aços especiais é uma empresa brasileira com uma enorme variedade de aços, fundada em 1978, no bairro Cajuru, sendo referência no mercado de aço especiais como distribuidor
                    de Aços Finos Piratini (Gerdau) e Aços Villares, com agilidade no atendimento, tradição e experiência.
                    A nossa equipe é especializada em aços especiais e é preparada para te atender de forma personalizada.

                </p>

            </div>

            <div class="col-md-6">

                <!-- Carousel Start -->
                <div id="carouselExampleIndicators" class="carousel slide shadow-lg" data-ride="carousel">

                    <ol class="carousel-indicators">

                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

                    </ol>

                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/CompanyPhotos/1.jpg') ?>" alt="First slide">

                        </div>

                        <div class="carousel-item">

                            <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/CompanyPhotos/2.jpg') ?>"  alt="Second slide">

                        </div>

                        <div class="carousel-item">

                            <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/CompanyPhotos/3.jpg') ?>" alt="Third slide">

                        </div>

                        <div class="carousel-item">

                            <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/CompanyPhotos/4.jpg') ?>" alt="Fourth slide">

                        </div>

                        <div class="carousel-item">

                            <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/CompanyPhotos/6.jpg') ?>" alt="Third slide">

                        </div>

                        <div class="carousel-item">
                        
                            <img class="d-block w-100" src="<?php echo get_theme_file_uri('/images/CompanyPhotos/7.jpg') ?>" alt="Third slide">

                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>

                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>

                    </a>

                </div>
                <!-- Carousel End -->

            </div>

        </div>

    </div>

    </section>
    <!-- Quem somos -->

<!-- Jumbtron Start -->
<section class="background-fix" style="background-image: url(<?php echo get_theme_file_uri('/images/BackPhotos/ant.jpg') ?>);">

    <div class="overlay-dark">

        <div class="container-fluid">

            <!-- Jumbotron -->
            <div class="row p-5" style="color:white;">

                <div class="col-md-4">

                    <div class="d-flex flex-column p-3 th-container">

                        <div class="text-center p-3">

                            <i class="fa fa-certificate fa-3x" aria-hidden="true"></i>

                        </div>

                        <div class="text-center">

                            <h3 class="font-weight-bold"> Transparência </h3>

                            <p>Prezamos pela honestidade na entrega do material, com qualidade assegurada.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="d-flex flex-column p-3 th-container">

                        <div class="text-center p-3">

                            <i class="fa fa-sitemap fa-3x" aria-hidden="true"></i>

                        </div>

                        <div class="text-center">

                            <h3 class="font-weight-bold"> Fornecedores de excelência </h3>

                            <p>Nosso material vem dos melhores fornecedores, como principais a Gerdau e a Villares.</p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="d-flex flex-column p-3 th-container">

                        <div class="text-center p-3">

                            <i class="fa fa-users fa-3x" aria-hidden="true"></i>

                        </div>

                        <div class="text-center">

                            <h3 class="font-weight-bold"> Atendimento personalizado </h3>

                            <p>Temos uma equipe especializada em aços especiais, preparada para te atender.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- Jumbtron end -->

<section id="products" class="container">

    <div class="container cont-section">

        <h1 class="title"> Produtos </h1>

        <div class="cont-subsection">

            <div class="row">

                <!-- start 9 -->
                <div class="col-md-12">

                    <!-- Aplicações start -->
                    <div class="row">

                        <?php

                        if(count($page_list) != 0){

                            foreach ($page_list as $page) {

                                $background_image = (has_post_thumbnail($page->ID) ? wp_get_attachment_image_src(get_post_thumbnail_id($page->ID), array(300,300)) : '');

                            ?>
                            
                            <div class="col-md-4">

                                <div class="box">

                                    <figure class="box-effect">

                                        <img src=" <?php echo $background_image[0]; ?> " class="product-image" alt="Product image">

                                        <figcaption>

                                            <h2> <?php echo $page->post_title ?> </h2>

                                            <p> <?php echo $page->post_content ?> </p>

                                            <a href=" <?php echo get_page_link($page->ID) ?> "></a>

                                        </figcaption>

                                    </figure>

                                </div>

                            </div>

                        <?php

                            }

                        }else{
                                
                            

                        ?>



                        <?php }; ?>

                    </div>

                </div>
                <!-- close 9 -->

            </div>

        </div>

    </div>

</section>



<!-- Map -->
<section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.7739333072873!2d-49.233103084413685!3d-25.445820439750594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce50e32c98f1b%3A0xf655dacf709833a!2sR.%20Santo%20Andr%C3%A9%2C%20453%20-%20Cajuru%2C%20Curitiba%20-%20PR%2C%2082900-300!5e0!3m2!1sen!2sbr!4v1597510134443!5m2!1sen!2sbr" width="100%" height="600" frameborder="0" style="border:0;display: block;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</section>
<!-- Map End -->




<!-- Contact Start -->
<section class="container-fluid">

    <div class="container cont-section">

        <h1 class="title"> Contato </h1>

        <div class="row cont-subsection">

            <div class="col-md-4">

                <h2 class="subtitle">Informações</h2>

                <p class="text-section"> Entre em contato por chat, telefone ou email e receba o seu orçamento sem compromisso. </p>

                <div class="contact-info">

                    <address> <a href="https://goo.gl/maps/9oVtgLRzac6DUTHz8"> <i class="fas fa-location-arrow"></i> R. Santo André, 453 - Cajuru, Curitiba. Próximo à rua paralela ao shopping Jardim das Américas </a> </address> 

                    <address> <a> <i class="fas fa-phone-alt"> </i> +55 (41) 3366-3662 </a> </address> 

                    <address> <a> <i class="far fa-envelope"> </i> contato@armacoacosespeciais.com </a> </address> 

                    <address> <a class="wp-icon" href="https://api.whatsapp.com/send?phone=554198174100&text=Ol%C3%A1%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es!"> <i class="fa fa-whatsapp fa-2x" aria-hidden="true"> </i> </a> </address>

                </div>

            </div>






            <div class="col-md-8">

                <form id="contact" class="form" method="POST" action="admin-post.php">

                    <div class="form-group">

                        <label class="form-label" for="InputName">Nome</label>
                        <input type="text" class="form-control" id="InputName" name="name">

                    </div>

                    <div class="form-group">

                        <label class="form-label" for="InputEmail">Email</label>
                        <input type="text" class="form-control" id="InputEmail" name="email">

                    </div>

                    <div class="form-group">

                        <label class="form-label" for="InputPhone">Telefone</label>
                        <input type="text" class="form-control" id="InputPhone" name="phone">

                    </div>

                    <!-- ADD FILE INPUT HERE -->

                    <div class="form-group">

                        <label class="form-label" for="FormTextarea">Mensagem</label>
                        <textarea class="form-control" id="FormTextarea" rows="3" name="message"></textarea>

                    </div>

                    <button id="submit-btn" type="submit" value="submit" class="btn btn-page">Enviar</button>

                    <div id="msg" class="transparent"></div>

                </form>

            </div>



        </div>

    </div>

</section>
<!-- Contact End -->





<?php

    get_footer();

?>