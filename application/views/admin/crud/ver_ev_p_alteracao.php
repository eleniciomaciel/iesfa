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
                              <?php echo form_open_multipart('painel_admin/update_eventos',array('class' =>'form-horizontal'));?>
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="ev_titulo">Titulo <span class="required">*</span></label>
                                            <div class="col-lg-10"> 
                                              <input type="text" class="form-control" id="ev_titulo" name="ev_titulo" value="<?php echo $dd['0']->titulo_ev?>">
                                            </div>
                                          </div>   
                                          <!-- ID HIDDEN -->
                                           <input type="hidden" name="id" value="<?php echo $dd['0']->id_ev?>">
                                          <!-- ID FIM HIDDEN -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="ev_conteudo">Conteúdo <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                              <textarea class="form-control" id="ev_conteudo" name="ev_conteudo" rows="7"><?php echo $dd['0']->assunto_ev?></textarea>
                                            </div>
                                          </div>                           
                                          <!-- Cateogry -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2">Categoria <span class="required">*</span></label>
                                            <div class="col-lg-10">                               
                                                <select class="form-control" name="myselect">
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
                                          <div class="form-group">
                                            <label class="control-label col-lg-2">Imagem da categoria</label>
                                            <div class="col-lg-10">                                              
                                              <?php echo img(array('width'=>'60','height'=>'60','class'=>'simple ','src'=>'imagens_dir/'.$dd['0']->img_ev)); ?>
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

              
            </div>
                    
                        
          </div> 
              <!-- project team & activity end -->

          </section>
<!-- fim da session -->
 <?php $this->load->view('style_adm/footer-html'); ?>     
 <?php $this->load->view('style_adm/footer-script'); ?> <?php