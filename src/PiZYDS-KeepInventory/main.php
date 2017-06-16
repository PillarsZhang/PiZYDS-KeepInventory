<?php
namespace PiZYDS-KeepInventory;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
public function onEnable(){
    $this->getServer()->getLogger()->info(C::GREEN."PiZYDS-KeepInventory by PillarsZhang.");
    $this->setKeepInventory(true);
    $this->getServer()->getPluginManager()->registerEvents($this, $this);}
  
public function onDisable(){
    $this->getLogger()->info(C::RED . "PiZYDS-KeepInventory have been disabled.");
    $this->setKeepInventory(false);
    $this->getServer()->getPluginManager()->registerEvents($this, $this);}

}
