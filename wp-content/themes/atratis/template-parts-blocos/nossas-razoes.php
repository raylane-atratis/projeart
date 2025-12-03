<style>
h2 {
    color: #1003AA;
}

    .nossas-razoes {
        margin: 42px 0 20px;
        display: flex;
        flex-wrap: wrap;
        gap: 32px;
        justify-content: center;

        .item {
            width: 383px;
            padding: 38px 32px;
            margin-bottom: 23px;
            border-radius: 10px;
            text-align: left;
            
            h4 {
                font-weight: 800;
                font-size: 25px;
                color: #1003AA;
                padding-bottom: 10px;
            }
            li::marker {
                font-size: 10px;
            }
        }
    }
</style>

<div class="container">
     <h2 style="font-weight: 700; margin-top: 95px;     text-align: center; "><?php echo get_sub_field('titulo'); ?></h2>
</div>

<div class="container">
    <section class="nossas-razoes">
        <?php
        $lista = get_sub_field('razoes-conteudo');
        if ($lista):
            foreach ($lista as $row):

                $titulo = $row['titulo'] ?? '';
                $paragrafo = $row['conteudo'] ?? '';
                ?>

                <div class="item">

                    <h4><?php echo $titulo; ?></h4>
                    <p><?php echo $paragrafo; ?></p>

                </div>

            <?php endforeach;
        endif; ?>
    </section>
</div>