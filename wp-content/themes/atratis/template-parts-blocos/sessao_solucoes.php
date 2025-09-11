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
            'post_type' => 'solucoes',
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);

?>

<section class="sessaoSolucoes <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title" data-aos="fade-up" data-aos-duration='1000'>
                    <h4>
                        <?php echo $subtitulo; ?>
                    </h4>
                    <h2><?php echo $titulo; ?></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="grid-solucoes">
                    <div class="owl-carousel owl-solucoes owl-theme">
                        <?php if ($query->have_posts()): ?>
                            <?php while ($query->have_posts()): $query->the_post(); ?>
                                <a href="<?php echo the_permalink(); ?>" class="item-solucoes">
                                    <div class="img-solucao">
                                        <img src="<?php the_post_thumbnail_url()?>" alt="imagem-solucoes">
                                    </div>
                                    <div class="texto-solucao">
                                        <h3><?php echo the_title(); ?></h3>
                                        <?php echo the_content();?>
                                        <small>Saiba mais</small>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        <?php endif;?>

                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="btn-container-row">
                    <a href="<?php echo get_post_type_archive_link('solucoes'); ?>" class="btn-tertiary">
                        Ver todos
                    </a>
                </div>
            </div>
        </div>

    </div>

</section>