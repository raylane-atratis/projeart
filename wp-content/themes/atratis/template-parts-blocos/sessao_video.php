<?php
/////////////////////////////////////////////////////////
// CONFIGURAÇÕES E CAMPOS
/////////////////////////////////////////////////////////
include "conf_gerais.php"; // Seus estilos gerais

// Campos do ACF
$video_url = get_sub_field('video_bg'); // URL do vídeo para o Modal
$img_fundo = get_sub_field('imagem_fundo'); // NOVO: A imagem escura de fundo (adicione esse campo no ACF ou use um existente)
if (!$img_fundo && get_sub_field('thumbnail_video')) {
    $img_fundo = get_sub_field('thumbnail_video'); // Fallback se não tiver campo específico
}

$titulo = get_sub_field('titulo'); // "Se é pra fazer, faça bem feito!"
$subtitulo = get_sub_field('subtitulo'); // "Se é pra fazer, faça bem feito!"
$cta_texto = get_sub_field('cta_texto'); // "Dê o play e conheça..."
$cta_link_text = get_sub_field('cta_link_text'); // "mais sobre a Projeart" (parte sublinhada)
$img3d = get_sub_field('imagem_3d'); // A foto das pessoas com capacete

$classe = get_sub_field('classe');
?>

<style>
    .sessao-hero-video {
        position: relative;
        width: 100%;
        min-height: 600px;
        /* Altura mínima para caber tudo */
        height: 80vh;
        /* Ocupa 80% da altura da tela */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: flex-end;
        /* Alinha o conteúdo principal (pessoas/texto) no fundo */
        overflow: hidden;
        /* Corta o que passar da borda */
    }

    /* Camada escura sobre a imagem de fundo para dar leitura */
    .sessao-hero-video::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 1);
        /* Escurece o fundo */
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
        /* Separa o Play (topo/meio) do Conteúdo (baixo) */
    }

    /* Área do Play (Centralizada) */
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

        /* Adicionado para criar um contexto de empilhamento local */
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
        /* Ajustei a cor para rgba padrão */
        border-radius: 60px;
        /* Arredondar mais para combinar com a pílula */
        width: 350px;
        height: auto;

        /* Espaçamento interno: Esquerda grande para não ficar embaixo do círculo */
        padding: 18px 20px 18px 70px;

        /* Configuração de Camada (TRÁS) */
        position: relative;
        z-index: 1;
    }

    .play-text strong {
        display: block;
        font-weight: 700;
        text-decoration: underline;
    }

    /* Área Inferior (Pessoas + Título) */
    .bottom-area {
        display: flex;
        align-items: flex-end;
        /* Alinha pé das pessoas com o texto */
        padding-bottom: 0;
        /* As pessoas encostam no chão */
        position: relative;
    }

    /* Imagem 3D (Pessoas) */
    .img-people-floating {
        width: 40%;
        /* Ajuste o tamanho das pessoas */
        max-width: 450px;
        height: auto;
        display: block;
        margin-bottom: -10px;
        /* Leve ajuste para esconder o corte da imagem */
        margin-right: 30px;
        position: relative;
        z-index: 20;
        /* Fica na frente de tudo */
    }

    /* Caixa de Texto Lateral */
    .text-box-border {
        border: 2px solid #B5B5B5;
        border-bottom: none;
        /* Estilo aberto embaixo igual a imagem? ou fechado */
        border-radius: 15px 15px 0 0;
        /* Arredondado em cima */
        translate: -180px 120px;
        text-align: end;
        padding: 65px 80px 0 0;
        max-width: 804px;
        width: 100%;
        height: 280px;
        position: relative;
        translate: ;
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

    /* Responsivo básico */
    @media (max-width: 768px) {
        .bottom-area {
            flex-direction: column-reverse;
            align-items: center;
            text-align: center;
        }

        .img-people-floating {
            margin-right: 0;

            img {
                width: 100%;
                max-width: 500px;
                height: auto;
            }
        }

        .text-box-border {
            width: 100%;
            border: none;
            padding: 20px;
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
                        <h2><?php echo $subtitulo; ?></h2> <?php else: ?>
                        <h2>Se é pra fazer, <strong>faça bem feito!</strong></h2>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>

    <div id="video-modal" class="video-modal"
        style="display: none; position: fixed; z-index: 9999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0,0,0,0.9);">
        <div class="video-modal-content"
            style="position: relative; margin: 5% auto; padding: 0; width: 80%; max-width: 900px;">
            <span class="video-modal-close"
                style="color: white; position: absolute; top: -40px; right: 0; font-size: 35px; font-weight: bold; cursor: pointer;">&times;</span>
            <div class="video-container"
                style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                <?php if ($video_url): ?>
                    <video id="modal-video-player" src="<?php echo esc_url($video_url); ?>" controls playsinline
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></video>
                <?php endif; ?>
            </div>
        </div>
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById("video-modal");
        var btn = document.getElementById("open-video-modal");
        var span = document.getElementsByClassName("video-modal-close")[0];
        var videoPlayer = document.getElementById("modal-video-player");

        if (btn && modal) {
            btn.onclick = function (e) {
                e.preventDefault();
                modal.style.display = "block";
                if (videoPlayer) videoPlayer.play();
            }
        }
        // Fechar no X
        if (span && modal) {
            span.onclick = function () {
                modal.style.display = "none";
                if (videoPlayer) videoPlayer.pause();
            }
        }
        // Fechar clicando fora
        if (modal) {
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                    if (videoPlayer) videoPlayer.pause();
                }
            }
        }
    });
</script>