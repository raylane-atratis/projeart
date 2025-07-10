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
                        <h1><?php the_title();?></h1>
                    </div>
                 </div>
            </div>
            
            </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                
                    <?php the_content(); ?>
                
                </div>
            </div>
        </div>

<!-- [BLOCOS] Chamar template de blocos -->	
<?php get_template_part('blocos'); ?>

<?php get_footer(); ?>