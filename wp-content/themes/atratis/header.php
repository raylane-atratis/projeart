<?php
/**
 * O header do tema.
 *
 * Este arquivo exibe todo o conteúdo da tag <head> e tudo até o conteúdo principal.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aguiar Advogados
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/build/css/all.css">

    <?php
    // Hook do WordPress para plugins e scripts do tema.
    wp_head();

    // Campo ACF para códigos personalizados no <head>.
    if (function_exists('get_field')) {
        echo get_field('acf-header-codigo', 'option');
    }
    ?>
</head>

<body <?php body_class(); ?>>
    <?php
    wp_body_open();

    // Campo ACF para códigos personalizados após a abertura do <body>.
    if (function_exists('get_field')) {
        echo get_field('acf-body-codigo', 'option');
    }

    // =========================================================================
    // Coleta de Dados do Header via ACF (Advanced Custom Fields)
    // =========================================================================
    $logo_svg = get_field('logo_svg', 'option');
    $logo_png = get_field('logo_png', 'option');
    $logo_png_branco = get_field('logo_png_branca', 'option');
    $texto_btn = get_field('texto_btn', 'option');
    $link_btn = get_field('link_btn', 'option');
    $redes_sociais = get_field('redes_sociais', 'option');
    $links_topo = get_field('links_topo', 'option');
    $is_full_topo = get_field('add_top_full', 'option');


    // =========================================================================
    // Componentes Reutilizáveis do Header
    // Para evitar duplicação, o HTML de componentes repetidos é gerado aqui.
    // =========================================================================
    
    // --- Componente: Botão de Busca ---
    ob_start();
    ?>
    <a data-toggle="tooltip" data-placement="bottom" title="Pesquisar" href="#" class="busca_bt abrir_pesquisa">
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M11.7377 13.0241C10.2756 14.159 8.43603 14.6941 6.59337 14.5204C4.75071 14.3467 3.0435 13.4773 1.81924 12.0891C0.594977 10.7009 -0.0543033 8.89837 0.00356021 7.04831C0.0614237 5.19826 0.822082 3.43979 2.1307 2.13085C3.43954 0.822141 5.19789 0.0614281 7.04781 0.00356046C8.89773 -0.0543072 10.7002 0.59502 12.0882 1.81937C13.4763 3.04372 14.3457 4.75105 14.5194 6.59384C14.6931 8.43663 14.158 10.2764 13.0231 11.7385L16.7097 15.4254C16.8295 15.5366 16.917 15.678 16.9631 15.8347C17.0092 15.9915 17.0122 16.1578 16.9717 16.3161C16.9312 16.4744 16.8488 16.6188 16.7331 16.7342C16.6175 16.8496 16.4728 16.9316 16.3144 16.9717C16.1563 17.0121 15.9902 17.0092 15.8336 16.9633C15.677 16.9174 15.5356 16.8303 15.4243 16.7109L11.7377 13.0241ZM12.7321 7.27548C12.7429 6.55218 12.6097 5.83396 12.3404 5.16259C12.0711 4.49122 11.671 3.88011 11.1634 3.36481C10.6557 2.8495 10.0507 2.44029 9.38345 2.16098C8.71621 1.88166 8.00011 1.73782 7.27678 1.73782C6.55345 1.73782 5.83735 1.88166 5.17011 2.16098C4.50288 2.44029 3.89785 2.8495 3.39021 3.36481C2.88256 3.88011 2.48245 4.49122 2.21313 5.16259C1.94381 5.83396 1.81068 6.55218 1.82146 7.27548C1.84282 8.70834 2.42698 10.0753 3.44772 11.081C4.46847 12.0867 5.84387 12.6505 7.27678 12.6505C8.70969 12.6505 10.0851 12.0867 11.1058 11.081C12.1266 10.0753 12.7107 8.70834 12.7321 7.27548Z"
                fill="#fff" />
        </svg>
    </a>
    <?php
    $search_button_html = ob_get_clean();

    // --- Componente: Links de Redes Sociais ---
    ob_start();
    if (!empty($redes_sociais)): ?>
        <ul class="social-links-list">
            <?php foreach ($redes_sociais as $item): ?>
                <li>
                    <a href="<?php echo esc_url($item['link_icone']); ?>" target="_blank" rel="noopener noreferrer">
                        <?php echo $item['svg']; // Assumindo que o SVG é seguro. ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif;
    $social_links_html = ob_get_clean();
    ?>

    <!-- ======================================================================= -->
    <!-- Header Desktop                                                          -->
    <!-- ======================================================================= -->
    <header style="border-bottom: <?php echo !is_home() ? '1px solid #cad1eb' : 'none'; ?>;" class="desktop menupc">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between flex-wrap header-efeito-blur">
                        <div class="logo-selo">
                            <a href="<?php echo home_url(); ?>">
                                <?php if ($logo_svg): ?>
                                    <?php echo $logo_svg; ?>
                                <?php else: ?>
                                    <img src="<?php echo esc_url($logo_png['url']); ?>"
                                        alt="<?php echo esc_attr($logo_png['alt']); ?>">
                                <?php endif; ?>
                            </a>
                        </div>

                        <div class="content-header-two-cols">
                            <?php if ($links_topo): ?>
                                <div class="nav-top">
                                    <div class="items-links">
                                        <?php foreach ($links_topo as $item_top): ?>
                                            <div class="menu-item">
                                                <a href="<?php echo esc_url($item_top['link_topo']); ?>"
                                                    class="<?php echo $item_top["is_btn"] ? "btn-secundario" : ""; ?>">
                                                    <?php echo $item_top['svg_link_topo']; ?>
                                                    <?php echo $item_top['texto_link_topo']; ?>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                        <?php echo $search_button_html; ?>
                                        <?php echo $social_links_html; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="content-menu-justify">
                                <nav class="navbar navbar-expand-md">
                                    <?php
                                    wp_nav_menu([
                                        'menu' => 'Menu Principal',
                                        'theme_location' => 'principal',
                                        'container' => 'div',
                                        'container_id' => 'bs4navbar',
                                        'container_class' => 'collapse navbar-collapse',
                                        'menu_id' => false,
                                        'menu_class' => 'navbar-nav mr-auto',
                                        'depth' => 10,
                                        'fallback_cb' => 'bs4navwalker::fallback',
                                        'walker' => new bs4navwalker()
                                    ]);
                                    ?>
                                </nav>
                                <!-- <div class="links">
                                    <a href="<?php echo esc_url($link_btn); ?>" class="btn-padrao"
                                        style="margin-top: 0;">
                                        <?php echo $texto_btn; ?>
                                    </a>
                                    <?php if (!$links_topo): ?>
                                        <?php echo $social_links_html; ?>
                                        <?php echo $search_button_html; ?>
                                    <?php endif; ?>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ======================================================================= -->
    <!-- Modal de Pesquisa                                                       -->
    <!-- ======================================================================= -->
    <div class="pesquisa_full">
        <button class="fechar_pesquisa" aria-label="Fechar pesquisa">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                <path
                    d="M242.7 256l100.1-100.1c12.3-12.3 12.3-32.2 0-44.5l-22.2-22.2c-12.3-12.3-32.2-12.3-44.5 0L176 189.3 75.9 89.2c-12.3-12.3-32.2-12.3-44.5 0L9.2 111.5c-12.3 12.3-12.3 32.2 0 44.5L109.3 256 9.2 356.1c-12.3 12.3-12.3 32.2 0 44.5l22.2 22.2c12.3 12.3 32.2 12.3 44.5 0L176 322.7l100.1 100.1c12.3 12.3 32.2 12.3 44.5 0l22.2-22.2c12.3-12.3 12.3-32.2 0-44.5L242.7 256z" />
            </svg>
        </button>
        <div class="conteudo">
            <form class="search" id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <label for="search" id="label_for" class="sr-only">Campo de busca</label>
                <input id="search" type="text" name="s" placeholder="Digite sua busca" required
                    value="<?php the_search_query(); ?>">
                <button type="submit" style="display: none;"></button>
                <span>Insira as palavras-chave da sua pesquisa e pressione Enter.</span>
            </form>
        </div>
    </div>

    <!-- ======================================================================= -->
    <!-- Placeholder para o Header Fixo                                          -->
    <!-- ======================================================================= -->
    <?php
    $placeholder_needed = true;
    $placeholder_class = 'header-placeholder';
    $placeholder_style = '';

    if (is_home() || is_front_page()) {
        if ($is_full_topo) {
            $placeholder_needed = false;
        } else {
            if ($links_topo) {
                $placeholder_class .= ' link-top-placeholder';
            } else {
                $placeholder_style = 'height: 102px;';
            }
        }
    }
    // Para páginas internas, o placeholder padrão é usado.
    
    if ($placeholder_needed): ?>
        <div class="<?php echo $placeholder_class; ?>" style="<?php echo $placeholder_style; ?>"></div>
    <?php endif; ?>


    <!-- ======================================================================= -->
    <!-- Header Mobile                                                           -->
    <!-- ======================================================================= -->
    <header class="mob_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-9">
                    <a href="<?php echo home_url(); ?>" class="marca">
                        <?php if ($logo_png_branco): ?>
                            <img src="<?php echo esc_url($logo_png_branco['url']); ?>"
                                alt="<?php echo esc_attr($logo_png_branco['alt']); ?>">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="col-3">
                    <a id="menuBtn" onclick="toggleNave()" class="hamb icon-menu">
                        <div class="sc-mob-menu__trigger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- ======================================================================= -->
    <!-- Sidenav (Menu Mobile)                                                   -->
    <!-- ======================================================================= -->
    <div id="mySidenav" class="sidenav">
        <nav class="navbar">
            <?php
            wp_nav_menu([
                'menu' => 'Menu Principal',
                'theme_location' => 'principal',
                'container' => '',
                'menu_class' => 'navbar-nav mr-auto',
                'walker' => new bs4navwalker()
            ]);

            echo $social_links_html;
            ?>

            <div class="items-links">
                <?php if ($links_topo):
                    foreach ($links_topo as $item_top): ?>
                        <div class="menu-item">
                            <a href="<?php echo esc_url($item_top['link_topo']); ?>"
                                class="btn-padrao <?php echo $item_top["is_btn"] ? "btn-secundario" : ""; ?>">
                                <?php echo $item_top['svg_link_topo']; ?>
                                <?php echo $item_top['texto_link_topo']; ?>
                            </a>
                        </div>
                    <?php endforeach;
                endif; ?>
            </div>

            <a style="display: table; margin: 0 auto;" href="<?php echo esc_url($link_btn); ?>" class="btn-padrao">
                <?php echo $texto_btn; ?>
            </a>
        </nav>

        <div class="links">
            <?php
            if (have_rows('botoes_cta', "option")):
                while (have_rows('botoes_cta', "option")):
                    the_row();
                    $botao_texto = get_sub_field('botao_texto');
                    $botao_cor = get_sub_field('botao_cor');
                    $botao_link = get_sub_field('botao_link');
                    $nova_aba = get_sub_field('abrir_outra_aba');

                    $style_attr = 'width: 90%; margin: 10px auto; display: block;';
                    if ($botao_cor) {
                        $style_attr .= " background-color: {$botao_cor};";
                    }
                    $target_attr = $nova_aba ? "target='_blank' rel='noopener noreferrer'" : "";
                    ?>
                    <div class="links">
                        <a href="<?php echo esc_url($botao_link); ?>" class="bt__padrao"
                            style="<?php echo esc_attr($style_attr); ?>" <?php echo $target_attr; ?>>
                            <?php echo $botao_texto; ?>
                        </a>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>