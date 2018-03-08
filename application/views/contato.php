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
					<li class="active">Contato</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			    <h2>Contate-nos <small>o mais rápido que pudermos retornaremos para você</small></h2>
			    <hr class="colorgraph">
			    <div id="sendmessage">Somos muito grato pelo contato!</div>
                <div id="errormessage"></div>
               <?php echo form_open('welcome/message',array('role'=>'form','class'=>'contactForm')); ?>

                    <div class="form-group">  
                    <label class="text-danger"><?php echo form_error('name_em'); ?></label>                  	
                        <input type="text" required="" name="name_em" class="form-control" id="name" placeholder="Seu Nome..." value="<?php echo set_value('name_em'); ?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    	<label class="text-danger"><?php echo form_error('email_em'); ?></label>
                        <input type="email" required="" class="form-control" name="email_em" id="email" placeholder="Seu Email..." value="<?php echo set_value('email_em'); ?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    	<label class="text-danger"><?php echo form_error('subject_em'); ?></label>
                        <input type="text" required="" class="form-control" name="subject_em" id="subject" placeholder="Assunto..." name="assunto_em" value="<?php echo set_value('subject_em'); ?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    	<label class="text-danger"><?php echo form_error('telef_em'); ?></label>
                        <input type="tel" required="" class="form-control" name="telef_em" id="telef_em" placeholder="Ex.:(74)90000-0000"
                         maxlength="15" name="phone" pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}$" title="Ex.:(74) 91234-1234" name="telef_em" value="<?php echo set_value('telef_em'); ?>" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                    	<label class="text-danger"><?php echo form_error('message_em'); ?></label>
                        <textarea class="form-control" required="" name="message_em" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Por favor digite aqui a sua solicitação..."><?php echo set_value('message_em'); ?></textarea>
                        <div class="validation"></div>
                    </div>
                    
                    <div class="text-center"><button type="submit" class="btn btn-theme btn-block btn-md">Enviar mensagem</button></div>
                </form>
                <hr class="colorgraph">

			</div>
		</div>
	</div>
	</section>
<?php 
$foot['fo'] = $this->login_model->selectdadosEscola();
$this->load->view('style_divide/footer.php',$foot);?>

