<?php namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model{

    protected $table      = 'cliente';
    protected $primaryKey = 'codigoCliente';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre_razonSocial','calle','numero','colonia','cp','telefono',
    'correo','activo'];

    protected $useTimestamps = true;

    protected $createdField  = 'fechaAlta';
    protected $updatedField  = 'fechaEditar';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}