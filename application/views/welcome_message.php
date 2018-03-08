<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
<?php 
$this->load->view('style_divide/header.php');?>
<?php 
$dy['bi'] = $this->login_model->selectdadosEscola();
$dy['dydy'] = $this->login_model->age_escolar();
$this->load->view('style_divide/menu.php',$dy);
?>
<section id="featured" class="bg">
	<!-- start slider -->

			
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="main-slider flexslider">
            <ul class="slides">
              <?php
              foreach ($blog->result() as $ddi) 
              {
              	?>
              		<li>
					  <img class="img-fluid" width="100%" height="416" src="<?=base_url('imagens_dir/'.$ddi->img_ps);?>" alt="">
		                <div class="flex-caption">
		                    <h3><?php  echo $ddi->titulo_ps;?></h3> 
							<p style="white-space: nowrap;
							 overflow: hidden; 
							 text-overflow: ellipsis;"
							 >
							 <?php  echo $ddi->conteudo_ps;?>							 	
							 </p> 
							<a href="<?=base_url('leia-mais/') . $ddi->id_ps;?>" class="btn btn-theme">Leia mais</a>
		                </div>
		            </li>
              	<?php
              }
              ?>
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	


	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
							<div class="col-lg-8">
								<div class="cta-text">
									<h2>Escola Integração <span>Colaborando</span> com as famílias</h2>
									<p> Temos excelentes proffionais para colaborar na instrução do seu filho.</p>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="cta-btn">
									<a href="<?=base_url('fale-conosco');?>" class="btn btn-theme btn-lg">Saiba mais <i class="fa fa-angle-right"></i></a>
								</div>
							</div>	
		</div>
	</div>
	</section>
	
	<section id="content">
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="text-center">
					<h2>Nossa equipe de colaboradores</h2>					
					<p>Temos os profissionais com as melhores qualificações para atender bem os seus filhos.</p>
				</div>
			</div>		
		</div>
		</div>
		
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
<?php
foreach ($dd->result() as $rew)
{
	?>
	<div class="col-lg-4">
		<h4 class="text-center">
	        <?php 
	            if ($rew->cargo_col == 1) {
	                $rew->cargo_col = "Diretor(a)";
	            }elseif ($rew->cargo_col==2) {
	                $rew->cargo_col = "Professor(a)";
	            }elseif ($rew->cargo_col==3) {
	                $rew->cargo_col = "Administrativo"; 
	            }elseif ($rew->cargo_col==4) {
	                 $rew->cargo_col = "Financeiro"; 
	            }elseif ($rew->cargo_col==5) {
	                  $rew->cargo_col = "Pedagógico";
	            }elseif ($rew->cargo_col==6) {
	                 $rew->cargo_col = "Coordenação"; 
	            }elseif ($rew->cargo_col==7) {
	                  $rew->cargo_col = "Psicologo(a)";
	            }
	            
	          echo $rew->cargo_col;
	        ?>
		</h4>
		<img class="img-fluid" width="360" height="240" src="<?=base_url('imagens_dir/'.$rew->foto_col);?>" alt="">
		<p>
			<?php echo $rew->obs_col;?>
		</p>
	</div>
	<?php
}
?>


				</div>
			</div>
		</div>
		</div>
	<!-- parallax  -->
 
	<section class="callaction">
		
	
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<h4>Palavra do diretor</h4>
						<div class="testimonialslide clearfix flexslider">
							<ul class="slides">
								<?php
									foreach ($school as $rowp)
									{									       
									    ?>
									    	<li><blockquote>
												<?php  echo $rowp->palavra_dir;?>
													</blockquote>
													<h4><?php  echo $rowp->nome_dir;?> <span>&#8213; Diretor geral</span></h4> 
											</li>
									    <?php
									}
								?>
								
	
							</ul>
						</div>					
					</div>	
					<div class="col-sm-6 col-lg-6">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#one" data-toggle="tab"><i class="icon-briefcase"></i> Sobre a escola</a></li>
							<li><a href="#two" data-toggle="tab">Estrutura</a></li>
							<li><a href="#three" data-toggle="tab">Cursos</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="one">
								<p><img src="<?=base_url();?>style_css/img/dummy1.jpg" class="pull-left" alt="" />
									
									<?php  echo $dadosEscoal[0]->sobre_int_esc;?>
								</p>
							</div>
							<div class="tab-pane" id="two">
								<p><img src="<?=base_url();?>style_css/img/dummy1.jpg" class="pull-right" alt="" />
									<?php  echo $dadosEscoal[0]->esc_estrutura;?></p>
							</div>
							<div class="tab-pane" id="three">
								<p><?php  echo $dadosEscoal[0]->escola_curso;?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>	
	</section>	
		<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>

		
		<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->
		
		<!-- clients -->
		<div class="container">
				<div class="row">
					<h1 class="text-center"><span class="highlight">Parceiros</span></h1>
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="<?=base_url();?>style_css/img/clients/logo1.png" class="img-responsive" />
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="<?=base_url();?>style_css/img/clients/logo2.png" class="img-responsive" />
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="<?=base_url();?>style_css/img/clients/logo3.png" class="img-responsive" />
								</div>											
													
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="<?=base_url();?>style_css/img/clients/logo4.png" class="img-responsive" />
								</div>									
								
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="<?=base_url();?>style_css/img/clients/logo5.png" class="img-responsive" />
								</div>									
								<div class="col-xs-6 col-md-2 aligncenter client">
									<img alt="logo" src="<?=base_url();?>style_css/img/clients/logo6.png" class="img-responsive" />
								</div>	

				</div>
		</div>
	
	</section>
<?php 
$foot['fo'] = $this->login_model->selectdadosEscola();
$this->load->view('style_divide/footer.php',$foot);?>

