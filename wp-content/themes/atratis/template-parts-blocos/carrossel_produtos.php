<section class="carrossel_servicos" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="500">
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
        <div class="owl-carousel owl-theme produtos-carousel">

            <?php
            $lista = get_sub_field('lista_produtos');

            if ($lista):
                foreach ($lista as $row):

                    $imagem = $row['imagem_produtos'] ?? null;
                    $titulo = $row['titulo_produtos'] ?? '';
                    $link   = $row['link_produtos'] ?? '#';
            ?>
                    <div class="item-servico">

                        <a href="<?php echo esc_url($link); ?>" class="thumb">
                            <?php if (!empty($imagem)): ?>
                                <img src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($titulo); ?>">
                            <?php endif; ?>
                        </a>

                        <?php if (!empty($titulo)): ?>
                            <p class="titulo-servico" style="font-weight: 300; font-size: 22px; max-width: 170px;">
                                <a href="<?php echo esc_url($link); ?>">
                                    <?php echo esc_html($titulo); ?>
                                </a>
                            </p>
                        <?php endif; ?>
    
                    </div>

            <?php
                endforeach;
            endif;
            ?>


        </div>

    </div>
</section>