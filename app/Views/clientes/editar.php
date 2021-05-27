
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <h4 class="mt-4"><?php echo $titulo;?></h4>

                     <form method= "POST" action="<?php echo base_url();?>/clientes/actualizar" autocomplete="off">
                     
                     <input type="hidden" value="<?php echo $datos['codigoCliente'];?>" name="codigoCliente"/>

                        <div class="form-group">
                        
                        <div class="row">
                        
                        <div class="col-12 col-sm-6">
                        <label>Razón Social o Nombre</label>
                        <input class ="form-control" id="nombre_razonSocial" name="nombre_razonSocial" type="text" autofocus required   value="<?php echo $datos['nombre_razonSocial'];?>"/>
                        </div>
                        
                        <div class="col-12 col-sm-6">
                        <label>Calle</label>
                        <input class ="form-control" id="calle" name="calle" type="text" required value="<?php echo $datos['calle'];?>"/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>numero</label>
                        <input class ="form-control" id="numero" name="numero" type="text" required value="<?php echo $datos['numero'];?>"/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Colonia</label>
                        <input class ="form-control" id="colonia" name="colonia" type="text" required value="<?php echo $datos['colonia'];?>"/>
                        </div>
                            
                        <div class="col-12 col-sm-6">
                        <label>Codigo Postal</label>
                        <input class ="form-control" id="cp" name="cp" type="text" required value="<?php echo $datos['cp'];?>"/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Teléfono</label>
                        <input class ="form-control" id="telefono" name="telefono" type="text" required value="<?php echo $datos['telefono'];?>"/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Email</label>
                        <input class ="form-control" id="correo" name="correo" type="email" required value="<?php echo $datos['correo'];?>" />
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Fecha Alta</label>
                        <input class ="form-control" id="fechaAlta" name="fechaAlta" type="date" required value="<?php echo $datos['fechaAlta'];?>" />
                        </div>



                        </div>

                        </div>

                        <a href="<?php echo base_url();?>/clientes" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>

                     

                     
                     </form>
                      
                    </div>
                </main>
              
