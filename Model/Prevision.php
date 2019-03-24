<?php

namespace Jotaeme\AemetBundle\Model;

class Prevision
{
    /** @var Temperatura */
    private $temperatura;

    /**
     * Prevision constructor.
     * @param Temperatura $temperatura
     */
    public function __construct(Temperatura $temperatura)
    {
        $this->temperatura = $temperatura;
    }

    /**
     * @return Temperatura
     */
    public function getTemperatura(): Temperatura
    {
        return $this->temperatura;
    }

    /**
     * @param Temperatura $temperatura
     * @return Prevision
     */
    public function setTemperatura(Temperatura $temperatura): Prevision
    {
        $this->temperatura = $temperatura;
        return $this;
    }
}