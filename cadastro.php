<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="materialize/css/style.css">
		<title>Find your meal | Cadastro</title>
	</head>
	<body>
		<div class="navbar-fixed">
			<nav class="teal darken-1">
				<div class="nav-wrapper container nav-fluid">
					<a href="index.php" class="brand-logo brand-text">Find your meal</a>
					<ul id="nav-mobile1" class="right hide-on-med-and-down">
						<li><a href="receita.php" class="text">Envie sua receita</a></li>
						<li><a href="cadastro.php" class="text">Cadastre-se</a></li>
						<li><a href="login.php" class="text">Login</a></li>
					</ul>
					<form>
						<div class="right input-field nav-search">
							<input id="search" type="search" placeholder="Encontre uma receita...">
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
				</div>
			</nav>
		</div>
		
		<div class="tag deep-orange darken-4">
			<h5 class="center-align text grey-text text-lighten-4">Cadastro</h5>
		</div>

		<section class="section">
			<div class="container">
                <div class="card">
                    <div class="card-content">
                        <h5 class="center-align text teal-text text-darken-1">Bem vindo!</h5>
                        <br>
                        <h6 class="center-align grey-text text-darken-1">Cadastre-se em nosso site</h6>
                        <br>
                        <div class="row">
                            <form class="col s10 offset-s1" action="#">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="nome" type="text" class="validate" required>
                                        <label for="nome">Nome</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">email</i>
                                        <input id="email" type="email" class="validate" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="senha" type="password" class="validate" required>
                                        <label for="senha">Senha</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="repetir-senha" type="text" class="validate" required>
                                        <label for="repetir-senha">Repetir senha</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">date_range</i>
                                        <input id="data-nasc" type="text" class="datepicker">
                                        <label for="data-nasc">Data de nascimento</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <div class="row">
                                            <div class="col s6">
                                                <p>
                                                    <input class="with-gap" name="sexo" type="radio" id="feminino"  />
                                                    <label for="feminino">Feminino</label>
                                                </p>
                                            </div>
                                            <div class="col s6">
                                                <p>
                                                    <input class="with-gap" name="sexo" type="radio" id="masculino"  />
                                                    <label for="masculino">Masculino</label>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row center-align">
                                    <div class="col s12">
                                        <button class="btn waves-effect waves-light teal darken-1" type="submit" name="action">Cadastrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
        </section>
        
        <br>

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
            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year,
                today: 'Today',
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: false, // Close upon selecting a date,
                container: undefined, // ex. 'body' will append picker to body
            });
        </script>
	</body>
</html>