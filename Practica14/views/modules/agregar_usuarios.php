<div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Usuarios</h2>
	                            </div>
                            </div>
                        </div>
                        <div class="row flex-row">
                            <div class="col-xl-12">
                                <!-- Form -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Agregar Usuarios</h4>
                                    </div>
                                    <div class="widget-body">
                                        <form class="needs-validation" novalidate>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Nombre</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" placeholder="Ingresar nombre" name="nombre">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Email *</label>
                                                <div class="col-lg-5">
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" placeholder="Ingresa email" name="email" required>
                                                        <div class="invalid-feedback">
                                                            Ingresa un email válido
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Password *</label>
                                                <div class="col-lg-5">
                                                    <input type="password" class="form-control" placeholder="Password" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a valid password
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Teléfono</label>
                                                <div class="col-lg-5">
                                                    <div class="input-group">
                                                        <span class="input-group-addon addon-primary">
                                                            <i class="la la-phone"></i>
                                                        </span>
                                                        <input type="text" class="form-control" placeholder="Número de teléfono" name="telefono">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Tipo *</label>
                                                <div class="col-lg-5">
                                                    <div class="select">
                                                        <select name="tipo" class="custom-select form-control" required>
                                                            <option value="">Selecciona una opción</option>
                                                            <option value="1">Administrador</option>
                                                            <option value="2">Cliente</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Selecciona una opción
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                <button class="btn btn-gradient-01" type="submit">Agregar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                    </div>
                </div>