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
					<li class="active">Blog</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
	<div class="container">
		<div class="row">
			<h1 class="text-center">Blog da instituição</h1>
			<div class="col-lg-8">
				<?php
					foreach ($dt->result() as $m)
					{
						?>
				<article>
					<div class="post-image">
						<div class="post-heading">
							<h3><a href="#"><?php echo $m->titulo_ps;?></a></h3>
						</div>
						<img  height="200" class="img-rounded img-responsive" src="<?php echo base_url('imagens_dir')."/".$m->img_ps;?>" alt="Imagem da categoria">
					</div>
					<p style="white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;">
						 <?php echo $m->conteudo_ps ;?>
					</p>
					<div class="bottom-article">
						<ul class="meta-post">
							<li><i class="fa fa-calendar"></i><a href="#">
								<?php echo date('d/m/Y - H:i:s', strtotime($m->data_cad_ps)) ;?></a></li>
							<li><i class="fa fa-user"></i><a href="#"><?php echo $m->nome_cat_bg;?></a></li>
							<li><i class="fa fa-folder-open"></i><a href="#"> Blog</a></li>
						</ul>
						<a href="<?=base_url('leia-mais/') . $m->id_ps;?>" class="readmore pull-right">Continue lendo <i class="fa fa-angle-right"></i></a>
					</div>
				</article>
					    <?php
					}
				?>

				<div id="pagination">
					<span class="all">Page 1 of 3</span>
					<span class="current">1</span>
					<a href="#" class="inactive">2</a>
					<a href="#" class="inactive">3</a>
				</div>
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
					<h5 class="widgetheading">Categories</h5>
					<ul class="cat">
						<?php
							foreach ($dd->result() as $l)
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
					<h5 class="widgetheading">Últimos posts</h5>
					<ul class="recent">
						<?php
							foreach ($dd->result() as $k)
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

