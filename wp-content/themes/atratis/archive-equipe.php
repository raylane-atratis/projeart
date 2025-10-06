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
                <h1>Equipe</h1>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="grid-equipe">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()):
                        the_post();

                        $nome = get_field("nome");
                        $cargo = get_field("cargo");
                        $areas_de_atuacao = get_field("areas_de_atuacao");
                        $lista_contato = get_field("lista_contato");
                    ?>

                        <div class="item-equipe">
                            <div class="content-img">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="img-equipe">
                            </div>
                            <div class="content-equipe">
                                <div class="title">
                                    <h3><?php echo $nome; ?></h3>
                                    <small><?php echo $cargo; ?></small>

                                    <h4>Áreas de atuação</h4>
                                    <p><?php echo $areas_de_atuacao; ?></p>

                                    <div class="lista-contato">
                                        <?php foreach ($lista_contato as $item): ?>
                                            <a href="<?php echo $item['link'];?>" target="_blank" class="item-contato">
                                                <div class="svg-icon">
                                                    <?php echo $item['svg']; ?>
                                                </div>

                                                <p><?php echo $item['titulo']; ?></p>
                                            </a>

                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                
                                <a href="<?php echo the_permalink(); ?>" class="btn-padrao btn-saiba-mais">Saiba mais</a>
                            </div>
                            
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