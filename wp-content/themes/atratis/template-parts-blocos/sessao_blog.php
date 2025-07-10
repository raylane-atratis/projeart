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
            'post_type' => 'post',
            'posts_per_page' => 6, 
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => 'news',
                    'include_children' => true,
                ),
            ),
        );
        
        $query = new WP_Query($args);
?>



<section class="sessaoBlog <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    <div class="container">
        <div class="row" >
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration='1000' data-aos-delay='300'>
                <div class="title">
                    <h4><?php echo $subtitulo; ?></h4>

                    <h2>
                        <?php echo $titulo; ?>
                    </h2>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="logo">
                    <svg width="134" height="161" viewBox="0 0 134 161" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M68.4433 19.3449C34.9651 17.5371 6.30408 48.006 6.30408 81.5346C6.30408 115.063 29.6484 148.508 68.3871 148.508C78.5547 148.508 88.1215 145.616 96.5317 140.67C90.4739 143.943 83.6805 145.824 76.4998 145.824C46.9685 145.824 29.1712 120.324 29.1712 94.7676C29.1712 69.2112 51.0221 45.9792 76.5391 47.3603C102.09 48.7414 122.728 72.1026 122.728 96.4182C122.728 109.971 116.912 123.047 107.631 132.339C120.718 120.083 129.027 102.235 129.027 83.6905C129.027 51.7956 101.95 21.1471 68.4377 19.3393L68.4433 19.3449Z" fill="#F9F9F9"/>
                        <path d="M133.232 72.4731C129.499 45.5974 112.549 20.0074 86.1956 7.70081C57.2426 -5.82407 24.3539 -1.24841 1.06015 19.1821C-0.770113 20.7878 0.139406 20.4902 1.0377 19.8783C24.6964 3.76517 56.1366 -0.939618 84.1464 12.1473C109.489 23.9879 127.281 47.9442 132.261 73.2704C135.057 87.497 133.726 76.0438 133.232 72.4731Z" fill="#F9F9F9"/>
                        <path d="M58.2083 155.29C33.3425 154.392 9.52661 135.219 9.52661 135.219C9.52661 135.219 28.0988 160.023 58.5115 160.023C79.0543 160.023 93.8648 154.695 110.343 141.962C87.122 157.693 73.1873 155.834 58.2139 155.296L58.2083 155.29Z" fill="#F9F9F9"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-12" data-aos="fade-left" data-aos-duration='1000' data-aos-delay='300'>
                <div class="grid-blog">
                    <div class="owl-carousel owl-blog owl-theme">
                        <?php if ($query->have_posts()): ?>
                            <?php while ($query->have_posts()): $query->the_post(); ?>
                                <a href="<?php echo the_permalink()?>" class="content-card">
                                    <div class="img">
                                        <img src="<?php the_post_thumbnail_url()?>" alt="">
                                    </div>

                                    <div class="content-title">
                                        <h4><?php echo the_title();?></h4>
                                        <?php
                                                $_the_excerpt = get_the_excerpt();
                                                $the_excerpt = substr( $_the_excerpt, 0, 200 );
                                            ?>
                                            
                                        
                                        <p><?php echo esc_html($the_excerpt); ?></p>
                                        
                                        <small>Learn More</small>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="content-btn">
                    <div class="separador"></div>
                    <p>Want to see more posts like these?</p>
                    <a href="<?php echo esc_url( get_category_link( get_category_by_slug('news')->term_id ) ); ?>" class="btn-padrao">Learn More</a>
                </div>
            </div>
        </div>
    </div>

</section>