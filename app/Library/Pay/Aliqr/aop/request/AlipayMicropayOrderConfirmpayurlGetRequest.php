<?php
class AlipayMicropayOrderConfirmpayurlGetRequest { private $alipayOrderNo; private $amount; private $memo; private $receiveUserId; private $transferOutOrderNo; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setAlipayOrderNo($spa3091b) { $this->alipayOrderNo = $spa3091b; $this->apiParas['alipay_order_no'] = $spa3091b; } public function getAlipayOrderNo() { return $this->alipayOrderNo; } public function setAmount($spbd56f5) { $this->amount = $spbd56f5; $this->apiParas['amount'] = $spbd56f5; } public function getAmount() { return $this->amount; } public function setMemo($sp0e7cff) { $this->memo = $sp0e7cff; $this->apiParas['memo'] = $sp0e7cff; } public function getMemo() { return $this->memo; } public function setReceiveUserId($sp1328b1) { $this->receiveUserId = $sp1328b1; $this->apiParas['receive_user_id'] = $sp1328b1; } public function getReceiveUserId() { return $this->receiveUserId; } public function setTransferOutOrderNo($sp6520de) { $this->transferOutOrderNo = $sp6520de; $this->apiParas['transfer_out_order_no'] = $sp6520de; } public function getTransferOutOrderNo() { return $this->transferOutOrderNo; } public function getApiMethodName() { return 'alipay.micropay.order.confirmpayurl.get'; } public function setNotifyUrl($spa00d19) { $this->notifyUrl = $spa00d19; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp8a30df) { $this->returnUrl = $sp8a30df; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($spb9b0b4) { $this->terminalType = $spb9b0b4; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($spf3f780) { $this->terminalInfo = $spf3f780; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5992f8) { $this->prodCode = $sp5992f8; } public function setApiVersion($spc906d7) { $this->apiVersion = $spc906d7; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp48c449) { $this->needEncrypt = $sp48c449; } public function getNeedEncrypt() { return $this->needEncrypt; } }