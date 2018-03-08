 <?php $this->load->view('style_adm/header-html'); ?>     
 <?php $q['q'] = $this->db->get('user_diretor')->result();
 $this->load->view('style_adm/menu-top', $q); ?> 
 <?php $this->load->view('style_adm/sidebar'); ?> 
 <!--main content start-->
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
                                    <h3 class="page-header"><i class="fa fa-files-o"></i>&nbsp;Alterar dados do colaborador</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?= base_url('painel-admin');?>">Início</a></li>
						<li><i class="icon_document_alt"></i>Form</li>
						<li><i class="fa fa-files-o"></i>Form Atualizar</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <?php echo validation_errors('<div class="alert alert-block alert-danger fade in">', '</div>'); ?>
              <?php
                if ($this->session->flashdata('item_col')) {
                  ?>
                  <div class="alert alert-block alert-info  fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="icon-remove"></i>
                    </button>
                      <strong>Parabéns!</strong>&nbsp;<?php echo $this->session->flashdata('item_col');?>
                </div>    
                  <?php
              }
              ?>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Formulario de atualização do servidor
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                 <?php echo form_open_multipart('painel_admin/up_col',array('role'=>'form','id'=>'register_form','name'=>'form1','class'=>'form-validate form-horizontal')); ?>
                                 
                                      <div class="form-group ">
                                          <label for="fullname" class="control-label col-lg-2">Nome completo <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="fullname" name="fullname" type="text" value="<?php echo $mos['0']->nome_col?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Função <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="address" name="address" type="text" value="<?php echo $mos['0']->funcao_col?>"/>
                                          </div>
                                      </div>
                                  <input type="hidden" name="id" value="<?php echo $mos['0']->id_col;?>">
                                  
                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Formação <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="username" name="username" type="text" value="<?php echo $mos['0']->formacao_col?>"/>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="cargo" class="control-label col-lg-2">Cargo <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select class="form-control m-bot15" id="cargo" name="cargo" required="">
                                              <option selected="" disabled="" value="">-- <?php
                                                 if ($mos['0']->cargo_col == 1) {
                                                    $mos['0']->cargo_col = "Diretor(a)";
                                                }elseif ($mos['0']->cargo_col==2) {
                                                    $mos['0']->cargo_col = "Professor(a)";
                                                }elseif ($mos['0']->cargo_col==3) {
                                                    $mos['0']->cargo_col = "Administrativo"; 
                                                }elseif ($mos['0']->cargo_col==4) {
                                                     $mos['0']->cargo_col = "Financeiro"; 
                                                }elseif ($mos['0']->cargo_col==5) {
                                                      $mos['0']->cargo_col = "Pedagógico";
                                                }elseif ($mos['0']->cargo_col==6) {
                                                     $mos['0']->cargo_col = "Coordenação"; 
                                                }elseif ($mos['0']->cargo_col==7) {
                                                      $mos['0']->cargo_col = "Psicologo(a)";
                                                }
                                                echo $mos['0']->cargo_col;
                                              
                                              ?> --</option>
                                              <option value="1" <?php echo  set_select('cargo', '1'); ?>>Diretor(a)</option>
                                              <option value="2" <?php echo  set_select('cargo', '2'); ?>>Professor(a)</option>
                                              <option value="3" <?php echo  set_select('cargo', '3'); ?>>Administrativo</option>
                                              <option value="4" <?php echo  set_select('cargo', '4'); ?>>Financeiro</option>
                                              <option value="5" <?php echo  set_select('cargo', '5'); ?>>Pedagógico</option>
                                              <option value="6" <?php echo  set_select('cargo', '6'); ?>>Coordenação</option>
                                              <option value="7" <?php echo  set_select('cargo', '7'); ?>>Psicologo(a)</option>
                                          </select>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="email" type="email" value="<?php echo $mos['0']->email_col?>"/>
                                          </div>
                                      </div>
                                  
                                       <div class="form-group ">
                                          <label for="tel_col" class="control-label col-lg-2">Telefone <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="tel_col" name="tel_col" type="tel" value="<?php echo $mos['0']->tel_col?>"/>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                            <label for="descricao" class="col-lg-2 control-label">Descrição da função <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <textarea name="descricao" id="descricao" class="form-control" cols="30" rows="5" name="descricao"><?php echo $mos['0']->obs_col?></textarea>                                               
                                            </div>
                                      </div>
                                      
                                       <div class="form-group">
                                            <label for="exampleInputFile" class="control-label col-lg-2">Selecione uma foto <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input type="file" id="exampleInputFile" name="exampleInputFile" required="" accept="image/jpg,image/png,image/gif">
                                            </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Atualizar</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                          
                      </section>
                <div class="row">
<!-- script do modal -->
<!-- fim do script -->
                 
              </div><br><br>

                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>

<!-- fim da session -->
 <?php $this->load->view('style_adm/footer-html'); ?>     
 <?php $this->load->view('style_adm/footer-script'); ?> 

