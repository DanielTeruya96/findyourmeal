<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="materialize/css/style.css">
		<title>Find your meal</title>
	</head>
	<body>
		<div class="navbar-fixed">
			<nav class="teal darken-1">
				<div class="nav-wrapper container nav-fluid">
					<a href="index.php" class="brand-logo brand-text">Find your meal</a>
					<a href="#" data-activates="mobile-demo1" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul id="nav-mobile1" class="right hide-on-med-and-down">
						<li><a href="receita.php" class="text">Envie sua receita</a></li>
						<li><a href="cadastro.php" class="text">Cadastre-se</a></li>
						<li><a href="login.php" class="text">Login</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo1">
						<li><a href="receita.php" class="text">Envie sua receita</a></li>
						<li><a href="cadastro.php" class="text">Cadastre-se</a></li>
						<li><a href="login.php" class="text">Login</a></li>
					</ul>
					<form>
						<div class="right input-field nav-search">
							<input id="search" type="search" placeholder="Encontre uma receita..." autofocus>
							<label class="label-icon" for="search"><i class="material-icons">search</i></label>
							<i class="material-icons">close</i>
						</div>
					</form>
				</div>
			</nav>
		</div>
		<div class="navbar-fixed">
			<nav class="grey lighten-5">
				<div class="nav-wrapper container nav-fluid">
					<a href="#" data-activates="mobile-demo2" class="button-collapse grey-text text-darken-2"><i class="material-icons">menu</i></a>
					<ul id="nav-mobile2" class="hide-on-med-and-down">
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Bolos e Tortas</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Carnes</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Aves</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Peixes e frutos do mar</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Saladas e molhos</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Sopas</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Massas</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Bebidas</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Doces e Sobremesas</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Lanches e snacks</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Refeições fit</a></li>
					</ul>
					<ul class="side-nav" id="mobile-demo2">
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Bolos e Tortas</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Carnes</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Aves</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Peixes e frutos do mar</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Saladas e molhos</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Sopas</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Massas</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Bebidas</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Doces e Sobremesas</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Lanches e snacks</a></li>
						<li><a href="#" class="grey-text text-darken-2 submenu-item text">Refeições fit</a></li>
					</ul>
				</div>
			</nav>
		</div>
		
		<div class="tag blue lighten-3">
			<h5 class="center-align text grey-text text-lighten-4">Novas receitas</h5>
		</div>

		<section class="section">
			<div class="container home-fluid">
				<div class="row">
					<div class="col s8">
						<div class="card hoverable">
							<div class="card-image">
								<img class="large-post" src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light blue lighten-3" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="row">
							<div class="col s12">
								<div class="card horizontal hoverable">
									<div class="card-image">
										<img class="small-post" src="assets/images/panquecas.jpg" alt="">
										<span class="card-title">Panquecas</span>
									</div>
									<div class="card-stacked">
										<div class="card-content">
											<p>I am a very simple card. I am good at containing small bits of information.</p>
											<a class="btn-floating halfway-fab waves-effect waves-light blue lighten-3" title="Ver receita">
												<i class="material-icons">add</i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col s12">
								<div class="card horizontal hoverable">
									<div class="card-image">
										<img class="small-post" src="assets/images/lanche.jpg" alt="">
										<span class="card-title">Hamburguer de frango</span>
									</div>
									<div class="card-stacked">
										<div class="card-content">
											<p>I am a very simple card. I am good at containing small bits of information.</p>
											<a class="btn-floating halfway-fab waves-effect waves-light blue lighten-3" title="Ver receita">
												<i class="material-icons">add</i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="tag green lighten-2">
			<h5 class="center-align text grey-text text-lighten-4">Destaques</h5>
		</div>

		<section class="section">
			<div class="container home-fluid">
				<div class="row">
					<div class="col s4">
						<div class="card hoverable">
							<div class="card-image">
								<img src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light green lighten-2 pulse" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="card hoverable">
							<div class="card-image">
								<img src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light green lighten-2 pulse" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="card hoverable">
							<div class="card-image">
								<img src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light green lighten-2 pulse" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s4">
						<div class="card hoverable">
							<div class="card-image">
								<img src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light green lighten-2 pulse" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="card hoverable">
							<div class="card-image">
								<img src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light green lighten-2 pulse" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="card hoverable">
							<div class="card-image">
								<img src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light green lighten-2 pulse" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="tag deep-orange darken-3">
			<h5 class="center-align text grey-text text-lighten-4">Mais vistas na semana</h5>
		</div>

		<section class="section">
			<div class="container home-fluid">
				<div class="row">
					<div class="col s4 offset-s2">
						<div class="card hoverable">
							<div class="card-image">
								<img src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light deep-orange darken-3 pulse" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="card hoverable">
							<div class="card-image">
								<img src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light deep-orange darken-3 pulse" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s4 offset-s2">
						<div class="card hoverable">
							<div class="card-image">
								<img src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light deep-orange darken-3 pulse" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="card hoverable">
							<div class="card-image">
								<img src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light deep-orange darken-3 pulse" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s4 offset-s2">
						<div class="card hoverable">
							<div class="card-image">
								<img src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light deep-orange darken-3 pulse" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
					<div class="col s4">
						<div class="card hoverable">
							<div class="card-image">
								<img src="assets/images/waffles.jpg" alt="">
								<span class="card-title grey-text text-darken-4">Waffles</span>
								<a class="btn-floating halfway-fab waves-effect waves-light deep-orange darken-3 pulse" title="Ver receita">
									<i class="material-icons">add</i>
								</a>
							</div>
							<div class="card-content">
								<p>I am a very simple card. I am good at containing small bits of information.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="page-footer teal darken-1">
          	<div class="container footer-fluid">
            	<div class="row">
              		<div class="col l6 s12">
                		<h5 class="white-text brand-text">Find your meal</h5>
                		<p class="grey-text text-lighten-4">
							Receitas na mão com o que você tem em sua disposição.
						</p>
              		</div>
              		<div class="col l4 offset-l2 s12">
                		<h5 class="white-text">Links</h5>
                		<ul>
                  			<li><a class="grey-text text-lighten-3" href="#">Link 1</a></li>
                  			<li><a class="grey-text text-lighten-3" href="#">Link 2</a></li>
                  			<li><a class="grey-text text-lighten-3" href="#">Link 3</a></li>
                  			<li><a class="grey-text text-lighten-3" href="#">Link 4</a></li>
                		</ul>
              		</div>
            	</div>
          	</div>
          	<div class="footer-copyright">
            	<div class="container footer-fluid">
            		© 2019 Todos os direitos reservados
            		<a class="grey-text text-lighten-4 right" href="#">More Links</a>
            	</div>
          	</div>
        </footer>

		<script src="materialize/js/jquery-3-3-1.js"></script>
		<script src="materialize/js/materialize.min.js"></script>
		<script>
			$( document ).ready(function(){
				$(".button-collapse").sideNav();
			})
		</script>
	</body>
</html>