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
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a></li>
					<li class="active">Leitura do post</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="#"><?php echo $dj[0]->titulo_ps?></a></h3>
							</div>
							<img class="img-responsive" src="<?php echo base_url('imagens_dir')."/".$dj[0]->img_ps;?>"  height="200" alt="Imagem da categoria">
							
						</div>
						<p>
						<?php  echo $dj[0]->conteudo_ps;?>
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="fa fa-calendar"></i>
									<a href="#">
										<?php echo date('d/m/Y - H:i:s', strtotime($dj[0]->data_cad_ps)) ;?>
									</a>
							    </li>
								<li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
							</ul>
						</div>
				</article>
				<!--
					<div class="comment-area">

						<h4>4 Comentários</h4>
						<div class="media">
							<a href="#" class="pull-left"><img src="<?=base_url();?>style_css/img/avatar.png" alt="" class="img-circle" /></a>
							<div class="media-body">
								<div class="media-content">
									<h6><span>March 12, 2013</span> Michael Simpson</h6>
									<p>
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									</p>
									
									<a href="#" class="align-right reply">Reply</a>
								</div>
							</div>
						</div>
						<div class="media">
							<a href="#" class="pull-left"><img src="<?=base_url();?>style_css/img/avatar.png" alt="" class="img-circle" /></a>
							<div class="media-body">
								<div class="media-content">
									<h6><span>March 12, 2013</span> Smith karlsen</h6>
									<p>
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									</p>
									
									<a href="#" class="align-right reply">Reply</a>
								</div>
								<div class="media">
									<a href="#" class="pull-left"><img src="<?=base_url();?>style_css/img/avatar.png" alt="" class="img-circle" /></a>
									<div class="media-body">
										<div class="media-content">
											<h6><span>June 22, 2013</span> Jay Moeller</h6>
											<p>
											Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
											</p>
											
											<a href="#" class="align-right reply">Reply</a>
										</div>
									</div>
								</div>
							</div>
						</div>	
						<div class="media">
							<a href="#" class="pull-left"><img src="<?=base_url();?>style_css/img/avatar.png" alt="" class="img-circle" /></a>
							<div class="media-body">
								<div class="media-content">
									<h6><span>June 24, 2013</span> Dean Zaloza</h6>
									<p>
									Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									</p>
									
									<a href="#" class="align-right reply">Reply</a>
								</div>
							</div>
						</div>
						
						<div class="marginbot30"></div>
						<h4>Faça seu comentário</h4>
						
						
						<form role="form">
						  <div class="form-group">
							<input type="text" class="form-control" id="name" placeholder="* Entre com seu nome">
						  </div>
						  <div class="form-group">
							<input type="email" class="form-control" id="email" placeholder="* Entre com seu email">
						  </div>
						  <div class="form-group">
							<textarea class="form-control" rows="8" placeholder="* Seu comentários"></textarea>
						  </div>
						  <button type="submit" class="btn btn-theme btn-md">Enviar</button>
						</form>

					</div>
				-->
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
					<?php
							foreach ($dh->result() as $l)
							{
							        
							    ?>
									<li>
										<i class="fa fa-angle-right"></i>
										<a href="#"><?php echo $l->nome_cat_bg;?></a>
									</li>
							    <?php
							}
						?>
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="recent">
						<?php
							foreach ($dh->result() as $k)
							{
							    //echo $row->title;
							    ?>
									<li>
										<img width="90" height="90" class="img-rounded img-responsive" src="<?php echo base_url('imagens_dir')."/".$k->img_ps;?>" alt="Imagem da categoria">
										<h6>
											<a href="#"><?php echo $k->titulo_ps;?></a>
										</h6>
										<p style="white-space: nowrap;
                                                width: 32em;
                                                overflow: hidden;
                                                text-overflow: ellipsis;">
											 <?php echo $k->conteudo_ps;?>
										</p>
									</li>
							    <?php
							}
						?>
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

