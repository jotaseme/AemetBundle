<?php

namespace Jotaeme\AemetBundle\Factory;

use Jotaeme\AemetBundle\Model\Prevision;
use Jotaeme\AemetBundle\Model\Temperatura;

class PrevisionFactory
{
    /**
     * @param $maxima
     * @param $minima
     * @return Prevision
     */
    public function crear($maxima, $minima): Prevision
    {
        return new Prevision(
            new Temperatura($maxima,$minima));
    }
}