<?php

namespace philipshilling\alwaysspawn;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\plugin\PluginBase as Plugin;
use pocketmine\Server;
use pocketmine\event\level\SpawnChangeEvent;

class Loader extends Plugin implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info("AlwaysSpawn Enabled!");
	}

	public function onPlayerLogin(PlayerLoginEvent $event){
		$event->getPlayer()->teleport(Server::getInstance()->getDefaultLevel()->getPreviousSpawn());
		
	}

}
