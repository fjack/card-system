<?php
class AlipayAcquireCancelRequest { private $operatorId; private $operatorType; private $outTradeNo; private $tradeNo; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setOperatorId($sp0413f5) { $this->operatorId = $sp0413f5; $this->apiParas['operator_id'] = $sp0413f5; } public function getOperatorId() { return $this->operatorId; } public function setOperatorType($spe6cd5c) { $this->operatorType = $spe6cd5c; $this->apiParas['operator_type'] = $spe6cd5c; } public function getOperatorType() { return $this->operatorType; } public function setOutTradeNo($sp7bb339) { $this->outTradeNo = $sp7bb339; $this->apiParas['out_trade_no'] = $sp7bb339; } public function getOutTradeNo() { return $this->outTradeNo; } public function setTradeNo($spa6d234) { $this->tradeNo = $spa6d234; $this->apiParas['trade_no'] = $spa6d234; } public function getTradeNo() { return $this->tradeNo; } public function getApiMethodName() { return 'alipay.acquire.cancel'; } public function setNotifyUrl($spa00d19) { $this->notifyUrl = $spa00d19; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp8a30df) { $this->returnUrl = $sp8a30df; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($spb9b0b4) { $this->terminalType = $spb9b0b4; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($spf3f780) { $this->terminalInfo = $spf3f780; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5992f8) { $this->prodCode = $sp5992f8; } public function setApiVersion($spc906d7) { $this->apiVersion = $spc906d7; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp48c449) { $this->needEncrypt = $sp48c449; } public function getNeedEncrypt() { return $this->needEncrypt; } }