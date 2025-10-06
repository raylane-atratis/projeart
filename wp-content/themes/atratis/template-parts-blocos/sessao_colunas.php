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

$colunas = get_sub_field('colunas');


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

<section class="sessaoColunas <?php echo $classe; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    <div class="container">
        <div class="row">
            <?php foreach ($colunas as $item): ?>
                <div class="col-lg-6">

                    <div class="coluna">
                        <div class="icon-svg">
                            <?php echo $item['svg']; ?>
                        </div>

                        <h2><?php echo $item['titulo']; ?></h2>

                        <?php echo $item['conteudo']; ?>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>

    </div>

</section>