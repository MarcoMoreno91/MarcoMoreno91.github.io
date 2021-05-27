
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <h4 class="mt-4"><?php echo $titulo;?></h4>

                     <form method= "POST" action="<?php echo base_url();?>/productos/actualizar" autocomplete="off">
                     
                     <input type="hidden" value="<?php echo $datos['codigoProducto'];?>" name="codigoProducto"/>

                        <div class="form-group">
                        
                        <div class="row">
                        
                        <div class="col-12 col-sm-6">
                        
                        <label>Lote</label>
                        <input class ="form-control" id="lote" name="lote" type="text"  autofocus required  value="<?php echo $datos['lote'];?> "/>
                        </div>
                       
                        <div class="col-12 col-sm-6">
                        <label>Modelo</label>
                        <input class ="form-control" id="modelo" name="modelo" type="text" required value="<?php echo $datos['modelo'];?> "/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Material</label>
                        <input class ="form-control" id="material" name="material" type="text" required value="<?php echo $datos['material'];?> "/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Color</label>
                        <input class ="form-control" id="color" name="color" type="text" required value="<?php echo $datos['color'];?> "/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Descripción</label>
                        <input class ="form-control" id="descripcion" name="descripcion" type="text" required value="<?php echo $datos['descripcion'];?> "/>
                        </div>


                        </div>

                        </div>

                        <a href="<?php echo base_url();?>/productos" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>

                     

                     
                     </form>
                      
                    </div>
                </main>
              
