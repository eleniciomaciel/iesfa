 <?php $this->load->view('style_adm/header-html'); ?>     
  <?php 
$q['q'] = $this->db->get('user_diretor')->result();
 $this->load->view('style_adm/menu-top', $q); ?> 
 <?php $this->load->view('style_adm/sidebar'); ?> 
 <!--main content start-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Painel dos recados</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?= base_url('painel-admin');?>">Início</a></li>
						<li><i class="fa fa-laptop"></i>Painel</li>						  	
					</ol>
				</div>
			</div>

		
		<div class="row">

			
	 <div class="col-md-12 portlets">
                           <!-- Inline form-->
                           
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Criar matérias</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                    
          <!--gritter notification start-->
          <?php 
          foreach ($rek->result() as $row)
            {
               ?>
                    <section class="panel col-md-4">
                      <header class="panel-heading">
                          Mensagens recebidas | <?php echo date('d/m/Y - H:i:s', strtotime($row->data_em));?>
                      </header>
                      <div class="panel-body">
                        <pre>Nome: <?php echo $row->nome_em;?></pre><br>
                        <pre>E-mail:<?php echo $row->email_em;?></pre><br>
                        <pre>Assunto: <?php echo $row->assunto_em ;?></pre><br>
                        <pre>Tel.: <?php echo $row->telef_em;?></pre><br>
                          <p class="">
                            <?php echo $row->texto_em;?>
                          </p>
                         
                          <a href="mailto:<?php echo $row->email_em;?>?body=Assunto: <?php echo $row->assunto_em ;?>" class="btn btn-primary  btn-sm" onclick="return confirm('Deseja responder esse email?')">responder</a>
                          <a href="<?php echo base_url("deletar-email/") . $row->id_em;?>" onclick="return confirm('Deseja excluir esse email?')" class="btn btn-danger  btn-sm" href="#">Deletar</a>
                      </div>
                    </section>
              <?php
            }
          ?>
                      <!--gritter notification end-->
                  

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                    
                  </div>
                </div>
                  
              </div>
           
              
            </div>
                    
                        
          </div> 
              <!-- project team & activity end -->

          </section>
<!-- fim da session -->
 <?php $this->load->view('style_adm/footer-html'); ?>     
 <?php $this->load->view('style_adm/footer-script'); ?> <?php



