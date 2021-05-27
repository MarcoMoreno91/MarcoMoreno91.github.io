
           
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <h4 class="mt-4"><?php echo $titulo;?></h4>

                    <a href="<?php echo base_url();?>/productos/nuevo" class="btn btn-info">Agregar</a>
                    <a href="<?php echo base_url();?>/productos/eliminados" class="btn btn-danger">Eliminados</a>
                       
                   
                    <div class="card mb-4">
                            <div class="card-header">
                           
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="100">
                                        <thead>
                                        <tr>
                                                <th>Código</th>
                                                <th>Lote</th>
                                                <th>Modelo</th>
                                                <th>Material</th>
                                                <th>Color</th> 
                                                <th>Descripción</th>
                                                <th>FechaEdit</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        <?php foreach($datos as $dato){?>
                                                
                                                <tr>
                                                <td> <?php echo $dato['codigoProducto'];?> </td>
                                                <td> <?php echo $dato['lote'];?> </td>
                                                <td> <?php echo $dato['modelo'];?> </td>
                                                <td> <?php echo $dato['material'];?> </td>
                                                <td> <?php echo $dato['color'];?> </td>
                                                <td> <?php echo $dato['descripcion'];?> </td>
                                                <td> <?php echo $dato['fechaEditar'];?> </td>

                                                <td> <a href="<?php echo base_url().'/productos/editar/'.$dato['codigoProducto'];?>"  
                                                class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>  </td>
                                                
                                                <td> <a href="#" data-href="<?php echo base_url().'/productos/eliminar/'.$dato['codigoProducto'];?> "
                                                data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="Elimnar Registo" 
                                                class="btn btn-danger"><i class="fas fa-trash"></i></a>  </td>
                                                
                                                
                                                </tr>

                                                <?php } ?>
                                                 
                                               
                                             
                                        
                                        </tbody>
                                    </table>
                        </div>
                        </div>
                    </div>
                </main>

<!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea Eliminar este registro ?</P>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
        <a  class="btn btn-danger btn-ok ">Si</a>
      </div>
    </div>
  </div>
</div>    
