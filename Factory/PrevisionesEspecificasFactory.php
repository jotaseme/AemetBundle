<?php

namespace Jotaeme\AemetBundle\Factory;

use Jotaeme\AemetBundle\Exceptions\PrevisionesEspecificasFactoryException;
use Jotaeme\AemetBundle\Model\PrevisionesEspecificas;

class PrevisionesEspecificasFactory
{
    /** @var  PrevisionFactory */
    private $previsionFactory;

    /**
     * PrevisionesEspecificasFactory constructor.
     * @param PrevisionFactory $previsionFactory
     */
    public function __construct(PrevisionFactory $previsionFactory)
    {
        $this->previsionFactory = $previsionFactory;
    }

    /**
     * @param $datos
     * @return PrevisionesEspecificas
     * @throws PrevisionesEspecificasFactoryException
     */
    public function crear($datos): PrevisionesEspecificas
    {
        if (!$datos || !$datos[0]) {
            throw new PrevisionesEspecificasFactoryException('Error en la obtencion de datos de previsiones especificas');
        }

        return new PrevisionesEspecificas(
            $datos[0]->elaborado,
            $datos[0]->nombre,
            $datos[0]->provincia,
            $this->previsionFactory->crear(
                $datos[0]->prediccion->dia[0]->temperatura->maxima,
                $datos[0]->prediccion->dia[0]->temperatura->minima
            )
        );
    }
}