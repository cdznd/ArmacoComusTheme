<?php

    $thisId = get_the_ID();
    $parentId = wp_get_post_parent_id($thisId);

    if ($parentId != 0) {

        $getChildrenOf = $parentId;

    } else {

        $getChildrenOf = $thisId;

    }

    //Return all the pages from getChildrenOf
    //Return all from parentId
    $parent_page_list = get_pages(array(

        'title_li' => null,
        'parent' => $getChildrenOf

    ));

    $parent_page_list_grant = get_pages(array(

        'title_li' => null,
        'child_of' => $getChildrenOf

    ));

    $this_page_list = get_pages(array(

        'title_li' => null,
        'parent' => $thisId

    ));

    $this_background_image = (has_post_thumbnail($thisId) ? wp_get_attachment_image_src(get_post_thumbnail_id($thisId), array(300,300)) : '');
    
?>

<?php get_header(); ?>

<section class="jumbotrom background-fix" style="background-image: url( <?php echo get_theme_file_uri('/images/BackPhotos/ant.jpg') ?> );">

    <div class="overlay-dark">

        <div class="row">

            <div class="col-md-12">

                <h1 class="product-page-title"> <?php the_title() ?> </h1>

            </div>

        </div>

        <div class="row" style="border-top: 1px solid #666666;padding-top:25px;padding-bottom: 25px;">

            <div class="col-md-12">

                <ul class="inline center">

                    <?php

                    if ($parentId) { 
                        
                    ?>

                        <li>
                            <a href="<?php echo get_permalink($parentId);  ?>"> <?php echo get_the_title($parentId) ?> </a>
                        </li>

                        <li> <i class="fas fa-chevron-right"></i> </li>

                        <li>
                            <a href="<?php echo the_permalink();  ?>"> <?php echo the_title() ?> </a>
                        </li>

                    <?php

                    }else{

                    ?>

                        <li>

                            <a href="<?php echo the_permalink();  ?>"> <?php echo the_title() ?> </a>

                        </li>                        

                    <?php } ?>

                </ul>

            </div>

        </div>

    </div>

</section>


<section id="products" class="container">

    <div class="container-fluid cont-section">

        <div class="row">

            <div class="col-md-3">
                
                <!-- Check this side bar => https://codepen.io/rizkykurniawanritonga/pen/sqcAn -->
                <ul class="page-menu">

                    <li class="page-menu-title"> <a href=" <?php echo get_page_link($getChildrenOf) ?> "> <?php echo get_the_title($getChildrenOf) ?> </a> </li>

                    <?php 
                    
                        foreach ($parent_page_list as $page) { 
                            
                    ?>

                        <li class="page-parent"> <a href=" <?php echo get_page_link($page->ID) ?> "> <?php echo $page->post_title ?> </a> </li>

                        <li class="page-children">

                            <ul>

                                <?php

                                    $pages = get_pages(array(

                                        'title_li' => null,
                                        'child_of' => $page->ID

                                    ));

                                    foreach ($pages as $page_child) {

                                ?>

                                <li class="page-child"> <a href="<?php echo get_page_link($page_child->ID) ?> "> <?php echo $page_child->post_title ?> </a> </li>

                                <?php 
                                    
                                    } 
                                    
                                ?>

                            </ul>

                        </li>

                    <?php 
                
                        } 
                        
                    ?>

                </ul>

            </div>

            <!-- start 9 -->
            <div class="col-md-9">

                <!-- Aplicações start -->
                <div class="row">

                    <?php

                    if(count($this_page_list) != 0){

                        foreach ($this_page_list as $page) {

                            $background_image = (has_post_thumbnail($page->ID) ? wp_get_attachment_image_src(get_post_thumbnail_id($page->ID), array(300,300)) : '');

                            //$trimmed_content = wp_trim_words( $page->post_content, 50, NULL );
                            $trimmed_content = wp_trim_words( $page->post_content , 90 );

                        ?>
                        
                        <div class="col-md-6">

                            <div class="box">

                                <figure class="box-effect">

                                    <img src=" <?php echo $background_image[0]; ?> " class="product-image" alt="Product Image">

                                    <figcaption>

                                        <h2> <?php echo $page->post_title ?> </h2>

                                        <p> <?php echo $trimmed_content ?> </p>

                                        <a href=" <?php echo get_page_link($page->ID) ?> "></a>

                                    </figcaption>

                                </figure>

                            </div>

                        </div>

                    <?php

                        }

                    }else{
                            
                        

                    ?>

                        <div class="col-md-6">

                            <div>

                                <img src=" <?php echo $this_background_image[0]; ?> " class="product-image" alt="Product Image">

                            </div>

                        </div>

                        <div class="col-md-6">

                            <h2 class="title"> Aplicações </h2>

                            <p class="text-section"> <?php echo the_content() ?> 

                        </div>

                    <?php }; ?>

                </div>

            </div>
            <!-- close 9 -->

        </div>

    </div>

</div>

</section>


<?php

    get_footer();

?>