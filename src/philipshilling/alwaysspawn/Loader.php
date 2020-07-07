<?php

namespace philipshilling\alwaysspawn;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\plugin\PluginBase as Plugin;
use pocketmine\Server;

class Loader extends Plugin implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info("AlwaysSpawn Enabled!");
	}

	public function onPlayerLogin(PlayerLoginEvent $event, Server $level){
		if($level === null){
		      $level = $this->getDefaultLevel();
			
		} elseif (!$level === null) {
		      $event->getPlayer()->teleport(Server::getInstance()->getDefaultLevel()->getSpawnLocation());
		}
	}
}
