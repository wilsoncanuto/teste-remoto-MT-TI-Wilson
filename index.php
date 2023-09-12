<!DOCTYPE html>
<html lang="en" class="no-js">

<!--wilson canuto candidato vaga de Desenvolvedor de Sistemas.-->

<head>
	<meta charset="utf-8"/>
	<title>Multidados TI</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<meta name="MobileOptimized" content="320">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="page-header-fixed">
	<!-- BEGIN HEADER -->
	<?php include "cabecalho.php"; 
	?>
	<!-- END HEADER -->
	<div class="clearfix">
	</div>
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->

		<?php include "menu.php";
        ?>
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
					aria-hidden="true">
					<div class="modal-dialog">
						    <div class="modal-content">
							<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
							Widget settings form goes here
							</div>
							<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN PAGE HEADER-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
						Dashboard <small>tudo que você precisa à um click.</small>
						</h3>
						<ul class="page-breadcrumb breadcrumb">
							<li>
								<i class="fa fa-home"></i>
								<a href="index.php">Home</a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li>
								<a href="#">Dashboard</a>
							</li>
							<li class="pull-right">
								<div id="dashboard-report-range" class="dashboard-date-range tooltips"
									data-placement="top" data-original-title="Change dashboard date range">
									<i class="fa fa-calendar"></i>
									<span>
									</span>
									<i class="fa fa-angle-down"></i>
								</div>
							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				
				<!-- BEGIN DASHBOARD STATS -->
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="dashboard-stat blue">
							<div class="visual">
								<i class="fa fa-shopping-cart"></i>
							</div>
							<div class="details">
								<div class="number">
								<?= $clientesTotal=$Data_Request->dadosClientes('c'); 
								?>
								</div>
								<div class="desc">
								Clientes
								</div>
							</div>
							<a class="more" id="clientes" href="#">
							Visualizar <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="dashboard-stat green">
							<div class="visual">
							<i class="fa fa-group"></i>
							</div>
							<div class="details">
								<div class="number">
								<?= $usuariosTotal=$Data_Request->dadosUsuarios('c'); 
								?>
								</div>
								<div class="desc">
								Usuários
								</div>
							</div>
							<a class="more" href="#" id="usuarios">
								Visualizar <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="dashboard-stat purple">
							<div class="visual">
							<i class="fa fa-globe"></i>
							</div>
							<div class="details">
								<div class="number">
								<?= $fornecedoresTotal=$Data_Request->dadosFornecedores('c'); 
								?>
								</div>
								<div class="desc">
								Fornecedores
								</div>
							</div>
							<a class="more" href="#" id="fornecedores">
								Visualizar <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
				</div>
	
				<div class="clearfix">
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN SAMPLE TABLE PORTLET-->
						<div class="portlet box grey">
							<div class="portlet-title">
								<div class="caption">
								<i class="fa fa-folder-open"></i>Tabela Simples
								</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-responsive">
									<table class="table table-hover">
										<thead class="table-head">
											<tr>
												<th>
												#
												</th>
												<th>
												Nome
												</th>
												<th>
												Sobrenome
												</th>
												<th>
												Usuario
												</th>
												<th>
												Status
												</th>
											</tr>
										</thead>

										<tbody class="table-body">

											<tr>
												<td>
												  1
												</td>
												<td>
												Mark
												</td>
												<td>
												Otto
												</td>
												<td>
												makr124
												</td>
												<td>
												<span class="label label-sm label-success">
												Aprovado
												</span>
												</td>
											</tr>
											<tr>
												<td>
												2
												</td>
												<td>
												Jacob
												</td>
												<td>
												Nilson
												</td>
												<td>
												jac123
												</td>
												<td>
												<span class="label label-sm label-info">
												Pendente
												</span>
												</td>
											</tr>
											<tr>
												<td>
												3
												</td>
												<td>
												Larry
												</td>
												<td>
												Cooper
												</td>
												<td>
												lar
												</td>
												<td>
												<span class="label label-sm label-warning">
												Suspenso
												</span>
												</td>
											</tr>
											<tr>
												<td>
												4
												</td>
												<td>
												Sandy
												</td>
												<td>
												Lim
												</td>
												<td>
												sanlim
												</td>
												<td>
												<span class="label label-sm label-danger">
												Bloqueado
												</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- BEGIN FOOTER -->
	<?php include "rodape.php"; 
	?>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
	<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"
	type="text/javascript"></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.cockie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js" type="text/javascript"></script>
	<script src="assets/scripts/index.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script type="text/javascript">
		jQuery(document).ready(function () {
			App.init(); // initlayout and core plugins
			Index.init();
		})

		$('.more').on('click', e => {
			let type = $(e.target)[0]
			let color = type.parentElement.classList[1]
			let tableTitle = $('.portlet-title')[0]

			if (type.id === 'clientes') {
				color = '#27a9e3'
			}
			if (type.id === 'fornecedores') {
				color = '#28b779'
			}
			if (type.id === 'fornecedores') {
				color = '#852b99'
			}

			tableTitle.style.backgroundColor = color

			$.ajax({
				type: 'GET',
				url: 'Data_Request.php',
				data: `type=${type.id}`,
				dataType: 'json',
				success: dados => {

					let trbody = $('.table-body')[0].children
					let trHead = $('.table-head')[0].children[0]


					let tags = Object.keys(dados[0])

					for (let i = 1; i <= tags.length; i++) {
						if (!trHead.children[i]) {
							let th = document.createElement('th')
							tagsCapitalized = tags[i - 1][0].toUpperCase() + tags[i - 1].substring(1)
							th.innerText = tagsCapitalized
							trHead.appendChild(th)
						} else {

							trHead.children[i].textContent = tags[i - 1][0].toUpperCase() + tags[i - 1].substring(1)
						}

					}

					if (tags.length < trHead.children.length - 1) {
						trHead.children[5].remove()
					}

					for (let i = 0; i < dados.length; i++) {
						let tags = Object.values(dados[i])


						if (trbody[i]) {
							trbody[i].children[0].textContent = i + 1
							for (let j = 1; j <= tags.length; j++) {


								if (trbody[i] && trbody[i].children[j]) {
									if (tags.length >= trbody[i].children.length) {
										let td = document.createElement('td')
										td.textContent = tags[j]
										trbody[i].appendChild(td)
									}

									trbody[i].children[j].textContent = tags[j - 1]

								}



								if (trbody[i].children.length - tags.length == 2) {
									trbody[i].children[5].remove()
								}


							}
						}

					}

				},
				error: erro => { console.log(`Erro: ${erro}`) }
			})

		})

	</script>
  </body>
</html>