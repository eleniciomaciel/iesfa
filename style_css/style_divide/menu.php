<div id="wrapper">
	<!-- start header -->
	<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="topleft-info">
								<li><i class="fa fa-phone"></i>
                                                                <?php
                                    foreach ($bi as $rowo)
                                        {                                             
                                             ?>
                                                <li>
                                                    <?php echo $rowo->tel_esc;?>                       
                                                </li> 

                                             <?php
                                        }
                                ?>
                                </li>
							</ul>
						</div>
						<div class="col-md-6">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Buscar conteudo no Blog..." type="text" value="" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search" title="Buscar conteúdo"></span>
							</form>
						</div>


						</div>
					</div>
				</div>
			</div>	
			
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url('welcome/index');?>"><img src="<?=base_url();?>style_css/img/logo_integracao.png" alt="" width="199" height="52" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                    	<li  class="dropdown active"><a href="<?=base_url('welcome/index');?>">Início</a></li>
                        <li>
			<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Ensino <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" onclick="return alert('Área em construção?')">Infantil</a></li>
                                <li><a href="#" onclick="return alert('Área em construção?')">Pre-vestibular</a></li>
                                <li><a href="<?=base_url('ensinos');?>">Superior</a></li>
								
                            </ul>				
						
						</li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Agenda <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <?php
                                //
                                    foreach ($dydy->result() as $rowt)
                                        {                                             
                                             ?>
                                            <li><a href="<?php echo base_url().'welcome/forcar_download/'.$rowt->file_img_f;?>"><?php echo $rowt->cat_fk_f;?>&nbsp;º</a></li> 

                                             <?php
                                        }
                                ?>
                                
							
                            </ul>
                        </li>
                        <li><a href="<?=base_url('galeria-de-fotos');?>">Galeria</a></li>
                        <li><a href="<?=base_url('posts');?>">Blog</a></li> 
                        <li><a href="<?=base_url('fale-conosco');?>">Fale conosco</a></li>
                        <li><a href="<?=base_url('eventos-institucionais');?>">Eventos</a></li>
                        <li><a href="<?=base_url('acessando-ao-sistema');?>">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->


