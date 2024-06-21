<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：カード、コマンド名：決済取消の応答Dtoクラス
 *
 * @author Veritrans, Inc.
 *
 */
class CardCancelResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     */
    private $mstatus;

    /**
     * 詳細結果コード<br>
     */
    private $vResultCode;

    /**
     * エラーメッセージ<br>
     */
    private $merrMsg;

    /**
     * 電文ID<br>
     */
    private $marchTxn;

    /**
     * 取引ID<br>
     */
    private $orderId;

    /**
     * 取引毎に付くID<br>
     */
    private $custTxn;

    /**
     * MDK バージョン<br>
     * 半角英数字<br>
     * 5 桁<br>
     * 電文のバージョン番号。<br>
     */
    private $txnVersion;

    /**
     * カードトランザクションタイプ<br>
     */
    private $cardTransactiontype;

    /**
     * ゲートウェイ要求日時<br>
     */
    private $gatewayRequestDate;

    /**
     * ゲートウェイ応答日時<br>
     */
    private $gatewayResponseDate;

    /**
     * センター要求日時<br>
     */
    private $centerRequestDate;

    /**
     * センター応答日時<br>
     */
    private $centerResponseDate;

    /**
     * ペンディング<br>
     */
    private $pending;

    /**
     * ループバック<br>
     */
    private $loopback;

    /**
     * 接続先カード接続センター<br>
     */
    private $connectedCenterId;

    /**
     * センター要求番号<br>
     */
    private $centerRequestNumber;

    /**
     * センターリファレンス番号<br>
     */
    private $centerReferenceNumber;

    /**
     * 要求カード番号<br>
     */
    private $reqCardNumber;

    /**
     * 要求カード有効期限<br>
     */
    private $reqCardExpire;

    /**
     * 要求カードオプションタイプ<br>
     */
    private $reqCardOptionType;

    /**
     * 要求取引金額<br>
     */
    private $reqAmount;

    /**
     * 要求マーチャントトランザクション番号<br>
     */
    private $reqMerchantTransaction;

    /**
     * 要求リターン参照番号<br>
     */
    private $reqReturnReferenceNumber;

    /**
     * 要求承認番号<br>
     */
    private $reqAuthCode;

    /**
     * 要求仕向先コード<br>
     */
    private $reqAcquirerCode;

    /**
     * 要求商品コード<br>
     */
    private $reqItemCode;

    /**
     * 要求カードセンター<br>
     */
    private $reqCardCenter;

    /**
     * 要求JPO情報<br>
     */
    private $reqJpoInformation;

    /**
     * 要求売上日<br>
     */
    private $reqSalesDay;

    /**
     * 要求取消日<br>
     */
    private $reqCancelDay;

    /**
     * 要求同時売上<br>
     */
    private $reqWithCapture;

    /**
     * 要求同時直接<br>
     */
    private $reqWithDirect;

    /**
     * 要求3Dメッセージバージョン<br>
     */
    private $req3dMessageVersion;

    /**
     * 要求3DトランザクションID<br>
     */
    private $req3dTransactionId;

    /**
     * 要求3Dトランザクションステータス<br>
     */
    private $req3dTransactionStatus;

    /**
     * 要求3D CAVVアルゴリズム<br>
     */
    private $req3dCavvAlgorithm;

    /**
     * 要求3D CAVV<br>
     */
    private $req3dCavv;

    /**
     * 要求3D ECI<br>
     */
    private $req3dEci;

    /**
     * 要求3D DSトランザクションID<br>
     */
    private $req3dDsTransactionId;

    /**
     * 要求3DサーバトランザクションID<br>
     */
    private $req3dServerTransactionId;

    /**
     * 要求セキュリティコード<br>
     */
    private $reqSecurityCode;

    /**
     * 要求認証番号<br>
     */
    private $reqAuthFlag;

    /**
     * 要求誕生日<br>
     */
    private $reqBirthday;

    /**
     * 要求電話番号<br>
     */
    private $reqTel;

    /**
     * 要求カナ名前（名）<br>
     */
    private $reqFirstKanaName;

    /**
     * 要求カナ名前（姓）<br>
     */
    private $reqLastKanaName;

    /**
     * 応答マーチャントトランザクション番号<br>
     */
    private $resMerchantTransaction;

    /**
     * 応答リターン参照番号<br>
     */
    private $resReturnReferenceNumber;

    /**
     * 応答承認番号<br>
     */
    private $resAuthCode;

    /**
     * アクションコード<br>
     */
    private $resActionCode;

    /**
     * 応答センターエラーコード<br>
     */
    private $resCenterErrorCode;

    /**
     * 応答与信期間<br>
     */
    private $resAuthTerm;

    /**
     * 応答商品コード<br>
     */
    private $resItemCode;

    /**
     * 応答データ<br>
     */
    private $resResponseData;

    /**
     * 要求通貨単位<br>
     */
    private $reqCurrencyUnit;

    /**
     * 要求新規返品<br>
     */
    private $reqWithNew;

    /**
     * 仕向け先コード<br>
     */
    private $acquirerCode;

    /**
     * 端末識別番号<br>
     */
    private $terminalId;

    /**
     * 応答センター処理通番<br>
     */
    private $resCenterProcessNumber;

    /**
     * 応答センター送信日時<br>
     */
    private $resCenterSendDateTime;

    /**
     * ギフト残高<br>
     */
    private $resGiftBalance;

    /**
     * ギフト有効期限<br>
     */
    private $resGiftExpire;

    /**
     * 券種コード<br>
     */
    private $kindCode;

    /**
     * 結果XML(マスク済み)<br>
     * 半角英数字<br>
     */
    private $resultXml;

    /**
     * PayNowIDオブジェクト<br>
     * オブジェクト<br>
     * PayNowID用項目を格納するオブジェクト<br>
     */
    private $payNowIdResponse;

    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * 決済サービスタイプを設定する<br>
     * @param string $serviceType 決済サービスタイプ<br>
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * 処理結果コードを取得する<br>
     * @return string 処理結果コード<br>
     */
    public function getMstatus()
    {
        return $this->mstatus;
    }

    /**
     * 処理結果コードを設定する<br>
     * @param string $mstatus 処理結果コード<br>
     */
    public function setMstatus($mstatus)
    {
        $this->mstatus = $mstatus;
    }

    /**
     * 詳細結果コードを取得する<br>
     * @return string 詳細結果コード<br>
     */
    public function getVResultCode()
    {
        return $this->vResultCode;
    }

    /**
     * 詳細結果コードを設定する<br>
     * @param string $vResultCode 詳細結果コード<br>
     */
    public function setVResultCode($vResultCode)
    {
        $this->vResultCode = $vResultCode;
    }

    /**
     * エラーメッセージを取得する<br>
     * @return string エラーメッセージ<br>
     */
    public function getMerrMsg()
    {
        return $this->merrMsg;
    }

    /**
     * エラーメッセージを設定する<br>
     * @param string $merrMsg エラーメッセージ<br>
     */
    public function setMerrMsg($merrMsg)
    {
        $this->merrMsg = $merrMsg;
    }

    /**
     * 電文IDを取得する<br>
     * @return string 電文ID<br>
     */
    public function getMarchTxn()
    {
        return $this->marchTxn;
    }

    /**
     * 電文IDを設定する<br>
     * @param string $marchTxn 電文ID<br>
     */
    public function setMarchTxn($marchTxn)
    {
        $this->marchTxn = $marchTxn;
    }

    /**
     * 取引IDを取得する<br>
     * @return string 取引ID<br>
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 取引IDを設定する<br>
     * @param string $orderId 取引ID<br>
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * 取引毎に付くIDを取得する<br>
     * @return string 取引毎に付くID<br>
     */
    public function getCustTxn()
    {
        return $this->custTxn;
    }

    /**
     * 取引毎に付くIDを設定する<br>
     * @param string $custTxn 取引毎に付くID<br>
     */
    public function setCustTxn($custTxn)
    {
        $this->custTxn = $custTxn;
    }

    /**
     * MDK バージョンを取得する<br>
     * @return string MDK バージョン<br>
     */
    public function getTxnVersion()
    {
        return $this->txnVersion;
    }

    /**
     * MDK バージョンを設定する<br>
     * @param string $txnVersion MDK バージョン<br>
     */
    public function setTxnVersion($txnVersion)
    {
        $this->txnVersion = $txnVersion;
    }

    /**
     * カードトランザクションタイプを取得する<br>
     * @return string カードトランザクションタイプ<br>
     */
    public function getCardTransactiontype()
    {
        return $this->cardTransactiontype;
    }

    /**
     * カードトランザクションタイプを設定する<br>
     * @param string $cardTransactiontype カードトランザクションタイプ<br>
     */
    public function setCardTransactiontype($cardTransactiontype)
    {
        $this->cardTransactiontype = $cardTransactiontype;
    }

    /**
     * ゲートウェイ要求日時を取得する<br>
     * @return string ゲートウェイ要求日時<br>
     */
    public function getGatewayRequestDate()
    {
        return $this->gatewayRequestDate;
    }

    /**
     * ゲートウェイ要求日時を設定する<br>
     * @param string $gatewayRequestDate ゲートウェイ要求日時<br>
     */
    public function setGatewayRequestDate($gatewayRequestDate)
    {
        $this->gatewayRequestDate = $gatewayRequestDate;
    }

    /**
     * ゲートウェイ応答日時を取得する<br>
     * @return string ゲートウェイ応答日時<br>
     */
    public function getGatewayResponseDate()
    {
        return $this->gatewayResponseDate;
    }

    /**
     * ゲートウェイ応答日時を設定する<br>
     * @param string $gatewayResponseDate ゲートウェイ応答日時<br>
     */
    public function setGatewayResponseDate($gatewayResponseDate)
    {
        $this->gatewayResponseDate = $gatewayResponseDate;
    }

    /**
     * センター要求日時を取得する<br>
     * @return string センター要求日時<br>
     */
    public function getCenterRequestDate()
    {
        return $this->centerRequestDate;
    }

    /**
     * センター要求日時を設定する<br>
     * @param string $centerRequestDate センター要求日時<br>
     */
    public function setCenterRequestDate($centerRequestDate)
    {
        $this->centerRequestDate = $centerRequestDate;
    }

    /**
     * センター応答日時を取得する<br>
     * @return string センター応答日時<br>
     */
    public function getCenterResponseDate()
    {
        return $this->centerResponseDate;
    }

    /**
     * センター応答日時を設定する<br>
     * @param string $centerResponseDate センター応答日時<br>
     */
    public function setCenterResponseDate($centerResponseDate)
    {
        $this->centerResponseDate = $centerResponseDate;
    }

    /**
     * ペンディングを取得する<br>
     * @return string ペンディング<br>
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * ペンディングを設定する<br>
     * @param string $pending ペンディング<br>
     */
    public function setPending($pending)
    {
        $this->pending = $pending;
    }

    /**
     * ループバックを取得する<br>
     * @return string ループバック<br>
     */
    public function getLoopback()
    {
        return $this->loopback;
    }

    /**
     * ループバックを設定する<br>
     * @param string $loopback ループバック<br>
     */
    public function setLoopback($loopback)
    {
        $this->loopback = $loopback;
    }

    /**
     * 接続先カード接続センターを取得する<br>
     * @return string 接続先カード接続センター<br>
     */
    public function getConnectedCenterId()
    {
        return $this->connectedCenterId;
    }

    /**
     * 接続先カード接続センターを設定する<br>
     * @param string $connectedCenterId 接続先カード接続センター<br>
     */
    public function setConnectedCenterId($connectedCenterId)
    {
        $this->connectedCenterId = $connectedCenterId;
    }

    /**
     * センター要求番号を取得する<br>
     * @return string センター要求番号<br>
     */
    public function getCenterRequestNumber()
    {
        return $this->centerRequestNumber;
    }

    /**
     * センター要求番号を設定する<br>
     * @param string $centerRequestNumber センター要求番号<br>
     */
    public function setCenterRequestNumber($centerRequestNumber)
    {
        $this->centerRequestNumber = $centerRequestNumber;
    }

    /**
     * センターリファレンス番号を取得する<br>
     * @return string センターリファレンス番号<br>
     */
    public function getCenterReferenceNumber()
    {
        return $this->centerReferenceNumber;
    }

    /**
     * センターリファレンス番号を設定する<br>
     * @param string $centerReferenceNumber センターリファレンス番号<br>
     */
    public function setCenterReferenceNumber($centerReferenceNumber)
    {
        $this->centerReferenceNumber = $centerReferenceNumber;
    }

    /**
     * 要求カード番号を取得する<br>
     * @return string 要求カード番号<br>
     */
    public function getReqCardNumber()
    {
        return $this->reqCardNumber;
    }

    /**
     * 要求カード番号を設定する<br>
     * @param string $reqCardNumber 要求カード番号<br>
     */
    public function setReqCardNumber($reqCardNumber)
    {
        $this->reqCardNumber = $reqCardNumber;
    }

    /**
     * 要求カード有効期限を取得する<br>
     * @return string 要求カード有効期限<br>
     */
    public function getReqCardExpire()
    {
        return $this->reqCardExpire;
    }

    /**
     * 要求カード有効期限を設定する<br>
     * @param string $reqCardExpire 要求カード有効期限<br>
     */
    public function setReqCardExpire($reqCardExpire)
    {
        $this->reqCardExpire = $reqCardExpire;
    }

    /**
     * 要求カードオプションタイプを取得する<br>
     * @return string 要求カードオプションタイプ<br>
     */
    public function getReqCardOptionType()
    {
        return $this->reqCardOptionType;
    }

    /**
     * 要求カードオプションタイプを設定する<br>
     * @param string $reqCardOptionType 要求カードオプションタイプ<br>
     */
    public function setReqCardOptionType($reqCardOptionType)
    {
        $this->reqCardOptionType = $reqCardOptionType;
    }

    /**
     * 要求取引金額を取得する<br>
     * @return string 要求取引金額<br>
     */
    public function getReqAmount()
    {
        return $this->reqAmount;
    }

    /**
     * 要求取引金額を設定する<br>
     * @param string $reqAmount 要求取引金額<br>
     */
    public function setReqAmount($reqAmount)
    {
        $this->reqAmount = $reqAmount;
    }

    /**
     * 要求マーチャントトランザクション番号を取得する<br>
     * @return string 要求マーチャントトランザクション番号<br>
     */
    public function getReqMerchantTransaction()
    {
        return $this->reqMerchantTransaction;
    }

    /**
     * 要求マーチャントトランザクション番号を設定する<br>
     * @param string $reqMerchantTransaction 要求マーチャントトランザクション番号<br>
     */
    public function setReqMerchantTransaction($reqMerchantTransaction)
    {
        $this->reqMerchantTransaction = $reqMerchantTransaction;
    }

    /**
     * 要求リターン参照番号を取得する<br>
     * @return string 要求リターン参照番号<br>
     */
    public function getReqReturnReferenceNumber()
    {
        return $this->reqReturnReferenceNumber;
    }

    /**
     * 要求リターン参照番号を設定する<br>
     * @param string $reqReturnReferenceNumber 要求リターン参照番号<br>
     */
    public function setReqReturnReferenceNumber($reqReturnReferenceNumber)
    {
        $this->reqReturnReferenceNumber = $reqReturnReferenceNumber;
    }

    /**
     * 要求承認番号を取得する<br>
     * @return string 要求承認番号<br>
     */
    public function getReqAuthCode()
    {
        return $this->reqAuthCode;
    }

    /**
     * 要求承認番号を設定する<br>
     * @param string $reqAuthCode 要求承認番号<br>
     */
    public function setReqAuthCode($reqAuthCode)
    {
        $this->reqAuthCode = $reqAuthCode;
    }

    /**
     * 要求仕向先コードを取得する<br>
     * @return string 要求仕向先コード<br>
     */
    public function getReqAcquirerCode()
    {
        return $this->reqAcquirerCode;
    }

    /**
     * 要求仕向先コードを設定する<br>
     * @param string $reqAcquirerCode 要求仕向先コード<br>
     */
    public function setReqAcquirerCode($reqAcquirerCode)
    {
        $this->reqAcquirerCode = $reqAcquirerCode;
    }

    /**
     * 要求商品コードを取得する<br>
     * @return string 要求商品コード<br>
     */
    public function getReqItemCode()
    {
        return $this->reqItemCode;
    }

    /**
     * 要求商品コードを設定する<br>
     * @param string $reqItemCode 要求商品コード<br>
     */
    public function setReqItemCode($reqItemCode)
    {
        $this->reqItemCode = $reqItemCode;
    }

    /**
     * 要求カードセンターを取得する<br>
     * @return string 要求カードセンター<br>
     */
    public function getReqCardCenter()
    {
        return $this->reqCardCenter;
    }

    /**
     * 要求カードセンターを設定する<br>
     * @param string $reqCardCenter 要求カードセンター<br>
     */
    public function setReqCardCenter($reqCardCenter)
    {
        $this->reqCardCenter = $reqCardCenter;
    }

    /**
     * 要求JPO情報を取得する<br>
     * @return string 要求JPO情報<br>
     */
    public function getReqJpoInformation()
    {
        return $this->reqJpoInformation;
    }

    /**
     * 要求JPO情報を設定する<br>
     * @param string $reqJpoInformation 要求JPO情報<br>
     */
    public function setReqJpoInformation($reqJpoInformation)
    {
        $this->reqJpoInformation = $reqJpoInformation;
    }

    /**
     * 要求売上日を取得する<br>
     * @return string 要求売上日<br>
     */
    public function getReqSalesDay()
    {
        return $this->reqSalesDay;
    }

    /**
     * 要求売上日を設定する<br>
     * @param string $reqSalesDay 要求売上日<br>
     */
    public function setReqSalesDay($reqSalesDay)
    {
        $this->reqSalesDay = $reqSalesDay;
    }

    /**
     * 要求取消日を取得する<br>
     * @return string 要求取消日<br>
     */
    public function getReqCancelDay()
    {
        return $this->reqCancelDay;
    }

    /**
     * 要求取消日を設定する<br>
     * @param string $reqCancelDay 要求取消日<br>
     */
    public function setReqCancelDay($reqCancelDay)
    {
        $this->reqCancelDay = $reqCancelDay;
    }

    /**
     * 要求同時売上を取得する<br>
     * @return string 要求同時売上<br>
     */
    public function getReqWithCapture()
    {
        return $this->reqWithCapture;
    }

    /**
     * 要求同時売上を設定する<br>
     * @param string $reqWithCapture 要求同時売上<br>
     */
    public function setReqWithCapture($reqWithCapture)
    {
        $this->reqWithCapture = $reqWithCapture;
    }

    /**
     * 要求同時直接を取得する<br>
     * @return string 要求同時直接<br>
     */
    public function getReqWithDirect()
    {
        return $this->reqWithDirect;
    }

    /**
     * 要求同時直接を設定する<br>
     * @param string $reqWithDirect 要求同時直接<br>
     */
    public function setReqWithDirect($reqWithDirect)
    {
        $this->reqWithDirect = $reqWithDirect;
    }

    /**
     * 要求3Dメッセージバージョンを取得する<br>
     * @return string 要求3Dメッセージバージョン<br>
     */
    public function getReq3dMessageVersion()
    {
        return $this->req3dMessageVersion;
    }

    /**
     * 要求3Dメッセージバージョンを設定する<br>
     * @param string $req3dMessageVersion 要求3Dメッセージバージョン<br>
     */
    public function setReq3dMessageVersion($req3dMessageVersion)
    {
        $this->req3dMessageVersion = $req3dMessageVersion;
    }

    /**
     * 要求3DトランザクションIDを取得する<br>
     * @return string 要求3DトランザクションID<br>
     */
    public function getReq3dTransactionId()
    {
        return $this->req3dTransactionId;
    }

    /**
     * 要求3DトランザクションIDを設定する<br>
     * @param string $req3dTransactionId 要求3DトランザクションID<br>
     */
    public function setReq3dTransactionId($req3dTransactionId)
    {
        $this->req3dTransactionId = $req3dTransactionId;
    }

    /**
     * 要求3Dトランザクションステータスを取得する<br>
     * @return string 要求3Dトランザクションステータス<br>
     */
    public function getReq3dTransactionStatus()
    {
        return $this->req3dTransactionStatus;
    }

    /**
     * 要求3Dトランザクションステータスを設定する<br>
     * @param string $req3dTransactionStatus 要求3Dトランザクションステータス<br>
     */
    public function setReq3dTransactionStatus($req3dTransactionStatus)
    {
        $this->req3dTransactionStatus = $req3dTransactionStatus;
    }

    /**
     * 要求3D CAVVアルゴリズムを取得する<br>
     * @return string 要求3D CAVVアルゴリズム<br>
     */
    public function getReq3dCavvAlgorithm()
    {
        return $this->req3dCavvAlgorithm;
    }

    /**
     * 要求3D CAVVアルゴリズムを設定する<br>
     * @param string $req3dCavvAlgorithm 要求3D CAVVアルゴリズム<br>
     */
    public function setReq3dCavvAlgorithm($req3dCavvAlgorithm)
    {
        $this->req3dCavvAlgorithm = $req3dCavvAlgorithm;
    }

    /**
     * 要求3D CAVVを取得する<br>
     * @return string 要求3D CAVV<br>
     */
    public function getReq3dCavv()
    {
        return $this->req3dCavv;
    }

    /**
     * 要求3D CAVVを設定する<br>
     * @param string $req3dCavv 要求3D CAVV<br>
     */
    public function setReq3dCavv($req3dCavv)
    {
        $this->req3dCavv = $req3dCavv;
    }

    /**
     * 要求3D ECIを取得する<br>
     * @return string 要求3D ECI<br>
     */
    public function getReq3dEci()
    {
        return $this->req3dEci;
    }

    /**
     * 要求3D ECIを設定する<br>
     * @param string $req3dEci 要求3D ECI<br>
     */
    public function setReq3dEci($req3dEci)
    {
        $this->req3dEci = $req3dEci;
    }

    /**
     * 要求3D DSトランザクションIDを取得する<br>
     * @return string 要求3D DSトランザクションID<br>
     */
    public function getReq3dDsTransactionId()
    {
        return $this->req3dDsTransactionId;
    }

    /**
     * 要求3D DSトランザクションIDを設定する<br>
     * @param string $req3dDsTransactionId 要求3D DSトランザクションID<br>
     */
    public function setReq3dDsTransactionId($req3dDsTransactionId)
    {
        $this->req3dDsTransactionId = $req3dDsTransactionId;
    }

    /**
     * 要求3DサーバトランザクションIDを取得する<br>
     * @return string 要求3DサーバトランザクションID<br>
     */
    public function getReq3dServerTransactionId()
    {
        return $this->req3dServerTransactionId;
    }

    /**
     * 要求3DサーバトランザクションIDを設定する<br>
     * @param string $req3dServerTransactionId 要求3DサーバトランザクションID<br>
     */
    public function setReq3dServerTransactionId($req3dServerTransactionId)
    {
        $this->req3dServerTransactionId = $req3dServerTransactionId;
    }

    /**
     * 要求セキュリティコードを取得する<br>
     * @return string 要求セキュリティコード<br>
     */
    public function getReqSecurityCode()
    {
        return $this->reqSecurityCode;
    }

    /**
     * 要求セキュリティコードを設定する<br>
     * @param string $reqSecurityCode 要求セキュリティコード<br>
     */
    public function setReqSecurityCode($reqSecurityCode)
    {
        $this->reqSecurityCode = $reqSecurityCode;
    }

    /**
     * 要求認証番号を取得する<br>
     * @return string 要求認証番号<br>
     */
    public function getReqAuthFlag()
    {
        return $this->reqAuthFlag;
    }

    /**
     * 要求認証番号を設定する<br>
     * @param string $reqAuthFlag 要求認証番号<br>
     */
    public function setReqAuthFlag($reqAuthFlag)
    {
        $this->reqAuthFlag = $reqAuthFlag;
    }

    /**
     * 要求誕生日を取得する<br>
     * @return string 要求誕生日<br>
     */
    public function getReqBirthday()
    {
        return $this->reqBirthday;
    }

    /**
     * 要求誕生日を設定する<br>
     * @param string $reqBirthday 要求誕生日<br>
     */
    public function setReqBirthday($reqBirthday)
    {
        $this->reqBirthday = $reqBirthday;
    }

    /**
     * 要求電話番号を取得する<br>
     * @return string 要求電話番号<br>
     */
    public function getReqTel()
    {
        return $this->reqTel;
    }

    /**
     * 要求電話番号を設定する<br>
     * @param string $reqTel 要求電話番号<br>
     */
    public function setReqTel($reqTel)
    {
        $this->reqTel = $reqTel;
    }

    /**
     * 要求カナ名前（名）を取得する<br>
     * @return string 要求カナ名前（名）<br>
     */
    public function getReqFirstKanaName()
    {
        return $this->reqFirstKanaName;
    }

    /**
     * 要求カナ名前（名）を設定する<br>
     * @param string $reqFirstKanaName 要求カナ名前（名）<br>
     */
    public function setReqFirstKanaName($reqFirstKanaName)
    {
        $this->reqFirstKanaName = $reqFirstKanaName;
    }

    /**
     * 要求カナ名前（姓）を取得する<br>
     * @return string 要求カナ名前（姓）<br>
     */
    public function getReqLastKanaName()
    {
        return $this->reqLastKanaName;
    }

    /**
     * 要求カナ名前（姓）を設定する<br>
     * @param string $reqLastKanaName 要求カナ名前（姓）<br>
     */
    public function setReqLastKanaName($reqLastKanaName)
    {
        $this->reqLastKanaName = $reqLastKanaName;
    }

    /**
     * 応答マーチャントトランザクション番号を取得する<br>
     * @return string 応答マーチャントトランザクション番号<br>
     */
    public function getResMerchantTransaction()
    {
        return $this->resMerchantTransaction;
    }

    /**
     * 応答マーチャントトランザクション番号を設定する<br>
     * @param string $resMerchantTransaction 応答マーチャントトランザクション番号<br>
     */
    public function setResMerchantTransaction($resMerchantTransaction)
    {
        $this->resMerchantTransaction = $resMerchantTransaction;
    }

    /**
     * 応答リターン参照番号を取得する<br>
     * @return string 応答リターン参照番号<br>
     */
    public function getResReturnReferenceNumber()
    {
        return $this->resReturnReferenceNumber;
    }

    /**
     * 応答リターン参照番号を設定する<br>
     * @param string $resReturnReferenceNumber 応答リターン参照番号<br>
     */
    public function setResReturnReferenceNumber($resReturnReferenceNumber)
    {
        $this->resReturnReferenceNumber = $resReturnReferenceNumber;
    }

    /**
     * 応答承認番号を取得する<br>
     * @return string 応答承認番号<br>
     */
    public function getResAuthCode()
    {
        return $this->resAuthCode;
    }

    /**
     * 応答承認番号を設定する<br>
     * @param string $resAuthCode 応答承認番号<br>
     */
    public function setResAuthCode($resAuthCode)
    {
        $this->resAuthCode = $resAuthCode;
    }

    /**
     * アクションコードを取得する<br>
     * @return string アクションコード<br>
     */
    public function getResActionCode()
    {
        return $this->resActionCode;
    }

    /**
     * アクションコードを設定する<br>
     * @param string $resActionCode アクションコード<br>
     */
    public function setResActionCode($resActionCode)
    {
        $this->resActionCode = $resActionCode;
    }

    /**
     * 応答センターエラーコードを取得する<br>
     * @return string 応答センターエラーコード<br>
     */
    public function getResCenterErrorCode()
    {
        return $this->resCenterErrorCode;
    }

    /**
     * 応答センターエラーコードを設定する<br>
     * @param string $resCenterErrorCode 応答センターエラーコード<br>
     */
    public function setResCenterErrorCode($resCenterErrorCode)
    {
        $this->resCenterErrorCode = $resCenterErrorCode;
    }

    /**
     * 応答与信期間を取得する<br>
     * @return string 応答与信期間<br>
     */
    public function getResAuthTerm()
    {
        return $this->resAuthTerm;
    }

    /**
     * 応答与信期間を設定する<br>
     * @param string $resAuthTerm 応答与信期間<br>
     */
    public function setResAuthTerm($resAuthTerm)
    {
        $this->resAuthTerm = $resAuthTerm;
    }

    /**
     * 応答商品コードを取得する<br>
     * @return string 応答商品コード<br>
     */
    public function getResItemCode()
    {
        return $this->resItemCode;
    }

    /**
     * 応答商品コードを設定する<br>
     * @param string $resItemCode 応答商品コード<br>
     */
    public function setResItemCode($resItemCode)
    {
        $this->resItemCode = $resItemCode;
    }

    /**
     * 応答データを取得する<br>
     * @return string 応答データ<br>
     */
    public function getResResponseData()
    {
        return $this->resResponseData;
    }

    /**
     * 応答データを設定する<br>
     * @param string $resResponseData 応答データ<br>
     */
    public function setResResponseData($resResponseData)
    {
        $this->resResponseData = $resResponseData;
    }

    /**
     * 要求通貨単位を取得する<br>
     * @return string 要求通貨単位<br>
     */
    public function getReqCurrencyUnit()
    {
        return $this->reqCurrencyUnit;
    }

    /**
     * 要求通貨単位を設定する<br>
     * @param string $reqCurrencyUnit 要求通貨単位<br>
     */
    public function setReqCurrencyUnit($reqCurrencyUnit)
    {
        $this->reqCurrencyUnit = $reqCurrencyUnit;
    }

    /**
     * 要求新規返品を取得する<br>
     * @return string 要求新規返品<br>
     */
    public function getReqWithNew()
    {
        return $this->reqWithNew;
    }

    /**
     * 要求新規返品を設定する<br>
     * @param string $reqWithNew 要求新規返品<br>
     */
    public function setReqWithNew($reqWithNew)
    {
        $this->reqWithNew = $reqWithNew;
    }

    /**
     * 仕向け先コードを取得する<br>
     * @return string 仕向け先コード<br>
     */
    public function getAcquirerCode()
    {
        return $this->acquirerCode;
    }

    /**
     * 仕向け先コードを設定する<br>
     * @param string $acquirerCode 仕向け先コード<br>
     */
    public function setAcquirerCode($acquirerCode)
    {
        $this->acquirerCode = $acquirerCode;
    }

    /**
     * 端末識別番号を取得する<br>
     * @return string 端末識別番号<br>
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * 端末識別番号を設定する<br>
     * @param string $terminalId 端末識別番号<br>
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
    }

    /**
     * 応答センター処理通番を取得する<br>
     * @return string 応答センター処理通番<br>
     */
    public function getResCenterProcessNumber()
    {
        return $this->resCenterProcessNumber;
    }

    /**
     * 応答センター処理通番を設定する<br>
     * @param string $resCenterProcessNumber 応答センター処理通番<br>
     */
    public function setResCenterProcessNumber($resCenterProcessNumber)
    {
        $this->resCenterProcessNumber = $resCenterProcessNumber;
    }

    /**
     * 応答センター送信日時を取得する<br>
     * @return string 応答センター送信日時<br>
     */
    public function getResCenterSendDateTime()
    {
        return $this->resCenterSendDateTime;
    }

    /**
     * 応答センター送信日時を設定する<br>
     * @param string $resCenterSendDateTime 応答センター送信日時<br>
     */
    public function setResCenterSendDateTime($resCenterSendDateTime)
    {
        $this->resCenterSendDateTime = $resCenterSendDateTime;
    }

    /**
     * ギフト残高を取得する<br>
     * @return string ギフト残高<br>
     */
    public function getResGiftBalance()
    {
        return $this->resGiftBalance;
    }

    /**
     * ギフト残高を設定する<br>
     * @param string $resGiftBalance ギフト残高<br>
     */
    public function setResGiftBalance($resGiftBalance)
    {
        $this->resGiftBalance = $resGiftBalance;
    }

    /**
     * ギフト有効期限を取得する<br>
     * @return string ギフト有効期限<br>
     */
    public function getResGiftExpire()
    {
        return $this->resGiftExpire;
    }

    /**
     * ギフト有効期限を設定する<br>
     * @param string $resGiftExpire ギフト有効期限<br>
     */
    public function setResGiftExpire($resGiftExpire)
    {
        $this->resGiftExpire = $resGiftExpire;
    }

    /**
     * 券種コードを取得する<br>
     * @return string 券種コード<br>
     */
    public function getKindCode()
    {
        return $this->kindCode;
    }

    /**
     * 券種コードを設定する<br>
     * @param string $kindCode 券種コード<br>
     */
    public function setKindCode($kindCode)
    {
        $this->kindCode = $kindCode;
    }

    /**
     * 結果XML(マスク済み)を設定する<br>
     * @param string $resultXml 結果XML(マスク済み)<br>
     */
    public function _setResultXml($resultXml)
    {
        $this->resultXml = $resultXml;
    }

    /**
     * 結果XML(マスク済み)を取得する<br>
     * @return string 結果XML(マスク済み)<br>
     */
    public function __toString()
    {
        return (string)$this->resultXml;
    }

    /**
     * PayNowIDオブジェクトを設定する<br>
     * @param PayNowIdResponse $payNowIdResponse PayNowIDオブジェクト<br>
     */
    public function setPayNowIdResponse($payNowIdResponse)
    {
        $this->payNowIdResponse = $payNowIdResponse;
    }

    /**
     * PayNowIDオブジェクトを取得する<br>
     * @return PayNowIdResponse PayNowIDオブジェクト<br>
     */
    public function getPayNowIdResponse()
    {
        return $this->payNowIdResponse;
    }

}
