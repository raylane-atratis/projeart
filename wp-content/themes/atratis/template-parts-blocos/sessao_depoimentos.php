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

$link_cta = get_sub_field('link_cta');

$depoimento = get_sub_field('lista_depoimentos');

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$descricao = get_sub_field('descricao');

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


<section class="sessaoDepoimentos <?php echo $classe; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
    <div class="row">
            <div class="col-lg-6" data-aos='fade-right' data-aos-duration='1000'>
                <div class="title">
                    <h4><?php echo $subtitulo;?></h4>
                    <h2><?php echo $titulo;?></h2>
                </div>
            </div>

            <div class="col-lg-6" data-aos='fade-left' data-aos-duration='1000'>
                <div class="custom-pag">
                    <div class="prev-btn" id="prev-btn" onclick="prevDepoimentos()">
                        

                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.16697 15.984C8.05986 15.9853 7.95366 15.9646 7.8552 15.9233C7.75674 15.882 7.66821 15.821 7.59528 15.7443L0.245009 8.55145C-0.0816697 8.23177 -0.0816697 7.73626 0.245009 7.41658L7.59528 0.23976C7.92196 -0.0799201 8.42831 -0.0799201 8.75499 0.23976C9.08167 0.559441 9.08167 1.05494 8.75499 1.37462L1.97641 7.99201L8.75499 14.6254C9.08167 14.9451 9.08167 15.4406 8.75499 15.7602C8.59165 15.9201 8.37931 16 8.1833 16L8.16697 15.984Z" fill="#fff"/>
                        </svg>
                    </div>

                    <div class="next-btn" id="next-btn" onclick="nextDepoimentos()">
                        <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.833031 15.984C0.940143 15.9853 1.04634 15.9646 1.1448 15.9233C1.24326 15.882 1.33179 15.821 1.40472 15.7443L8.75499 8.55145C9.08167 8.23177 9.08167 7.73626 8.75499 7.41658L1.40472 0.23976C1.07804 -0.0799201 0.571688 -0.0799201 0.245009 0.23976C-0.0816698 0.559441 -0.0816698 1.05494 0.245009 1.37462L7.02359 7.99201L0.245009 14.6254C-0.0816698 14.9451 -0.0816698 15.4406 0.245009 15.7602C0.408349 15.9201 0.620689 16 0.816697 16L0.833031 15.984Z" fill="#fff"/>
                        </svg>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-lg-12" data-aos='fade-up' data-aos-duration='1000'>
                <div class="grid-depoimentos">
                    <div class="owl-carousel owl-depoimentos owl-theme">
                        <?php foreach($depoimento as $item){
                            ?>
                                <div class="item-depoimento <?php echo $item['tipo_de_depoimento'] !== "depoimento_texto" ? 'depoimento-video' : '' ?>">
                                    <?php if($item['tipo_de_depoimento'] === "depoimento_texto"): ?>
                                    <div class="icon-svg">
                                        <svg width="72" height="58" viewBox="0 0 72 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M30.6056 4.3116C30.3855 3.28872 29.6766 2.44063 28.7152 2.03277C28.2652 1.84503 17.567 -2.56049 3.60599 2.21404C2.86472 2.46976 2.23998 2.98444 1.85155 3.66744C1.41779 4.42813 0 7.63273 0 16.9228C0 25.7533 1.30774 28.7831 2.08785 29.806C2.31443 30.1005 2.58634 30.3563 2.90033 30.557C3.55419 30.9778 7.30261 33.0818 17.1139 33.0818C19.3797 33.0818 21.3122 32.9782 22.9566 32.8099C22.8692 34.3928 22.7365 35.9886 22.5617 37.5812C21.9434 43.2459 17.7224 47.6611 12.294 48.3247C9.63323 48.6516 7.7396 51.0729 8.0633 53.7369C8.36434 56.197 10.4587 58 12.8767 58C13.0741 58 13.2716 57.9871 13.4723 57.9644C23.3968 56.7505 31.1041 48.8005 32.2143 38.6332C32.606 35.0466 32.8035 31.4471 32.8035 27.9383C32.8035 27.8379 32.8002 27.7408 32.7938 27.6437C32.7711 14.4239 30.6962 4.71946 30.6056 4.3116Z" fill="#2443A9"/>
                                            <path d="M71.1908 27.6372C71.1682 14.4239 69.09 4.72269 68.9994 4.3116C68.7793 3.28872 68.0704 2.44063 67.109 2.03277C66.6591 1.84503 55.9609 -2.56049 41.9998 2.21404C41.2585 2.46976 40.6338 2.98444 40.2454 3.66744C39.8116 4.42813 38.3938 7.63273 38.3938 16.9228C38.3938 25.7533 39.7016 28.7831 40.4817 29.806C40.705 30.1005 40.9802 30.3563 41.2942 30.557C41.948 30.9778 45.6964 33.0818 55.5077 33.0818C57.7736 33.0818 59.706 32.9782 61.3504 32.8099C61.2598 34.396 61.1303 35.9886 60.9555 37.5812C60.3373 43.2459 56.1162 47.6611 50.6878 48.3247C48.0271 48.6516 46.1334 51.0729 46.4571 53.7337C46.7582 56.197 48.8525 58 51.2705 58C51.468 58 51.6654 57.9871 51.8661 57.9644C61.7907 56.7505 69.4979 48.8005 70.6082 38.6332C70.9998 35.0531 71.2005 31.4536 71.2005 27.9383C71.2005 27.8347 71.1973 27.7343 71.1908 27.634V27.6372Z" fill="#2443A9"/>
                                        </svg>
                                    </div>
                                    <?php endif; ?>

                                    <?php if($item['tipo_de_depoimento'] === "depoimento_texto"): ?>
                                        <p><?php echo $item['depoimento_texto']; ?></p>
                                    <?php else: ?>
                                        <video class="video-depoimento player">
                                            <source src="<?php echo $item['depoimento_video']['url']; ?>" type="video/mp4">											
                                        </video>
                                    <?php endif; ?>
                                    
                                    
                                    <div class="content-autor">
                                        <div class="foto-perfil">
                                            <img src="<?php echo $item['foto_perfil']['url'];?>" alt="">
                                        </div>
                                        <div class="informacoes">
                                            <strong><?php echo $item['autor']?></strong>
                                            <p><?php echo $item['cargo']?></p>
                                        </div>
                                    </div>
                                    
                                </div>
                            <?php
                        }?>
                    </div>
                </div>
                
            </div>
        </div>

        
    </div>

</section>