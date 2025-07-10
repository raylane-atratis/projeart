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


$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$listaBeneficios = get_sub_field('lista_beneficios');

$descricao_agendar = get_sub_field('descricao_agendar');
$link_agendar = get_sub_field('link_agendar');
$texto_agendar = get_sub_field('texto_agendar');

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
<!-- Seção Serviços -->
<section class="sessaoVantagens <?php echo $classe; ?> <?php echo $parallax; ?> " style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="title">
                    <h2><?php echo $titulo;?></h2>
                    <p><?php echo $subtitulo;?></p>
                </div>
            </div>
        </div> 

        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="grid-beneficios">
                    <?php foreach($listaBeneficios as $item){
                        ?>
                            <div class="item-beneficio">
                                <div class="icon">
                                    <svg width="62" height="61" viewBox="0 0 62 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M60.324 30.5C60.324 46.7924 47.1164 60 30.824 60C14.5316 60 1.32397 46.7924 1.32397 30.5C1.32397 14.2076 14.5316 1 30.824 1C47.1164 1 60.324 14.2076 60.324 30.5Z" stroke="#00AEEE" stroke-width="2"/>
                                        <path d="M31.8132 43.6492C29.5343 43.6329 27.2922 43.0724 25.2737 42.0143C24.9929 41.8614 24.7818 41.6062 24.6844 41.3017C24.587 40.9972 24.6106 40.6669 24.7505 40.3794C24.9004 40.0956 25.1555 39.8818 25.4611 39.784C25.7668 39.6862 26.0986 39.7121 26.3854 39.8562C28.7411 41.0675 31.4317 41.4642 34.0367 40.9843C36.12 40.5732 38.0547 39.6099 39.6383 38.1952C41.222 36.7805 42.3965 34.9663 43.039 32.9423C43.6816 30.9183 43.7687 28.7589 43.291 26.6898C42.8134 24.6207 41.7887 22.7179 40.324 21.1803C38.8594 19.6427 37.0085 18.5269 34.965 17.9494C32.9215 17.372 30.7604 17.3541 28.7076 17.8977C26.6548 18.4413 24.7858 19.5264 23.2959 21.0395C21.806 22.5527 20.75 24.4383 20.2382 26.4992C19.5023 29.5574 20.0016 32.7824 21.6279 35.4748C21.7816 35.7479 21.8249 36.0695 21.7489 36.3735C21.6729 36.6776 21.4833 36.941 21.2192 37.1096C20.9461 37.2634 20.6244 37.3067 20.3204 37.2306C20.0163 37.1546 19.7529 36.9651 19.5843 36.7009C18.3903 34.7267 17.6927 32.4925 17.5513 30.1896C17.4098 27.8867 17.8288 25.5839 18.7722 23.4784C19.7157 21.373 21.1555 19.5276 22.9683 18.1004C24.7812 16.6732 26.9129 15.7068 29.1811 15.2839C32.9122 14.588 36.7669 15.4028 39.8973 17.549C43.0277 19.6952 45.1773 22.997 45.8732 26.7281C46.5692 30.4592 45.7544 34.314 43.6082 37.4444C41.462 40.5748 38.1601 42.7244 34.429 43.4203C33.565 43.5694 32.69 43.646 31.8132 43.6492Z" fill="#00AEEE"/>
                                        <path d="M19.1428 44.4831C18.7509 44.4925 18.3629 44.4024 18.0151 44.2214C17.6674 44.0404 17.3711 43.7742 17.154 43.4477C16.9369 43.1213 16.8061 42.7451 16.7736 42.3544C16.7411 41.9637 16.8082 41.5711 16.9684 41.2133L19.4698 35.622C19.5334 35.4714 19.6269 35.3353 19.7445 35.2219C19.8622 35.1084 20.0017 35.02 20.1544 34.962C20.3072 34.9039 20.4702 34.8774 20.6335 34.8841C20.7968 34.8907 20.9571 34.9304 21.1047 35.0007C21.4028 35.1364 21.6353 35.3842 21.7517 35.6904C21.868 35.9965 21.8587 36.3362 21.7259 36.6356L19.388 41.949L25.3881 39.8073C25.5424 39.7396 25.709 39.7044 25.8776 39.7039C26.0461 39.7035 26.2129 39.7378 26.3676 39.8047C26.5223 39.8716 26.6615 39.9697 26.7766 40.0928C26.8917 40.2159 26.9802 40.3614 27.0365 40.5203C27.0928 40.6791 27.1158 40.8479 27.104 41.016C27.0922 41.1841 27.0458 41.348 26.9678 41.4974C26.8899 41.6468 26.7819 41.7785 26.6508 41.8844C26.5196 41.9902 26.368 42.0679 26.2055 42.1125L19.9112 44.3523C19.6652 44.4425 19.4048 44.4868 19.1428 44.4831Z" fill="#00AEEE"/>
                                    </svg>

                                </div>
                                <div class="content">
                                    <h3><?php echo $item['title'];?></h3>
                                    <p><?php echo $item['conteudo'];?></p>
                                </div>
                                
                            </div>
                        <?php
                    }?>

                            <div class="item-beneficio bg-azul">
                                
                                <div class="content">
                                    <h3><?php echo $descricao_agendar;?></h3>
                                    <a href="<?php echo $link_agendar;?>"><?php echo $texto_agendar;?></a>
                                </div>
                                
                            </div>

                </div>
            </div>
        </div> 
    </div>

</section>