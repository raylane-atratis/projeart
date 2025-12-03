<style>
  .galvanizacao-beneficios {
    margin: 64px 0 0 0;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
    justify-content: center;
  }

    img {
        max-width: 65px;
        width: 100%;
        height: 70px;
    }

    .item {
        width: 383px;
        padding: 38px 32px;
        border: 1px solid #E6E6E6;
        border-radius: 10px;
        text-align: center;

        h3 {
            font-size: 25px;
            font-weight: 700;
            line-height: 34px;
            margin: 17px 0 10px;
        }
    }
</style>

<div class="container"> 
<section class="galvanizacao-beneficios">
        <?php
        $lista = get_sub_field('galvanizacao_caracteristicas');
        if ($lista):
            foreach ($lista as $row):

                $icone = $row['icone'] ?? null;
                $svg = $row['svg'] ?? null;
                $titulo = $row['titulo'] ?? '';
                $paragrafo = $row['conteudo'] ?? '';
                $paragrafo_2 = $row['conteudo_2'] ?? '#';
                ?>
                  
                  <div class="item">

                    <?php if ($icone): ?>
                    <img src="<?php echo $icone['url']; ?>" alt="<?php echo $icone['alt']; ?>">
                     <?php else: ?>
                     <span><?php echo $svg ?></span>
                    <?php endif; ?>

                    <h3><?php echo $titulo; ?></h3>
                    <p class="mb-4"><?php echo $paragrafo; ?></p>
                    <p><?php echo $paragrafo_2; ?></p>
                  </div>

            <?php endforeach;
        endif; ?>
    </section>
</div>