<?php namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController{

    protected $productos;

    public function __construct()
    {
        $this->productos = new ProductosModel();

    }

    public function index($activo = 1)
    {
        $productos =$this->productos->where ('activo',$activo)->findAll();
        $data= ['titulo'=>'Productos Activos','datos'=> $productos];
        echo view('header');
        echo view('productos/productos', $data);
        echo view('footer');
        
            }

            public function eliminados($activo = 0)
            {
                $productos =$this->productos->where ('activo',$activo)->findAll();
                $data= ['titulo'=>'Productos Inactivos','datos'=> $productos];
                echo view('header');
                echo view('productos/eliminados', $data);
                echo view('footer');
                
                    }

     public function nuevo(){

        $data= ['titulo'=>'Agregar Producto'];

        echo view('header');
        echo view('productos/nuevo', $data);
        echo view('footer');

     }       

     public function insertar(){

      if($this->request->getMethod()== "post" && $this->validate([
                  'lote'=>'required',
                  'modelo'=>'required',
                  'material'=>'required',
                  'color'=>'required',
                  'descripcion'=>'required']))
                  {
        $this->productos->save([
                              'lote'=>$this->request->getPost('lote'),
                              'modelo'=>$this->request->getPost('modelo'),
                              'material'=>$this->request->getPost('material'),
                              'color'=>$this->request->getPost('color'),
                              'descripcion'=>$this->request->getPost('descripcion') ]);
                              return redirect()->to(base_url().'/productos');

        }else{
                   $data= ['titulo'=>'Agregar Producto', 'validation'=>$this->validator];

                     echo view('header');
                       echo view('productos/nuevo', $data);
                         echo view('footer');

        }
     }

     public function editar($codigoProducto){

        $producto =$this->productos->where ('codigoProducto',$codigoProducto)->first();
        $data= ['titulo'=>'Editar Producto','datos'=> $producto];

        echo view('header');
        echo view('productos/editar', $data);
        echo view('footer');

     }       

     public function actualizar ()
     
     {

        $this->productos->update($this->request->getPost('codigoProducto'),[
                              'lote'=>$this->request->getPost('lote'),
                              'modelo'=>$this->request->getPost('modelo'),
                              'material'=>$this->request->getPost('material'),
                              'color'=>$this->request->getPost('color'),
                              'descripcion'=>$this->request->getPost('descripcion'),
                               ]);

                              return redirect()->to(base_url().'/productos');

     }

     public function eliminar ($codigoProducto)
     
     {

        $this->productos->update($codigoProducto,['activo'=>0]);
                              return redirect()->to(base_url().'/productos');

     }

     
     public function reingresar ($codigoProducto)
     
     {

        $this->productos->update($codigoProducto,['activo'=>1]);
                              return redirect()->to(base_url().'/productos');

     }

        }

