<?php

namespace NotFallDamage;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener {

	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onEntityDamageEvent(EntityDamageEvent $event){
		if($event->getCause() == EntityDamageEvent::CAUSE_VOID or $event->getCause() == EntityDamageEvent::CAUSE_FALL){
			$event->setCancelled();
		}
	} 
}