<?php
require_once __DIR__ . "/../models/model_empresas_cupones.php";

class EmpresasCuponesController
{
    public static function obtenerEmpresas($modelo)
    {
        return $modelo->getAll("nombre_comercial");
    }
}

if ($_POST) {

    $id = $_POST["id"] ?? null;
    $tipo = $_POST["tipo"] ?? null; 

    if ($tipo == 'borrar') {

        $empresas_cupones->deleteOne($id);

        $file = $_SERVER["DOCUMENT_ROOT"] . "/ptg/resources/img/evaluaciones/" . $id . ".jpg";
        if (file_exists($file)) {
            unlink($file);
        }

        header("location:../?page=adm-evaluaciones");
        exit;
    }

    if ($tipo == "actualizar") {
        $empresas_cupones->getOne($id);
    }

    $empresas_cupones->values = [];

    $empresas_cupones->values[] = $_POST["nombre_comercial"];
    $empresas_cupones->values[] = $_POST["contacto_enlace"];
    $empresas_cupones->values[] = $_POST["logo_url"];
    $empresas_cupones->values[] = $_POST["fecha_registro"];

    if ($tipo == 'nuevo') {

        $newId = $empresas_cupones->insert();

        if (!empty($_FILES["foto"]["tmp_name"])) {
            $file = "../img/cupones/" . $newId . ".jpg";
            move_uploaded_file(
                $_FILES["foto"]["tmp_name"],
                $_SERVER["DOCUMENT_ROOT"] . $file
            );
        }

        header("location:../?page=adm-evaluaciones");
        exit;
    }

    if ($tipo == 'actualizar') {

        $empresas_cupones->update($id);

        if (!empty($_FILES["foto"]["tmp_name"])) {
            $file = "/ptg/resources/img/evaluaciones/" . $id . ".jpg";
            move_uploaded_file(
                $_FILES["foto"]["tmp_name"],
                $_SERVER["DOCUMENT_ROOT"] . $file
            );
        }

        header("location:../?page=adm-evaluaciones");
        exit;
    }
}
?>