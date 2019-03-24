<?php

namespace Jotaeme\AemetBundle\Model;

class Temperatura
{
    /** @var integer */
    private $maxima;

    /** @var integer */
    private $minima;

    /**
     * Temperatura constructor.
     * @param int $maxima
     * @param int $minima
     */
    public function __construct($maxima, $minima)
    {
        $this->maxima = $maxima;
        $this->minima = $minima;
    }

    /**
     * @return int
     */
    public function getMaxima(): int
    {
        return $this->maxima;
    }

    /**
     * @param int $maxima
     * @return Temperatura
     */
    public function setMaxima(int $maxima): Temperatura
    {
        $this->maxima = $maxima;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinima(): int
    {
        return $this->minima;
    }

    /**
     * @param int $minima
     * @return Temperatura
     */
    public function setMinima(int $minima): Temperatura
    {
        $this->minima = $minima;
        return $this;
    }
}