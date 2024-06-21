<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：楽天、コマンド名：売上の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class RakutenCaptureResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * - "rakuten"： 楽天決済<br/>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 売上請求処理後、応答電文に含まれる値。<br/>
     * 以下の処理結果のいずれかが格納される<br/>
     * - success：正常終了<br/>
     * - failure：異常終了<br/>
     * - pending：保留状態<br/>
     */
    private $mstatus;

    /**
     * 詳細結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：16<br/>
     * 処理結果を詳細に表すコードを返却します。<br/>
     * <br/>
     * 4桁ずつ4つのブロックで構成され、各ブロックでサービス毎の処理結果を表します。<br/>
     */
    private $vResultCode;

    /**
     * エラーメッセージ<br>
     * 文字列<br/>
     * 処理結果に対するメッセージを返却します。<br/>
     */
    private $merrMsg;

    /**
     * 電文ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $marchTxn;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $orderId;

    /**
     * 取引毎に付くID<br>
     * 半角英数字<br/>
     * 最大桁数：100<br/>
     */
    private $custTxn;

    /**
     * MDKバージョン<br>
     * 半角英数字<br/>
     * 最大桁数：5<br/>
     * 電文のバージョン番号を返却します。<br/>
     */
    private $txnVersion;

    /**
     * 売上要求日時（YYYYMMDDhhmmss）<br>
     * 半角数字<br/>
     * 最大桁数：14<br/>
     * ※オンライン決済で返却します。<br/>
     */
    private $captureReqDatetime;

    /**
     * 取引成立日時<br>
     * 半角数字<br/>
     * 最大桁数：14<br/>
     * 決済センターで決済が確定した日時(YYYYMMDDhhmmss)を返します。<br/>
     * ※オンライン決済（V2）で返却します。<br/>
     */
    private $transactionDatetime;

    /**
     * 楽天取引ID<br>
     * 文字列<br/>
     * 最大桁数：14<br/>
     * 決済センターが取引毎に発番するID。<br/>
     * ※オンライン決済（V2）で返却します。<br/>
     */
    private $rakutenOrderId;

    /**
     * 決済取引ID<br>
     * 文字列<br/>
     * 最大桁数：20<br/>
     * GWが取引毎に発番するID。<br/>
     * ※オンライン決済（V2）で返却します。<br/>
     */
    private $gatewayOrderId;

    /**
     * 利用ポイント<br>
     * 数字<br/>
     * 最大桁数：8<br/>
     * 利用されたポイントを返却します。<br/>
     * ※オンライン決済（V2）で返却します。<br/>
     */
    private $usedPoint;


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
     * MDKバージョンを取得する<br>
     * @return string MDKバージョン<br>
     */
    public function getTxnVersion()
    {
        return $this->txnVersion;
    }

    /**
     * MDKバージョンを設定する<br>
     * @param string $txnVersion MDKバージョン<br>
     */
    public function setTxnVersion($txnVersion)
    {
        $this->txnVersion = $txnVersion;
    }

    /**
     * 売上要求日時（YYYYMMDDhhmmss）を取得する<br>
     * @return string 売上要求日時（YYYYMMDDhhmmss）<br>
     */
    public function getCaptureReqDatetime()
    {
        return $this->captureReqDatetime;
    }

    /**
     * 売上要求日時（YYYYMMDDhhmmss）を設定する<br>
     * @param string $captureReqDatetime 売上要求日時（YYYYMMDDhhmmss）<br>
     */
    public function setCaptureReqDatetime($captureReqDatetime)
    {
        $this->captureReqDatetime = $captureReqDatetime;
    }

    /**
     * 取引成立日時を取得する<br>
     * @return string 取引成立日時<br>
     */
    public function getTransactionDatetime()
    {
        return $this->transactionDatetime;
    }

    /**
     * 取引成立日時を設定する<br>
     * @param string $transactionDatetime 取引成立日時<br>
     */
    public function setTransactionDatetime($transactionDatetime)
    {
        $this->transactionDatetime = $transactionDatetime;
    }

    /**
     * 楽天取引IDを取得する<br>
     * @return string 楽天取引ID<br>
     */
    public function getRakutenOrderId()
    {
        return $this->rakutenOrderId;
    }

    /**
     * 楽天取引IDを設定する<br>
     * @param string $rakutenOrderId 楽天取引ID<br>
     */
    public function setRakutenOrderId($rakutenOrderId)
    {
        $this->rakutenOrderId = $rakutenOrderId;
    }

    /**
     * 決済取引IDを取得する<br>
     * @return string 決済取引ID<br>
     */
    public function getGatewayOrderId()
    {
        return $this->gatewayOrderId;
    }

    /**
     * 決済取引IDを設定する<br>
     * @param string $gatewayOrderId 決済取引ID<br>
     */
    public function setGatewayOrderId($gatewayOrderId)
    {
        $this->gatewayOrderId = $gatewayOrderId;
    }

    /**
     * 利用ポイントを取得する<br>
     * @return string 利用ポイント<br>
     */
    public function getUsedPoint()
    {
        return $this->usedPoint;
    }

    /**
     * 利用ポイントを設定する<br>
     * @param string $usedPoint 利用ポイント<br>
     */
    public function setUsedPoint($usedPoint)
    {
        $this->usedPoint = $usedPoint;
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
