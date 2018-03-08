 <?php $this->load->view('style_adm/header-html'); ?>     
<?php $q['q'] = $this->db->get('user_diretor')->result();
 $this->load->view('style_adm/menu-top', $q); ?>  
 <?php $this->load->view('style_adm/sidebar'); ?> 
 <!--main content start-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Painel dos cursos</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?= base_url('painel-admin');?>">Início</a></li>
						<li><i class="fa fa-laptop"></i>Painel criação dos cursos</li>						  	
					</ol>
				</div>
			</div>

		
		<div class="row">

			
	 <div class="col-md-12 portlets">
                           <!-- Inline form-->
       <?php echo validation_errors('<div class="alert alert-block alert-danger fade in">', '</div>');

       if ($this->session->flashdata('item_bg6')) {
                ?>
                  <div class="alert alert-success fade in">
                      <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove"></i>
                      </button>
                      <strong>Parabéns!</strong>&nbsp;<?php echo $this->session->flashdata('item_bg6');?>
                  </div>
                <?php
              }
        ?>                   
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
                    
                      <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      
                                      <?php echo form_open('painel_admin/up_curso_mt',array('class'=>'form-horizontal'));?>
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Matéria <span class="required">*</span></label>
                                            <div class="col-lg-10"> 
                                                <input type="text" class="form-control" id="title" placeholder="Ex.: Português" name="materia_name" 
                                                value="<?php echo $mmt['0']->materia_mt;?>">
                                            </div>
                                          </div>   
<!-- campo hidden -->
<input type="hidden" name="idv" value="<?php echo $mmt['0']->id_cm;?>">
<!-- campo fim hidden -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Codigó <span class="required">*</span></label>
                                            <div class="col-lg-10"> 
                                                <input type="text" class="form-control" id="title" placeholder="Ex.: poot_009" name="codigo_name" 
                                                value="<?php echo $mmt['0']->codigo_mt;?>">
                                            </div>
                                          </div>      
                                          
                                          
                                          
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
                                                <div class="col-lg-offset-2 col-lg-9">
                                                       <button type="submit" class="btn btn-primary">Alterar</button>
                                                </div>
                                          </div>
                                      </form>
                                    </div>
                  

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                    
                  </div>
                </div>

            </div>
                    
                        
          </div> 
              <!-- project team & activity end -->

          </section>
<!-- fim da session -->
 <?php $this->load->view('style_adm/footer-html'); ?>     
 <?php $this->load->view('style_adm/footer-script'); ?> <?php



