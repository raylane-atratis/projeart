<?php 
$video = get_field('video_bg');
$titulo = get_field('titulo');
$subtitulo = get_field('subtitulo');
$img3d = get_field('imagem_3d');
$cta_texto = get_field('cta_texto');
$cta_link = get_field('cta_link');
?>

<section class="sessao-video">
    
    <!-- Vídeo de Fundo -->
    <video class="video-bg" muted loop playsinline id="videoSessao">
        <source src="<?php echo esc_url($video); ?>" type="video/mp4">
    </video>

    <!-- Overlay + Conteúdo -->
    <div class="conteudo-video">
        <button class="btn-play" id="playVideo">
            ▶
        </button>

        <div class="texto-video">
            <h3><?php echo esc_html($titulo); ?></h3>
            <p><?php echo esc_html($subtitulo); ?></p>
            <?php if($cta_texto && $cta_link): ?>
                <a href="<?php echo esc_url($cta_link); ?>" class="cta">
                    <?php echo esc_html($cta_texto); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Imagem 3D -->
    <img class="img-3d" src="<?php echo esc_url($img3d['url']); ?>" alt="Imagem 3D">
</section>
