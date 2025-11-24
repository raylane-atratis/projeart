<section class="carrossel_servicos">
    <div class="container">

        <!-- Título e Subtítulo -->
        <div class="titulo-centro">
            <?php if (get_sub_field('titulo_secao')): ?>
                <h2><?php the_sub_field('titulo_secao'); ?></h2>
            <?php endif; ?>

            <?php if (get_sub_field('subtitulo_secao')): ?>
                <h2 class="subtitulo-secao"><?php the_sub_field('subtitulo_secao'); ?></h2>
            <?php endif; ?>
        </div>

        <!-- Carrossel -->
        <div class="owl-carousel owl-theme servicos-carousel">

            <?php
            $lista = get_sub_field('lista_servicos');

            if ($lista):
                foreach ($lista as $row):

                    $imagem = $row['imagem_servico'] ?? null;
                    $titulo = $row['titulo_servico'] ?? '';
                    $link   = $row['link_servico'] ?? '#';
            ?>
                    <div class="item-servico">

                        <a href="<?php echo esc_url($link); ?>" class="thumb">
                            <?php if (!empty($imagem)): ?>
                                <img src="<?php echo esc_url($imagem['url']); ?>" alt="<?php echo esc_attr($titulo); ?>">
                            <?php endif; ?>
                        </a>

                        <?php if (!empty($titulo)): ?>
                            <h3 class="titulo-servico" style="font-weight: 700;">
                                <a href="<?php echo esc_url($link); ?>">
                                    <?php echo esc_html($titulo); ?>
                                </a>
                            </h3>
                        <?php endif; ?>
    
                    </div>

            <?php
                endforeach;
            endif;
            ?>


        </div>

    </div>
</section>