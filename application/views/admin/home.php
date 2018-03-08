 <?php $this->load->view('style_adm/header-html'); ?>     
 <?php 
$q['q'] = $this->db->get('user_diretor')->result();
 $this->load->view('style_adm/menu-top', $q); ?> 
 <?php $this->load->view('style_adm/sidebar'); ?> 
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Painel</h3>
					<ol class="breadcrumb">
                                            <li><i class="fa fa-home"></i><a href="<?= base_url('painel-admin');?>">Início</a></li>
						<li><i class="fa fa-laptop"></i>Painel</li>						  	
					</ol>
				</div>
			</div>

              <!-- project team & activity start -->
          <div class="row">

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
                                foreach ($coli->result() as $rot)
                                {
                                        //echo $row->title;
                                    ?>
                                                                    <tr>
                                  <td>
                                                                            <div>
                                          <div class="btn-group">
                                          <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> Opções <span class="caret"></span> </button>
                                          <ul class="dropdown-menu">
                                              <li><a href="<?php echo base_url("visualizar/") . $rot->id_col; ?>">Visualizar</a></li>
                                              <li><a href="<?php echo base_url("deletar/") . $rot->id_col;?>" title="Deletar" onclick="return confirm('Deseja excluir esse colaborador?')">Deletar</a></li>
                                          </ul>
                                      </div>
                                      </div>
                                      
                                      
                                  <td>
                                      <?php echo $rot->nome_col;?>
                                  </td>
                                  <td>
                                      <?php echo $rot->funcao_col;?>
                                  </td>
                                  <td>
                                      <?php echo $rot->formacao_col;?>
                                  </td>
                                  <td>
                                      <?php 
                                        if ($rot->cargo_col == 1) {
                                            $rot->cargo_col = "Diretor(a)";
                                        }elseif ($rot->cargo_col==2) {
                                            $rot->cargo_col = "Professor(a)";
                                        }elseif ($rot->cargo_col==3) {
                                            $rot->cargo_col = "Administrativo"; 
                                        }elseif ($rot->cargo_col==4) {
                                             $rot->cargo_col = "Financeiro"; 
                                        }elseif ($rot->cargo_col==5) {
                                              $rot->cargo_col = "Pedagógico";
                                        }elseif ($rot->cargo_col==6) {
                                             $rot->cargo_col = "Coordenação"; 
                                        }elseif ($rot->cargo_col==7) {
                                              $rot->cargo_col = "Psicologo(a)";
                                        }
                                        
                                      echo $rot->cargo_col;?>
                                  </td>
                                  <td>
                                      <?php echo $rot->email_col;?>
                                  </td>
                                  <td>
                                      <?php echo date('d/m/Y - H:i:s', strtotime($rot->data_cria_col));?>
                                  </td>
                                  <td>
                                  <?php echo img(array('width'=>'62','height'=>'62','class'=>'img-rounded img-responsive','src'=>'imagens_dir/'.$rot->foto_col)); ?>
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
		
		

          </section>
 <?php $this->load->view('style_adm/footer-html'); ?>     
 <?php $this->load->view('style_adm/footer-script'); ?> 