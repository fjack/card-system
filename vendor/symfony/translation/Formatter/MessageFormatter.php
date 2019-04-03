<?php
 namespace Symfony\Component\Translation\Formatter; use Symfony\Component\Translation\MessageSelector; class MessageFormatter implements MessageFormatterInterface, ChoiceMessageFormatterInterface { private $selector; public function __construct(MessageSelector $selector = null) { $this->selector = $selector ?: new MessageSelector(); } public function format($message, $locale, array $parameters = array()) { return strtr($message, $parameters); } public function choiceFormat($message, $number, $locale, array $parameters = array()) { $parameters = array_merge(array('%count%' => $number), $parameters); return $this->format($this->selector->choose($message, (int) $number, $locale), $locale, $parameters); } } 