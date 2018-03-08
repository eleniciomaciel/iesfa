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
                                     <?php echo form_open_multipart('painel_admin/up_post',array('id'=>'register_form','name'=>'form1','class'=>'form-validate form-horizontal')); ?>
                                      
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="titulo_bg">Titulo <span class="required">*</span></label>
                                            <div class="col-lg-10"> 
                                                <input type="text" class="form-control" id="title" name="titulo_bg" id="titulo_bg" value="<?php echo $dd['0']->titulo_ps;?>">
                                            </div>
                                          </div>   
                                          
                                          <input type="hidden" name="id_user" value="<?php echo $dd['0']->id_ps?>">
                                          
                                          
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="conteudo_bg">Conteúdo <span class="required">*</span></label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" id="content" name="conteudo_bg" id="conteudo_bg" rows="10"><?php echo $dd['0']->conteudo_ps ?></textarea>
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
     
              
              
            </div>
                    
                        
          </div> 
              <!-- project team & activity end -->

          </section>
<!-- fim da session -->
 <?php $this->load->view('style_adm/footer-html'); ?>     
 <?php $this->load->view('style_adm/footer-script'); ?> <?php



