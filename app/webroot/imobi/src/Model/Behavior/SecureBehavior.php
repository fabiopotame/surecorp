<?php
namespace App\Model\Behavior;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\ORM\Table;

class SecureBehavior extends Behavior {
	public function beforeSave(Event $event, EntityInterface $entity)
	{
		$event->data['entity']->register_id 		= $_SESSION['Auth']['User']['register_id'];
		$event->data['entity']->user_last_modified 	= $_SESSION['Auth']['User']['id'];
		return $event;
	}

}
