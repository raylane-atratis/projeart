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
            <div class="grid-livros">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()):
                        the_post();
                        $link_post_livro = get_field("link_post_livro");
                        ?>

                        <a href="<?php echo $link_post_livro ? $link_post_livro : ''; ?>" class="item-livro">
                            <div class="icon-bloco">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                            </div>

                            <div class="content-livro">
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

    <div class="row">
        <div class="content-paginacao">
            <?php if (function_exists('pagination_function'))
                pagination_function(); ?>
        </div>
    </div>
</div>




<?php get_footer(); ?>