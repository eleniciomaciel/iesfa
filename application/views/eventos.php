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
					<li class="active">Eventos</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	
	<section id="content">
	<div class="container">
		<h1 class="text-center">Eventos institucionais</h1>
		<div class="row">
			<div class="col-lg-12">
				<article>
					<?php
						foreach ($rt->result() as $row)
						{
						        //
						    ?>
					<div class="post-image">
							<div class="post-heading">
								<h3><a href="#"><?php echo $row->titulo_ev;?></a></h3>
							</div>

<img class="img-responsive" src="<?php echo base_url('imagens_dir')."/".$row->img_ev;?>"  height="200" alt="Imagem da categoria">

						</div>
						<p>
							 <?php echo $row->assunto_ev;?>
						</p>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="fa fa-calendar"></i><a href="#">
									<?php echo  date('d/m/Y - H:i:s', strtotime($row->data_ev));?>

								</a></li>
								<li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
								<li><i class="fa fa-folder-open"></i><a href="#"> Eventos posts</a></li>
							</ul>
							
						</div>
						    <?php
						}
					?>
						
				</article>

				<div id="pagination">
					<span class="all">Page 1 of 3</span>
					<span class="current">1</span>
					<a href="#" class="inactive">2</a>
					<a href="#" class="inactive">3</a>
				</div>
				<div class="clear"></div>
			</div>

		</div>
	</div>
	</section>
<?php 
$foot['fo'] = $this->login_model->selectdadosEscola();
$this->load->view('style_divide/footer.php',$foot);?>

