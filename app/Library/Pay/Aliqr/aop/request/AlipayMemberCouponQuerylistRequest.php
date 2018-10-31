<?php
class AlipayMemberCouponQuerylistRequest { private $merchantInfo; private $pageNo; private $pageSize; private $status; private $userInfo; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setMerchantInfo($sp889f3c) { $this->merchantInfo = $sp889f3c; $this->apiParas['merchant_info'] = $sp889f3c; } public function getMerchantInfo() { return $this->merchantInfo; } public function setPageNo($sp1c632e) { $this->pageNo = $sp1c632e; $this->apiParas['page_no'] = $sp1c632e; } public function getPageNo() { return $this->pageNo; } public function setPageSize($spfc5387) { $this->pageSize = $spfc5387; $this->apiParas['page_size'] = $spfc5387; } public function getPageSize() { return $this->pageSize; } public function setStatus($sp1a65a5) { $this->status = $sp1a65a5; $this->apiParas['status'] = $sp1a65a5; } public function getStatus() { return $this->status; } public function setUserInfo($spf1bc42) { $this->userInfo = $spf1bc42; $this->apiParas['user_info'] = $spf1bc42; } public function getUserInfo() { return $this->userInfo; } public function getApiMethodName() { return 'alipay.member.coupon.querylist'; } public function setNotifyUrl($spa00d19) { $this->notifyUrl = $spa00d19; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp8a30df) { $this->returnUrl = $sp8a30df; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($spb9b0b4) { $this->terminalType = $spb9b0b4; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($spf3f780) { $this->terminalInfo = $spf3f780; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5992f8) { $this->prodCode = $sp5992f8; } public function setApiVersion($spc906d7) { $this->apiVersion = $spc906d7; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp48c449) { $this->needEncrypt = $sp48c449; } public function getNeedEncrypt() { return $this->needEncrypt; } }