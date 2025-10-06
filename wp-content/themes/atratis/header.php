<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aguiar Advogados <?php wp_title(); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    
     <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
    />
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/build/css/all.css">

    <?php echo get_field('acf-header-codigo', "option"); ?>
    
    <?php wp_head(); ?>
</head>
<body>

    <?php echo get_field('acf-body-codigo', "option"); ?>
    
    <?php 
        $logo_svg = get_field('logo_svg', 'option');
        $logo_png = get_field('logo_png', 'option');
        $logo_png_branco = get_field('logo_png_branca', 'option');

        $texto_btn = get_field('texto_btn', 'option');
        $link_btn = get_field('link_btn', 'option');

        $redes = get_field('redes_sociais', 'option');
        $links_topo = get_field('links_topo', 'option');

        $is_full_topo = get_field('add_top_full', 'option')
    ?>

    <header style="border-bottom: <?php echo !is_home() ? '1px solid #cad1eb' : '';?>;" class="desktop menupc">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between flex-wrap header-efeito-blur">
                        <div class="logo-selo">

                            <a href="<?php echo get_home_url(); ?>">
                                <?php if($logo_svg): ?>
                                    <?php echo $logo_svg;?>
                                <?php else: ?>
                                    <img src="<?php echo $logo_png['url']?>" alt="<?php echo $logo_png['alt']?>">
                                <?php endif;?>
                            </a>
                        </div>

                                
                        <div class="content-header-two-cols">

                            <?php if($links_topo): ?>
                            <div class="nav-top">
                                    <div class="items-links">
                                        <?php foreach($links_topo as $index => $item_top){ // Adicionando um índice para identificação ?>
                                            <div class="menu-item ">
                                                <a href="<?php echo $item_top['link_topo']?>" class="<?php echo $item_top["is_btn"] ? "btn-secundario" : "";?>">
                                                    <?php echo $item_top['svg_link_topo']?>
                                                    <?php echo $item_top['texto_link_topo']?>
                                                </a>

                                                <!-- <?php if (!empty($item_top['is_submenu'])) { // Verifica se há sublinks ?>
                                                    <div class="submenu">
                                                        <?php foreach($item_top['submenu'] as $subIndex => $sub_link) { ?>
                                                            <a href="#iframeModal-<?php echo $subIndex+1;?>" class="open-modal" data-modal="iframeModal-<?php echo $subIndex+1;?>">
                                                                <?php echo $sub_link['titulo'];?>
                                                            </a>
                                                        <?php } ?>
                                                    </div>
                                                <?php } ?> -->
                                            </div>
                                            
                                        <?php } ?>
                                        <!-- Se existir links no topo, mostrar rede socias na linha de cima -->
                                        <?php if($links_topo):?>
                                                <a data-toggle="tooltip" data-placement="bottom" title="Pesquisar" href="#" class="busca_bt abrir_pesquisa">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.7377 13.0241C10.2756 14.159 8.43603 14.6941 6.59337 14.5204C4.75071 14.3467 3.0435 13.4773 1.81924 12.0891C0.594977 10.7009 -0.0543033 8.89837 0.00356021 7.04831C0.0614237 5.19826 0.822082 3.43979 2.1307 2.13085C3.43954 0.822141 5.19789 0.0614281 7.04781 0.00356046C8.89773 -0.0543072 10.7002 0.59502 12.0882 1.81937C13.4763 3.04372 14.3457 4.75105 14.5194 6.59384C14.6931 8.43663 14.158 10.2764 13.0231 11.7385L16.7097 15.4254C16.8295 15.5366 16.917 15.678 16.9631 15.8347C17.0092 15.9915 17.0122 16.1578 16.9717 16.3161C16.9312 16.4744 16.8488 16.6188 16.7331 16.7342C16.6175 16.8496 16.4728 16.9316 16.3144 16.9717C16.1563 17.0121 15.9902 17.0092 15.8336 16.9633C15.677 16.9174 15.5356 16.8303 15.4243 16.7109L11.7377 13.0241ZM12.7321 7.27548C12.7429 6.55218 12.6097 5.83396 12.3404 5.16259C12.0711 4.49122 11.671 3.88011 11.1634 3.36481C10.6557 2.8495 10.0507 2.44029 9.38345 2.16098C8.71621 1.88166 8.00011 1.73782 7.27678 1.73782C6.55345 1.73782 5.83735 1.88166 5.17011 2.16098C4.50288 2.44029 3.89785 2.8495 3.39021 3.36481C2.88256 3.88011 2.48245 4.49122 2.21313 5.16259C1.94381 5.83396 1.81068 6.55218 1.82146 7.27548C1.84282 8.70834 2.42698 10.0753 3.44772 11.081C4.46847 12.0867 5.84387 12.6505 7.27678 12.6505C8.70969 12.6505 10.0851 12.0867 11.1058 11.081C12.1266 10.0753 12.7107 8.70834 12.7321 7.27548Z" fill="#ED4300"/>
                                                    </svg>
                                                </a>

                                                

                                                <ul>
                                                    <?php foreach($redes as $item){
                                                        ?>
                                                            <li>
                                                                <a href="<?php echo $item['link_icone']?>" target="_blank">
                                                                    <?php echo $item['svg']?>
                                                                </a>
                                                            </li>
                                                        <?php
                                                    }?>
                                                </ul>
                                        <?php endif;?>

                                    </div>


                                
                                
                                
                            </div>
                            <?php endif;?>

                            <div class="content-menu-justify">
                                <nav class="navbar navbar-expand-md">
                                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <?php
                                        wp_nav_menu([
                                            'menu'            => 'Menu Principal',
                                            'theme_location'  => 'principal',
                                            'container'       => 'div',
                                            'container_id'    => 'bs4navbar',
                                            'container_class' => 'collapse navbar-collapse',
                                            'menu_id'         => false,
                                            'menu_class'      => 'navbar-nav mr-auto',
                                            'depth'           => 10,
                                            'fallback_cb'     => 'bs4navwalker::fallback',
                                            'walker'          => new bs4navwalker()
                                        ]);
                                        ?>
                                    </div>
                                </nav>
                                <div class="links">
                                    

                                    <a href="<?php echo $link_btn;?>" class="btn-padrao" style="margin-top: 0;">
                                        <?php echo $texto_btn;?>
                                    </a>

                                    <!-- Se não existir links no topo, mostrar rede socias em uma linha -->
                                    <?php if(!$links_topo): ?>

                                        

                                        <ul>
                                            <?php foreach($redes as $item){
                                                ?>
                                                    <li>
                                                        <a href="<?php echo $item['link_icone']?>" target="_blank">
                                                            <?php echo $item['svg']?>
                                                        </a>
                                                    </li>
                                                <?php
                                            }?>
                                        </ul>

                                    <?php endif;?>

                                    <a data-toggle="tooltip" data-placement="bottom" title="Pesquisar" href="#" class="busca_bt abrir_pesquisa">
                                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.7377 13.0241C10.2756 14.159 8.43603 14.6941 6.59337 14.5204C4.75071 14.3467 3.0435 13.4773 1.81924 12.0891C0.594977 10.7009 -0.0543033 8.89837 0.00356021 7.04831C0.0614237 5.19826 0.822082 3.43979 2.1307 2.13085C3.43954 0.822141 5.19789 0.0614281 7.04781 0.00356046C8.89773 -0.0543072 10.7002 0.59502 12.0882 1.81937C13.4763 3.04372 14.3457 4.75105 14.5194 6.59384C14.6931 8.43663 14.158 10.2764 13.0231 11.7385L16.7097 15.4254C16.8295 15.5366 16.917 15.678 16.9631 15.8347C17.0092 15.9915 17.0122 16.1578 16.9717 16.3161C16.9312 16.4744 16.8488 16.6188 16.7331 16.7342C16.6175 16.8496 16.4728 16.9316 16.3144 16.9717C16.1563 17.0121 15.9902 17.0092 15.8336 16.9633C15.677 16.9174 15.5356 16.8303 15.4243 16.7109L11.7377 13.0241ZM12.7321 7.27548C12.7429 6.55218 12.6097 5.83396 12.3404 5.16259C12.0711 4.49122 11.671 3.88011 11.1634 3.36481C10.6557 2.8495 10.0507 2.44029 9.38345 2.16098C8.71621 1.88166 8.00011 1.73782 7.27678 1.73782C6.55345 1.73782 5.83735 1.88166 5.17011 2.16098C4.50288 2.44029 3.89785 2.8495 3.39021 3.36481C2.88256 3.88011 2.48245 4.49122 2.21313 5.16259C1.94381 5.83396 1.81068 6.55218 1.82146 7.27548C1.84282 8.70834 2.42698 10.0753 3.44772 11.081C4.46847 12.0867 5.84387 12.6505 7.27678 12.6505C8.70969 12.6505 10.0851 12.0867 11.1058 11.081C12.1266 10.0753 12.7107 8.70834 12.7321 7.27548Z" fill="#fff"/>
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="pesquisa_full">
        <button class="fechar_pesquisa">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M242.7 256l100.1-100.1c12.3-12.3 12.3-32.2 0-44.5l-22.2-22.2c-12.3-12.3-32.2-12.3-44.5 0L176 189.3 75.9 89.2c-12.3-12.3-32.2-12.3-44.5 0L9.2 111.5c-12.3 12.3-12.3 32.2 0 44.5L109.3 256 9.2 356.1c-12.3 12.3-12.3 32.2 0 44.5l22.2 22.2c12.3 12.3 32.2 12.3 44.5 0L176 322.7l100.1 100.1c12.3 12.3 32.2 12.3 44.5 0l22.2-22.2c12.3-12.3 12.3-32.2 0-44.5L242.7 256z"/></svg>
        </button>

        <div class="conteudo">
          <form class="search" id="searchform" method="get" value="<?php the_search_query(); ?>"
            action="<?php echo esc_url(home_url('/')); ?>">
            <label for="search" id="label_for"></label>
            <input id="search" type="text" name="s" placeholder="Digite sua busca" required>
            <button type="submit" style="display: none;"></button>
            <span>Insira as palavras-chave da sua pesquisa e pressione Enter.</span>
          </form>
        </div>
    </div>

    <?php if($is_full_topo && is_home()): ?>
        <div></div>
    <?php elseif(is_home()): ?>
        <?php if($links_topo):?>
            <div style="" class="header-placeholder link-top-placeholder"></div>
        <?php else: ?>
            <div style="height: 88px" class="header-placeholder"></div>
        <?php endif;?>   
    <?php endif;?>

    <?php if(!is_home()): ?>
        <div class="header-placeholder"></div>
    <?php endif;?>
    

    <header class="mob_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-9">
                    <a href="<?php echo get_home_url(); ?>" class="marca">
                        <img src="<?php echo $logo_png_branco['url'];?>" alt="">
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

    <div id="mySidenav" class="sidenav">
        <nav class="navbar">
            <?php
                wp_nav_menu([
                    'menu'            => 'Menu Principal',
                    'theme_location'  => 'principal',
                    'container'       => '',
                    'container_id'    => '',
                    'container_class' => 'collapse navbar-collapse',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav mr-auto',
                    'depth'           => 10,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                ]);
            ?>

            <div class="items-links">
                <?php foreach($links_topo as $index => $item_top){ // Adicionando um índice para identificação ?>
                    <div class="menu-item ">
                        <a class="btn-padrao href="<?php echo $item_top['link_topo']?>" class="<?php echo $item_top["is_btn"] ? "btn-secundario" : "";?>">
                            <?php echo $item_top['svg_link_topo']?>
                            <?php echo $item_top['texto_link_topo']?>
                        </a>

                        <?php if (!empty($item_top['is_submenu'])) { // Verifica se há sublinks ?>
                            <div class="submenu">
                                <?php foreach($item_top['submenu'] as $subIndex => $sub_link) { ?>
                                    <a href="#iframeModal-<?php echo $subIndex+1;?>" class="open-modal" data-modal="iframeModal-<?php echo $subIndex+1;?>">
                                        <?php echo $sub_link['titulo'];?>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                    
                <?php } ?>
            </div>

            <a style="display: table; margin: 0 auto;" href="<?php echo $link_btn;?>" class="btn-padrao" >
                <?php echo $texto_btn;?>
            </a>

                
        </nav>


        <div class="links">

            <?php 
                if( have_rows('botoes_cta', "option") ):
                while( have_rows('botoes_cta', "option") ): the_row(); 
                    $icone = get_sub_field('icone_do_botao');
                    $botaoTexto = get_sub_field('botao_texto');
                    $botaoCor = get_sub_field('botao_cor');
                    $botaoLink = get_sub_field('botao_link');
                    $novaAba = get_sub_field('abrir_outra_aba');
                    $posicaoCTA = get_sub_field('posicao_do_icone');

                    if($botaoCor):
                        $botaoCor = " background-color: " . $botaoCor . "; ";
                    else:
                        $botaoCor = "";
                    endif;

                    if($novaAba):
                        $novaAba = " target='_blank' ";
                    else:
                        $novaAba = "";
                    endif;

                    
            ?>
            <div class="links">
                <a href="<?php echo $botaoLink; ?>" class="bt__padrao"
                    style="width: 90%;margin: 10px auto;display: block; <?php echo $botaoCor; ?>"
                    <?php echo $novaAba; ?>>
                    <?php if($posicaoCTA == 0): ?>
                    
                    <?php echo $botaoTexto; ?>
                    <?php else: ?>
                    <?php echo $botaoTexto; ?>
                    
                    <?php endif; ?>
                </a>
            </div>
            <?php endwhile; endif; ?>

        </div>
    </div>

    <?php if ( is_front_page() ) : ?>
        <?php $imagem_pop_up = get_field('imagem_pop-up', 'option'); ?>
        <?php if ( $imagem_pop_up ) : ?>
            <div id="popup-overlay" class="popup-overlay">
            <div class="popup-content">
                <span class="popup-close">&times;</span>
                <img src="<?php echo esc_url($imagem_pop_up['url']); ?>" alt="Popup" />
            </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
   
<!--  -->