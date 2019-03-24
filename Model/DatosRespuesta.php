<?php

namespace Jotaeme\AemetBundle\Model;

class DatosRespuesta
{
    /** @var string */
    private $descripcion;

    /** @var string */
    private $estado;

    /** @var string */
    private $datos;

    /** @var string */
    private $metadatos;

    /**
     * DatosRespuesta constructor.
     * @param string $descripcion
     * @param string $estado
     * @param string $datos
     * @param string $metadatos
     */
    public function __construct($descripcion, $estado, $datos, $metadatos)
    {
        $this->descripcion = $descripcion;
        $this->estado = $estado;
        $this->datos = $datos;
        $this->metadatos = $metadatos;
    }

    /**
     * @return string
     */
    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    /**
     * @param string $descripcion
     * @return DatosRespuesta
     */
    public function setDescripcion(string $descripcion): DatosRespuesta
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @return string
     */
    public function getEstado(): string
    {
        return $this->estado;
    }

    /**
     * @param string $estado
     * @return DatosRespuesta
     */
    public function setEstado(string $estado): DatosRespuesta
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return string
     */
    public function getDatos(): string
    {
        return $this->datos;
    }

    /**
     * @param string $datos
     * @return DatosRespuesta
     */
    public function setDatos(string $datos): DatosRespuesta
    {
        $this->datos = $datos;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetadatos(): string
    {
        return $this->metadatos;
    }

    /**
     * @param string $metadatos
     * @return DatosRespuesta
     */
    public function setMetadatos(string $metadatos): DatosRespuesta
    {
        $this->metadatos = $metadatos;
        return $this;
    }
}