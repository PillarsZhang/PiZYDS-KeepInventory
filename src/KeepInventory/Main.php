<?php
namespace KeepInventory;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as C;
use pocketmine\utils\server;

class Main extends PluginBase implements Listener{
public function onEnable(){
    $this->getServer()->getLogger()->info(C::GREEN."PiZYDS-KeepInventory by PillarsZhang.");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);}
  
public function onDisable(){
    $this->getLogger()->info(C::RED . "PiZYDS-KeepInventory have been disabled.");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);}

public function PlayerDeath(PlayerDeathEvent $event){
    $event->setKeepInventory(true);}
}
