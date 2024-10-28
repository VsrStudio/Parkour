<?php

namespace Parkour;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Main extends PluginBase {

    protected function onEnable(): void {
        $this->getLogger()->info("Plugin Parkour diaktifkan!");
        // Inisialisasi lainnya
    }

    // Tambahkan metode lain untuk menangani perintah dan logika
}
