<?php 
/////////////////////////////////////////////////////////
// Configurações Gerais do Bloco
// template: conf_gerais.php
// Variáveis diponíveis: $geraisCSS, $corFonte, $animacao

include "conf_gerais.php";

/////////////////////////////////////////////////////////

$posicao = get_sub_field('posicao_conteudo');
$animC = get_sub_field('escolha_animacao_conteudo');
$animI = get_sub_field('escolha_animacao_imagem');
$classe = get_sub_field('classe');
$link_do_cta = get_sub_field('link_cta');
$texto_do_cta = get_sub_field('texto_cta');


$image = get_sub_field('imagem');
$backgroundSection = get_sub_field('backgroundsection');
$titulo = get_sub_field('titulo');
$descricao = get_sub_field('descricao');
$lista_imagens = get_sub_field('lista_imagens');


$direction = $posicao == 0 ? 'row-reverse' : 'row';


// [ANIMAÇÃO CONTEÚDO]
if($animC == 0):
    $animacaoConteudo = "";
    elseif($animC == 1):
        $animacaoConteudo = "data-aos='fade-up' data-aos-duration='1000' data-aos-delay='300'";
        elseif($animC == 2):
            $animacaoConteudo = "data-aos='fade-down' data-aos-duration='1000' data-aos-delay='300'";
            elseif($animC == 3):
                $animacaoConteudo = "data-aos='fade-left' data-aos-duration='1000' data-aos-delay='300'";
                elseif($animC == 4):
                    $animacaoConteudo = "data-aos='fade-right' data-aos-duration='1000' data-aos-delay='300'";
                endif;

// [ANIMAÇÃO IMAGEM]
if($animI == 0):
    $animacaoImagem = "";
    elseif($animI == 1):
        $animacaoImagem = "data-aos='fade-up' data-aos-duration='1000' data-aos-delay='300'";
        elseif($animI == 2):
            $animacaoImagem = "data-aos='fade-down' data-aos-duration='1000' data-aos-delay='300'";
            elseif($animI == 3):
                $animacaoImagem = "data-aos='fade-left' data-aos-duration='1000' data-aos-delay='300'";
                elseif($animI == 4):
                    $animacaoImagem = "data-aos='fade-right' data-aos-duration='1000' data-aos-delay='300'";
                endif;


                $args = array(
                    'post_type' => 'segmentos',
                    'posts_per_page' => 6,
                    'order' => 'ASC',
                );
            
                $query = new WP_Query($args);

?>

<section class="sessaoGaleriaCarrosel <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title" style="width: 100%; display: flex; justify-content: center; align-items: center;">
                    <h2 style="text-align: center; font-weight: 700;font-size: 38px;line-height: 45px;letter-spacing: 0;max-width: 354px;"><?php echo $titulo; ?></h2>
                </div>
            </div>
        </div>
        <div class="row" >

            <div class="col-lg-12">
                <div class="conteiner-carrosel">
                    <div class="owl-galeria-carrosel owl-carousel owl-theme">
                    
                        <?php foreach($lista_imagens as $item_img): ?>
                            <a class="item-galeria " href="<?php echo $item_img['imagem']['url'];?>" data-fancybox="gallery">
                                <img src="<?php echo $item_img['imagem']['url'];?>" alt="<?php echo $item_img['imagem_item']['alt'];?>">
                            </a>
                        <?php endforeach; ?>
                        
                    </div>
                </div>
                
            </div>

        </div> 


        

    </div>

</section>