<body id="page-top" data-spy="scroll" data-target=".navbar-custom" >

<div id="wrapper">
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
	<div class="top-area">
		<div class="container">
			<div class="row">

			</div>
		</div>
	</div>
	<div class="container navigation">
		<div class="navbar-header page-scroll">
			<button
				type="button"
				class="navbar-toggle"
				data-toggle="collapse"
				data-target=".navbar-main-collapse"
			>
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="index.html">
				<img src="img/logo.png" alt="" width="150" height="40" />
			</a>
		</div>
<!-- 
		<div class="navbar-right hid" style="margin-top: 10px">
			<p class="text-right">
				<a href="#" class="btn btn-skin btn-lg"
					>Reservar Turno <i class="fa fa-angle-right"></i
				></a>
			</p>
		</div> -->

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
					<ul class="nav navbar-nav">

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
							<?php
								include('./navigation-menu.php');
									
							?>
						</li>
					</ul>
				</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>
		<?php

			include('./reservas-doctor-agenda-body.php');

		?>
	</div>
</body>