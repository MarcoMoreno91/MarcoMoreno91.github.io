<?php namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model{

    protected $table      = 'producto';
    protected $primaryKey = 'codigoProducto';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['lote','modelo','material','color','descripcion','activo'];

    protected $useTimestamps = true;

    protected $createdField  = '';
    protected $updatedField  = 'fechaEditar';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}