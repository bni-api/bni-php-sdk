<?php

use BniApi\BniPhp\utils\Constant;
use BniApi\BniPhp\utils\Response;
use GuzzleHttp\RequestOptions;

trait bniPopsResubmitProductAllocationService
{
    /**
     * BNI POPS – Resubmit Product Allocation
     * @param string $corporateId Corporate ID (max 40 chars)
     * @param string $userId User ID (max 40 chars)
     * @param string $transactionReferenceNo Transaction Reference No. (max 40 chars)
     * @param string|null $SONumber SO Number (max 40 chars) - optional
     * @return Object
     */

    public function bniPopsResubmitProductAllocation(
        array $params
    ){
        $url = $this->bni->getBaseUrl() . Constant::URL_BNI_DIRECT_BNI_POPS_RESUBMIT_PRODUCT_ALLOCATION;
        $data = [
            'corporateId' => $params['corporateId'],
            'userId' => $params['userId'],
            'transactionReferenceNo' => $params['transactionReferenceNo'],
            'SONumber' => $params['SONumber'] ?? null
        ];
        $dataJson = [
            RequestOptions::JSON => $data
        ];
        $response = $this->requestBNIDirect($url, $dataJson, $data );
        
        return Response::BniDirect($response);
    }
}

?>