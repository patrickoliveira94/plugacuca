<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pluga_Cuca
 */

?>

	<footer>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-3">
					<p class="footer__item">FALE CONOSCO</p>
				</div>
				<div class="col-sm-12 col-md-3">
					<p class="footer__item">PARCEIROS</p>
				</div>
				<div class="col-sm-12 col-md-3">
					<p class="footer__item">CADASTRE-SE</p>
				</div>
				<div class="col-sm-12 col-md-3">
					<p class="footer__item">RESPONSABILIDADE SOCIAL</p>
				</div>									
			</div>

			<div class="footer__linha"></div>

			<div class="row justify-content-center">
				<div class="col-sm-12 col-md-6">
					<div class="row justify-content-center">
						<div class="col-sm-6 col-md-4">
							<ul class="footer__subitem">
								<li>Ensino Fundamental</li>
								<li>Ensino Médio</li>
								<li>Tabuada</li>
								<li>Material Dourado</li>
								<li>Educação Financeira</li>
							</ul>
						</div>
						<div class="col-sm-6 col-md-4">
							<ul class="footer__subitem">
								<li>Pais</li>
								<li>Aprendizes</li>
								<li>Educadores</li>
							</ul>
						</div>
						<div class="col-sm-12 col-md-4">
							<ul class="footer__subitem">
								<li>Quem Somos</li>
								<li>Pilares da Educação</li>
								<li>Monitoria Online</li>
								<li>Como Funciona</li>
								<li>Fale Conosco</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<ul class="footer__subitem">
						<li>Faça parte. Siga-nos!</li>
					</ul>
					<div class="container">
						<div class="row">
							<div class="col-1 footer__redes-sociais">
								<a href="http://www.facebook.com/plugacuca" target="_blank"><img src="<?= get_template_directory_uri() . '/images/facebook.svg'; ?>" width="30" height="30" alt="Facebook"></a>
							</div>
							<div class="col-1">
							<a href="http://www.twitter.com/plugacuca" target="_blank"><img src="<?= get_template_directory_uri() . '/images/twitter.svg'; ?>" width="30" height="30" alt="Twitter"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="footer__linha"></div>

			<div class="row justify-content-center">
				<p class="footer__copyright">© Todos os Direitos Reservados - Pluga Cuca - www.plugacuca.com.br</p>
			</div>
		</div>
	</footer>

	</div>

	<?php wp_footer(); ?>

	</body>
</html>
