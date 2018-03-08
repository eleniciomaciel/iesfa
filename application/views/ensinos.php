<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
$this->load->view('style_divide/header.php');
?>
<?php 
$dy['bi'] = $this->login_model->selectdadosEscola();
$dy['dydy'] = $this->login_model->age_escolar();
$this->load->view('style_divide/menu.php',$dy);
?>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<article>
						<div class="post-image">
							<div class="post-heading">
								<h3 class="text-center"><a href="#">Nós oferecemos os melhor ensno da região</a></h3>
							</div>
							<img src="<?=base_url();?>style_css/img/dummies/blog/img1.jpg" alt="" class="img-responsive" />
						</div>
						<p>
							 Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
						</p>
				</article>
				
				<article>
						<div class="post-slider">
							<div class="post-heading">
								<h3><a href="#">Descrição, diferencial e formato do curso</a></h3>
							</div>
							<!-- start flexslider -->
							<!-- end flexslider -->
						</div>
						<p>
							 Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
						</p>
				</article>
				<article>
						<div class="post-quote">
							<div class="post-heading">
								<h3><a href="#">Nice example of quote post format below</a></h3>
							</div>
							<blockquote>
								<i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, ei quod constituto qui. Summo labores expetendis ad quo, lorem luptatum et vis. No qui vidisse signiferumque...
							</blockquote>
						</div>
				</article>
				<article>
						<div class="post-video">
							<div class="post-heading">
								<h3><a href="#">Vídeo falando sobre o curso</a></h3>
							</div>
							<div class="video-container">
								<iframe src="http://player.vimeo.com/video/30585464?title=0&amp;byline=0">
								</iframe>
							</div>
						</div>
						<p>
							 Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei.
						</p>
				</article>
				<div class="clear"></div>
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget">
					<form role="form">
					  <div class="form-group">
						<input type="text" class="form-control" id="s" placeholder="Search..">
					  </div>
					</form>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Categorias</h5>
					<ul class="cat">
						<li><i class="fa fa-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
						<li><i class="fa fa-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
						<li><i class="fa fa-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Últimos posts</h5>
					<ul class="recent">
						<li>
						<img src="<?=base_url();?>style_css/img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
						<h6><a href="#">Lorem ipsum dolor sit</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="<?=base_url();?>style_css/img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Maiorum ponderum eum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="<?=base_url();?>style_css/img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
						<h6><a href="#">Et mei iusto dolorum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
					</ul>
				</div>
				</aside>
			</div>
		</div>
	</div>
	</section>
<?php 
$foot['fo'] = $this->login_model->selectdadosEscola();
$this->load->view('style_divide/footer.php',$foot);?>

