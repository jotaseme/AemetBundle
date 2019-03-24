<?php

namespace Jotaeme\AemetBundle\Factory;

use Jotaeme\AemetBundle\Exceptions\DatosFactoryException;
use Jotaeme\AemetBundle\Model\DatosRespuesta;

class DatosRespuestaFactory
{
    /**
     * @param $datos
     * @return DatosRespuesta
     * @throws DatosFactoryException
     */
    public function crear($datos): DatosRespuesta
    {
        if(!$datos || $datos->estado !== 200) {
            throw new DatosFactoryException('Error en la obtencion de datos de la respuesta');
        }
        return new DatosRespuesta(
            $datos->descripcion,
            $datos->estado,
            $datos->datos,
            $datos->metadatos);
    }
}