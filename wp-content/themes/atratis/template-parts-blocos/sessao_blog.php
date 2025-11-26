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

<?php
// Buscar 1 post em destaque da categoria "eventos"
$args_destaque = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'eventos',
        ),
    ),
);

$query_destaque = new WP_Query($args_destaque);

// IDs de posts já selecionados (para não repetir)
$post_ids_excluir = array();
if ($query_destaque->have_posts()) {
    while ($query_destaque->have_posts()) {
        $query_destaque->the_post();
        $post_ids_excluir[] = get_the_ID();
    }
    wp_reset_postdata();
}

// Buscar 3 posts mais recentes (de todas as categorias, excluindo o post em destaque)
$args_recentes = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post__not_in' => $post_ids_excluir, // Excluir post em destaque
    'orderby' => 'date',
    'order' => 'DESC',
);

$query_recentes = new WP_Query($args_recentes);
?>

<section class="sessao-blog-grid <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    <div class="container">
        <!-- Cabeçalho -->
        <div class="blog-header" <?php echo $animacaoConteudo; ?>>
            <?php if ($subtitulo): ?>
                <h4><?php echo $subtitulo; ?></h4>
            <?php endif; ?>
            <?php if ($titulo): ?>
                <h2><?php echo $titulo; ?></h2>
            <?php endif; ?>
            <?php if ($descricao): ?>
                <p><?php echo $descricao; ?></p>
            <?php endif; ?>
            <?php if ($link_do_cta): ?>
                <a href="<?php echo esc_url($link_do_cta); ?>" class="btn-padrao">Veja todas</a>
            <?php else: ?>
                <a href="<?php echo esc_url(home_url('/blog')); ?>" class="btn-padrao">Veja todas</a>
            <?php endif; ?>
        </div>

        <!-- Post em Destaque (categoria "eventos") -->
        <?php if ($query_destaque->have_posts()): ?>
            <?php
            while ($query_destaque->have_posts()):
                $query_destaque->the_post();
                
                // Pegar categorias
                $categories = get_the_category();
                $category_name = !empty($categories) ? $categories[0]->name : '';
                
                // Formatar data (ex: "20 OUT")
                $dia = get_the_date('d');
                $mes = get_the_date('M');
            ?>
                <div class="blog-post-featured" <?php echo $animacaoImagem; ?>>
                    <a href="<?php the_permalink(); ?>" class="featured-link">
                        <?php if (has_post_thumbnail()): ?>
                            <div class="featured-image">
                                <?php the_post_thumbnail('large'); ?>
                                
                                <!-- Overlay com informações -->
                                <div class="featured-overlay">
                                    <?php if ($category_name): ?>
                                        <span class="featured-category"><?php echo esc_html($category_name); ?></span>
                                    <?php endif; ?>
                                    
                                    <div class="featured-info">
                                        <div class="featured-date">
                                            <span class="date-day"><?php echo $dia; ?></span>
                                            <span class="date-month"><?php echo strtoupper($mes); ?></span>
                                        </div>
                                        <h3 class="featured-title"><?php the_title(); ?></h3>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </a>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        <?php endif; ?>

        <!-- Grid de Posts Menores (3 posts recentes de todas as categorias) -->
        <?php if ($query_recentes->have_posts()): ?>
            <div class="row blog-posts-grid">
                <?php
                while ($query_recentes->have_posts()):
                    $query_recentes->the_post();
                    
                    // Pegar categorias
                    $categories = get_the_category();
                    $category_name = !empty($categories) ? $categories[0]->name : '';
                    
                    // Formatar data (ex: "20 OUT")
                    $dia = get_the_date('d');
                    $mes = get_the_date('M');
                ?>
                    <div class="col-lg-4 col-md-6">
                        <a href="<?php the_permalink(); ?>" class="blog-post-small">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="small-post-image">
                                    <?php the_post_thumbnail('medium'); ?>
                                    
                                    <!-- Badge de Data dentro da imagem -->
                                    <div class="small-post-date-badge">
                                        <span class="date-day"><?php echo $dia; ?></span>
                                        <span class="date-month"><?php echo strtoupper($mes); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <!-- Título e Categoria abaixo da imagem -->
                            <div class="small-post-content">
                                <h3 class="small-post-title"><?php the_title(); ?></h3>
                                <?php if ($category_name): ?>
                                    <span class="small-post-category"><?php echo esc_html($category_name); ?></span>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div> <!-- Fecha .row -->
        <?php endif; ?>

    </div>

</section>