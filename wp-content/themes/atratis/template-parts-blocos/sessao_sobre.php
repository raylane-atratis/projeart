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
$lista_numero = get_sub_field('lista_numero');

$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$conteudo = get_sub_field('conteudo');

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
        <div class="row">
            <div class="col-lg-6 content-img-col">
                <img src="<?php echo esc_url($imagem['url']); ?>" alt="">
            </div>
            <div class="col-lg-6">
                <div class="title">
                    <h4>
                        <div class="separador separador-esquerda"></div>
                        <?php echo $subtitulo; ?>
                        <div class="separador separador-direita"></div>
                    </h4>
                    <h2><?php echo $titulo; ?></h2>

                    <p><?php echo $conteudo;?></p>

                    <a href="#" class="btn-padrao">
                        Saiba mais
                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.85292 0H4.11754V1.37649H8.65033L0 10.0268L0.973179 11L9.62351 2.34967V6.88246H11V1.14708C11 0.514808 10.4857 0 9.85292 0Z" fill="white"/>
                        </svg>
                    </a>

                    <div class="lista-numeros">
                        <?php foreach($lista_numero as $item_numero){
                            ?>
                                <div class="item-numero">
                                    <h3>
                                        <span><?php echo $item_numero['pre_numero']?></span> 
                                        <span class="numero-infos"><?php echo $item_numero['numero'];?></span> 
                                        <span><?php echo $item_numero['pos_numero']?></span>
                                    </h3>
                                    <p><?php echo $item_numero['titulo_numero']?></p>
                                </div>
                            <?php
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>