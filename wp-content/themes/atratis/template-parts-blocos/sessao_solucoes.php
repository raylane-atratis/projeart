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

$servicos = get_sub_field('servicos');

$titulo = get_sub_field('titulo');
$descricao = get_sub_field('descricao');
$texto_cta = get_sub_field('texto_cta');
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

?>

<?php
     $args = array(
        'post_type' => 'solutions',
        'posts_per_page' => -1,
        'order' => 'ASC'
    );

    $query = new WP_Query($args);
?>

<section class="sessaoSolucoes <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    <div class="svg-logo">
        <svg width="389" height="466" viewBox="0 0 389 466" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M198.713 56.5919C101.515 51.3432 18.3022 139.804 18.3022 237.149C18.3022 334.494 86.0785 431.595 198.55 431.595C228.07 431.595 255.845 423.2 280.263 408.839C262.675 418.342 242.952 423.803 222.104 423.803C136.365 423.803 84.693 349.768 84.693 275.569C84.693 201.37 148.133 133.92 222.218 137.93C296.4 141.94 356.32 209.765 356.32 280.361C356.32 319.71 339.433 357.673 312.488 384.65C350.484 349.067 374.609 297.248 374.609 243.409C374.609 150.807 295.993 61.8243 198.697 56.5756L198.713 56.5919Z" fill="#F6F6F6"/>
            <path d="M386.818 210.841C375.978 132.812 326.768 58.5154 250.254 22.7853C166.194 -16.4819 70.7076 -3.19723 3.07798 56.1192C-2.23589 60.7811 0.404741 59.9172 3.01277 58.1405C71.7019 11.3589 162.983 -2.30072 244.305 35.6951C317.884 70.0722 369.539 139.625 383.998 213.155C392.115 254.46 388.252 221.208 386.818 210.841Z" fill="#F6F6F6"/>
            <path d="M168.998 451.285C96.8039 448.677 27.6584 393.012 27.6584 393.012C27.6584 393.012 81.5796 465.027 169.878 465.027C229.52 465.027 272.52 449.558 320.361 412.589C252.944 458.262 212.487 452.867 169.014 451.302L168.998 451.285Z" fill="#F6F6F6"/>
        </svg>
    </div>

    <div class="container">
        <div class="row" >
            <div class="col-lg-4" data-aos="fade-right" data-aos-duration='1000' data-aos-delay='300'>
                <div class="title">
                    <h4><?php echo $subtitulo; ?></h4>

                    <h2>
                        <?php echo $titulo; ?>
                    </h2>

                    <p>
                        <?php echo $descricao; ?>
                    </p>

                    <a href="<?php echo get_post_type_archive_link('solutions'); ?>" class="btn-padrao"><?php echo $texto_cta;?></a>

                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-left" data-aos-duration='1000' data-aos-delay='300'>
                <div class="grid-servicos">
                    <div class="owl-carousel owl-solucoes owl-theme">
                        <?php if ($query->have_posts()): ?>
                            <?php while ($query->have_posts()): $query->the_post(); ?>
                                        <a href="<?php echo the_permalink()?>" class="content-card">
                                            
                                            <img src="<?php the_post_thumbnail_url()?>" alt="">
                                            
                                            <div class="content-text">
                                                <h3><?php the_title();?></h3>

                                                <div class="btn-post">
                                                    Learn More
                                                </div>
                                                
                                            </div>
                                            
                                        </a>
                            <?php endwhile; ?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div> 
    </div>

</section>