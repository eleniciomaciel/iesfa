	<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="widget">
					<h4>Nossa localização</h4>
					<address>
					<strong><?php  echo $fo[0]->nome_esc;?>.</strong><br>
					 <b>Rua:</b>&nbsp; <?php  echo $fo[0]->endereco_esc;?>.<br>
					 <b>Bairro:</b>&nbsp; <?php  echo $fo[0]->bairro_esc ;?>.<br>
					 <b>Cidade:</b>&nbsp;<?php  echo $fo[0]->cidade_esc;?>.<br>
					 <b>Proximo:</b>&nbsp;<?php  echo $fo[0]->ponto_ref_esc;?>.
					</address>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="widget">
					<h4>Contatos</h4>
					<p>
						<i class="icon-phone"></i>Telefones:&nbsp;<?php  echo $fo[0]->tel_esc;?><br>
						<i class="icon-envelope-alt"></i>E-mail: &nbsp;<?php  echo $fo[0]->email_esc;?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>&copy; Grupo escolar Integração - Todos os direitos reservados</p>
                        <div class="credits">
                        </div>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="<?=base_url();?>style_css/js/jquery.min.js"></script>
<script src="<?=base_url();?>style_css/js/modernizr.custom.js"></script>
<script src="<?=base_url();?>style_css/js/jquery.easing.1.3.js"></script>
<script src="<?=base_url();?>style_css/js/bootstrap.min.js"></script>
<script src="<?=base_url();?>style_css/plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="<?=base_url();?>style_css/plugins/flexslider/flexslider.config.js"></script>
<script src="<?=base_url();?>style_css/js/jquery.appear.js"></script>
<script src="<?=base_url();?>style_css/js/stellar.js"></script>
<script src="<?=base_url();?>style_css/js/classie.js"></script>
<script src="<?=base_url();?>style_css/js/uisearch.js"></script>
<script src="<?=base_url();?>style_css/js/jquery.cubeportfolio.min.js"></script>
<script src="<?=base_url();?>style_css/js/google-code-prettify/prettify.js"></script>
<script src="<?=base_url();?>style_css/js/animate.js"></script>
<script src="<?=base_url();?>style_css/js/custom.js"></script>

	
</body>
</html>