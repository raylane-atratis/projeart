<?php
$titulo = get_sub_field('titulo_secao');
$subtitulo = get_sub_field('subtitulo_secao');
$clientes = get_sub_field('lista_clientes');
?>

<section class="sessao-clientes ">
    <div class="container titulo-centro align-center justify-content-center">
        <div class="row">
            <div class="col-12">

        <?php if ($titulo): ?>
            <h2 class="titulo-sec"><?php echo esc_html($titulo); ?></h2>
        <?php endif; ?>

        <?php if ($subtitulo): ?>
            <h2 class="subtitulo"><?php echo esc_html($subtitulo); ?></p>
            <?php endif; ?>
            </div>
        </div>  
    </div>

    <div class="faixa-full mb-5">
        <div class="owl-carousel owl-clientes owl-theme">

            <?php if ($clientes):
                foreach ($clientes as $item): ?>

                    <?php
                    $img = $item['imagem_cliente'];
                    $link = $item['link_cliente'] ?: '#';
                    ?>

                    <div class="item-cliente">
                        <a href="<?php echo esc_url($link); ?>" class="thumb">
                            <?php if ($img): ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($nome); ?>">
                            <?php endif; ?>
                        </a>
                    </div>

                <?php endforeach; endif; ?>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 align-center text-center">
                <a href="<?php echo esc_url(get_sub_field('link_page'));
                ?>"><button>Ver Todas</button></a>
            </div>
        </div>
    </div>

</section>