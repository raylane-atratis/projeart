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

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$lista_imagens = get_sub_field('lista_certificacoes');


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

$args = array(
    'post_type' => 'areas-de-atuacoes',
    'posts_per_page' => -1,
);

$query = new WP_Query($args);
?>

<section class="sessaoAreasAtuacao <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>"
    <?php echo $animacao; ?>>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title" data-aos="fade-left" data-aos-duration='1000'>
                    <h4 style="<?php echo $corFonte; ?>"><?php echo $subtitulo; ?></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="container-items">
                    <div class="item">
                        <h2 style="<?php echo $corFonte; ?>"><?php echo $titulo; ?></h2>
                    </div>

                    <?php if ($query->have_posts()): ?>
                        <?php while ($query->have_posts()):
                            $query->the_post();
                            $icon_svg = get_field("svg_area_de_atuacao");
                            ?>
                            <a class="item item-card" href="<?php echo the_permalink(); ?>">
                                <div class="icon-svg">
                                    <?php echo $icon_svg; ?>
                                </div>

                                <div class="title-item">
                                    <p><?php echo the_title(); ?></p>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <?php wp_reset_postdata(); ?>

                </div>
            </div>

        </div>
    </div>

</section>