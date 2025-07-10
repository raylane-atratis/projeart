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

$link_cta = get_sub_field('link_cta');

$depoimento = get_sub_field('depoimentos');

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$descricao = get_sub_field('descricao');

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


<section class="sessaoDepoimentos <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
    <div class="row">
            <div class="col-lg-6" data-aos='fade-right' data-aos-duration='1000'>
                <div class="title">
                    <h4><?php echo $subtitulo;?></h4>
                    <h2><?php echo $titulo;?></h2>
                </div>
            </div>

            <div class="col-lg-6" data-aos='fade-left' data-aos-duration='1000'>
                <div class="descricao">
                    <p><?php echo $descricao;?></p>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-12" data-aos='fade-up' data-aos-duration='1000'>
                <div class="grid-depoimentos">
                    <div class="owl-carousel owl-depoimentos owl-theme">
                        <?php foreach($depoimento as $item){
                            ?>
                                <div class="item-depoimento">
                                    <div class="icon-svg">
                                        <svg width="47" height="36" viewBox="0 0 47 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.4873 0.101006C7.39882 0.59671 1.70742 4.08499 0.367187 10.5842C0.027539 12.2641 0 13.1637 0 24.2527V35.0664H10.0517H20.1035V24.9688V14.8711H15.1006H10.1068L10.0426 14.5406C10.0059 14.357 10.0059 13.5492 10.0334 12.7322C10.0701 11.5389 10.1252 11.0707 10.3088 10.3455C11.291 6.6094 14.2101 4.60823 19.0295 4.34202L20.1035 4.28694V2.1389V3.05176e-05L19.4885 0.0183907C19.1396 0.0183907 18.2492 0.0551071 17.4873 0.101006Z" fill=""/>
                                            <path d="M44.2554 0.101006C39.0322 0.358036 34.8921 1.48714 31.9271 3.45159C31.5599 3.69944 30.8347 4.31448 30.3298 4.81936C28.8978 6.22385 28.0625 7.6467 27.4933 9.59279C26.9333 11.5481 26.9517 10.9973 26.9242 23.5643L26.8875 35.0664H36.9484H47.0001V24.9688V14.8711L41.9788 14.8528L36.9484 14.8252L36.9025 13.999C36.6179 8.99612 38.7384 5.83831 43.1355 4.72757C43.9433 4.52561 45.5314 4.31448 46.3392 4.31448H47.0001V2.15725V3.05176e-05L46.3851 0.00920868C46.0363 0.0183907 45.0816 0.0642891 44.2554 0.101006Z" fill=""/>
                                        </svg>
                                    </div>
                                    
                                    <p><?php echo $item['conteudo']?></p>
                                    <strong><?php echo $item['autor']?></strong>
                                    
                                </div>
                            <?php
                        }?>
                    </div>
                </div>
                
            </div>
        </div>

        
    </div>

</section>