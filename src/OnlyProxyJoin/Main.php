<?php

namespace OnlyProxyJoin;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerHungerChangeEvent;

class Main extends PluginBase implements Listener {

  public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("enabled");
    }

    public function onDisable() {
        $this->getLogger()->info("disabled");
    }

    public function onJoin(PlayerJoinEvent $event) {
      $player = $event->getPlayer();
      $name = $player->getName();
      $ip = $player->getAddress();
      if($player->getAddress() === "172.18.0.1") {
          $this->getLogger()->info("The player $name has joined successfully with the ip: $ip");
      } else {
          $player->kick("§cPlease enter the server via IP: play.infinitype.net & Port:19132");
      }
    }

}
