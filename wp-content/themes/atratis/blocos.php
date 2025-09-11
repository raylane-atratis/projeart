<?php // Chamadas dos blocos ?>

<?php 
    if(is_front_page()): // Se for chamado pela HOME ou INTERNA 
        $lugar = "option";    
    else: 
        $lugar = "";
     endif;
    ?>

<?php if( have_rows('blocos_home', $lugar) ): ?>
<?php while( have_rows('blocos_home', $lugar) ): the_row();  ?>
<?php 

    if(get_row_layout() == 'sessao_texto_imagem' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_texto_imagem');

    elseif(get_row_layout() == 'sessao_solucoes' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_solucoes');

    elseif(get_row_layout() == 'sessao_sobre' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_sobre');

    elseif(get_row_layout() == 'sessao_marcas' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_marcas');

    elseif(get_row_layout() == 'sessao_depoimentos' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_depoimentos');

    elseif(get_row_layout() == 'sessao_blog' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_blog');

    elseif(get_row_layout() == 'sessao_texto' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_texto');

    elseif(get_row_layout() == 'sessao_fale_conosco' && get_sub_field('exibir') ):
            get_template_part('template-parts-blocos/sessao_fale_conosco');

    elseif(get_row_layout() == 'sessao_contato' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_contato');

    elseif(get_row_layout() == 'sessao_vantagens' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_vantagens');

    elseif(get_row_layout() == 'sessao_cultura' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_cultura');

    elseif(get_row_layout() == 'sessao_beneficios' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_beneficios');

    elseif(get_row_layout() == 'sessao_numeros' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_numeros');

    elseif(get_row_layout() == 'sessao_segmentos' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_segmentos');

    elseif(get_row_layout() == 'sessao_missao_valores' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_missao_valores');

    elseif(get_row_layout() == 'sessao_quadro_funcionarios' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_quadro_funcionarios');

    elseif(get_row_layout() == 'sessao_galeria_carrosel' && get_sub_field('exibir') ):
        get_template_part('template-parts-blocos/sessao_galeria_carrosel');

        

    endif;
            
?>
<?php endwhile; ?>
<?php endif; // Fim Blocos de Layout ?>