<?php include 'layout/top.php'; ?>

		<div class="tag blue lighten-3">
			<h5 class="center-align text grey-text text-lighten-4">Login</h5>
		</div>

		<section class="section">
			<div class="container">
                <div class="card">
                    <div class="card-content">
                        <h5 class="center-align text teal-text text-darken-1">Acesse sua conta</h5>
                        <br>
                        <h6 class="center-align grey-text text-darken-1">Entre com a sua conta do <span class="brand-text">Find your meal</span></h6>
                        <br>
                        <div class="row">
                            <form class="col s6 offset-s3" action="../controller/loginController.php" method="post">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">email</i>
                                        <input id="email" type="email" class="validate" name="email" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="senha" type="password" class="validate"  name="senha" required>
                                        <label for="senha">Senha</label>
                                    </div>
                                </div>
                                <div class="row center-align">
                                    <div class="col s12">
                                        <button class="btn waves-effect waves-light teal darken-1" type="submit" name="action">
                                            Entrar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			</div>
        </section>

        <br>

<?php include 'layout/bottom.php'; ?>
