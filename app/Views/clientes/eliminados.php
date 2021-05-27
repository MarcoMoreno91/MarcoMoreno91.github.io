
           
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <h4 class="mt-4"><?php echo $titulo;?></h4>

                
                    <a href="<?php echo base_url();?>/clientes" class="btn btn-danger">clientes</a>
                       
                    <div class="card mb-4">
                    <div class="card mb-4">
                            <div class="card-header">
                           
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="100">
                                        <thead>
                                        <tr>
                                                <th>Código</th>
                                                <th>RazónSocial</th>
                                                <th>Calle</th>
                                                <th>Número</th>
                                                <th>Colonia</th>
                                                <th>Cp</th>
                                                <th>Teléfono</th>
                                                <th>Email</th>
                                                <th>FechaAlta</th>
                                                <th>FechaEditar</th>
                                                <th></th>
                                           
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        <?php foreach($datos as $dato){?>
                                                
                                                <tr>
                                                <td> <?php echo $dato['codigoCliente'];?> </td>
                                                <td> <?php echo $dato['nombre_razonSocial'];?> </td>
                                                <td> <?php echo $dato['calle'];?> </td>
                                                <td> <?php echo $dato['numero'];?> </td>
                                                <td> <?php echo $dato['colonia'];?> </td>
                                                <td> <?php echo $dato['cp'];?> </td>
                                                <td> <?php echo $dato['telefono'];?> </td>
                                                <td> <?php echo $dato['correo'];?> </td>
                                                <td> <?php echo $dato['fechaAlta'];?> </td>
                                                <td> <?php echo $dato['fechaEditar'];?> </td>

                                              
                                                <td> <a href="#" data-href="<?php echo base_url().'/clientes/reingresar/'.$dato['codigoCliente'];?> "
                                                data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="Reingresar registo" 
                                                 ><i class="fas fa-arrow-alt-circle-up"></i></a>  </td>
                                                
                                                </tr>

                                                <?php } ?>
                                                 
                                               
                                             
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
              
<!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reingreso Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea reingresar este registro ?</P>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
        <a  class="btn btn-danger btn-ok ">Si</a>
      </div>
    </div>
  </div>
</div>   