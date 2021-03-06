<?php

namespace yii2lab\notify\domain\entities;

use yii2lab\domain\BaseEntity;

/**
 * Class PushEntity
 *
 * @package yii2lab\notify\domain\entities
 *
 * @property string $body
 * @property string $title
 */
class PushEntity extends BaseEntity
{

	protected $body;
	protected $title;
	protected $service_name;
	protected $action;
	protected $link;
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['body', 'title', 'service_name', 'action', 'link'], 'trim'],
			[['body', 'title'], 'required'],
		];
	}
}
