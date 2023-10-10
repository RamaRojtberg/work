<?php

class ModeloImagenes {

    static public function mdlMostrarImagenes($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        
        $stmt -> execute();
        
        return $stmt -> fetchAll();
        
        $stmt -> close();

    }

    /*=============================================
	MOSTRAR SECCION
	=============================================*/

	static public function mdlMostrarImagenesSeccion($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}

    /*=============================================
	MOSTRAR IMAGENES
	=============================================*/

	static public function mdlMostrarImg($tabla, $item, $valor, $modo){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id $modo");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}


}

?>