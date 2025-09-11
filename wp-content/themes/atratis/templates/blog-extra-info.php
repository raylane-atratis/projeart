<div class="extra-info">
  <?php
                            $author_id = get_the_author_meta('ID');
                            $autor = get_the_author();
                            $author_first_name = get_the_author_meta('first_name');
                            $foto_perfil = get_field('imagem_perfil', 'user_'.$author_id);
                            $cargo = get_the_author_meta( 'description' );
					    ?>

  <div class="autor item">
    <div class="image">
      <img src="<?php echo $foto_perfil["url"] ?>" alt="<?php $foto_perfil['alt']; ?>" class="avatar" />
    </div>
    <div class="info">
      <?php echo $author_first_name; ?>
    </div>
  </div>

  <?php 
    $tempo_leitura = get_field('tempo_de_leitura', get_the_ID(  ));
    if($tempo_leitura):
  ?>
  <div class="tempo item">
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="15" viewBox="0 0 22 15" fill="none">
      <path
        d="M11 2C12.8387 1.99389 14.6419 2.50678 16.2021 3.47973C17.7624 4.45267 19.0164 5.84616 19.82 7.5C18.17 10.87 14.8 13 11 13C7.2 13 3.83 10.87 2.18 7.5C2.98362 5.84616 4.23763 4.45267 5.79788 3.47973C7.35813 2.50678 9.16126 1.99389 11 2ZM11 0C6 0 1.73 3.11 0 7.5C1.73 11.89 6 15 11 15C16 15 20.27 11.89 22 7.5C20.27 3.11 16 0 11 0ZM11 5C11.663 5 12.2989 5.26339 12.7678 5.73223C13.2366 6.20107 13.5 6.83696 13.5 7.5C13.5 8.16304 13.2366 8.79893 12.7678 9.26777C12.2989 9.73661 11.663 10 11 10C10.337 10 9.70107 9.73661 9.23223 9.26777C8.76339 8.79893 8.5 8.16304 8.5 7.5C8.5 6.83696 8.76339 6.20107 9.23223 5.73223C9.70107 5.26339 10.337 5 11 5ZM11 3C8.52 3 6.5 5.02 6.5 7.5C6.5 9.98 8.52 12 11 12C13.48 12 15.5 9.98 15.5 7.5C15.5 5.02 13.48 3 11 3Z"
        fill="#000" />
    </svg>
    <p>
      <span>
        <?php echo $tempo_leitura; ?>
      </span>
      min de leitura
    </p>
  </div>
  <?php endif; ?>

  <div class="separador"></div>

  <div class="date item">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
      <path
        d="M16 2H15V0H13V2H5V0H3V2H2C0.89 2 0.00999999 2.9 0.00999999 4L0 18C0 18.5304 0.210714 19.0391 0.585786 19.4142C0.960859 19.7893 1.46957 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 18H2V8H16V18ZM16 6H2V4H16V6ZM6 12H4V10H6V12ZM10 12H8V10H10V12ZM14 12H12V10H14V12ZM6 16H4V14H6V16ZM10 16H8V14H10V16ZM14 16H12V14H14V16Z"
        fill="#000" />
    </svg>
    <p>
      Publicado em
      <span>
        <?php echo get_the_date('d \d\e F \d\e Y'); ?>
      </span>
    </p>
  </div>
</div>