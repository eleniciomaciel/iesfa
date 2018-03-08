 <?php $this->load->view('style_adm/header-html'); ?>     
 <?php 
$q['q'] = $this->db->get('user_diretor')->result();
 $this->load->view('style_adm/menu-top', $q); ?>
 <?php $this->load->view('style_adm/sidebar'); ?> 
 <!--main content start-->
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i>&nbsp;Cadastro dos colaboradores</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?= base_url('painel-admin');?>">Início</a></li>
						<li><i class="icon_document_alt"></i>Form</li>
						<li><i class="fa fa-files-o"></i>Form Cadastro</li>
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
                             Advanced Form validations
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                 <?php echo form_open_multipart('painel_admin/cria_colaborador',array('role'=>'form','id'=>'register_form','name'=>'form1','class'=>'form-validate form-horizontal')); ?>
                                 
                                      <div class="form-group ">
                                          <label for="fullname" class="control-label col-lg-2">Nome completo <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="fullname" name="fullname" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Função <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="address" name="address" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Formação <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="username" name="username" type="text" />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="cargo" class="control-label col-lg-2">Cargo <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <select class="form-control m-bot15" id="cargo" name="cargo" required="">
                                              <option selected="" disabled="" value="">-- Selecione --</option>
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
                                              <input class="form-control " id="email" name="email" type="email" />
                                          </div>
                                      </div>
                                  
                                       <div class="form-group ">
                                          <label for="tel_col" class="control-label col-lg-2">Telefone <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="tel_col" name="tel_col" type="tel" />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                            <label for="descricao" class="col-lg-2 control-label">Descrição da função <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <textarea name="descricao" id="descricao" class="form-control" cols="30" rows="5" name="descricao"></textarea>                                               
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
                                              <button class="btn btn-primary" type="submit">Salvar</button>
                                              <button class="btn btn-default" type="reset">Limpar</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                          
                      </section>
                <div class="row">
<!-- script do modal -->
<!-- fim do script -->
                  <div class="col-lg-12">
                      <!--Project Activity start-->
                      <section class="panel">
                          <div class="panel-body progress-panel">
                            <div class="row">
                              <div class="col-lg-8 task-progress pull-left">
                                  <h1>Colaboradores cadastrados</h1>                                  
                              </div>
                            </div>
                          </div>
                          <div class="table-responsive">
                          <table class="table table-hover personal-task">
                              <tbody>
                            
                             <?php                            
                                foreach ($col->result() as $row)
                                {
                                        //echo $row->title;
                                    ?>
                                                                    <tr>
                                  <td>
                                                                            <div>
                                          <div class="btn-group">
                                          <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> Opções <span class="caret"></span> </button>
                                          <ul class="dropdown-menu">
                                              <li><a href="<?php echo base_url("visualizar/") . $row->id_col; ?>">Visualizar</a></li>
                                              <li><a href="<?php echo base_url("deletar/") . $row->id_col;?>" title="Deletar" onclick="return confirm('Deseja excluir esse colaborador?')">Deletar</a></li>
                                          </ul>
                                      </div>
                                      </div>
                                      
                                      
                                  <td>
                                      <?php echo $row->nome_col;?>
                                  </td>
                                  <td>
                                      <?php echo $row->funcao_col;?>
                                  </td>
                                  <td>
                                      <?php echo $row->formacao_col;?>
                                  </td>
                                  <td>
                                      <?php 
                                        if ($row->cargo_col == 1) {
                                            $row->cargo_col = "Diretor(a)";
                                        }elseif ($row->cargo_col==2) {
                                            $row->cargo_col = "Professor(a)";
                                        }elseif ($row->cargo_col==3) {
                                            $row->cargo_col = "Administrativo"; 
                                        }elseif ($row->cargo_col==4) {
                                             $row->cargo_col = "Financeiro"; 
                                        }elseif ($row->cargo_col==5) {
                                              $row->cargo_col = "Pedagógico";
                                        }elseif ($row->cargo_col==6) {
                                             $row->cargo_col = "Coordenação"; 
                                        }elseif ($row->cargo_col==7) {
                                              $row->cargo_col = "Psicologo(a)";
                                        }
                                        
                                      echo $row->cargo_col;?>
                                  </td>
                                  <td>
                                      <?php echo $row->email_col;?>
                                  </td>
                                  <td>
                                      <?php echo date('d/m/Y - H:i:s', strtotime($row->data_cria_col));?>
                                  </td>
                                  <td>
                                  <?php echo img(array('width'=>'62','height'=>'62','class'=>'img-rounded img-responsive','src'=>'imagens_dir/'.$row->foto_col)); ?>
                                  </td>
                              </tr>  
                                    <?php
                                }
                            ?>
                              </tbody>
                          </table>
                          </div>
                      </section>
                      <!--Project Activity end-->
                  </div>
              </div><br><br>

                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>

<!-- fim da session -->
 <?php $this->load->view('style_adm/footer-html'); ?>     
 <?php $this->load->view('style_adm/footer-script'); ?> 

