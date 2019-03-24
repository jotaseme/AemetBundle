<?php

namespace Jotaeme\AemetBundle\Aemet;

use Jotaeme\AemetBundle\Factory\PrevisionesEspecificasFactory;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

use Jotaeme\AemetBundle\Exceptions\APIClientException;
use Jotaeme\AemetBundle\Factory\DatosRespuestaFactory;
use Jotaeme\AemetBundle\Model\DatosRespuesta;
use Jotaeme\AemetBundle\Model\PrevisionesEspecificas;

class APIClient
{
    const PREVISION_SEMANAL_EP = 'https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/diaria/';

    /** @var string */
    private $apikey;

    /** @var DatosRespuestaFactory */
    private $aemetDatosRespuestaFactory;

    /** @var  PrevisionesEspecificasFactory */
    private $aemetPrevisionesEspecificasFactory;

    /**
     * APIClient constructor.
     * @param string $apikey
     * @param DatosRespuestaFactory $aemetDatosRespuestaFactory
     * @param PrevisionesEspecificasFactory $aemetPrevisionesEspecificasFactory
     */
    public function __construct(string $apikey,
                                DatosRespuestaFactory $aemetDatosRespuestaFactory,
                                PrevisionesEspecificasFactory $aemetPrevisionesEspecificasFactory)
    {
        $this->apikey = $apikey;
        $this->aemetDatosRespuestaFactory = $aemetDatosRespuestaFactory;
        $this->aemetPrevisionesEspecificasFactory = $aemetPrevisionesEspecificasFactory;
    }

    /**
     * @param string $codigo
     * @return PrevisionesEspecificas
     * @throws APIClientException
     */
    public function getPrevisionSemanal(string $codigo): PrevisionesEspecificas
    {
        $client = new Client(['verify' => false]);
        try {
            $datos = $this->getDatos(self::PREVISION_SEMANAL_EP . $codigo);
            $request = new Request('GET', $datos->getDatos());
            $response = $client->send($request);
            $input = iconv('UTF-8', 'UTF-8//IGNORE', utf8_encode($response->getBody()->getContents()));
            return $this->aemetPrevisionesEspecificasFactory->crear(json_decode($input));
        } catch (\Exception $e) {
            throw new APIClientException($e->getMessage(), $e->getCode(), $e->getPrevious());
        }
    }

    /**
     * @param $route
     * @return DatosRespuesta
     * @throws APIClientException
     */
    private function getDatos($route): DatosRespuesta
    {
        $client = new Client(['verify' => false]);
        $request = new Request('GET', $route);
        try {
            $response = $client->send($request, ['query' => ['api_key' => $this->apikey]]);
            return $this->aemetDatosRespuestaFactory->crear(json_decode($response->getBody()->getContents()));
        } catch (\Exception $e) {
            throw new APIClientException($e->getMessage(), $e->getCode(), $e->getPrevious());
        }
    }
}