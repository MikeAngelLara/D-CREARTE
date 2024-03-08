<?php
class HomeModel extends Query{
 
    public function __construct()
    {
        parent::__construct();
    }

    public function getCategorias()
    {
        $sql = "Select * FROM categorias";
        return $this->selectAll($sql);
    }

    public function getNuevosProductos()
    {
        $sql = "Select * FROM productos ORDER BY id DESC LIMIT 6";
        return $this->selectAll($sql);
    }

}
 
?>