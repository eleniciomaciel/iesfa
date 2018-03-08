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
					<h3 class="page-header"><i class="fa fa-laptop"></i> Painel do blog</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?= base_url('painel-admin');?>">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div>

		
		<div class="row">

			
	 <div class="col-md-12 portlets">
                           <!-- Inline form-->
             <?php echo validation_errors('<div class="alert alert-block alert-danger fade in">', '</div>'); 
                if ($this->session->flashdata('item_bg')) {
                   ?>
                       <div class="alert alert-block alert-info  fade in">
                         <button data-dismiss="alert" class="close close-sm" type="button">
                             <i class="icon-remove"></i>
                         </button>
                           <strong>Parabéns!</strong>&nbsp;<?php echo $this->session->flashdata('item_bg');?>
                     </div>    
                   <?php
               }
               if ($this->session->flashdata('item_bg2')) 
                  {
                   ?>
                       <div class="alert alert-block alert-info  fade in">
                         <button data-dismiss="alert" class="close close-sm" type="button">
                             <i class="icon-remove"></i>
                         </button>
                           <strong>Parabéns!</strong>&nbsp;<?php echo $this->session->flashdata('item_bg2');?>
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
                              <?php echo form_open('painel_admin/send_cat_blog',array('class'=>'form-inline','role'=>'form'));?>
                              
                                  <div class="form-group">
                                      <label class="sr-only" for="exampleInputEmail2">Crie uma categoria</label>
                                      <input type="text" class="form-control" id="formcategoria" placeholder="Crie uma categoria" name="cat_bg_npme"
                                              value="<?php echo set_value('cat_bg_npme'); ?>">
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="exampleInputPassword2">Observação</label>
                                      <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Observação da categoria" name="cat_bg_obs"
                                       value="<?php echo set_value('cat_bg_obs'); ?>">
                                  </div>
                                  <button type="submit" class="btn btn-primary">Gerar</button>
                              </form>

                          </div>
                      </section>

                  </div>
              </div>
                           
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Postar no blog</div>
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
                                     <?php echo form_open_multipart('painel_admin/insert_blog',array('id'=>'register_form','name'=>'form1','class'=>'form-validate form-horizontal')); ?>
                                      
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="titulo_bg">Titulo <span class="required">*</span></label>
                                            <div class="col-lg-10"> 
                                                <input type="text" class="form-control" id="title" name="titulo_bg" id="titulo_bg">
                                            </div>
                                          </div>   
                                          
                                          <input type="hidden" name="id_user" value="">
                                          
                                          
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="conteudo_bg">Conteúdo <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" id="content" name="conteudo_bg" id="conteudo_bg"></textarea>
                                            </div>
                                          </div>                           
                                          <!-- Cateogry -->
                                          <div class="form-group">
                                              <label for="cat_bg" class="control-label col-lg-2">Categoria <span class="required">*</span></label>
                                            <div class="col-lg-10">                               
                                                <select class="form-control" name="cat_bg" id="cat_bg">
                                                <option selected="" disabled="" value="">- Selecione uma categoria -</option>
                                                 <?php
                                                 $query = $this->db->get('categoria_blog');

                                                    foreach ($query->result() as $row)
                                                    {
                                                           
                                                            ?>                                                             
                              <option value="<?php echo $row->id_cat_bg;?>"><?php echo $row->nome_cat_bg;?></option>
                                                            <?PHP
                                                    }
                                                 ?>
                                                  
                                                </select>  
                                            </div>
                                          </div>              
                                          <!-- Tags -->
                                          <div class="form-group">
                                            <label for="file_bg" class="control-label col-lg-2">Selecione uma foto <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <input type="file" id="file_bg" name="file_bg" required="" accept="image/jpg,image/png,image/gif">
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
                                  <h1>Posts cadastrados</h1>                                  
                              </div>
                            </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                              <?php
                              foreach ($pst->result() as $row)
                                {
                                        
                                    ?>
                              <tr>
                                  <td>
                                      <div>
                                          <div class="btn-group">
                                              <button data-toggle="dropdown" 
                                              class="btn btn-default dropdown-toggle" type="button"> Ações <span class="caret"></span> </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="<?php echo base_url("visualizar-post/") . $row->id_ps; ?>">Visualizar</a></li>
                                                    <li><a href="<?php echo base_url("deletar-post/") . $row->id_ps;?>" title="Deletar" onclick="return confirm('Deseja excluir esse Post?')">Deletar</a></li>
                                                </ul>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                    <?php echo $row->titulo_ps;?>
                                  </td>
                                  <td>
                                      <?php echo $row->conteudo_ps;?>
                                  </td>
                                  <td>                                      
                                        <?php echo img(array('width'=>'220','height'=>'120','class'=>'img-rounded img-responsive','src'=>'imagens_dir/'.$row->img_ps)); ?>                                 
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



