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

$logos = get_sub_field('logos');

$titulo = get_sub_field('titulo');
$descricao = get_sub_field('descricao');
$texto_cta = get_sub_field('texto_cta');
$subtitulo = get_sub_field('subtitulo');
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
    'post_type' => 'equipe',
    'posts_per_page' => -1,
);

$query = new WP_Query($args);

?>

<section class="sessaoEquipes <?php echo $classe; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-right" data-aos-duration='1000' data-aos-delay='300'>
                <div class="title">
                    <h4>
                        <?php echo $subtitulo; ?>
                    </h4>
                    <h2><?php echo $titulo; ?></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12" data-aos="fade-left" data-aos-duration='1000' data-aos-delay='300'>
                <div class="grid-sec-equipe">
                    <div class="owl-carousel owl-equipe owl-theme">
                        <?php if ($query->have_posts()): ?>
                            <?php while ($query->have_posts()):
                                $query->the_post();
                                $nome = get_field("nome");
                                $cargo = get_field("cargo");
                                ?>
                                <a href="<?php echo the_permalink(); ?>" class="item-equipe">
                                    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="equipe">

                                    <div class="content-card">
                                        <h4><?php echo $nome; ?></h4>
                                        <small><?php echo $cargo; ?></small>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>


    </div>

</section>