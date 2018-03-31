<?php

namespace yii2lab\notify\domain\job;

use Yii;
use yii\base\BaseObject;
use yii\queue\JobInterface;

class SmsJob extends BaseObject implements JobInterface
{
	public $address;
	public $subject;
	public $content;
	
	public function execute($queue)
	{
		Yii::$domain->notify->sms->directSend($this->address, $this->content);
	}
}
