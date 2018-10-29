 <div class="card">
        <div class="card-header">
            <h5>INICIAR SESIÓN</h5>
            <div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i>                                                         </div>
        </div>
        <div class="card-block">
            <div class="j-wrapper j-wrapper-400">
                <form action="" method="post" class="j-pro" id="j-pro" novalidate>
                    <!-- end /.header -->
                    <div class="j-content">
                        <!-- start login -->
                        <div class="j-unit">
                            <div class="j-input">
                                <label class="j-icon-right" for="login">
                                <i class="icofont icofont-ui-user"></i>
                                     </label>
                                <input type="text" id="login" name="nombre_usuario" placeholder="Ingresa Nombre de Usuario">
                            </div>
                        </div>
                        <!-- end login -->
                        <!-- start password -->
                        <div class="j-unit">
                            <div class="j-input">
                                <label class="j-icon-right" for="password">
                           <i class="icofont icofont-lock"></i>
                                  </label>
                                <input type="password" id="password" name="password" placeholder="Ingresa contraseña">
                 
                            </div>
                        </div>
                        <div class="j-response"></div>
                        <!-- end response from server -->
                    </div>
                    <!-- end /.content -->
                    <div class="j-footer">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                    <!-- end /.footer -->
                </form>
            </div>
        </div>
        </div>

<?php
	$ingreso = new MvcController();
	$ingreso -> ingresaUsuarioController();

	if(isset($_GET["action"])){

		if($_GET["action"] == "fallo"){

			echo "Fallo al ingresar";
		
		}

	}

?>