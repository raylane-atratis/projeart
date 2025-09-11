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
$link_do_cta = get_sub_field('link_do_cta');
$texto_do_cta = get_sub_field('texto_do_cta');


$image = get_sub_field('imagem');
$backgroundSection = get_sub_field('backgroundsection');
$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$conteudo = get_sub_field('conteudo');

$lista_de_botoes = get_sub_field('lista_de_botoes');


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

?>

<section class="sessaoTextoImagem <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
        <div class="row align-items-center" style="flex-direction: <?php echo $direction; ?>">
            <div class="col-lg-6"  >
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" <?php echo $animacaoImagem; ?>>
            </div>
            <div class="col-lg-6" <?php echo $animacaoConteudo; ?>>
                    <?php if($subtitulo){
                        ?>
                            <h4><?php echo $subtitulo;?></h4>
                        <?php
                    }?>
                    

                    <h2 style="<?php echo $corFonte;?>"><?php echo $titulo;?></h2>
                    <?php echo $conteudo;?>

                    <?php if($link_do_cta){
                        ?>
                            <a href="<?php echo $link_do_cta; ?>" class="btn-padrao"><?php echo $texto_do_cta; ?></a>
                        <?php
                    }?>

                    <?php if($lista_de_botoes): ?>
                        <div class="lista-botoes">
                            <?php foreach($lista_de_botoes as $item): ?>
                                <a href="<?php echo $item['link_botao']; ?>" class="btn-tertiary">
                                    <?php echo $item['svg']; ?>
                                    <?php echo $item['cta_botao']; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                        
                    <?php endif;?>
                    
            </div>
        </div> 
    </div>

</section>