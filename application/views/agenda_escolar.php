<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
<?php 
$this->load->view('style_divide/header.php');
?>
<?php 
$dy['bi'] = $this->login_model->selectdadosEscola();
$dy['dydy'] = $this->login_model->age_escolar();
$this->load->view('style_divide/menu.php',$dy);
?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li><a href="#">Agenda escolar dos alunos</a><i class="icon-angle-right"></i></li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">

<div class="col-md-12">
	<h2 class="text-center">Turno Matutino</h2>
						<ul class="nav nav-tabs">
							<li class="active"><a href="#one" data-toggle="tab">
								<i class="icon-briefcase"></i> Segunda - feira</a></li>
							<li><a href="#two" data-toggle="tab">Terça - feira</a></li>
							<li><a href="#three" data-toggle="tab">Quarta - feira</a></li>
							<li><a href="#for" data-toggle="tab">Quinta - feira</a></li>
							<li><a href="#five" data-toggle="tab">Sexta - feira</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="one">

								 <table class="table">
					                <thead>
					                  <tr>
					                    <th>Período</th>
					                    <th>Horário</th>
					                    <th>Matéria</th>
					                    <th>Professor(a)</th>
					                  </tr>
					                </thead>
					                <tbody>
					                  <tr>
					                    <td>1º</td>
					                    <td>7:00 as 8:00</td>
					                    <td>Português</td>
					                    <td>Luiz Enrique</td>
					                  </tr>
					                  <tr>
					                    <td>2º</td>
					                    <td>8:00 as 9:00</td>
					                    <td>Matemática</td>
					                    <td>Viviane Tenório</td>
					                  </tr>
					                  <tr>
					                    <td>3º</td>
					                    <td>9:00 as 10:00</td>
					                    <td>História</td>
					                    <td>Leonardo dos Santos</td>
					                  </tr>
					                  <tr>
					                    <td>4º</td>
					                    <td>10:00 as 11:00</td>
					                    <td>Ciências da natureza</td>
					                    <td>Rita Amália</td>
					                  </tr>
					                  <tr>
					                    <td>5º</td>
					                    <td>11:00 as 12:00</td>
					                    <td>Geografia</td>
					                    <td>Amanda Dias</td>
					                  </tr>
					                </tbody>
					              </table>
							</div>
							<div class="tab-pane" id="two">
								<p><img src="<?=base_url();?>style_css/img/dummy1.jpg" class="pull-right" alt="" />
									 Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
								</p>
								<p>Lorem ipsum dolor sit amet, vel laoreet pertinacia at, nam ea ornatus ocurreret gubergren. Per facete graecis eu.</p>
							</div>
							<div class="tab-pane" id="three">
								 <table class="table">
					                <thead>
					                  <tr>
					                    <th>#</th>
					                    <th>First Name</th>
					                    <th>Last Name</th>
					                    <th>Username</th>
					                  </tr>
					                </thead>
					                <tbody>
					                  <tr>
					                    <td>1</td>
					                    <td>Mark</td>
					                    <td>Otto</td>
					                    <td>@mdo</td>
					                  </tr>
					                  <tr>
					                    <td>2</td>
					                    <td>Jacob</td>
					                    <td>Thornton</td>
					                    <td>@fat</td>
					                  </tr>
					                  <tr>
					                    <td>3</td>
					                    <td>Larry</td>
					                    <td>the Bird</td>
					                    <td>@twitter</td>
					                  </tr>
					                </tbody>
					              </table>
							</div>

						   <div class="tab-pane" id="for">
								<p><img src="<?=base_url();?>style_css/img/dummy1.jpg" class="pull-right" alt="" />
									 Tale dolor mea ex, te enim assum suscipit cum, vix aliquid omittantur in. Duo eu cibo dolorum menandri, nam sumo dicit admodum ei. Ne mazim commune honestatis cum, mentitum phaedrum sit et.
								</p>
								<p>Lorem ipsum dolor sit amet, vel laoreet pertinacia at, nam ea ornatus ocurreret gubergren. Per facete graecis eu.</p>
							</div>

							<div class="tab-pane" id="five">
								<table class="table">
					                <thead>
					                  <tr>
					                    <th>Período</th>
					                    <th>Horário</th>
					                    <th>Matéria</th>
					                    <th>Professor(a)</th>
					                  </tr>
					                </thead>
					                <tbody>
					                  <tr>
					                    <td>1º</td>
					                    <td>7:00 as 8:00</td>
					                    <td>Português</td>
					                    <td>Luiz Enrique</td>
					                  </tr>
					                  <tr>
					                    <td>2º</td>
					                    <td>8:00 as 9:00</td>
					                    <td>Matemática</td>
					                    <td>Viviane Tenório</td>
					                  </tr>
					                  <tr>
					                    <td>3º</td>
					                    <td>9:00 as 10:00</td>
					                    <td>História</td>
					                    <td>Leonardo dos Santos</td>
					                  </tr>
					                  <tr>
					                    <td>4º</td>
					                    <td>10:00 as 11:00</td>
					                    <td>Ciências da natureza</td>
					                    <td>Rita Amália</td>
					                  </tr>
					                  <tr>
					                    <td>5º</td>
					                    <td>11:00 as 12:00</td>
					                    <td>Geografia</td>
					                    <td>Amanda Dias</td>
					                  </tr>
					                </tbody>
					              </table>
							</div>

						</div>
					</div>


		</div>
		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Descriptions -->
		<div class="row">
			<div class="col-lg-6">
				<!-- Description -->
				<h4>Description</h4>
				<dl>
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
				</dl>
			</div>
			<!-- Horizontal Description -->
			<div class="col-lg-6">
				<h4>Horizontal Description</h4>
				<dl class="dl-horizontal">
					<dt>Description lists</dt>
					<dd>A description list is perfect for defining terms.</dd>
					<dt>Euismod</dt>
					<dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
					<dd>Donec id elit non mi porta gravida at eget metus.</dd>
					<dt>Malesuada porta</dt>
					<dd>Etiam porta sem malesuada magna mollis euismod.</dd>
					<dt>Felis euismod semper eget lacinia</dt>
					<dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
				</dl>
			</div>
		</div>
		<!-- divider -->
		<!-- end divider -->
	</div>
	</section>

<?php 
$foot['fo'] = $this->login_model->selectdadosEscola();
$this->load->view('style_divide/footer.php',$foot);

