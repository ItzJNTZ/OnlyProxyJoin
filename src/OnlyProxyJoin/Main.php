<?php

namespace OnlyProxyJoin;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerHungerChangeEvent;
use pocketmine\event\player\PlayerLoginEvent;

class Main extends PluginBase implements Listener {

  public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("enabled");
    }

    public function onDisable() {
        $this->getLogger()->info("disabled");
    }

    public function onLogin(PlayerLoginEvent $event) {
      $player = $event->getPlayer();
      $name = $player->getName();
      if($player->getAddress() != "127.0.0.1") {
        $player->kick("§cPlease enter the server via the proxy");
      }
        if($player->getAddress() != "0.0.0.1") {
            $player->kick("§cPlease enter the server via the proxy");
        }
    }

}
