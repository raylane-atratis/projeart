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
                    <h1>Soluções</h1>
                </div>
            </div>
        </div>
            
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="grid-arquivo-solucoes">
                    <?php if (have_posts()) { 
                        while (have_posts()) { 
                            the_post();

                    ?>

                    <a href="<?php echo the_permalink(); ?>" class="item-solucoes">
                        <div class="img-solucao">
                            <img src="<?php the_post_thumbnail_url()?>" alt="imagem-solucoes">
                        </div>
                        <div class="texto-solucao">
                            <h3><?php echo the_title(); ?></h3>
                            <?php echo the_content();?>
                            <small>Saiba mais</small>
                        </div>
                    </a>

                     <?php }  } else { echo 'Nenhum post encontrado.';  } ?>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="content-paginacao">
                <?php if (function_exists('pagination_function')) pagination_function(); ?>
            </div>
        </div>
    </div>


    

<?php get_footer(); ?>