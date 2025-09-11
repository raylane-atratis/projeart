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



$titulo = get_sub_field('titulo');
$subtitulo = get_sub_field('subtitulo');
$lista_cards = get_sub_field('lista_cards');

$titulo_card_cta = get_sub_field('titulo_card_cta');
$texto_botao_card_cta = get_sub_field('texto_botao_card_cta');
$link_botao_card_cta = get_sub_field('link_botao_card_cta');


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

<section class="sessaoQuadroFuncionarios <?php echo $classe; ?>" style="<?php echo $geraisCSS; ?>" <?php echo $animacao; ?>>

    
    <div class="container">
 
        <div class="row">
            <div class="col-lg-12">
                <div class="grid-quadro-funcionarios">
                    <?php foreach($lista_cards as $item): ?>
                        <div class="item">
                            <div class="cargo">
                                <h3>
                                    <?php echo $item['cargo'];?>
                                </h3>
                            </div>
                            <div class="lista-funcionarios">
                                <?php foreach($item['lista_funcionarios'] as $funcionario): ?>
                                    <div class="card-funcionario">
                                        <div class="titulo">
                                            <strong><?php echo $funcionario['titulo'];?></strong>
                                        </div>
                                        <div class="descricao">
                                            <p><?php echo $funcionario['descricao'];?></p>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div> 
    </div>

</section>