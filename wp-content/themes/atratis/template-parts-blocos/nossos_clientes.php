<style>
.nossos-clientes {
        margin: 34px 0 70px;
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        gap: 0;
        justify-content: center;
    }
    
    .item img {
        width: 204px;
    }
</style>

<div class="container">
    <h2><?php echo get_sub_field('titulo'); ?></h2>
</div>

<div class="container">
    <section class="nossos-clientes">
        <?php
        $lista = get_sub_field('clientes_icones');
        if ($lista):
            foreach ($lista as $row):

                $icone = $row['images'] ?? null;

                ?>

                <div class="item">
                    <img src="<?php echo $icone['url']; ?>" alt="<?php echo $icone['alt']; ?>">
                </div>

            <?php endforeach;
        endif; ?>
    </section>
</div>