<?php get_header(); ?>

    <div class="container">
            <div class="row">

            <div class="col-12">
                <div class="breadcrumb-personalizada">
                    <?php get_breadcrumb(); ?>
                </div>
            </div>
            
        </div>

    </div>
    <div class="title-internas">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Clients</h1>
                </div>
                </div>
        </div>
            
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
            
                <div class="grid-arquivo-clients">
                    <?php 
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                
                                ?>
                                
                                <div class="content-card">
                                            
                                    <img src="<?php the_post_thumbnail_url()?>" alt="">
                                            
                                </div>
                                
                                <?php
                                
                            }
                        } else {
                            echo 'Nenhum post encontrado.';
                        }
                    
                    ?>
                </div>
            
            </div>
        </div>

        
    </div>


    

<?php get_footer(); ?>