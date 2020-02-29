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
      if($player->getAddress() === "194.93.56.11") {
          $this->getLogger()->info("Der spieler $name ist erfolgreich gejoint mit der ip: $ip");
      } else {
          $player->kick("§cPlease enter the server via the proxy");
      }
    }

}
