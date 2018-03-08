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
					<h3 class="page-header"><i class="fa fa-laptop"></i> Agenda escolar</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?= base_url('painel-admin');?>">Início</a></li>
						<li><i class="fa fa-laptop"></i>Painel</li>						  	
					</ol>
				</div>
			</div>

		
		<div class="row">
			
	 <div class="col-md-12 portlets">
<!-- Inline form-->
<?php echo validation_errors('<div class="alert alert-block alert-danger fade in">', '</div>'); ?>
<!-- Inline form-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Criar turma
                          </header>
                          <div class="panel-body">
                            <?php echo form_open('painel_admin/cat_turma',array('class'=>'form-inline','role'=>'form'))?>
                             
                                  <div class="form-group col-lg-4">
                                      <label class="sr-only" for="nomecat">Nome da categoria</label>
                                      <input type="text" class="form-control" id="nomecat" placeholder="Nome da categoria" name="nomecat" required="" value="<?php echo set_value('nomecat'); ?>">
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="ed">Codigo da categoria</label>
                                      <input type="number" class="form-control" id="ed" min="1" required="" maxlength="5" placeholder="Código"
                                      name="idcod" value="<?php echo set_value('idcod'); ?>">
                                  </div>
                                  <button type="submit" class="btn btn-primary">Salvar turma</button>
                              </form>

                          </div>
                      </section>

                  </div>
              </div>
<!-- Fim do formulario turma -->

<!-- Inline form-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Criar turma
                          </header>
                          <div class="panel-body"> 
                              <?php echo form_open_multipart('painel_admin/form_file_grade',array('class'=>'form-inline','role'=>'form','name'=>'upload_form','onsubmit'=>'return valida_form(this)'));?>
                                  <div class="form-group col-lg-4">
                                      <label class="sr-only" for="nomecat">Nome da categoria</label>
                                      <select class="form-control m-bot15" required="" name="select_turma">
                                              <option value="" disabled="" selected="">--Selecione uma turma</option>
                                              <?php
                                              foreach ($mat->result() as $po)
                                                {                                                        
                                                  ?>
                                  <option value="<?php echo $po->id_t;?>"><?php echo $po->nome_turma_t; ?></option>
                                                  <?php
                                                }
                                              ?>
                                          </select>
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="ed">Codigo da categoria</label>
                                      <input type="file" id="supfile" name="supfile" 
                                      accept="application/pdf" >
                                  </div>
                                  <button type="submit" class="btn btn-primary">Salvar turma</button>
                              </form>

                          </div>
                      </section>

                  </div>
              </div>
<!-- Fim do formulario file -->
<!-- Fim do form das grades -->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Advanced Table
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_documents_alt"></i> Arquivo</th>
                                 <th><i class="icon_table"></i> Turma</th>
                                 <th><i class="icon_calendar"></i> Enviado</th>
                                 <th><i class="icon_cogs"></i> Ações</th>
                              </tr>
                              <?php
                              foreach ($up->result() as $pp)
                                {
                                    ?>                                    
                                    <tr>
                                 <td>
                                   <a   href="<?php echo base_url().'painel_admin/forcar_download/'.$pp->file_img_f;?>" title="Baixar arquivo grade"><i class="icon_documents_alt"></i>

                                   </a>
                                 </td>
                                 <td>
                                   <?php echo $pp->nome_turma_t;?>
                                 </td>
                                 <td>
                                   <?php echo date('d/m/Y - H:i:s', strtotime($pp->data_f));?>
                                 </td>
                                 <td>
        <a id="id_img" class="btn btn-danger btn-sm" onclick="return confirm('Deseja deletar esse arquivo?')" href="<?php echo base_url('del_file/'.$pp->file_img_f);?>" title="Deletar grade"><span class="icon_target"></span>&nbsp;Deletar</a>
                                  </td>
                              </tr>
                                    <?php
                                }
                              ?>                                             
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
<!-- fim da table a cima -->
            </div>
                    
                        
          </div> 
              <!-- project team & activity end -->

          </section>
<!-- fim da session -->
 <?php $this->load->view('style_adm/footer-html'); ?>     
 <?php $this->load->view('style_adm/footer-script'); ?> 



