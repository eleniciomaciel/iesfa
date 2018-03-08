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

       if ($this->session->flashdata('item_bg5')) {
                ?>
                  <div class="alert alert-success fade in">
                      <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove"></i>
                      </button>
                      <strong>Parabéns!</strong>&nbsp;<?php echo $this->session->flashdata('item_bg5');?>
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
                                      
                                      <?php echo form_open('painel_admin/maria_curso',array('class'=>'form-horizontal'));?>
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Matéria <span class="required">*</span></label>
                                            <div class="col-lg-10"> 
                                                <input type="text" class="form-control" id="title" placeholder="Ex.: Português" name="materia_name" value="<?php echo set_value('materia_name'); ?>">
                                            </div>
                                          </div>   
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Codigó <span class="required">*</span></label>
                                            <div class="col-lg-10"> 
                                                <input type="text" class="form-control" id="title" placeholder="Ex.: poot_009" name="codigo_name" value="<?php echo set_value('codigo_name'); ?>">
                                            </div>
                                          </div>      
                                          
                                          
                                          
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
                                                <div class="col-lg-offset-2 col-lg-9">
                                                       <button type="submit" class="btn btn-primary">Salvar</button>
                                                       <button type="reset" class="btn btn-default">limpar</button>
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
              <div class="row">

                  <div class="col-lg-12">
                      <!--Project Activity start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                            <div class="row">
                              <div class="col-lg-8 task-progress pull-left">
                                  <h1>Posts cadastrados</h1>                                  
                              </div>
                            </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                              <?php
                              foreach ($mmt->result() as $mm)
                                {                                  
                                  ?>
                                  <tr>                                 
                                    <td>
                                      <div>
                                          <div class="btn-group">
                                          <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> Opções <span class="caret"></span> </button>
                                          <ul class="dropdown-menu">
                                              <li><a href="<?php echo base_url("alterar-materia/") . $mm->id_cm;?>" title="Visualizar" onclick="return confirm('Deseja visualizar e alterar essa matéria?')"">Altera</a></li>
                                              <li><a href="<?php echo base_url("delte-materia/") . $mm->id_cm;?>" title="Deletar" onclick="return confirm('Deseja deletar essa matéria?')"">Deletar</a></li>
                                          </ul>
                                      </div>
                                      </div>
                                  </td>
                                  
                                  <td>
                                     <span class="badge bg-important">
                                       <?php echo $mm->materia_mt ;?>
                                     </span>
                                  </td>
                                  <td>
                                      <span class="badge bg-primary">
                                        <?php echo $mm->codigo_mt ;?>
                                      </span>
                                  </td>
                                  <td>
                                    <span class="badge bg-success">
                                      <?php echo date('d/m/Y - H:i:s', strtotime($mm->data_mt)) ;?>
                                    </span>
                                  </td>
                              </tr>
                                  <?php
                                }
                              ?>
                              </tbody>
                          </table>
                      </section>
                      <!--Project Activity end-->
                  </div>
              </div><br><br>
              
              
            </div>
                    
                        
          </div> 
              <!-- project team & activity end -->

          </section>
<!-- fim da session -->
 <?php $this->load->view('style_adm/footer-html'); ?>     
 <?php $this->load->view('style_adm/footer-script'); ?> <?php



