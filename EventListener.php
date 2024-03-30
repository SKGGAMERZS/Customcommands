<?php

declare(strict_types=1);

namespace SKGGAMERZS;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class EventListener implements Listener {

    public function onPlayerJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();
        $player->sendMessage("Welcome to the server, " . $player->getName() . "!");
    }
}
