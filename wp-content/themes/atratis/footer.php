<?php
$logo_svg = get_field('logo_svg', 'option');
$logo_png = get_field('logo_png', 'option');
$logo_png_branco = get_field('logo_png_branca', 'option');

$background_footer = get_field('background_footer', 'option');
$redes = get_field('redes_sociais', 'option');

$descricao_footer = get_field('descricao_footer', 'option');

$endereco = get_field('endereco', 'option');
$link_endereco = get_field('link_endereco', 'option');
$contatos_atendimento = get_field('contatos_atendimento', 'option');

$lista_contatos = get_field('lista_contatos', 'option');

$link_de_compra_dos_produtos = get_field('link_de_compra_dos_produtos', 'option');

$cnpj = get_field('cnpj', 'option');

$titulo_newsletter = get_field('titulo_newsletter', 'option');
$descricao_newsletter = get_field('descricao_newsletter', 'option');
$texto_cta_newsletter = get_field('texto_cta_newsletter', 'option');
$link_cta_newsletter = get_field('link_cta_newsletter', 'option');

$lista_contatos_ouvidoria = get_field('lista_contatos_ouvidoria', 'option');

?>




<footer data-aos="fade-up" data-aos-duration='1000'>

    <div class="container-footer">

        <div class="newsletter-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text">
                            <h2><?php echo $titulo_newsletter; ?></h2>
                            <p><?php echo $descricao_newsletter; ?></p>
                            <a href="<?php echo $link_cta_newsletter; ?>" class="btn-padrao">
                                <?php echo $texto_cta_newsletter; ?>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="lista-menus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="menu-footer">
                            <h3>Menu</h3>
                            <?php
                            wp_nav_menu([
                                'menu' => 'Menu Fotter',
                                'theme_location' => 'menu_footer',
                                'container' => 'div',
                                'container_id' => '',
                                'container_class' => '',
                                'menu_id' => false,
                                'menu_class' => 'navbar-nav mr-auto',
                            ]);
                            ?>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="endereco-footer">
                            <h3>Endereço</h3>
                            <a href="<?php echo $link_endereco; ?>" target="_blank"><?php echo $endereco; ?></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="contato-footer">
                            <h3>Contatos</h3>
                            <?php foreach ($lista_contatos as $item): ?>
                                <a href="<?php echo $item['link']; ?>" class="contato-item" target="_blank">
                                    <?php echo $item['svg']; ?>
                                    <p><?php echo $item['contato']; ?></p>
                                </a>
                            <?php endforeach; ?>

                            <h3>Ouvidoria</h3>
                            <?php foreach ($lista_contatos_ouvidoria as $item): ?>
                                <a href="<?php echo $item['link']; ?>" class="contato-item" target="_blank">
                                    <?php echo $item['svg']; ?>
                                    <p><?php echo $item['contato']; ?></p>
                                </a>
                            <?php endforeach; ?>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <h3>LGPD</h3>
                        <?php
                        wp_nav_menu([
                            'menu' => 'Menu LGPD',
                            'theme_location' => 'menu_lgpd',
                            'container' => 'div',
                            'container_id' => '',
                            'container_class' => '',
                            'menu_id' => false,
                            'menu_class' => 'navbar-nav mr-auto',
                        ]);
                        ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="final">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="container-final">
                            <div class="content-final">
                                <div class="logo-footer">
                                    <a href="<?php echo get_home_url(); ?>">
                                        <img src="<?php echo $logo_png_branco['url'] ?>"
                                            alt="<?php echo $logo_png_branco['alt'] ?>">
                                    </a>
                                </div>

                                <div class="separador"></div>

                                <div class="redes-sociais">
                                    <p>Siga-nos:</p>
                                    <ul>
                                        <?php foreach ($redes as $item) {
                                            ?>
                                            <li>
                                                <a href="<?php echo $item['link_icone'] ?>" target="_blank">
                                                    <?php echo $item['svg'] ?>
                                                </a>
                                            </li>
                                            <?php
                                        } ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="assinatura">
                                <h2>
                                    <a href="http://www.atratis.com.br" target="_blank" class="ir"
                                        title="Site criado pela agência Atratis Digital de Fortaleza - Ceará. Inbound Marketing, Criação de Sites, Mídias Sociais e mais.">Site
                                        criado por Atratis, uma agência de comunicação digital de Fortaleza - Ceará</a>
                                </h2>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>

</footer>


<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>


<script>
    Fancybox.bind('[data-fancybox]', {
        Carousel: {
            infinite: false,
        },
    });  
</script>

<script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const players = Array.from(document.querySelectorAll('.player')).map(p => new Plyr(p));
    });
</script>

<?php echo get_field('acf-rodape-codigo', 'option'); ?>

<?php wp_footer(); ?>
</body>

</html>