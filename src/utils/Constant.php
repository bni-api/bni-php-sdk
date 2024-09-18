<?php

namespace BniApi\BniPhp\utils;

class Constant
{
    const ERROR_GET_TOKEN = 'Error Get Token';

    const URL_GET_TOKEN = '/api/oauth/token';
    
    const URL_H2H_GETBALANCE = '/H2H/v2/getbalance';
    const URL_H2H_GETINHOUSEINQUIRY = '/H2H/v2/getinhouseinquiry';
    const URL_H2H_DOYPAYMENT = '/H2H/v2/dopayment';
    const URL_H2H_GETPAYMENTSTATUS = '/H2H/v2/getpaymentstatus';
    const URL_H2H_GETINTERBANKINQUIRY = '/H2H/v2/getinterbankinquiry';
    const URL_H2H_GETINTERBANKPAYMENT = '/H2H/v2/getinterbankpayment';
    const URL_H2H_HOLDAMOUNT = '/H2H/v2/holdamount';
    const URL_H2H_HOLDAMOUNTRELEASE = '/H2H/v2/holdamountrelease';


    const URL_SNAP_GETTOKEN = '/snap/v1/access-token/b2b';
    const URL_SNAP_BALANCEINQUIRY = '/snap-service/v1/balance-inquiry';
    const URL_SNAP_BANKSTATEMENT = '/snap-service/v1/bank-statement';
    const URL_SNAP_INTERNALACCOUNTINQUIRY = '/snap-service/v1/account-inquiry-internal';
    const URL_SNAP_TRANSACTIONSTATUSINQUIRY = '/snap-service/v1/transfer/status';
    const URL_SNAP_TRANSFERINTRABANK = '/snap-service/v1/transfer-intrabank';
    const URL_SNAP_TRANSFERRTGS = '/snap-service/v1/transfer-rtgs';
    const URL_SNAP_TRANSFERSKNBI = '/snap-service/v1/transfer-skn';
    const URL_SNAP_EXTERNALACCOUNTINQUIRY = '/snap-service/v1/account-inquiry-external';
    const URL_SNAP_TRANSFERINTERBANK = '/snap-service/v1/transfer-interbank';

    const URL_AUTOPAY_ACCESS_TOKEN_B2B  = '/api/v1.0/access-token/b2b';
    const URL_AUTOPAY_SIGNATURE_AUTH    = '/api/v1.0/utilities/signature-auth';
    const URL_AUTOPAY_SIGNATURE_SERVICE = '/api/v1.0/utilities/signature-service';

    const URL_AUTOPAY_ACCOUNT_BINDING   = '/v1.0/registration-account-binding';
    const URL_AUTOPAY_ACCOUNT_UNBINDING = '/v1.0/registration-account-unbinding';
    const URL_AUTOPAY_BALANCE_INQUIRY   = '/v1.0/balance-inquiry';
    const URL_AUTOPAY_DEBIT             = '/v1.0/debit/payment-host-to-host';
    const URL_AUTOPAY_DEBIT_REFUND      = '/v1.0/debit/refund';
    const URL_AUTOPAY_DEBIT_STATUS      = '/v1.0/debit/status';
    const URL_AUTOPAY_LIMIT_INQUIRY     = '/v1.0/limit-inquiry';
    const URL_AUTOPAY_OTP               = '/v1.0/otp';
    const URL_AUTOPAY_OTP_VERIFY        = '/v1.0/otp-verification';
    const URL_AUTOPAY_SET_LIMIT         = '/v1.0/registration/card-bind-limit';

    const URL_RDN_FACERECOGNITION = '/rekdana/v1.1/face/recog';
    const URL_RDN_CHECKSIDV2 = '/rdn/v2.1/checksid';
    const URL_RDN_REGISTERINVESTOR = '/rdn/v2.1/register/investor';
    const URL_RDN_REGISTERINVESTORACCOUNT = '/rdn/v2.1/register/investor/account';
    const URL_RDN_SENDATASTATIC = '/rdn/v2.1/senddatastatic';
    const URL_RDN_INQUIRYACCOUNTBALANCE = '/rdn/v2.1/inquiry/account/balance';
    const URL_RDN_INQUIRYACCOUNTHISTORY = '/rdn/v2.1/inquiry/account/history';
    const URL_RDN_INQUIRYACCOUNTINFO = '/rdn/v2.1/inquiry/account/info';
    const URL_RDN_PAYMENTUSINGTRANSFER = '/rdn/v2.1/payment/transfer';
    const URL_RDN_PAYMENTUSINGCLEARING = '/rdn/v2.1/payment/clearing';
    const URL_RDN_INQUIRYINTERBANKACCOUNT = '/rdn/v2.1/inquiry/interbank/account';
    const URL_RDN_PAYMENTUSINGRTGS = '/rdn/v2.1/payment/rtgs';
    const URL_RDN_INQUIRYPAYMENTSTATUS = '/rdn/v2.1/inquiry/payment/status';
    const URL_RDN_PAYMENTUSINGINTERBANK = '/rdn/v2.1/payment/interbank';


    const URL_RDL_FACERECOGNITION = '/rekdana/v1.1/face/recog';
    const URL_RDL_REGISTERINVESTOR = '/p2pl/v2.1/register/investor';
    const URL_RDL_REGISTERINVESTORACCOUNT = '/p2pl/v2.1/register/investor/account';
    const URL_RDL_INQUIRYACCOUNTBALANCE = '/p2pl/v2.1/inquiry/account/balance';
    const URL_RDL_INQUIRYACCOUNTHISTORY = '/p2pl/v2.1/inquiry/account/history';
    const URL_RDL_INQUIRYACCOUNTINFO = '/p2pl/v2.1/inquiry/account/info';
    const URL_RDL_PAYMENTUSINGTRANSFER = '/p2pl/v2.1/payment/transfer';
    const URL_RDL_PAYMENTUSINGCLEARING = '/p2pl/v2.1/payment/clearing';
    const URL_RDL_INQUIRYINTERBANKACCOUNT = '/p2pl/v2.1/inquiry/interbank/account';
    const URL_RDL_PAYMENTUSINGRTGS = '/p2pl/v2.1/payment/rtgs';
    const URL_RDL_INQUIRYPAYMENTSTATUS = '/p2pl/v2.1/inquiry/payment/status';
    const URL_RDL_PAYMENTUSINGINTERBANK = '/p2pl/v2.1/payment/interbank';


    const URL_RDF_FACERECOGNITION = '/rekdana/v1.1/face/recog';
    const URL_RDF_REGISTERINVESTOR = '/rdf/v2.1/register/investor';
    const URL_RDF_REGISTERINVESTORACCOUNT = '/rdf/v2.1/register/investor/account';
    const URL_RDF_INQUIRYACCOUNTBALANCE = '/rdf/v2.1/inquiry/account/balance';
    const URL_RDF_INQUIRYACCOUNTHISTORY = '/rdf/v2.1/inquiry/account/history';
    const URL_RDF_INQUIRYACCOUNTINFO = '/rdf/v2.1/inquiry/account/info';
    const URL_RDF_PAYMENTUSINGTRANSFER = '/rdf/v2.1/payment/transfer';
    const URL_RDF_PAYMENTUSINGCLEARING = '/rdf/v2.1/payment/clearing';
    const URL_RDF_PAYMENTUSINGRTGS = '/rdf/v2.1/payment/rtgs';
    const URL_RDF_INQUIRYINTERBANKACCOUNT = '/rdf/v2.1/inquiry/interbank/account';
    const URL_RDF_INQUIRYPAYMENTSTATUS = '/rdf/v2.1/inquiry/payment/status';
    const URL_RDF_PAYMENTUSINGINTERBANK = '/rdf/v2.1/payment/interbank';

    
    const ECOLLECTION_TYPE_CREATEBILLING = "createbilling";
    const ECOLLECTION_TYPE_UPDATEBILLING = "updatebilling";
    const ECOLLECTION_TYPE_INQUIRYBILLING = "inquirybilling";
    const ECOLLECTION_TYPE_INACTIVEBILLING = "inactivebilling";

    const URL_BNI_MOVE_PRESCREENING = "/digiloan/prescreening";
    const URL_BNI_MOVE_SAVE_IMAGE = "/digiloan/saveimage";

}
