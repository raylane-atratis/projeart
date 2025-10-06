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
                <h1>Livros</h1>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="grid-certificacoes">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()):
                        the_post();
                        ?>

                        <div class="item-galeria ">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="certificacao">
                        </div>

                    <?php endwhile; ?>
                <?php else: ?>
                    <p>Nenhum post encontrado</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="content-paginacao">
            <?php if (function_exists('pagination_function'))
                pagination_function(); ?>
        </div>
    </div>
</div>




<?php get_footer(); ?>