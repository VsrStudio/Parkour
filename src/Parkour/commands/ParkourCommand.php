<?php

namespace Parkour\commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use Parkour\models\PlayerStats;
use Parkour\parkour\Parkour;
use Parkour\utils\Settings;

class ParkourCommand extends Command {

    public function __construct() {
        parent::__construct("parkour", "Mengelola parkour", "/parkour <start|stop|leaderboard|settings|stats|set|checkpoint>");
        $this->setPermission("parkour.command");
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): bool {
        if (!$sender instanceof Player) {
            $sender->sendMessage(TextFormat::RED . "Hanya pemain yang bisa menggunakan perintah ini.");
            return true;
        }

        if (empty($args)) {
            return false; // Tampilkan bantuan
        }

        switch ($args[0]) {
            case "start":
                return $this->startParkour($sender, $args);
            case "stop":
                return $this->stopParkour($sender);
            case "leaderboard":
                return $this->showLeaderboard($sender);
            case "settings":
                return $this->showSettings($sender);
            case "stats":
                return $this->showStats($sender);
            case "set":
                return $this->setSetting($sender, $args);
            case "checkpoint":
                return $this->setCheckpoint($sender);
            default:
                return false; // Tampilkan bantuan
        }
    }

    private function setSetting(Player $player, array $args): bool {
        if (empty($args[1])) {
            $player->sendMessage(TextFormat::RED . "Pengaturan tidak diberikan. Contoh: /set checkpoint true");
            return false;
        }

        $settingKey = $args[1];
        $settingValue = isset($args[2]) ? strtolower($args[2]) : null;

        $settings = new Settings();

        switch ($settingKey) {
            case "checkpoint":
                if ($settingValue === "true" || $settingValue === "false") {
                    $settings->setSetting("checkpoint_enabled", $settingValue === "true");
                    $player->sendMessage(TextFormat::GREEN . "Pengaturan checkpoint telah diubah menjadi: $settingValue");
                } else {
                    $player->sendMessage(TextFormat::RED . "Nilai harus 'true' atau 'false'.");
                }
                break;
            case "time":
                if (is_numeric($settingValue)) {
                    $settings->setSetting("time_limit", (int)$settingValue);
                    $player->sendMessage(TextFormat::GREEN . "Batas waktu telah diatur menjadi: $settingValue detik");
                } else {
                    $player->sendMessage(TextFormat::RED . "Nilai harus berupa angka.");
                }
                break;
            default:
                $player->sendMessage(TextFormat::RED . "Pengaturan tidak dikenali. Gunakan 'checkpoint' atau 'time'.");
                return false;
        }
        return true;
    }

    // Tambahkan metode lainnya seperti startParkour, stopParkour, dll.
}
