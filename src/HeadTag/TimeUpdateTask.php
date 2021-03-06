<?php

namespace TimeUpdateTask;

use pocketmine\nbt\tag\NamedTag;
use pocketmine\Player;
use pocketmine\scheduler\PluginTask;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

use FactionsPro\Main1;
use Love\love;
use onebone\economyapi\EconomyAPI;

class TimeUpdateTask extends PluginTask {

	private	$plugin;
	public function __construct(HeadTag $plugin){
		parent::__construct($plugin);
			$this->plugin = $plugin;
			}
	public function onRun($currentTick){
		result = array();
			foreach($this->plugin->getServer()->getOnlinePlayers() as $player)
				switch($player->setGamemode()){
				case 0: $gm = "生存模式";
					break;
				case 1: $gm = "創造模式";
					break;
				case 2: $gm = "冒險模式";
					break;
				case 3: $gm = "觀看模式";
					break;
				}
				$h = $player->getHealth();
					$m = $this->plugin->EconomyAPI->mymoney($player);
						$mygh = Main1::getInstance()->getPlayerFaction($player->getName());
					$marry = love::getInstance()->checklove($player->getName());
				$name = $player->getName();
		$player->setNameTag("$name \n $marry \n $mygh \n $m \n $h \n $gm");
	}

}
