<?php
	include 'layout/top.php';
	?>

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
                            <form class="col s10 offset-s1" action="../controller/cadastroController.php" method="post">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="nome" type="text" class="validate"  name="nome"required>
                                        <label for="nome">Nome</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">email</i>
                                        <input id="email" type="email" class="validate" name="email" required>
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="senha" type="password" class="validate" name="senha"required>
                                        <label for="senha">Senha</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="repetir-senha" type="password" class="validate" name="senha2" required>
                                        <label for="repetir-senha">Repetir senha</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">date_range</i>
                                        <input id="data-nasc" type="text" class="datepicker" name="data">
                                        <label for="data-nasc">Data de nascimento</label>
                                    </div>
																		<div class="input-field col s6">
																	      <div class="row">
																	          <div class="col s6">
																	              <p>
																	                  <input  type="radio" id="feminino" name="sexo"  />
																	                  <label for="feminino">Feminino</label>
																	              </p>
																	          </div>
																	          <div class="col s6">
																	              <p>
																	                  <input   type="radio" id="masculino" name="sexo"  />
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

<?php
	include 'layout/bottom.php';
 ?>
