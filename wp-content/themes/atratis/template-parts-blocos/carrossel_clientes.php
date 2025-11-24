<?php
$titulo = get_sub_field('titulo_secao');
$subtitulo = get_sub_field('subtitulo_secao');
$clientes = get_sub_field('lista_clientes');
?>

<section class="sessao-clientes ">
    <div class="container titulo-centro">

        <?php if ($titulo): ?>
            <h2 class="titulo-sec"><?php echo esc_html($titulo); ?></h2>
        <?php endif; ?>

        <?php if ($subtitulo): ?>
            <h2 class="subtitulo"><?php echo esc_html($subtitulo); ?></p>
        <?php endif; ?>

    </div>

    <div class="faixa-full">
    <div class="owl-carousel owl-clientes">

        <?php if ($clientes):
            foreach ($clientes as $item): ?>

                <?php
                $img = $item['imagem_cliente'];
                $nome = $item['nome_cliente'];
                $local = $item['local_cliente'];
                $link = $item['link_cliente'] ?: '#';
                ?>

                <div class="item-cliente">
                    <a href="<?php echo esc_url($link); ?>" class="thumb">
                        <?php if ($img): ?>
                            <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($nome); ?>">
                        <?php endif; ?>
                    </a>

                    <h3 class="nome-cliente"><?php echo esc_html($nome); ?></h3>
                    <p class="local-cliente"><?php echo esc_html($local); ?></p>
                </div>

            <?php endforeach; endif; ?>

    </div>
    </div>

</section>