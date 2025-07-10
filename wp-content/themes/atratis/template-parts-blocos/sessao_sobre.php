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

$imagem = get_sub_field('imagem');
$lista_sobre = get_sub_field('lista_sobre');

$titulo = get_sub_field('titulo');
$conteudo = get_sub_field('conteudo');
$link_do_cta = get_sub_field('link_do_cta');
$texto_cta = get_sub_field('texto_do_cta');
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


<section class="sessaoSobre <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>; background-position: center;" <?php echo $animacao; ?>>

    
    <div class="container">
        <div class="row" >
            <div class="col-lg-4" data-aos="fade-right" data-aos-duration='1000' data-aos-delay='300'>
                <div class="title">
                    <h4><?php echo $subtitulo; ?></h4>

                    <h2>
                        <?php echo $titulo; ?>
                    </h2>

                    <p>
                        <?php echo $conteudo; ?>
                    </p>

                    <a href="<?php echo $link_do_cta; ?>" class="btn-padrao"><?php echo $texto_cta;?></a>

                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left" data-aos-duration='1000' data-aos-delay='300'>
                <div class="img">
                    <img src="<?php echo $imagem['url']; ?>" alt="<?php echo $imagem['alt']; ?>">
                </div>
            </div>
            <div class="col-lg-3" data-aos="fade-left" data-aos-duration='1000' data-aos-delay='300'>
                <ul>
                    <?php foreach($lista_sobre as $item): ?>
                    <li>
                       <!--  <svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.55171 7.97028C3.23947 7.97041 2.94001 7.8463 2.71941 7.62533L0.20307 5.10992C-0.0676898 4.83907 -0.0676898 4.40003 0.20307 4.12919C0.473916 3.85843 0.912957 3.85843 1.1838 4.12919L3.55171 6.4971L9.8162 0.232611C10.087 -0.0381488 10.5261 -0.0381488 10.7969 0.232611C11.0677 0.503457 11.0677 0.942498 10.7969 1.21334L4.38402 7.62533C4.16341 7.8463 3.86396 7.97041 3.55171 7.97028Z" fill="#00AEEE"/>
                        </svg> -->

                        <?php echo $item['titulo']; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div> 
    </div>

</section>