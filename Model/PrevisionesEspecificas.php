<?php

namespace Jotaeme\AemetBundle\Model;

class PrevisionesEspecificas
{
    /** @var string */
    private $fechaElaboracion;

    /** @var string */
    private $municipio;

    /** @var string */
    private $provincia;

    /** @var Prevision */
    private $prevision;

    /**
     * PrevisionesEspecificas constructor.
     * @param string $fechaElaboracion
     * @param string $municipio
     * @param string $provincia
     * @param Prevision $prevision
     */
    public function __construct($fechaElaboracion, $municipio, $provincia, Prevision $prevision)
    {
        $this->fechaElaboracion = $fechaElaboracion;
        $this->municipio = $municipio;
        $this->provincia = $provincia;
        $this->prevision = $prevision;
    }

    /**
     * @return string
     */
    public function getFechaElaboracion(): string
    {
        return $this->fechaElaboracion;
    }

    /**
     * @param string $fechaElaboracion
     * @return PrevisionesEspecificas
     */
    public function setFechaElaboracion(string $fechaElaboracion): PrevisionesEspecificas
    {
        $this->fechaElaboracion = $fechaElaboracion;
        return $this;
    }

    /**
     * @return string
     */
    public function getMunicipio(): string
    {
        return $this->municipio;
    }

    /**
     * @param string $municipio
     * @return PrevisionesEspecificas
     */
    public function setMunicipio(string $municipio): PrevisionesEspecificas
    {
        $this->municipio = $municipio;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvincia(): string
    {
        return $this->provincia;
    }

    /**
     * @param string $provincia
     * @return PrevisionesEspecificas
     */
    public function setProvincia(string $provincia): PrevisionesEspecificas
    {
        $this->provincia = $provincia;
        return $this;
    }

    /**
     * @return Prevision
     */
    public function getPrevision(): Prevision
    {
        return $this->prevision;
    }

    /**
     * @param Prevision $prevision
     * @return PrevisionesEspecificas
     */
    public function setPrevision(Prevision $prevision): PrevisionesEspecificas
    {
        $this->prevision = $prevision;
        return $this;
    }
}