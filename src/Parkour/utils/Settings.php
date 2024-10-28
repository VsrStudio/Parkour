<?php

namespace Parkour\utils;

use pocketmine\utils\Config;

class Settings {
    private $config;

    public function __construct() {
        $this->config = new Config(Main::getInstance()->getDataFolder() . "config.yml", Config::YAML);
    }

    public function setSetting(string $key, $value): void {
        $currentSettings = $this->config->get("settings");
        $currentSettings[$key] = $value;
        $this->config->set("settings", $currentSettings);
        $this->config->save();
    }

    public function getSetting(string $key) {
        return $this->config->get("settings")[$key] ?? null;
    }
}
