<?php get_header(); ?>

<?php
$args = array(
    'post_type' => 'areas-de-atuacoes', // Substitua 'areas-de-atuacoes' pelo slug real do seu custom post type, se for diferente.
    'posts_per_page' => -1, // Exibe todos os posts
    'order' => 'ASC',
    'orderby' => 'title'
);
$areas_query = new WP_Query($args);
?>

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
                <h1>Áreas de atuação</h1>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="grid-areas-atuacao">
                <?php if ($areas_query->have_posts()): ?>
                    <?php while ($areas_query->have_posts()):
                        $areas_query->the_post();
                        $icon_svg = get_field("svg_area_de_atuacao");
                    ?>

                        <a href="<?php echo the_permalink(); ?>" class="item-atuacao">
                            <div class="icon-bloco">
                                <?php echo $icon_svg; ?>
                            </div>

                            <div class="separador"></div>

                            <div class="content-atuacao">
                                <h3><?php echo the_title(); ?></h3>
                                <?php echo the_excerpt(); ?>
                            </div>
                        </a>

                    <?php endwhile; ?>
                <?php else: ?>
                    <p>Nenhum post encontrado</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>




<?php get_footer(); ?>