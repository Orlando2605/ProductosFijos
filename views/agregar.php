<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Agregar registro</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form action="../includes/upload.php" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">codigo</label>
                                <input type="text" id="codigo" name="codigo" class="form-control" required>

                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">marca</label>
                                <input type="text" id="marca" name="marca" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">clave</label>
                                <input type="text" id="clave" name="clave" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">descripcion</label>
                                <input type="text" id="descripcion" name="descripcion" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">serie</label>
                                <input type="text" id="serie" name="serie" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">existencia</label>
                                <input type="number" id="existencia" name="existencia" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">usuarios</label>
                                <input type="text" id="usuarios" name="usuarios" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">costo</label>
                                <input type="number" id="costo" name="costo" class="form-control" required>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                            <label for="nombre">Selecciona lugar:</label>
                                    <!-- Utiliza la etiqueta <select> para crear la selección de opciones -->
                                    <select id="lugar" name="lugar" required>
                                        <!-- Utiliza la etiqueta <option> para cada opción dentro de la selección -->
                                        <option value="Alta">Planta alta</option>
                                        <option value="Baja">Planta baja</option>
                                        <option value="Fuera">Fuera de oficina</option>
                                        <!-- Puedes agregar más opciones según sea necesario -->
                                    </select>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                            <label for="nombre">Categorias:</label>
                                    <!-- Utiliza la etiqueta <select> para crear la selección de opciones -->
                                    <select id="categoria" name="categoria" required>
                                        <!-- Utiliza la etiqueta <option> para cada opción dentro de la selección -->
                                        <option value="Monitores">Monitores</option>
                                        <option value="Laptops">Laptops</option>
                                        <option value="Impresoras">Impresoras</option>
                                        <option value="Telefono">Telefonos</option>
                                        <!-- Puedes agregar más opciones según sea necesario -->
                                    </select>
                            </div>
                        </div>
                    </div>




                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Archivo (WORD & PDF)</label>
                        <input type="file" name="factura" id="factura" class="form-control" required>

                    </div>

                    <br>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="register" name="registrar">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>