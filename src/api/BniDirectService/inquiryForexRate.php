<?php

use BniApi\BniPhp\utils\Constant;
use BniApi\BniPhp\utils\Response;
use GuzzleHttp\RequestOptions;

trait inquiryForexRate
{
    /**
     * Inquiry Forex Rate
     * @param string $corporateId Corporate ID (max 40 chars)
     * @param string $userId User ID (max 40 chars)
     * @param array $currencyList Array of Account
     * @return Object
     */

    public function inquiryForexRate(
        array $params
    ){
        $url = $this->bni->getBaseUrl() . Constant::URL_BNI_DIRECT_INQUIRY_FOREX_RATE;
        $data = [
            'corporateId' => $params['corporateId'],
            'userId' => $params['userId'],
            'currencyList' => $params['currencyList']
        ];
        $dataJson = [
            RequestOptions::JSON => $data
        ];
        $response = $this->requestBNIDirect($url, $dataJson, $data );

        return Response::BniDirect($response);
    }
}
?>