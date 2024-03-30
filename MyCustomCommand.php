<?php

declare(strict_types=1);

namespace SKGGAMERZS;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\Server;

class MyCustomPlugin extends PluginBase {

    public function onEnable(): void {
        $this->getLogger()->info("MyCustomPlugin enabled");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch($command->getName()) {
            case "bw":
                if ($sender instanceof Player) {
                    // Teleport the player to Bedwars (adjust coordinates as needed)
                    $sender->teleport(Server::getInstance()->getLevelByName("bedwars")->getSpawnLocation());
                    $sender->sendMessage("Teleported to Bedwars.");
                } else {
                    $sender->sendMessage("This command can only be used by players.");
                }
                break;
            case "sb":
                if ($sender instanceof Player) {
                    // Teleport the player to Skyblock (adjust coordinates as needed)
                    $sender->teleport(Server::getInstance()->getLevelByName("skyblock")->getSpawnLocation());
                    $sender->sendMessage("Teleported to Skyblock.");
                } else {
                    $sender->sendMessage("This command can only be used by players.");
                }
                break;
            // Add more custom commands here if needed
        }
        return true;
    }
}
