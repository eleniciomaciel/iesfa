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
					<h3 class="page-header"><i class="fa fa-laptop"></i>Galeria de imagens </h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?= base_url('painel-admin');?>">Início</a></li>
						<li><i class="fa fa-laptop"></i>Painel</li>						  	
					</ol>
				</div>
			</div>

<?php 
  if ($this->session->flashdata('success_msg')) {
    ?>
      <div class="alert alert-success fade in">
          <button data-dismiss="alert" class="close close-sm" type="button">
              <i class="icon-remove"></i>
          </button>
          <strong>Parabéns!</strong> <?php echo $this->session->flashdata('success_msg');?>
      </div>
    <?php
    
  }
  if ($this->session->flashdata('error_msg')) {
    ?>
      <div class="alert alert-danger fade in">
          <button data-dismiss="alert" class="close close-sm" type="button">
              <i class="icon-remove"></i>
          </button>
          <strong>Ops!</strong> <?php echo $this->session->flashdata('error_msg');?>
      </div>
    <?php
    
  }
 ?>

	<div class="row">	
	 <div class="col-md-12 portlets">              
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
    
                                        <!-- Title -->

      <?= form_open_multipart(base_url('cria-galeria'),array('class'=>'form-horizontal','method'=>'POST'));?>                                     
    <!-- Content -->
    <div class="form-group">
      <label class="control-label col-lg-2" for="content">Descrição <span class="required">*</span></label>
      <div class="col-lg-10">
        <textarea class="form-control" id="content" name="desc"><?php echo set_value('desc'); ?></textarea>
      </div>
    </div>                           
    <!-- Cateogry -->
        <div class="form-group">
          <label class="control-label col-lg-2">Selecione um ano letivo <span class="required">*</span></label>
          <div class="col-lg-10">                               
              <select class="form-control" name="ano_let" required="">
                  <option selected="" disabled="" value="">- Selecione -</option>
                <?php
            foreach ($mumu->result() as $pi)
              {                                                        
                ?>
<option value="<?php echo $pi->id_t;?>"><?php echo $pi->nome_turma_t; ?></option>
                <?php
              }
            ?>
              </select>  
          </div>
        </div>              
        <!-- Tags -->
<div class="form-group">
      <label for="img_file" class="control-label col-lg-2">Selecione uma foto <span class="required">*</span></label>
      <div class="col-lg-10">          
          <input type="file" name="picture" required="" accept="image/png, image/jpeg" />
      </div>
</div>
                                          
        <!-- Buttons -->
        <div class="form-group">
           <!-- Buttons -->
              <div class="col-lg-offset-2 col-lg-9">
                <input type="submit" class="btn btn-primary" name="userSubmit" id="upload" value="Publicar">       
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
              <div class="row">
                <?php
                foreach ($dd->result() as $row)
                {
                        //echo $row->title;
                  ?>
                  <div class="col-lg-3">
                      <section class="panel">
                          <div class="panel-body">
                              <p class=" text-center">
                                <?php echo $row->texto_gl;?>
                              </p>
                                <img class="img-responsive" width="100%" height="10" src="<?=base_url('uploads/images/'.$row->img_gl)?>" alt="" srcset="">
                              <?php
                              if ($row->status == 1) {
                                 $row->status = "<p class='text-center dark-bg'>Não publicada</p>";
                              }elseif ($row->status == 0) {
                                $row->status = "<p class='text-center green-bg'>Publicada</p>";
                              }
                              echo $row->status;
                              ?>
                              
                              <div id="upload_imagem">
                                  
                              </div>
                              <p class="m-bot-none text-center">
                                <a href="<?php echo base_url("deletar-img/").$row->img_gl;?>" onclick="return confirm('Deseja excluir essa imagem?')">
                                  <span class="btn  btn-danger"><i class="icon_target"></i> Deletar</span>   
                              </a>
                              <a href="<?php echo base_url("publica-img/").$row->ig_gl;?>" onclick="return confirm('Deseja publicar esse imagem?')">
                                  <span class="btn  btn-primary"><i class="icon_lightbulb_alt"></i> Publicar</span>   
                              </a>
                              </p>
                          </div>
                      </section>
                  </div>
                  <?php
                }

                ?>



              </div>
          </div>


              </div><br><br>
              
              
            </div>
                    
                        
          </div> 
              <!-- project team & activity end -->

          </section>
<!-- fim da session -->
 <?php $this->load->view('style_adm/footer-html'); ?>     
 <?php $this->load->view('style_adm/footer-script'); ?>