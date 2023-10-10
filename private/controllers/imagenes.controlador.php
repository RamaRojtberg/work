<?php

class ControladorImagenes {

    static public function ctrMostrarImagenes($tabla){

        $respuesta = ModeloImagenes::mdlMostrarImagenes($tabla);

        return $respuesta;

    }

    static public function ctrMostrarImagenesSeccion($tabla, $item, $valor){

        $respuesta = ModeloImagenes::mdlMostrarImagenesSeccion($tabla, $item, $valor);

        return $respuesta;

    }

    static public function ctrMostrarImg($tabla, $item, $valor, $modo){

        $respuesta = ModeloImagenes::mdlMostrarImg($tabla, $item, $valor, $modo);

        return $respuesta;

    }

}

?>