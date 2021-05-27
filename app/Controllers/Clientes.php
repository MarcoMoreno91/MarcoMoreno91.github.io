<?php namespace App\Controllers;

use App\Models\ClientesModel;

class clientes extends BaseController{

    protected $clientes;

    public function __construct()
    {
        $this->clientes = new ClientesModel();

    }

    public function index($activo = 1)
    {
        $clientes =$this->clientes->where ('activo',$activo)->findAll();
        $data= ['titulo'=>'clientes Activos','datos'=> $clientes];
        echo view('header');
        echo view('clientes/clientes', $data);
        echo view('footer');
        
            }

            public function eliminados($activo = 0)
            {
                $clientes =$this->clientes->where ('activo',$activo)->findAll();
                $data= ['titulo'=>'clientes Inactivos','datos'=> $clientes];
                echo view('header');
                echo view('clientes/eliminados', $data);
                echo view('footer');
                
                    }

     public function nuevo(){

        $data= ['titulo'=>'Agregar Cliente'];

        echo view('header');
        echo view('clientes/nuevo', $data);
        echo view('footer');

     }       

     public function insertar(){

      if($this->request->getMethod()== "post" && $this->validate(['nombre_razonSocial'=>'required',
                  'calle'=>'required',
                  'numero'=>'required',
                  'colonia'=>'required',
                  'cp'=>'required',
                  'telefono'=>'required',
                  'correo'=>'required',
                  'fechaAlta'=>'required']))
                  {
        $this->clientes->save([
                              'nombre_razonSocial'=>$this->request->getPost('nombre_razonSocial'),
                              'calle'=>$this->request->getPost('calle'),
                              'numero'=>$this->request->getPost('numero'),
                              'colonia'=>$this->request->getPost('colonia'),
                              'cp'=>$this->request->getPost('cp'),
                              'telefono'=>$this->request->getPost('telefono'),
                              'correo'=>$this->request->getPost('correo'),
                              'fechaAlta'=>$this->request->getPost('fechaAlta')]);
                     
                              return redirect()->to(base_url().'/clientes');

        }else{
                   $data= ['titulo'=>'Agregar Cliente', 'validation'=>$this->validator];

                     echo view('header');
                       echo view('clientes/nuevo', $data);
                         echo view('footer');

        }
     }

     public function editar($codigoCliente){

        $cliente =$this->clientes->where ('codigoCliente',$codigoCliente)->first();
        $data= ['titulo'=>'Editar Cliente','datos'=> $cliente];

        echo view('header');
        echo view('clientes/editar', $data);
        echo view('footer');

     }       

     public function actualizar ()
     
     {

        $this->clientes->update($this->request->getPost('codigoCliente'),[
                              'nombre_razonSocial'=>$this->request->getPost('nombre_razonSocial'),
                              'calle'=>$this->request->getPost('calle'),
                              'numero'=>$this->request->getPost('numero'),
                              'colonia'=>$this->request->getPost('colonia'),
                              'cp'=>$this->request->getPost('cp'),
                              'telefono'=>$this->request->getPost('telefono'),
                              'correo'=>$this->request->getPost('correo'),
                              'fechaAlta'=>$this->request->getPost('fechaAlta')]);
                              return redirect()->to(base_url().'/clientes');

     }

     public function eliminar ($codigoCliente)
     
     {

        $this->clientes->update($codigoCliente,['activo'=>0]);
                              return redirect()->to(base_url().'/clientes');

     }

     
     public function reingresar ($codigoCliente)
     
     {

        $this->clientes->update($codigoCliente,['activo'=>1]);
                              return redirect()->to(base_url().'/clientes');

     }

        }

