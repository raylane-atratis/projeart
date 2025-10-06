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
$link_do_cta = get_sub_field('link_btn');
$texto_do_cta = get_sub_field('texto_do_cta');


$image = get_sub_field('img_bg');
$backgroundSection = get_sub_field('backgroundsection');
$titulo = get_sub_field('titulo');
$conteudo = get_sub_field('conteudo');

$direction = $posicao == 0 ? 'row-reverse' : 'row';

// [ANIMAÇÃO CONTEÚDO]
if ($animC == 0):
    $animacaoConteudo = "";
elseif ($animC == 1):
    $animacaoConteudo = "data-aos='fade-up' data-aos-duration='1000' data-aos-delay='300'";
elseif ($animC == 2):
    $animacaoConteudo = "data-aos='fade-down' data-aos-duration='1000' data-aos-delay='300'";
elseif ($animC == 3):
    $animacaoConteudo = "data-aos='fade-left' data-aos-duration='1000' data-aos-delay='300'";
elseif ($animC == 4):
    $animacaoConteudo = "data-aos='fade-right' data-aos-duration='1000' data-aos-delay='300'";
endif;

// [ANIMAÇÃO IMAGEM]
if ($animI == 0):
    $animacaoImagem = "";
elseif ($animI == 1):
    $animacaoImagem = "data-aos='fade-up' data-aos-duration='1000' data-aos-delay='300'";
elseif ($animI == 2):
    $animacaoImagem = "data-aos='fade-down' data-aos-duration='1000' data-aos-delay='300'";
elseif ($animI == 3):
    $animacaoImagem = "data-aos='fade-left' data-aos-duration='1000' data-aos-delay='300'";
elseif ($animI == 4):
    $animacaoImagem = "data-aos='fade-right' data-aos-duration='1000' data-aos-delay='300'";
endif;

?>

<section class="sessaoFacaParte <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>"
    <?php echo $animacao; ?>>


    <div class="container">
        <div class="row align-items-center" style="background: #F1F1F1; ">

            <div class="col-lg-6 p-0">
                <div class="title">
                    <h2><?php echo $titulo; ?></h2>
                    <p><?php echo $conteudo; ?></p>
                    <a href="<?php echo $link_do_cta; ?>">Enviar currículo</a>
                </div>

            </div>

            <div class="col-lg-6 p-0">
                <div class="img" style="background: url('<?php echo $image['url']; ?>');">

                </div>
            </div>

        </div>
    </div>

</section>