<section class="carrossel_servicos projetos">
    <div class="container">

        <!-- Título e Subtítulo -->
        <div class="titulo-centro">
            <?php if (get_sub_field('titulo')): ?>
                <h2><?php the_sub_field('titulo'); ?></h2>
            <?php endif; ?>

            <?php if (get_sub_field('subtitulo')): ?>
                <h2 class="subtitulo-secao"><?php the_sub_field('subtitulo'); ?></h2>
            <?php endif; ?>
        </div>

        <!-- Carrossel -->
        <div data-aos="fade-up"
     data-aos-duration="1000" class="owl-carousel owl-theme projetos-carousel">

            <?php
            $lista = get_sub_field('lista_projetos');
            if ($lista):
                foreach ($lista as $row):

                    $imagem = $row['imagem_projetos'] ?? null;
                    $titulo = $row['titulo_projetos'] ?? '';
                    $subtitulo = $row['subtitulo_projetos'] ?? '';
                    $link   = $row['link_projetos'] ?? '#';
            ?>
                    <div class="item-servico">

                        <a href="<?php echo esc_url($link); ?>" class="thumb">
                            <?php if (!empty($imagem)): ?>
                                <img src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($titulo); ?>">
                            <?php endif; ?>
                        </a>

                        <?php if (!empty($titulo)): ?>
                            <p class="titulo-projetos" style="font-weight: 700;">
                                <a href="<?php echo esc_url($link); ?>">
                                    <?php echo esc_html($titulo); ?>
                                </a>
                            </p>
                            <?php if (!empty($subtitulo)): ?>
                                <i class="subtitulo-projetos">
                                    <?php echo esc_html($subtitulo); ?>
                                </i>
                            <?php endif; ?>
                        <?php endif; ?>
    
                    </div>

            <?php
                endforeach;
            endif;
            ?>


        </div>

    </div>
</section>