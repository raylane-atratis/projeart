<?php
/////////////////////////////////////////////////////////
// CONFIGURAÇÕES E CAMPOS
/////////////////////////////////////////////////////////
include "conf_gerais.php";

// Campos do ACF
$video_url = get_sub_field('video_bg');
$img_fundo = get_sub_field('imagem_fundo');
if (!$img_fundo && get_sub_field('thumbnail_video')) {
    $img_fundo = get_sub_field('thumbnail_video');
}

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$cta_texto = get_sub_field('cta_texto');
$cta_link_text = get_sub_field('cta_link_text');
$img3d = get_sub_field('imagem_3d');

$classe = get_sub_field('classe');
?>

<style>
    .sessao-hero-video {
        position: relative;
        width: 100%;
        min-height: 600px;
        height: 80vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: flex-end;
        overflow: hidden;
    }

    .sessao-hero-video::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 1);
        z-index: 1;
    }

    .hero-container {
        position: relative;
        z-index: 10;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .play-area-center {
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 150px;
    }

    .btn-play-pill {
        display: flex;
        align-items: center;
        border-radius: 50px;
        transition: transform 0.3s ease;
        text-decoration: none;
        justify-content: center;
        width: 100%;
        height: 118px;
        color: #fff;
        max-width: 410px;
        position: relative;
        z-index: 1;
    }

    .btn-play-pill:hover {
        transform: scale(1.05);
    }

    .play-icon-circle {
        width: 100%;
        max-width: 115px;
        height: 118px;
        background: #FFFFFF40;
        backdrop-filter: blur(26px);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: -55px;
        position: relative;
        z-index: 10;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    }

    .play-text {
        font-size: 21px;
        line-height: 1.2;
        text-align: left;
        border: 3px solid rgba(255, 255, 255, 0.24);
        border-radius: 60px;
        width: 350px;
        height: auto;
        padding: 18px 20px 18px 70px;
        position: relative;
        z-index: 1;
    }

    .play-text strong {
        display: block;
        font-weight: 700;
        text-decoration: underline;
    }

    .bottom-area {
        display: flex;
        align-items: flex-end;
        padding-bottom: 0;
        position: relative;
    }

    .img-people-floating {
        width: 40%;
        max-width: 450px;
        height: auto;
        display: block;
        margin-bottom: -10px;
        margin-right: 30px;
        position: relative;
        z-index: 20;
    }

    .text-box-border {
        border: 2px solid #B5B5B5;
        border-bottom: none;
        border-radius: 15px 15px 0 0;
        translate: -180px 120px;
        text-align: end;
        padding: 65px 80px 0 0;
        max-width: 804px;
        width: 100%;
        height: 280px;
        position: relative;
        z-index: 10;
    }

    .text-box-border h2 {
        font-size: 28px;
        font-weight: 300;
        margin: 0;
        color: #fff;
    }

    .text-box-border strong {
        font-weight: 800;
    }

    /* MODAL STYLES */
    .video-modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.9);
    }

    .video-modal-content {
        position: relative;
        margin: 5% auto;
        padding: 0;
        width: 80%;
        max-width: 900px;
    }

    .video-modal-close {
        color: white;
        position: absolute;
        top: -40px;
        right: 0;
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
        z-index: 10000;
    }

    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
    }

    .video-container iframe,
    .video-container video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    @media (max-width: 768px) {
        .bottom-area {
            flex-direction: column-reverse;
            align-items: center;
            text-align: center;
        }

        .img-people-floating {
            margin-right: 0;
        }

        .img-people-floating img {
            width: 100%;
            max-width: 500px;
            height: auto;
        }

        .text-box-border {
            width: 100%;
            border: none;
            padding: 20px;
            translate: 0 0;
        }

        .video-modal-content {
            width: 95%;
            margin: 10% auto;
        }
    }
</style>

<section class="sessao-hero-video <?php echo esc_attr($classe); ?>"
    style="background-image: url('<?php echo $img_fundo ? esc_url($img_fundo['url']) : ''; ?>'); <?php echo $geraisCSS; ?>">

    <div class="container hero-container">
        <div class="play-area-center">
            <a href="#" id="open-video-modal" class="btn-play-pill">
                <div class="play-icon-circle">
                    <svg width="30" height="40" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 9L0 17.6603L0 0.339745L15 9Z" fill="white" />
                    </svg>
                </div>
                <div class="play-text">
                    <?php echo $cta_texto ? esc_html($cta_texto) : 'Dê o play e conheça'; ?> <br>
                    <strong><?php echo $cta_link_text ? esc_html($cta_link_text) : 'mais sobre a Projeart'; ?></strong>
                </div>
            </a>
        </div>

        <div class="bottom-area">
            <div class="col-lg-5 col-md-6 d-flex align-items-end justify-content-start">
                <div class="img-people-floating">
                    <?php if ($img3d): ?>
                        <img src="<?php echo esc_url($img3d['url']); ?>" alt="<?php echo esc_attr($img3d['alt']); ?>"
                            data-aos="fade-up">
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-7 col-md-6 d-flex ">
                <div class="text-box-border" data-aos="fade-left">
                    <?php if ($subtitulo): ?>
                        <h2><?php echo $subtitulo; ?></h2> 
                    <?php else: ?>
                        <h2>Se é pra fazer, <strong>faça bem feito!</strong></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div id="video-modal" class="video-modal">
        <div class="video-modal-content">
            <span class="video-modal-close">&times;</span>
            <div class="video-container">
                <?php if ($video_url):
                    // Detecta se é YouTube
                    $is_youtube = preg_match('/(youtube\.com|youtu\.be)\/(watch\?v=|embed\/|v\/)?([a-zA-Z0-9_-]{11})/', $video_url, $matches);
                    
                    if ($is_youtube && isset($matches[3])):
                        $youtube_id = $matches[3];
                        $embed_url = 'https://www.youtube.com/embed/' . $youtube_id;
                ?>
                    <iframe id="modal-video-iframe"
                        src=""
                        data-src="<?php echo esc_url($embed_url); ?>"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>

                <?php else: ?>
                    <video id="modal-video-player" controls playsinline>
                        <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                        Seu navegador não suporta o elemento de vídeo.
                    </video>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById("video-modal");
    var btn = document.getElementById("open-video-modal");
    var closeBtn = document.querySelector(".video-modal-close");
    
    // Elementos de vídeo
    var iframe = document.getElementById("modal-video-iframe");
    var video = document.getElementById("modal-video-player");

    // Abrir modal
    btn.addEventListener("click", function(e){
        e.preventDefault();
        modal.style.display = "block";
        
        // Iniciar o vídeo apropriado
        if (iframe) {
            // Para YouTube - só carrega quando abrir o modal
            iframe.src = iframe.dataset.src + "?autoplay=1&rel=0";
        }
        
        if (video) {
            // Para vídeo MP4
            video.play();
        }
    });

    // Fechar modal
    function closeModal() {
        modal.style.display = "none";
        
        // Parar completamente os vídeos
        if (iframe) {
            // Para YouTube - método mais eficaz
            iframe.src = ""; // Isso para completamente o YouTube
        }
        
        if (video) {
            // Para vídeos MP4
            video.pause();
            video.currentTime = 0;
        }
    }

    // Event listeners para fechar
    closeBtn.addEventListener("click", closeModal);
    
    window.addEventListener("click", function(event){
        if (event.target === modal) {
            closeModal();
        }
    });

    // Fechar com ESC
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modal.style.display === 'block') {
            closeModal();
        }
    });

    // Garantir que os vídeos parem quando a página for descarregada
    window.addEventListener('beforeunload', function() {
        closeModal();
    });
});
</script>