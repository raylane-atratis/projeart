<?php get_header(); ?>

<div class="interna animated fadeIn">

	<div class="barraBC">
		


		<div class="container">
			<div class="row">
				<div class="col-12">
					
					<h1 style="text-align: center; padding: 60px 0 20px;"><div class="barra-orange"></div> Página não Encontrada</h1>
				</div>
			</div>
		</div>
	</div>

	<article style="padding: 0px 0 60px;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="conteudo" style="text-align:center;">
						A página que você tentou acessar não existe ou está temporariamente indisponível.<br> 
						Deseja voltar para a página inicial?<br><br>
						<a href="<?php echo get_home_url(); ?>" style="
                            padding: 13px 20px;
                            background: #2b71ca;
                            border-radius: 8px;
                            color: #fff;
                        " class="bt__padrao"><i class="fa fa-home" aria-hidden="true"></i> Ir para a Home</a>
					</div>
				</div>
			</div>
		</div>
	</article>

</div>

<?php get_footer(); ?>

