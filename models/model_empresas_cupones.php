<?php
require_once("model.base.php");

class Model_Empresas_Aliadas extends Model
{
    public function __construct($db)
    {
        parent::__construct($db);
        $this->setView("empresas_aliadas");
        $this->setTable("empresas_aliadas");
        $this->setKey("id_empresa");

        $this->addField("nombre_comercial");
        $this->addField("contacto_enlace");
        $this->addField("logo_url");
        $this->addField("fecha_registro");
    }
}

$empresas_cupones = new Model_Empresas_Aliadas($conn);
?>