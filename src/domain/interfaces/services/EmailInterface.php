<?php

namespace yii2lab\notify\domain\interfaces\services;

interface EmailInterface {
	
	public function send($address, $subject, $content);

}