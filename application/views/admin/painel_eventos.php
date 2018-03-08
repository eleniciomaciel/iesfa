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
					<h3 class="page-header"><i class="fa fa-laptop"></i> Painel de eventos</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?= base_url('painel-admin');?>">Início</a></li>
						<li><i class="fa fa-laptop"></i>Painel</li>						  	
					</ol>
				</div>
			</div>

		
		<div class="row">

			
	 <div class="col-md-12 portlets">
              <?php echo validation_errors('<div class="alert alert-block alert-danger fade in">', '</div>'); 
              if ($this->session->flashdata('item_bg3')) {
                ?>
                  <div class="alert alert-success fade in">
                      <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove"></i>
                      </button>
                      <strong>Parabéns!</strong>&nbsp;<?php echo $this->session->flashdata('item_bg3');?>
                  </div>
                <?php
              }
              if ($this->session->flashdata('item_bg4')) {
                ?>
                  <div class="alert alert-success fade in">
                      <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove"></i>
                      </button>
                      <strong>Parabéns!</strong>&nbsp;<?php echo $this->session->flashdata('item_bg4');?>
                  </div>
                <?php
              }
              ?>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Crie uma categoria
                          </header>
                          <div class="panel-body">
                              
                                <?php echo form_open('painel_admin/categ_ev');?>
                                  <div class="form-group">
                                      <label class="sr-only" for="cat_ev">Crie uma categoria</label>
                                      <input type="text" class="form-control" id="cat_ev" placeholder="Crie uma categoria" name="cat_ev">
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="ev_cod">Observação</label>
                                      <input type="text" class="form-control" id="ev_cod" placeholder="Codigo Ex.:op01" name="ev_cod">
                                  </div>
                                  <button type="submit" class="btn btn-primary">Gerar</button>
                              </form>

                          </div>
                      </section>

                  </div>
              </div>
                           
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Postar eventos</div>
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
                              <?php echo form_open_multipart('painel_admin/cria_eventos',array('class' =>'form-horizontal'));?>
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="ev_titulo">Titulo <span class="required">*</span></label>
                                            <div class="col-lg-10"> 
                                              <input type="text" class="form-control" id="ev_titulo" name="ev_titulo">
                                            </div>
                                          </div>   
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="ev_conteudo">Conteúdo <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                              <textarea class="form-control" id="ev_conteudo" name="ev_conteudo" rows="7"></textarea>
                                            </div>
                                          </div>                           
                                          <!-- Cateogry -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2">Categoria <span class="required">*</span></label>
                                            <div class="col-lg-10">                               
                                                <select class="form-control" name="myselect">
                                                  <option selected="" disabled="" value="">- Selecione uma categoria -</option>
                                                  <?php
                                                  $query = $this->db->get('categoria_eventos');

                                                    foreach ($query->result() as $row)
                                                    {                                                            
                                                      ?>                                                  
                                                  <option value="<?php echo $row->id_cat_ev;?>" 
                                                    <?php echo  set_select('myselect', '$row->id_cat_ev'); ?> ">
                                                    <?php echo $row->nome_cat_evento;?>              
                                                  </option>         
                                                   <?php
                                                    }
                                                  ?>                                                  
                                                </select>  
                                            </div>
                                          </div>              
                                          <!-- Tags -->
                                          <div class="form-group">
                                            <label for="filefile" class="control-label col-lg-2">Selecione uma Imagem <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input type="file" id="filefile" name="filefile" required="" 
                                                accept="image/jpg,image/png,image/gif">
                                            </div>
                                      </div>
                                          
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
                                                <div class="col-lg-offset-2 col-lg-9">
                                                       <button type="submit" class="btn btn-primary">Publicar</button>
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
                                  <h1>Eventos cadastrados</h1>                                  
                              </div>
                            </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                          <?php

                          foreach ($ev->result() as $dd)
                          {
                                  
                            ?>

                             <tr>
                                  <td>
                                    <div>
                                          <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> Opções <span class="caret"></span> </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url("alterar-evento/") . $dd->id_ev;?>" title="Deletar" onclick="return confirm('Deseja visualizar e alterar esse evento?')"">Alterar</a></li>
                                                <li><a href="<?php echo base_url("deletar-evento/") . $dd->id_ev;?>" title="Deletar" onclick="return confirm('Deseja excluir esse evento?')"">Deletar</a></li>
                                            </ul>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <?php echo $dd->titulo_ev;?>
                                  </td>
                                  <td>
                                      <p style="white-space: nowrap;
                                                width: 32em;
                                                overflow: hidden;
                                                text-overflow: ellipsis;">
                                        <?php echo $dd->assunto_ev;?>
                                      </p>
                                  </td>
                                  <td>
                                      <span class="badge bg-success">
                                        <?php echo  date('d/m/Y - H:i:s', strtotime($dd->data_ev));?>
                                      </span>
                                  </td>
                                  <td>
                                    <span class="profile-ava">
                                        
                                        <?php echo img(array('width'=>'40','height'=>'40','class'=>'simple','src'=>'imagens_dir/'.$dd->img_ev)); ?>
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
 <?php $this->load->view('style_adm/footer-script'); ?>