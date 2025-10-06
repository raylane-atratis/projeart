<?php get_header(); ?>

<div class="interna animated fadeIn">
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
                    <h1>Materiais Gratuitos</h1>
                </div>
            </div>
        </div>

    </div>


    <section class="blog_">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="grid-materiais-gratuitos">
                        <?php if (have_posts()): ?>
                            <div class="row">
                                <?php while (have_posts()) : the_post();
                                    $link_do_material = get_field("link_do_material");
                                    $cta_do_post = get_field("cta_do_post");
                                ?>
                                    <div class="col-lg-6">
                                        <article class="item">
                                            <a href="<?php echo $link_do_material; ?>" target="_blank" class="content-card">
                                                <div class="img">
                                                    <img src="<?php the_post_thumbnail_url() ?>" alt="">
                                                </div>

                                                <div class="content-title">
                                                    <h3><?php echo the_title(); ?></h3>
                                                    <?php
                                                    $_the_excerpt = get_the_excerpt();
                                                    $the_excerpt = substr($_the_excerpt, 0, 200);
                                                    ?>

                                                    <small>
                                                        <?php echo $cta_do_post ? $cta_do_post : 'saiba mais'; ?>
                                                    </small>
                                                </div>
                                            </a>

                                        </article>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php else: ?>
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <div class="alert alert-warning" role="alert">
                                        Ainda não há postagens vinculados a esta categoria.
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>

                <div class="col-lg-4">
                    <?php get_sidebar('materiais-gratuitos'); ?>
                </div>


            </div>

            <div class="row">
                <div class="content-paginacao">
                    <?php if (function_exists('pagination_function')) pagination_function(); ?>
                </div>
            </div>
        </div>
    </section>



</div>

<?php get_footer(); ?>