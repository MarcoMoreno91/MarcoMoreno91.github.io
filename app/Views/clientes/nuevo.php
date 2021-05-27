
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <h4 class="mt-4"><?php echo $titulo;?></h4>

                    <?php \Config\Services::validation()->listErrors();?>

                     <form method= "POST" action="<?php echo base_url();?>/clientes/insertar" autocomplete="off">
                     <?php csrf_field();?>
                     
                        <div class="form-group">
                        
                        <div class="row">
                        
                        <div class="col-12 col-sm-6">
                        <label>Razon Social</label>
                        <input class ="form-control" id="nombre_razonSocial" name="nombre_razonSocial" type="text" autofocus required placeholder="Razón Social o Nombre" />
                        </div>
                       
                        <div class="col-12 col-sm-6">
                        <label>Calle</label>
                        <input class ="form-control" id="calle" name="calle" type="text" required placeholder="Calle"/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>numero</label>
                        <input class ="form-control" id="numero" name="numero" type="text" required placeholder="# Número"/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Colonia</label>
                        <input class ="form-control" id="colonia" name="colonia" type="text" required placeholder="Colonia"/>
                        </div>
                            
                        <div class="col-12 col-sm-6">
                        <label>Codigo Postal</label>
                        <input class ="form-control" id="cp" name="cp" type="text" required placeholder="Código Postal"/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Teléfono</label>
                        <input class ="form-control" id="telefono" name="telefono" type="text" required placeholder="Tel. (123)1234567"/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Email</label>
                        <input class ="form-control" id="correo" name="correo" type="email" required  placeholder="Ejemplo123@hotmail.com"/>
                        </div>


                        <div class="col-12 col-sm-6">
                        <label>Fecha Alta</label>
                        <input class ="form-control" id="fechaAlta" name="fechaAlta" type="date" required  />
                        </div>


                        </div>

                        </div>

                        <a href="<?php echo base_url();?>/clientes" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>

                     

                     
                     </form>
                      
                    </div>
                </main>
              
