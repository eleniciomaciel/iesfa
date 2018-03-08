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
					<h3 class="page-header"><i class="fa fa-user-md"></i> Perfil do usuario</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="<?= base_url('painel-admin');?>">Inicio</a></li>
						<li><i class="icon_documents_alt"></i>Página</li>
						<li><i class="fa fa-user-md"></i>Perfíl</li>
					</ol>
				</div>
			</div>
              <?php echo validation_errors('<div class="alert alert-block alert-danger fade in">', '</div>'); ?>
              <?php
              if ($this->session->flashdata('item_esc')) {
                  ?>
                  <div class="alert alert-block alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="icon-remove"></i>
                    </button>
                      <strong>Ops!</strong>&nbsp;<?php echo $this->session->flashdata('item_esc');?>
                </div>    
                  <?php
              }
                       if ($this->session->flashdata('item_esc_ok')) {
                  ?>
                  <div class="alert alert-block alert-info  fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="icon-remove"></i>
                    </button>
                      <strong>Parabéns!</strong>&nbsp;<?php echo $this->session->flashdata('item_esc_ok');?>
                </div>    
                  <?php
              }
              ?>
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4><?php $this->session->userdata('username');?></h4>               
                              <div class="follow-ava">
                                  <?php echo img(array('width'=>'62','height'=>'62','class'=>'img-circle img-responsive','src'=>'imagens_dir/'.$dados[0]->img_dir)); ?>
                              </div>
                              <h6>Administrator</h6>
                            </div>
                            <div class="col-lg-4 col-sm-4 follow-info">
                                <p>Nome:<?php echo $dados[0]->nome_dir;?></p><br>
                                <p>E-mail:&nbsp;&nbsp;<?php echo $dados[0]->email_dir;?></p><br>
                                <p>Telefone&nbsp;<?php echo $dados[0]->tel_dir;?></i></p>
                            </div>
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#recent-activity">
                                          <i class="icon-home"></i>
                                          Informaçãoes do perfíl
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Atualizar as informações
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="recent-activity" class="tab-pane active">
                                      <div class="profile-activity"> 
                                          <div class="bio-graph-heading">
                                                Informações cadstradas do perfíl.
                                          </div>
                                              <h1>Dados da escola</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>Nome da escoal: </span>: <?php echo $dados[0]->nome_esc;?> </p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>E-mail </span>: <?php echo $dados[0]->email_esc;?></p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>Bairro</span>:  <?php echo $dados[0]->endereco_esc;?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Cidade </span>: <?php echo $dados[0]->cidade_esc;?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Telefone </span>: <?php echo $dados[0]->tel_esc;?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Diretor </span>: <?php echo $dados[0]->nome_dir;?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>E-mail do diretor </span>: <?php echo $dados[0]->email_dir;?></p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Tel.:diretor </span>:  <?php echo $dados[0]->tel_dir;?></p>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                    <section class="panel">
                                      <div class="bio-graph-heading">
                                           atualizar dados do seu perfíl
                                      </div>
                                      <div class="panel-body bio-graph-info">
<!-- Form do usuario -->
                  <div class="col-md-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Informações do usuário
                          </header>
                          
                          <div class="panel-body">
                              
                                <?php echo form_open_multipart('painel_admin/create_user',array('role'=>'form','id'=>'form1','name'=>'form1')); ?>
                                  <div class="form-group">
                                      <label for="nome_dir">Nome completo:</label>
                                      <?php echo form_error('nome_dir'); ?>
                                      <input type="text" class="form-control" id="nome_dir" placeholder="Ex.: Maria" name="nome_dir"  
                                             required=""   value="<?php echo $dados[0]->nome_dir; ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="email_dir">Email:</label>
                                      <?php echo form_error('email_dir'); ?>
                                      <input type="email" class="form-control" id="email_dir" placeholder="Ex.: maria@gmail.com" name="email_dir"
                                             required="" value="<?php echo $dados[0]->email_dir; ?>">
                                  </div>
                                  <div class="form-group">
                                      <?php echo form_error('tel_dir'); ?>
                                      <label for="tel_dir">Telefone:</label>
                                      <input type="tel" class="form-control" id="tel_dir" placeholder="Tel.:(74)9.8888-8888" name="tel_dir"
                                             required="" value="<?php echo $dados[0]->tel_dir; ?>">
                                  </div>
                                  <div class="form-group">
                                      <label for="img_dir">Selecione uma foto</label>
                                      <input type="file" id="img_dir" name="img_dir" required="" accept="image/jpg,image/png,image/gif">
                                  </div>
                                  <button type="submit" class="btn btn-primary">Atualizar</button>
                              </form>

                          </div>
                      </section>
                  </div>
<!-- Fim do form do usuario -->
                                          
                                              <h1>Informações da instituição</h1>
                                              <?php echo form_open('painel_admin/cad_escola', array('role'=>'form','class'=>'form-horizontal')); ?>                 

                                  <input type="hidden" name="id_escl" value="<?php echo $dados[0]->id_esc; ?>">                                 
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Nome da escola</label>                                                      
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="f-name" placeholder="" name="nome_esc" 
                                                          value="<?php echo $dados[0]->nome_esc; ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">E-mail da instituição</label>
                                                      <div class="col-lg-6">
                                                          <input type="email" class="form-control" id="l-name" placeholder=" " name="email_esc"
                                                                 value="<?php echo $dados[0]->email_esc; ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Telefone</label>
                                                      <div class="col-lg-6">
                                                          <input type="tel" class="form-control" id="c-name" placeholder=" " name="tel_esc"
                                                                 value="<?php echo $dados[0]->tel_esc; ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Endereço</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="b-day" placeholder=" " name="endereco_esc"
                                                                 value="<?php echo $dados[0]->endereco_esc; ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Bairro</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="occupation" placeholder=" " name="bairro_esc"
                                                                 value="<?php echo $dados[0]->bairro_esc; ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Cidade</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="email" placeholder=" " name="cidade_esc"
                                                                 value="<?php echo $dados[0]->cidade_esc; ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Ponto de ref.:</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" placeholder=" " name="ponto_ref_esc"
                                                                 value="<?php echo $dados[0]->ponto_ref_esc; ?>">
                                                      </div>
                                                  </div>
                                                  
<div class="form-group">
    <label class="col-lg-2 control-label">Sobre a instituição</label>
    <div class="col-lg-10">
        <textarea  name="sobre_int_esc" id="" 
        class="form-control" cols="30" rows="5"><?php echo $dados[0]->sobre_int_esc; ?>
        </textarea>
    </div>
</div>
<div class="form-group">
    <label class="col-lg-2 control-label">Palavra do diretor</label>
    <div class="col-lg-10">
        <textarea name="palavra_dir" id="" 
        class="form-control" cols="30" rows="5"><?php echo $dados[0]->palavra_dir; ?>
        </textarea>
    </div>
</div>

  <!-- Estrutura -->
  <div class="form-group">
    <label class="col-lg-2 control-label">Estrutura da escoal</label>
      <div class="col-lg-10">
    <textarea name="esc_estrutura" id="" class="form-control" 
    cols="30" rows="5"> <?php echo $dados[0]->esc_estrutura; ?></textarea>
      </div>
  </div>
  <!-- Cursos ofertados -->
  <div class="form-group">
      <label class="col-lg-2 control-label">Cursos ofertados</label>
      <div class="col-lg-10">
  <textarea name="escola_curso" id="" 
  class="form-control" cols="30" rows="5"><?php echo $dados[0]->escola_curso; ?></textarea>
      </div>
  </div>

                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-primary">Atualizar</button>
                                                      </div>
                                                  </div>
                                              </form>
                                              
                                          
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                              </div>
                          </div>
                      </section>
<!-- fim da session -->
 <?php $this->load->view('style_adm/footer-html'); ?>     
 <?php $this->load->view('style_adm/footer-script'); ?> 