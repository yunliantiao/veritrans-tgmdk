<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：Alipay、コマンド名：決済確認の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class AlipayConfirmResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分が固定値として指定されます。<br/>
     * "alipay"： Alipay決済<br/>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     * 確認請求処理後、応答電文に含まれる値。<br/>
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
     * 最大桁数：300<br/>
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
     * 決済センターとの取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：64<br/>
     * VeriTrans4Gが発番するID<br/>
     */
    private $centerTradeId;

    /**
     * 決済時刻（日本時間）<br>
     * 半角数字<br/>
     * 最大桁数：14<br/>
     * Alipayで決済が確定した日時（日本時間） を返します。<br/>
     */
    private $payTimeJp;

    /**
     * 決済時刻（中国時間）<br>
     * 半角数字<br/>
     * 最大桁数：14<br/>
     * Alipayで決済が確定した日時（中国時間） を返します。<br/>
     */
    private $payTimeCn;

    /**
     * 請求金額（中国元）<br>
     * 半角数字（小数点含む）<br/>
     * 最大桁数：9<br/>
     * Alipayから請求される金額（中国元）<br/>
     */
    private $buyerChargedAmountCny;


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
     * 決済センターとの取引IDを取得する<br>
     * @return string 決済センターとの取引ID<br>
     */
    public function getCenterTradeId()
    {
        return $this->centerTradeId;
    }

    /**
     * 決済センターとの取引IDを設定する<br>
     * @param string $centerTradeId 決済センターとの取引ID<br>
     */
    public function setCenterTradeId($centerTradeId)
    {
        $this->centerTradeId = $centerTradeId;
    }

    /**
     * 決済時刻（日本時間）を取得する<br>
     * @return string 決済時刻（日本時間）<br>
     */
    public function getPayTimeJp()
    {
        return $this->payTimeJp;
    }

    /**
     * 決済時刻（日本時間）を設定する<br>
     * @param string $payTimeJp 決済時刻（日本時間）<br>
     */
    public function setPayTimeJp($payTimeJp)
    {
        $this->payTimeJp = $payTimeJp;
    }

    /**
     * 決済時刻（中国時間）を取得する<br>
     * @return string 決済時刻（中国時間）<br>
     */
    public function getPayTimeCn()
    {
        return $this->payTimeCn;
    }

    /**
     * 決済時刻（中国時間）を設定する<br>
     * @param string $payTimeCn 決済時刻（中国時間）<br>
     */
    public function setPayTimeCn($payTimeCn)
    {
        $this->payTimeCn = $payTimeCn;
    }

    /**
     * 請求金額（中国元）を取得する<br>
     * @return string 請求金額（中国元）<br>
     */
    public function getBuyerChargedAmountCny()
    {
        return $this->buyerChargedAmountCny;
    }

    /**
     * 請求金額（中国元）を設定する<br>
     * @param string $buyerChargedAmountCny 請求金額（中国元）<br>
     */
    public function setBuyerChargedAmountCny($buyerChargedAmountCny)
    {
        $this->buyerChargedAmountCny = $buyerChargedAmountCny;
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
