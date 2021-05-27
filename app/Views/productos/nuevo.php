
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <h4 class="mt-4"><?php echo $titulo;?></h4>

                    <?php \Config\Services::validation()->listErrors();?>

                     <form method= "POST" action="<?php echo base_url();?>/productos/insertar" autocomplete="off">
                     <?php csrf_field();?>
                     
                        <div class="form-group">
                        
                        <div class="row">
                        
                        <div class="col-12 col-sm-6">
                        <label>Lote</label>
                        <input class ="form-control" id="lote" name="lote" type="text" autofocus required placeholder=" Escribe Lote" />
                        </div>
                       
                        <div class="col-12 col-sm-6">
                        <label>Modelo</label>
                        <input class ="form-control" id="modelo" name="modelo" type="text" required placeholder="Escribe Modélo"/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Material</label>
                        <input class ="form-control" id="material" name="material" type="text" required placeholder="Escribe Material"/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Color</label>
                        <input class ="form-control" id="color" name="color" type="text" required placeholder="Escribe Color"/>
                        </div>

                        <div class="col-12 col-sm-6">
                        <label>Descripción</label>
                        <input class ="form-control" id="descripcion" name="descripcion" type="text" required placeholder="Escribe Descripción"/>
                        </div>
                            
                        
                     <!--   <div class="col-12 col-sm-6">
                        <label>Fecha Alta</label>
                        <input class ="form-control" id="fechaAlta" name="fechaAlta" type="date" required  />
                        </div>
                        -->

                        </div>

                        </div>

                        <a href="<?php echo base_url();?>/productos" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>

                     

                     
                     </form>
                      
                    </div>
                </main>
              
