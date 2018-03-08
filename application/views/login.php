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
					<li><a href="#">Acessar ao sistema</a><i class="icon-angle-right"></i></li>
					
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <?php echo form_open('welcome/user_login_process',array('role'=>'form','class'=>'register-form')); ?>
		
			<h2>Entrar no sistema <small>acesse com sua conta</small></h2>
			<hr class="colorgraph">
                             <?php
                                    if (isset($logout_message)) {
                                    echo "<div class='message'>";
                                    echo $logout_message;
                                    echo "</div>";
                                    }
                                    if ($this->session->flashdata('item')) {
                                        echo $this->session->flashdata('item');
}
                                    ?>
                             <?php echo validation_errors(); ?>
                        
			<div class="form-group">
                            <input type="email" required="" name="username" id="email" class="form-control input-lg" placeholder="Seu e-mail"
                            value="<?php echo set_value('username'); ?>">
			</div>
			<div class="form-group">
                            <input type="password" required="" min="1" name="password" class="form-control input-lg" id="exampleInputPassword1" 
                            value="<?php echo set_value('password'); ?>">
			</div>

			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn" data-color="info" tabindex="7">Continua conectado</button>
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
					</span>
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"><input type="submit" value="Entrar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
				<div class="col-xs-12 col-md-6">Esqueceu sua senha? <a href="<?=base_url('recupera-senha');?>">Resgatar senha</a></div>
			</div>
		</form>
	</div>
</div>

</div>
	</section>
<?php 
$foot['fo'] = $this->login_model->selectdadosEscola();
$this->load->view('style_divide/footer.php',$foot);?>

