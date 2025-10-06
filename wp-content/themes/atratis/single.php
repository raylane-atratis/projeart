<?php get_header(); ?>

<div class="interna animated fadeIn">

  <div class="container">
    <div class="row">

      <div class="col-12">
        <div class="breadcrumb-personalizada">
          <?php get_breadcrumb(); ?>
        </div>
      </div>

    </div>

  </div>
  <div class="title-internas">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Artigos</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="container single-conteudo">
    <div class="row single">
      <div class="col-12 col-lg-8">


        <div class="single_box">
          <?php echo get_template_part("templates/blog-extra-info"); ?>

          <h1><?php echo the_title(); ?></h1>

          <?php the_content(); ?>
          <div class="card-author">
            <?php
            $author_id = get_the_author_meta('ID');
            $autor = get_the_author();
            $author_first_name = get_the_author_meta('first_name');
            $foto_perfil = get_field('imagem_perfil', 'user_' . $author_id);
            $cargo = get_the_author_meta('description');
            $resumo = get_field('resumo', 'user_' . $author_id);

            ?>
            <div class="imagem">
              <img src="<?php echo $foto_perfil["url"] ?>" alt="<?php $foto_perfil['alt']; ?>" class="avatar" />
            </div>
            <div class="texto">
              <h3>
                <?php echo $author_first_name; ?>
              </h3>
              <?php echo $resumo; ?>
            </div>
          </div>



        </div>
      </div>
      <div class="col-12 col-lg-4">
        <?php include('sidebar.php'); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-8">
        <?php echo get_template_part("templates/share"); ?>
      </div>
    </div>



  </div>

</div>

<?php get_footer(); ?>