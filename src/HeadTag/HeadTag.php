<?php

namespace HeadTag;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\PluginTask;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

use FactionsPro\Main1;
use HeadTag\TimeUpdate;
use Love\love;
use onebone\economyapi\EconomyAPI;

class HeadTag extends PluginBase{

    public function onEnable(){
	    $this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->getServer()->getPluginManager()->getPlugin('EconomyAPI') == null){
 			$this->getLogger()->WARNING(TextFormat::RED ."您尚未安裝EconomyAPI！已經為您準備好兼容包！);
 				file_put_contents($this->getDataFolder() . "EAPI.phar", stream_get_contents($this->getResource("EAPI.phar")));//移動插件
 					$plugin = $this->getServer()->getPluginManager()->loadPlugin($this->getDataFolder() . "EAPI.phar");//加載插件
 						$this->getServer()->getPluginManager()->enablePlugin($plugin);
 							$this->getLogger()->NOTICE(TextFormat::GOLD ."兼容包已經安裝完畢！");
								}else{
  									$this->getLogger()->NOTICE(TextFormat::GOLD ."找到EconomyAPI！");
										$this->getLogger()->info(TEXTFORMAT::GOLD . ">>  頭部顯示加載中")
										}
										@mkdir($this->getDataFolder());
											$this->getServer()->getScheduler()->scheduleRepeatingTask(new TimeUpdate($this), 10);
    }
}

