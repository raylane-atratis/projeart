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
                    <h4>Endereço</h4>
                    <div class="lista-enderecos">
                        <div class="endereco-um">
                            <strong>Unidade I</strong>
                            <p>
                                Rodovia BR 116, Km 19 • Rua Eduardo Sá, n° 465 • Bairro: Jabuti • CEP: 61.766-730 •
                                Eusébio (CE)
                            </p>
                            <a href="#">
                                > Ver mapa
                            </a>
                        </div>
                        <div class="endereco-dois">
                            <strong>Unidade II</strong>
                            <p>
                                Rodovia BR 116, Km 19 • Rua Neusa Freitas de Sá, n° 100 • Dist. Industrial III • Bairro:
                                Jabuti • CEP: 61.766–790 • Eusébio (CE)
                            </p>
                            <a href="#">
                                > Ver mapa
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="coluna-tres">

                    <div class="logo">
                        <img src="<?php echo $logo_png_branco['url']; ?>" alt="<?php echo $logo_png_branco['alt']; ?>">
                    </div>

                    <div class="redes-sociais">
                        <h4>Siga-nos: </h4>
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

                    <div class="contato-footer">
                        <h4>Telefone:</h4>
                        <?php foreach ($lista_contatos as $item): ?>
                            <a href="<?php echo $item['link']; ?>" class="contato-item" target="_blank">
                                <?php echo $item['svg']; ?>
                                <p><?php echo $item['contato']; ?></p>
                            </a>
                        <?php endforeach; ?>

                    </div>
                </div>


            </div>
        </div>

    </div>
    </div>

    <div class="final">
        <div class="container">
            <div class="row ">
                <div class="content-final">
                    <div class="col-5">
                        <p>
                            <strong>Projeart Estruturas Metálicas</strong> • <span style="font-weight: 400;">CNPJ:
                                41.632.928/0001-76</span>
                        </p>
                    </div>
                    <div class="col-2">
                        <div class="content-svg">
                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M25.3667 5.2206C25.2659 5.45637 25.16 5.69213 25.0659 5.93124C24.1199 8.32235 23.1772 10.7151 22.2262 13.1046C22.0178 13.6279 21.7775 14.1396 21.5473 14.6546C21.4986 14.7633 21.428 14.8636 21.3305 15.0325C21.2364 14.8636 21.1642 14.7549 21.1138 14.6379C20.4752 13.1447 19.8283 11.6548 19.2049 10.155C18.6101 8.72867 18.0404 7.29234 17.4574 5.86102C17.3566 5.61187 17.2389 5.36942 17.0944 5.05005C16.9902 5.26575 16.9062 5.41624 16.8457 5.57509C16.5718 6.29075 16.3198 7.01644 16.0325 7.72708C15.0595 10.1316 14.0766 12.5327 13.0919 14.9322C12.9726 15.2214 12.8197 15.4973 12.6416 15.8635C12.5374 15.6829 12.4651 15.5793 12.4147 15.4656C11.9476 14.3887 11.4771 13.3136 11.0234 12.2334C10.2101 10.2988 9.40691 8.36081 8.60204 6.42284C8.48441 6.14193 8.38695 5.85266 8.26933 5.57174C8.21052 5.42961 8.12818 5.29417 8.01392 5.07346C7.94167 5.24234 7.89798 5.33598 7.85933 5.43296C6.86457 7.95114 5.91015 10.4844 4.86498 12.9808C3.80974 15.4973 2.66543 17.9771 1.55641 20.4718C1.47576 20.6524 1.36317 20.818 1.26572 20.9919L1.18506 20.9835C1.13633 20.8531 1.06239 20.7243 1.04223 20.5889C0.948132 19.9535 0.828829 19.3198 0.791862 18.681C0.72801 17.5657 0.706166 16.4471 0.847313 15.3351C1.07752 13.5209 1.55305 11.7719 2.37305 10.1332C4.72383 5.4363 8.47937 2.41482 13.5943 1.21926C18.6807 0.0303994 23.394 1.03199 27.5696 4.18892C30.3505 6.29075 32.1939 9.07981 33.2542 12.3822C33.9078 14.4172 34.0876 16.5123 33.9633 18.6325C33.9011 19.701 33.7078 20.7578 33.4172 21.7928C33.3483 22.0369 33.2743 22.2894 33.0458 22.5118C32.9567 22.3613 32.8727 22.2443 32.8139 22.1155C32.1384 20.6508 31.4461 19.1927 30.7958 17.7179C29.7675 15.3853 28.7542 13.046 27.7595 10.6984C27.1294 9.21358 26.548 7.70869 25.9363 6.21717C25.7969 5.87607 25.6204 5.54833 25.4625 5.21391C25.4305 5.21726 25.3986 5.2206 25.3667 5.22395V5.2206Z"
                                    fill="white" />
                                <path
                                    d="M10.1431 19.9623C11.0656 21.8234 11.652 23.8198 12.4552 25.7394H18.1818C18.0827 25.6658 18.0255 25.6057 17.955 25.5756C17.4946 25.3716 17.1518 25.0355 16.8594 24.6392C16.0848 23.5858 15.5151 22.422 14.9808 21.2365C14.8514 20.9489 14.7405 20.6529 14.6245 20.3586C14.5893 20.2666 14.5691 20.168 14.5338 20.0392C14.6615 20.0292 14.759 20.0158 14.8564 20.0141C16.1822 20.0108 17.5097 20.0175 18.8355 20.0041C19.0925 20.0008 19.2354 20.0927 19.3278 20.3185C19.7193 21.2665 20.1226 22.2096 20.5107 23.1594C20.7914 23.8483 21.0501 24.5472 21.324 25.2395C21.3896 25.4067 21.4736 25.5672 21.5576 25.7495C23.4379 25.8565 25.3081 25.8113 27.185 25.6759C27.1481 25.6508 27.1144 25.619 27.0758 25.6023C26.4087 25.3398 25.9584 24.8465 25.6139 24.2446C25.3736 23.8232 25.1367 23.4002 24.9149 22.9687C24.5435 22.2464 24.1806 21.519 23.8227 20.79C23.6933 20.5292 23.5757 20.2599 23.6177 19.9573C23.8865 19.872 26.6574 19.8185 27.5379 19.8837C27.6017 20.0208 27.6841 20.1763 27.7496 20.3402C28.4251 22.0257 29.0956 23.7128 29.7694 25.3983C29.8231 25.5321 29.8836 25.6642 29.9542 25.8247H31.5186C31.4211 26.0638 31.3741 26.2628 31.2682 26.4216C30.9725 26.8614 30.6767 27.3045 30.3373 27.7092C28.1865 30.2742 25.5299 32.1051 22.3171 33.1167C20.4368 33.7087 18.5095 33.9344 16.5468 33.824C13.2181 33.6384 10.1767 32.6285 7.49659 30.6186C5.36929 29.0234 3.70408 27.047 2.47744 24.6944C2.21531 24.1927 2.19346 23.7296 2.41023 23.2112C2.83703 22.1929 3.23023 21.1595 3.63183 20.1295C3.70744 19.9339 3.7965 19.8135 4.04351 19.8185C6.0263 19.8653 8.00909 19.8971 9.99188 19.9356C10.0255 19.9356 10.0591 19.9456 10.1448 19.9606L10.1431 19.9623Z"
                                    fill="white" />
                                <path
                                    d="M4.07324 19.1643C4.93693 16.8217 5.82079 14.5242 6.7937 12.2635C7.06927 12.312 7.10624 12.506 7.17177 12.6649C7.71956 13.9875 8.25895 15.3135 8.80841 16.6361C9.07223 17.2715 9.35116 17.9002 9.61833 18.5339C9.68723 18.6978 9.76116 18.8667 9.68891 19.0456C9.41837 19.1459 4.51349 19.2563 4.07492 19.1626L4.07324 19.1643Z"
                                    fill="white" />
                                <path
                                    d="M18.7359 19.0186C18.5057 19.032 18.3041 19.0554 18.1041 19.0554C17.5496 19.0554 16.9934 19.0354 16.4389 19.0404C15.7937 19.0437 15.1484 19.0554 14.5032 19.0805C14.1352 19.0939 13.905 18.9401 13.7605 18.6107C13.6093 18.2645 13.5706 17.9268 13.7168 17.5639C14.2814 16.151 14.8325 14.7314 15.3921 13.3168C15.4912 13.066 15.6038 12.8185 15.7181 12.5744C15.7685 12.4673 15.8424 12.3704 15.9096 12.26C16.2205 12.6128 18.5864 18.2779 18.7359 19.0203V19.0186Z"
                                    fill="white" />
                                <path
                                    d="M27.1896 19.2043C27.04 19.2043 26.9325 19.2043 26.8249 19.2043C25.6806 19.1859 24.538 19.1625 23.3937 19.1525C23.1971 19.1508 23.0711 19.0873 22.9921 18.9134C22.7905 18.4736 22.5603 18.0439 22.3905 17.5908C22.3217 17.4068 22.3233 17.1577 22.3855 16.9687C22.6443 16.1762 22.9266 15.392 23.2206 14.6128C23.4676 13.959 23.7382 13.3152 24.0037 12.6681C24.0625 12.5276 24.1465 12.3972 24.2255 12.2534C24.4288 12.337 24.4641 12.4992 24.5212 12.638C25.1816 14.2432 25.8386 15.8501 26.4956 17.457C26.6922 17.9369 26.8888 18.4168 27.0837 18.8967C27.1156 18.9769 27.1408 19.0605 27.1896 19.2043Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>

                    <div class="col-5">
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