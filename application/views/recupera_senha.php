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
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Recuoerar senha</a><i class="icon-angle-right"></i></li>
					
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" class="register-form">
			<h2>Recuperando senha <small>Digite aqui o seu email</small></h2>
			<hr class="colorgraph">
			<div class="row">
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email..." tabindex="4">
			</div>


			<div class="row">
				<div class="col-xs-8 col-sm-9 col-md-9">
					 Termos e <strong class="label label-primary">Condições</strong>, leia atentamente <a href="#" data-toggle="modal" data-target="#t_and_c_m">Todos os termos e condições</a> desse painel de acesso
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Enviar email" class="btn btn-theme btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6">Retornar? <a href="<?=base_url('acessando-ao-sistema');?>">ao meu login</a></div>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Termos & Condições</h4>
			</div>
			<div class="modal-body">
				<p>Para nossa segurança seus dados de IP de sua maquina já foi registrado em nosso banco de dados</p>
				<p>Informamos que esses dados permanaecerão em total sigilo pela nosssa equipe de TI e que só será usando em caso de necessidade extrema.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Eu aceito</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
	</section>
<?php 
$foot['fo'] = $this->login_model->selectdadosEscola();
$this->load->view('style_divide/footer.php',$foot);?>

