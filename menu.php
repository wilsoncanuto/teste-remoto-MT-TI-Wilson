<!--wilson canuto candidato vaga de Desenvolvedor de Sistemas.-->

<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<ul class="page-sidebar-menu">
			<li class="sidebar-toggler-wrapper">
				<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				<div class="sidebar-toggler hidden-phone">
				</div>
				<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			</li>
			<li class="sidebar-search-wrapper">
				<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
				<form class="sidebar-search" action="extra_search.html" method="POST">
					<div class="form-container">
						<div class="input-box">
							<a href="javascript:;" class="remove"></a>
							<input type="text" placeholder="Search..."/>
							<input type="button" class="submit" value=" "/>
						</div>
					</div>
				</form>
				<!-- END RESPONSIVE QUICK SEARCH FORM -->
			</li>
			<li class="start active ">
				<a href="index.php">
					<i class="fa fa-home"></i>
					<span class="title">
					Dashboard
					</span>
					<span class="selected">
					</span>
				</a>
			</li>

			<!--
			<?php include 'Data_Request.php';

            $menuList = $Data_Request->listTagsMenu();
            $menuListLength = $Data_Request->listTagsMenu('c');

            for ($i = 0; $i < $menuListLength; $i++):

	            if ($menuList[$i][0]['categoria'] == 'Cadastro')
		            $category1 = [...$menuList[$i]['opcoes']];
	            else
		            ($menuList[$i]['categoria'] == 'Relatorio');
	            $category2 = [...$menuList[$i]['opcoes']];


	            sort($category1);
	            sort($category2);

            ?>

			<?php endfor; 

			?>-->

			<!--Cliente-->

			<li class="">
				<a href="javascript:;">
					<i class="fa fa-file-text"></i>
					<span class="title">
					Cadastro
					</span>
					<span class="arrow ">
					</span>
				</a>
				<ul class="sub-menu">

					<?php
                    for ($i = 0; $i < count($category1); $i++):
                    ?>

					<li>
						<a href="#">
						<?= $category1[$i] ?>
						</a>
					</li>
					<?php endfor; ?>
				</ul>
			</li>
			<!--Relatorio-->
			<li class="">
				<a href="javascript:;">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">
					Relatório
					</span>
					<span class="arrow ">
					</span>
				</a>
				<ul class="sub-menu">

					<?php

                    for ($i = 0; $i < count($category2); $i++):
                    ?>

					<li>
						<a href="#">
						<?= $category2[$i] 
						?>
						</a>
					</li>

					<?php endfor; 
					?>
				</ul>
			</li>
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>