<?php

$endereco = get_field('endereco', 'option');
$link_endereco = get_field('link_endereco', 'option');
$titulo_endereco = get_field('titulo_endereco', 'option');

$endereco_dois = get_field('endereco_dois', 'option');
$link_endereco_dois = get_field('link_endereco_dois', 'option');
$titulo_endereco_dois = get_field('titulo_endereco_dois', 'option');

$acf_rodape_imagem_certificacao = get_field('acf-rodape-imagem-certificacao', 'option');
$acf_rodape_titulo_certificacao = get_field('acf-rodape-titulo-certificacao', 'option');


$redes_sociais = get_field('redes_sociais', 'option');
$lista_contatos = get_field('lista_contatos', 'option');
$descricao_footer = get_field('descricao_footer', 'option');

?>




<footer>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="coluna-um">
                    <div class="menu-footer">
                        <h4>Navegue</h4>
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
            </div>

            <div class="col-lg-4">
                <div class="coluna-dois">
                    <h4></h4>
                    <div class="enderecos">
                        <div class="unidades unidade-um">
                            <div class="icon-svg">
                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.85324 5.80019L23.0379 26.1855M2.85324 5.80019C3.60424 4.91326 4.72593 4.35019 5.97913 4.35019H12.8027M2.85324 5.80019C2.24923 6.51354 1.88501 7.43639 1.88501 8.44431V23.4561C1.88501 25.7172 3.71801 27.5502 5.97913 27.5502H20.9909C23.252 27.5502 25.085 25.7172 25.085 23.4561V17.3149M12.8027 17.3149L3.93207 26.1855M22.475 6.09019V6.00297M27.115 5.98932C27.115 9.01541 22.475 13.0502 22.475 13.0502C22.475 13.0502 17.835 9.01541 17.835 5.98932C17.835 3.48243 19.9124 1.4502 22.475 1.4502C25.0376 1.4502 27.115 3.48243 27.115 5.98932Z"
                                        stroke="#0C7EFF" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>

                            <div class="dados-unidades">
                                <h3><?php echo $titulo_endereco; ?></h3>
                                <p><?php echo $endereco; ?></p>
                                <a href="<?php echo $link_endereco; ?>" target="_blank">

                                    <small>> Ver mapa</small>
                                </a>
                            </div>
                        </div>
                        <div class="unidades unidade-dois">
                            <div class="icon-svg">
                                <svg width="29" height="29" viewBox="0 0 29 29" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.85324 5.80019L23.0379 26.1855M2.85324 5.80019C3.60424 4.91326 4.72593 4.35019 5.97913 4.35019H12.8027M2.85324 5.80019C2.24923 6.51354 1.88501 7.43639 1.88501 8.44431V23.4561C1.88501 25.7172 3.71801 27.5502 5.97913 27.5502H20.9909C23.252 27.5502 25.085 25.7172 25.085 23.4561V17.3149M12.8027 17.3149L3.93207 26.1855M22.475 6.09019V6.00297M27.115 5.98932C27.115 9.01541 22.475 13.0502 22.475 13.0502C22.475 13.0502 17.835 9.01541 17.835 5.98932C17.835 3.48243 19.9124 1.4502 22.475 1.4502C25.0376 1.4502 27.115 3.48243 27.115 5.98932Z"
                                        stroke="#0C7EFF" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>

                            <div class="dados-unidades">
                                <h3><?php echo $titulo_endereco_dois; ?></h3>
                                <p><?php echo $endereco_dois; ?></p>
                                <a href="<?php echo $link_endereco_dois; ?>" target="_blank">
                                    ><small> Ver mapa</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="coluna-tres">
                    <div class="certificao-bloco">
                        <h4><?php echo $acf_rodape_titulo_certificacao; ?></h4>
                        <img src="<?php echo $acf_rodape_imagem_certificacao['url']; ?>"
                            alt="<?php echo $acf_rodape_imagem_certificacao['alt']; ?>">
                    </div>

                    <div class="redes-sociais">
                        <p>Siga-nos: </p>
                        <ul>
                            <?php foreach ($redes_sociais as $redes_social): ?>
                                <li>
                                    <a href="<?php echo $redes_social['link_icone']; ?>" target="_blank">
                                        <?php echo $redes_social['svg']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="telefone">
                        <a href="<?php echo $lista_contatos[0]['link']; ?>" target="_blank">Telefone:
                            <span><?php echo $lista_contatos[0]['contato']; ?></span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="final">
        <div class="container">
            <div class="row">
                <div class="col-12 content-final">

                    <div class="descricao-footer">
                        <p style="color: #1A1A37">
                            <?php echo $descricao_footer; ?>
                        </p>


                    </div>

                    <div class="content-svg">
                        <svg width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 0L12.7902 13.002H31.8361C31.8361 13.002 36.1229 12.7211 37.1074 15.6722C37.1074 15.6722 37.7395 17.3591 37.5288 19.2566C37.5288 19.2566 39.7225 14.2745 37.0992 8.4343C36.1088 6.22885 34.5168 4.55721 32.9189 3.33158C30.5332 1.5019 27.6453 0.448346 24.645 0.257536C24.4425 0.244659 24.2306 0.231782 24.0129 0.218905C21.825 0.0936494 0 0 0 0Z"
                                fill="url(#paint0_linear_10043_1051)" />
                            <path
                                d="M36.686 16.4038C35.7027 13.4526 31.4147 13.7336 31.4147 13.7336H12.3699L9.50073 10.8164L3.3667 33.2969C5.71145 29.1834 16.1533 30.8105 16.1533 30.8105H19.273C21.4176 30.9077 23.8548 30.6174 26.1949 29.9384C27.9497 29.3578 29.8999 28.5829 31.362 27.6136C32.9213 26.6443 34.5789 24.9984 35.6511 23.1582C36.247 22.21 36.7703 21.1167 37.1086 19.9683C37.3123 18.0789 36.6848 16.4038 36.6848 16.4038H36.686Z"
                                fill="url(#paint1_linear_10043_1051)" />
                            <path
                                d="M16.0316 31.523C16.0316 31.523 5.58974 29.8959 3.245 34.0094L1.67871 39.7513H13.1402L16.0328 31.523H16.0316Z"
                                fill="url(#paint2_linear_10043_1051)" />
                            <defs>
                                <linearGradient id="paint0_linear_10043_1051" x1="6.95815" y1="18.6912" x2="37.4082"
                                    y2="-4.68481" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.41" stop-color="#1A1A37" />
                                    <stop offset="0.44" stop-color="#18164A" />
                                    <stop offset="0.49" stop-color="#151068" />
                                    <stop offset="0.55" stop-color="#130B80" />
                                    <stop offset="0.62" stop-color="#110793" />
                                    <stop offset="0.7" stop-color="#1004A0" />
                                    <stop offset="0.8" stop-color="#1003A7" />
                                    <stop offset="1" stop-color="#1003AA" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_10043_1051" x1="3.3667" y1="22.0567" x2="37.1507"
                                    y2="22.0567" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#4D4C4C" />
                                    <stop offset="0.58" stop-color="#E6E6E6" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_10043_1051" x1="7.11154" y1="27.07" x2="9.64476"
                                    y2="39.5148" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.42" stop-color="#1A1A37" />
                                    <stop offset="0.5" stop-color="#17154E" />
                                    <stop offset="0.65" stop-color="#140D75" />
                                    <stop offset="0.79" stop-color="#120792" />
                                    <stop offset="0.91" stop-color="#1004A3" />
                                    <stop offset="1" stop-color="#1003AA" />
                                </linearGradient>
                            </defs>
                        </svg>

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